<?php
namespace App\Http\Controllers;

use App\Repositories\Group\GroupRepositoryInterface;
use App\Models\GroupMaster;
use App\Models\UserMaster;
use App\Models\TemplateMaster;
use Auth;
use Illuminate\Http\Request;
use Route;
use App\Http\Requests\GroupRequest;

use Validator;
use Illuminate\Support\Facades\Redirect;

//use Maatwebsite\Excel\Facades\Excel;

class GroupController extends Controller
{


    Protected $GroupRepository;

    public function __construct(GroupRepositoryInterface $GroupRepositoryInterface)
    {
        $this->GroupRepository = $GroupRepositoryInterface;
    }

    public function view(Request $request)
    {
        $actionTaken = $this->GroupRepository::LAST_ACTION;
        $groupData = $this->GroupRepository->getAllGroups($request);
        return view('group.group-management', ['groupData' => $groupData, 'actionTaken' => $actionTaken]);
    }

    public function dashboard()
    {
        return view('broadcast.group-management');
    }

    public function groupEdit($groupId)
    {
        $groupData = $this->GroupRepository->groupFindById($groupId);
        if (empty($groupData['commonError'])) {
            return view('group.edit-group', ['groupData' => $groupData]);
        }
        return Redirect::route('group.view-group')->with('error', $groupData['message']);
    }

    public function groupDetails($groupId)
    {

        $groupData = $this->GroupRepository->groupFindById($groupId);
        if (empty($groupData['commonError'])) {
            return view('group.group-details', ['groupData' => $groupData]);
        }
        return Redirect::route('group.view-group')->with('error', $groupData['message']);

    }

    public function createGroup()
    {
        return view('group.create-groups');
    }

    public function groupList()
    {
        return view('group.group-management');
        //return $GroupData = $this->GroupRepository->getAllGroups();
    }

    public function countryCodes()
    {
        return view('common.country-codes');
    }

    public function deleteGroup($id) {
        return $this->GroupRepository->groupDeleteById($id);
    }

    public function postGroup(GroupRequest $request)
    {

        $group = $this->GroupRepository->createGroup($request);

        if (!empty($group['error']) && !empty($group['invalidNumbers'])) {
            return Redirect::back()->withInput()->withErrors(['Following numbers are invalid: ',
                $group['invalidNumbers']])->with('error', $group['message']);
        } elseif (!empty($group['success'])) {
            return redirect()->back()->with('success', $group['message']);
        } elseif (!empty($group['commonError'])) {
            return Redirect::back()->withInput()->with('error', $group['message']);
        } else {
            return Redirect::back()->withInput()->with('error', 'Something went wrong.Please try again later !');
        }


    }

    /**
     * @param Array:Form Input Request for create Group
     * @return : response of Create group as per input data
     *
     */

    public function postUpdateGroup(GroupRequest $request)
    {

        if (isset($request->groupid) && !empty($request->groupid) && is_numeric($request->groupid)) {
            $group = $this->GroupRepository->updateGroup($request);

            if (!empty($group['error']) && (!empty($group['invalidNumbers']))) {
                return Redirect::back()->withInput()->withErrors(['Following numbers are invalid: ', $group['invalidNumbers']])->with('error', $group['message']);
            } elseif (!empty($group['success'])) {
                return redirect()->back()->with('success', $group['message']);
            } elseif (!empty($group['info'])) {
                return redirect()->back()->withInput()->with('info', $group['message']);
            } elseif (!empty($group['commonError'])) {
                return Redirect::back()->withInput()->with('error', $group['message']);
            } else {
                return Redirect::back()->withInput()->with('error', 'Something went wrong.Please try again later !');
            }
        }

    }

    /**
     * @param Array:Form Input->Group Name for check Availability in Database
     * @return array: response of Group Availability as per input
     *
     */

    public function checkGroupAvailability(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'GROUP_NAME' => 'required|max:20|min:4|regex:/^[a-zA-Z]{1}\w*$/|unique:AXIOM6_GROUP_MASTER',
        ],
            [
                'GROUP_NAME.required' => 'Group Name cannot be left blank ',
                'GROUP_NAME.unique' => 'Group name mentioned already exists It cannot be used ',
                'GROUP_NAME.min' => ' Group name must  be between 4 to 20 characters ',
                'GROUP_NAME.max' => 'Group name must  be between 4 to 20 characters ',
                'GROUP_NAME.regex' => 'First character cannot be a digit or spacial character.
                Allow only alphanumeric with underscore ',

            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        return response()->json(['success' => 'Group name available']);

    }

    public function exportData($groupId)
    {
        $getData = $this->GroupRepository->getExportData($groupId);
        if (!empty($getData['filename']) && !empty($getData['data'])) {
            dataExporter($getData['data'],$getData['filename']);
        }
        return redirect()->back()->with('error', $getData['message']);
    }

    public function copyGroup(Request $request, $groupId)
    {
        $getCopyData = $this->GroupRepository->copyGroupData($request, $groupId);
        if (!empty($getCopyData['success'])) {
            return redirect()->back()->with('success', $getCopyData['message']);
        }else{
            return redirect()->back()->with('error', $getCopyData['message']);
        }

    }


}

?>
