<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Http\FormRequest;
use Validator;
use App\Repositories\Group\GroupRepository;

class GroupRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        $fileExtentions     = config('requirement.group.extensions');
        $fileSize           = config('requirement.group.fileSize');
        $groupNameSizeMax   = config('requirement.group.groupNameSizeMax');
        $groupNameSizeMin   = config('requirement.group.groupNameSizeMin');

        if (Input::has('gmethod') && (Input::get('action') == GroupRepository::CREATE)) {

            if (Input::get('gmethod') == GroupRepository::MANUAL) {
                return [
                    'GROUP_NAME' => "required|max:$groupNameSizeMax|min:$groupNameSizeMin|regex:/^[a-zA-Z]{1}\w*$/|unique:AXIOM6_GROUP_MASTER",
                    'GROUP_RECIPIENT_TYPE' => 'required',
                    'gmethod' => 'required',
                    'MOBILENO' => 'required',

                ];

            } elseif (Input::get('gmethod') == GroupRepository::FILE) {
                return [
                    'GROUP_NAME' => "required|max:$groupNameSizeMax|min:$groupNameSizeMin|regex:/^[a-zA-Z]{1}\w*$/|unique:AXIOM6_GROUP_MASTER",
                    'GROUP_RECIPIENT_TYPE' => 'required',
                    'gmethod' => 'required',
                    'input_file' => "required|mimes:$fileExtentions|max:$fileSize",
                ];

            } else {
                return [
                    'gmethod' => 'required',
                ];
            }

        }elseif (Input::has('gmethod') && (Input::get('action') == GroupRepository::UPDATE)){

            if (Input::get('gmethod') == GroupRepository::MANUAL) {
                return [
                    'gmethod' => 'required',
                    'MOBILENO' => 'required',
                    'updatetype' => 'required',
                    'groupid' => 'required',

                ];

            } elseif (Input::get('gmethod') == GroupRepository::FILE) {

                return [
                    'gmethod' => 'required',
                    'input_file' => "required|mimes:$fileExtentions|max:$fileSize",
                    'updatetype' => 'required',
                    'groupid' => 'required',

                ];
            }else{

                return [
                    'gmethod' => 'required',
                ];
            }

        } else {
            return [
                'gmethod' => 'required',
            ];
        }

    }


    public function withValidator($validator)
    {

        $validator->after(function ($validator) {
            if ($this->getPhoneNumbers()) {
                $validator->errors()->add('MOBILENO', 'Maximum 1000 numbers are allowed. Please use file upload option if total numbers exceeds 1000 ! ');
            }
        });
    }

    public function messages()
    {
        return [
            'GROUP_NAME.required' => 'Group name cannot be left blank.',
            'GROUP_NAME.unique' => 'Group name mentioned already exists It cannot be used. ',
            'GROUP_NAME.min' => ' Group name must  be between 4 to 20 characters. ',
            'GROUP_NAME.max' => 'Group name must  be between 4 to 20 characters.',
            'GROUP_NAME.regex' => 'First character cannot be a digit or spacial character.Allow only alphanumeric with underscore ',
            'MOBILENO.required' => 'Recipient number cannot be left blank.',
            'GROUP_RECIPIENT_TYPE.required' => 'Please select a recipient type.',
            'gmethod.required' => 'Please select a add recipients.',
            'input_file.required' => 'Please select file.',
            'input_file.mimes' => 'Please select a valid file.',

        ];
    }


    public function getPhoneNumbers()
    {
        $numbers = Input::get('MOBILENO');
        $totalPhoneNumbers = preg_split("/[:,\s]+/", $numbers);
        return $this->isValidTotalPhoneNumbers($totalPhoneNumbers);

    }

    public function isValidTotalPhoneNumbers($totalPhoneNumbers)
    {
        if (count($totalPhoneNumbers) > 1000 || count($totalPhoneNumbers) < 1) {
            return true;
        } else {
            return false;
        }

    }


}
