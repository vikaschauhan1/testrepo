<?php

namespace App\Repositories\Broadcast;

interface BroadcastRepositoryInterface {


    public function getAllBroadcast();


    public function broadcastFindById($id);


    public function broadcastDeleteById($id);


}


?>