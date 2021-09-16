<?php 

namespace App\Repositories\Broadcast;


use App\Repositories\Broadcast\BroadcastRepositoryInterface ;
use App\Models\BroadcastMaster;


class BroadcastRepository implements BroadcastRepositoryInterface
{
    public $BroadcastMaster;

     /**
     * BroadcastRepository constructor.
     * @param BroadcastMaster $BroadcastMaster
    
    */

    function __construct(BroadcastMaster $BroadcastMaster)
    {
        $this->BroadcastMaster = $BroadcastMaster;
    }


    public function getAllBroadcast()
    {
        //
    }

    public function broadcastFindById($id)
    {
        //
    }

    public function broadcastDeleteById($id)
    {
        //
    }


}

?>

