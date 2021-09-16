<?php

namespace App\Http\Controllers;

use App\Repositories\Broadcast\BroadcastRepositoryInterface ;
use App\Models\GroupMaster ;
use App\Models\UserMaster ;
use App\Models\TemplateMaster ;
use Auth ;
use Illuminate\Http\Request;


class BroadcastReportController extends Controller
{

    Protected $BroadcastRepository ;

    public function __construct(BroadcastRepositoryInterface 
    	$BroadcastRepositoryInterface) 
    {
        $this->BroadcastRepository = $BroadcastRepositoryInterface;
    }

    public function broadcastSummary()
    {
        return view('broadcast.broadcast-summary');
    }


    public function userBroadcastDetail()
    {
        return view('broadcast.user-broadcast-detail');
    }


    public function  broadcastDetailedReport()
    {
        return view('broadcast.detailed-report');
    }

    public function  broadcastWiseDetailedReport()
    {
        return view('broadcast.broadcast-detail-report');
    }

    public function  userBroadcastReport()
    {
        return view('broadcast.user-broadcast-report');
    }

    public function  broadcastFailedReason()
    {
        return view('broadcast.failed-reason');
    }

}
