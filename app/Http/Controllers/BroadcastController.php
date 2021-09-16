<?php

namespace App\Http\Controllers;

use App\Repositories\Broadcast\BroadcastRepositoryInterface ;
use App\Models\GroupMaster ;
use App\Models\UserMaster ;
use App\Models\TemplateMaster ;
use Auth ;
use Illuminate\Http\Request;

class BroadcastController extends Controller
{

    Protected $BroadcastRepository ;

    public function __construct(BroadcastRepositoryInterface $BroadcastRepositoryInterface) 
    {
        $this->BroadcastRepository = $BroadcastRepositoryInterface;
    }

    /*
     *
     */

    public function editBroadcast()
    {
        return view('broadcast.edit-broadcast');
    }


    public function broadcastDetails()
    {
        return view('broadcast.broadcast-details');
    }


    public function createBroadcast()
    {
        return view('broadcast.create-broadcast');
    }

    public function broadcastPreview()
    {
        return view('broadcast.broadcast-preview');
    }

    public function broadcastList()
    {
        return view('broadcast.view-broadcast');
        //return $GroupData = $this->templateRepository->getAll();
    }

    public function checkAvailability(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'GROUP_NAME' => 'required|max:20|min:4||regex:/^[a-zA-Z]{1}/|unique:AXIOM6_GROUP_MASTER',
            ],
            [
                'GROUP_NAME.required' => 'Group Name cannot be left blank ',
                'GROUP_NAME.unique' => 'Group name mentioned already exists It cannot be used ',
                'GROUP_NAME.min' => ' Group name must  be between 4 to 20 characters ',
                'GROUP_NAME.max' => 'Group name must  be between 4 to 20 characters ',
                'GROUP_NAME.regex' => 'First character cannot be a digit or underscore. Please start with alphabet'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        return response()->json(['success' => 'Group name available']);

    }



}
