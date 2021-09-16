<?php

namespace App\Repositories\Group;


use App\Repositories\Group\GroupRepositoryInterface;
use App\Models\GroupMaster;
use App\Models\GroupDetail;
use App\Models\UserMaster;
use App\Services\FileReader;
use App\Http\Requests\GroupRequest;
use http\Env\Request;
use Redirect;
use DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;


class GroupRepository implements GroupRepositoryInterface
{
    public $GroupMaster;
    public $GroupRecipientType;

    /**
     * GroupRepository constructor.
     * @param GroupMaster $GroupMaster
     */
    const MANUAL = 'manual';
    const FILE = 'upload';
    const DOMESTIC = 'domestic';
    const INT = 'int';
    const ALL = 'all';
    const INTERNATIONAL = 'international';
    const ADD = 'add';
    const APPEND = 'append';
    const REMOVE = 'remove';
    const APPROVED = 'approved';
    const REJECTED = 'rejected';
    const SUBMITTED = 'submitted';
    const UPDATETYPE = 'updatetype';
    const CREATE = 'create';
    const UPDATE = 'update';
    const LAST_ACTION = [
        self::ADD => 'Created Group',
        self::APPEND => 'Appended Recipients',
        self::REMOVE => 'Removed Recipients',
    ];

    function __construct(GroupMaster $GroupMaster)
    {
        $this->GroupMaster = $GroupMaster;
    }


