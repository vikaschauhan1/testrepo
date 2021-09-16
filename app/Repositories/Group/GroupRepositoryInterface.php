<?php 

namespace App\Repositories\Group;

use App\Http\Requests\GroupRequest;

interface GroupRepositoryInterface
{

    public function createGroup(GroupRequest $request);

    public function getAllGroups();


    public function groupFindById($id);


    public function groupDeleteById($id);


}