    /**
     *
     * @param GroupRequest $request
     * @return array
     */
    public function createGroup(GroupRequest $request)
    {
        $groupRecipientType = getGroupRecipientType(GroupRepository::class, $request->GROUP_RECIPIENT_TYPE);

        if ($request->gmethod == self::MANUAL) {

            $request->request->add(['groupRecipientType' => $groupRecipientType]);
            $request->request->add(['groupAddRecipientType' => self::MANUAL]);
            $getAllNumbers = getPhoneNumbers($request->MOBILENO);
            $numbersResult = isValidPhone($getAllNumbers, $groupRecipientType);
            $response = $this->validInvalidNumbers($numbersResult);
            if (!empty($response['valid'])) {
                $request->request->add(['groupSize' => count($response['valid'])]);
                return $this->saveGroupData($request, $response['valid']);
            }
            return $response;

        } elseif ($request->gmethod == self::FILE) {

            $file = $request->file('input_file');
            $originalFileName = $file->getClientOriginalName();
            $originalFileExtention = $file->getClientOriginalExtension();
            $allFileExtentions = config('requirement.group.file.extensionsList');
            if (!in_array($originalFileExtention, $allFileExtentions)) {
                return ['commonError' => true, 'message' => "Please Select file with valid extention .Your file: 
                $originalFileName is invalid."];
            }

            $newFileName = getFilename($originalFileExtention);
            $file->move('uploads', $newFileName);
            $fileParserObject = getFileParser($originalFileExtention);
            $filePath = base_path() . '/public/uploads/' . $newFileName;
            $request->request->add(['filePath' => $filePath]);
            $request->request->add(['groupRecipientType' => $groupRecipientType]);
            $request->request->add(['groupAddRecipientType' => self::FILE]);
            $validInvalidNumbersResults = $fileParserObject->process($filePath, $groupRecipientType);
            $response = $this->validInvalidNumbers($validInvalidNumbersResults);
            $request->request->add(['groupSize' => count($validInvalidNumbersResults['valid'])]);
            if (!empty($response['valid'])) {
                return $this->saveGroupData($request, $response['valid']);
            }
            return $response;
        } else {
            return errorMessage();
        }
    }


    public function getAllGroups($request = null)
    {
        $groupSelect = $this->filterQuery($request);
        $allGroups = $groupSelect->get();
        return $allGroups;
    }

    public function filterQuery($request = null)
    {
        $groupSelect = GroupMaster::where('APPROVAL_STATUS', self::APPROVED);

        if (!$request)
            return $groupSelect;

        if ($request->has('search')) {
            $groupSelect->where('GROUP_NAME', 'like', '%' . $request->input('search') . '%');
        }
        
        $dateField = null;
        if($request->has('date_filter') && $request->has('fromdate')) {
            switch($request->input('date_filter')) {
                case config('constants.dateFilter.create') :
                    $dateField = 'GROUP_CREATION_DATE';
                break;
                case config('constants.dateFilter.update') :
                    $dateField = 'LAST_MODIFY_DATE';
                break;
                default :
                break;
                
            }
        }
        
        if($dateField && $request->has('fromdate') && $request->input('fromdate')) {
            $startDate = formatDate($request->input('fromdate'), 'Y-m-d H:i', true);
            $groupSelect->where($dateField, '>=', $startDate);
        }

        if($dateField && $request->has('todate') && $request->input('todate')) {
            $endDate = formatDate($request->input('todate'), 'Y-m-d H:i', true);
            $groupSelect->where($dateField, '<=', $endDate);
        }

        return $groupSelect;
    }

    public function groupFindById($groupId)
    {
        $groupMaster = GroupMaster::find($groupId);
        if (!empty($groupMaster)) {
            return $groupMaster;
        }
        return errorMessage();

    }


    public function groupDeleteById($groupId)
    {
        
        $groupMaster = GroupMaster::find($groupId);
        if(!$groupMaster) {
            return response()->json(['error' => 'Record Not Found']);
        }

        DB::beginTransaction();
        try {
            $groupMaster->delete();
            DB::commit();
            return response()->json(['success' => 1]);
        } catch(Exception $ex) {
            DB::Rollback();
            return response()->json(['error' => $ex->getMessage()]);
        }
    }

    /**
     * @param array:Valid and Invalid Phone Number List
     * @return array: In case of Invalid return errors other
     * wise returns Valid Phone Number List
     *
     */

    public function validInvalidNumbers($numbersResult)
    {
        if (!empty($numbersResult['invalid']) && (count($numbersResult['invalid']) > 0)) {
            $invalidNumbers = collect($numbersResult['invalid']);
            $showInvalidNumberListSize = config('requirement.group.showInvalidNumberListSize');
            $showInvalidNumbers = $invalidNumbers->take($showInvalidNumberListSize);
            if (count($showInvalidNumbers) > 0) {
                return ['error' => true, 'message' => 'Please enter valid numbers to submit the group',
                    'invalidNumbers' => $showInvalidNumbers];
            }
        } else {

            if (!empty($numbersResult['valid']) && is_array($numbersResult['valid'])) {
                return $numbersResult;
            } else {
                return errorMessage();
            }

        }

    }

    public function saveGroupData($request, $validNumberList)
    {

        if (!empty($validNumberList)) {

            $validNumbers = array_unique($validNumberList);
            $GroupMaster = new GroupMaster;

            DB::beginTransaction();
            try {

                $GroupMaster->USERID = auth()->user()->id;
                $GroupMaster->GROUP_NAME = $request->GROUP_NAME;
                $GroupMaster->GROUP_RECIPIENT_TYPE = $request->groupRecipientType;
                $GroupMaster->GROUP_ADD_RECIPIENT_TYPE = $request->groupAddRecipientType;
                $GroupMaster->LAST_ACTION = (!empty($request->lastAction)) ? $request->lastAction : self::ADD;
                $GroupMaster->GROUP_SIZE = count($validNumbers);
                $GroupMaster->APPROVAL_STATUS = (!empty($request->approvalStatus)) ? $request->approvalStatus : self::APPROVED;
                $GroupMaster->GROUP_CREATION_DATE = Carbon::now();
                $GroupMaster->FILENAME = $request->filePath;
                $GroupMaster->save();

                foreach ($validNumbers as $validNumber) {
                    $groupDetailData[] = array(
                        'USERID' => auth()->user()->id,
                        'GROUPID' => $GroupMaster->GROUPID,
                        'MOBILENO' => $validNumber,
                        'created_at' => Carbon::now()
                    );
                }

                $collection = collect($groupDetailData);
                $chunks = $collection->chunk(10);
                $chunks->toArray();
                foreach ($chunks as $chunk) {
                    GroupDetail::insert($chunk->toArray());
                }

                DB::commit();
                return successMessage('createGroup', $GroupMaster->GROUP_NAME);
            } catch (\Exception $e) {
                DB::rollback();
                return errorMessage();
                throw $e;
            }
        }

    }

    /**
     * @param array:Form Request with Validate
     * Input for update Group and Group Details
     * @return array:response with error or success message
     *
     *
     */

    public function updateGroup(GroupRequest $request)
    {
        $groupId = $request->groupid;
        $groupMaster = GroupMaster::find($groupId);

        if (!empty($groupMaster) && !empty($groupMaster->GROUP_NAME)) {
            $groupRecipientType = getGroupRecipientType(GroupRepository::class, $request->GROUP_RECIPIENT_TYPE);
            if ($request->gmethod == self::MANUAL) {

                $getAllNumbers = getPhoneNumbers($request->MOBILENO);
                $numbersResult = isValidPhone($getAllNumbers, $groupRecipientType);
                $request->request->add(['groupAddRecipientType' => self::MANUAL]);
                $response = $this->validInvalidNumbers($numbersResult);
                if (!empty($response['valid'])) {
                    return $this->updateGroupData($request, $response['valid']);
                }
                return $response;

            } elseif ($request->gmethod == self::FILE) {
                $file = $request->file('input_file');
                $originalFileName = $file->getClientOriginalName();
                $originalFileExtention = $file->getClientOriginalExtension();
                $allFileExtentions = config('requirement.group.file.extensionsList');
                if (!in_array($originalFileExtention, $allFileExtentions)) {
                    return errorMessage('invalidFile', $originalFileExtention);
                }

                $newFileName = getFilename($originalFileExtention);
                $file->move('uploads', $newFileName);
                $fileParserObject = getFileParser($originalFileExtention);
                $filePath = base_path() . '/public/uploads/' . $newFileName;
                $request->request->add(['filePath' => $filePath]);
                $request->request->add(['groupRecipientType' => $groupRecipientType]);
                $request->request->add(['groupAddRecipientType' => self::FILE]);
                $validInvalidNumbersResults = $fileParserObject->process($filePath, $groupRecipientType);
                $response = $this->validInvalidNumbers($validInvalidNumbersResults);
                if (!empty($response['valid'])) {
                    return $this->updateGroupData($request, $response['valid']);
                }
                return $response;
            } else {
                return errorMessage();
            }

        } else {
            return errorMessage();
        }

    }

    /**
     * @param array:Form Request  and Valid Phone List
     * @return array:response with error or success message
     *
     *
     */

    public function updateGroupData(GroupRequest $request, $validNumberList)
    {
        if (!empty($validNumberList)) {
            $updateType = $request->updatetype;
            DB::beginTransaction();
            try {

                $response = $this->updateGroupDetails($validNumberList, $updateType, $request->groupid);
                if (!empty($response['success'])) {
                    $GroupMaster = GroupMaster::find($request->groupid);
                    $GroupMaster->USERID = auth()->user()->id;
                    $GroupMaster->GROUP_ADD_RECIPIENT_TYPE = $request->groupAddRecipientType;
                    $GroupMaster->FILENAME = $request->filePath;
                    $GroupMaster->LAST_MODIFY_DATE = Carbon::now();
                    $GroupMaster->save();
                }

                DB::commit();
                return $response;
            } catch (\Exception $e) {
                DB::rollback();
                return errorMessage();
            }
        }

    }

    /**
     * @param array: Valid Phone Number List,Type of Update(remove/append) and GroupId
     * @return array:response with error or success message
     *
     */

    public function updateGroupDetails($validNumberList, $updateType, $groupId)
    {
        $userId = auth()->user()->id;
        $GroupMaster = GroupMaster::find($groupId);
        $getNumbers = array_unique(GroupDetail::where('GROUPID', $groupId)->where('USERID', $userId)->pluck('MOBILENO')->toArray());
        $validNumberList = array_unique($validNumberList);
        $matchedNumbers = array_unique(array_intersect($getNumbers, $validNumberList));
        $nonMatchedNumbers = array_unique(array_diff($getNumbers, $validNumberList));
        $countmatched = count($matchedNumbers);

        $countValidNumberList = count($validNumberList);

        if (!empty($updateType) && $updateType == self::APPEND && empty($matchedNumbers) && $validNumberList > 0) {
            foreach ($validNumberList as $validNumber) {
                $groupDetailData[] = array(
                    'USERID' => $userId,
                    'GROUPID' => $groupId,
                    'MOBILENO' => $validNumber,
                    'created_at' => Carbon::now()
                );
            }
            $collection = collect($groupDetailData);
            $chunks = $collection->chunk(10);
            $chunks->toArray();
            foreach ($chunks as $chunk) {
                GroupDetail::insert($chunk->toArray());
            }
            $GroupMaster->GROUP_SIZE += count($validNumberList);
            $GroupMaster->LAST_ACTION = self::APPEND;
            $GroupMaster->save();
            return ['success' => true, 'message' => "Total <b> $countValidNumberList </b> Phone Numbsers successfully appended."];
        } elseif (!empty($updateType) && $updateType == self::REMOVE && !empty($matchedNumbers) && $matchedNumbers > 0) {
            $affectedRows = GroupDetail::whereIn('MOBILENO', $matchedNumbers)->where('GROUPID', $groupId)->where('USERID', $userId)->delete();
            $GroupMaster->GROUP_SIZE -= $affectedRows;
            $GroupMaster->LAST_ACTION = self::REMOVE;
            $GroupMaster->save();
            return ['success' => true, 'message' => "Total <b> $affectedRows </b> Phone Numbsers successfully removed."];

        } elseif (!empty($updateType) && $updateType == self::APPEND && !empty($matchedNumbers) && $validNumberList > 0) {
            return errorMessage('append');
        } elseif (!empty($updateType) && $updateType == self::REMOVE && !empty($nonMatchedNumbers) && $validNumberList > 0) {
            return errorMessage('remove');
        }
        return errorMessage();
    }

    public function getExportData($groupId = NULL)
    {
        $userId = auth()->user()->id;
        $getNumbers = GroupDetail::select('MOBILENO')->where('GROUPID', $groupId)->where('USERID',$userId)->get()->toArray();
         if(!empty($getNumbers)){
             $getGroupName = GroupMaster::select('GROUP_NAME')->where('GROUPID', $groupId)->where('USERID',$userId)->get()->toArray();
             $data['filename'] = $getGroupName['0']['GROUP_NAME'];
             $data['data']  = ['header' => ['Phone'], 'data' => $getNumbers];
             return $data;
         }
        return errorMessage();
    }

    public function copyGroupData($request, $groupId = NULL)
    {
        $userId = auth()->user()->id;
        $getAllGroupName = GroupMaster::pluck('GROUP_NAME')->toArray();
        $getGroupData = GroupMaster::select('*')->where('GROUPID',$groupId)->where('USERID',$userId)->get()->toArray();
        if(!empty($getGroupData)){

            $newGroupName =  $getGroupData['0']['GROUP_NAME'] . '_copy';
            if (!in_array($newGroupName, $getAllGroupName)) {

                $addRequestData = [
                    'GROUP_NAME' => $getGroupData['0']['GROUP_NAME'] . '_copy',
                    'groupRecipientType' => $getGroupData['0']['GROUP_RECIPIENT_TYPE'],
                    'groupAddRecipientType' => $getGroupData['0']['GROUP_ADD_RECIPIENT_TYPE'],
                    'lastAction' => $getGroupData['0']['LAST_ACTION'],
                    'approvalStatus' => $getGroupData['0']['APPROVAL_STATUS'],
                    'filePath' => $getGroupData['0']['FILENAME'],
                ];
                $getNumbers = array_unique(GroupDetail::where('GROUPID', $groupId)->where('USERID', $userId)->pluck('MOBILENO')->toArray());
                $request->request->add($addRequestData);
                $response = $this->saveGroupData($request, $getNumbers);
                if (!empty($response['success'])) {
                    return successMessage('copyGroup', $getGroupData['0']['GROUP_NAME'] . '_copy');
                } else {
                    return errorMessage();
                }

            } else {
                return errorMessage('alreadyExist',$newGroupName);
            }
        }


    }


}


?>
