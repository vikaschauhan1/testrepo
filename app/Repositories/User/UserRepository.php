<?php

namespace App\Repositories\User;


use App\Repositories\User\UserRepositoryInterface ;
use App\Models\UserMaster;


class UserRepository implements UserRepositoryInterface
{
    public $UserMaster;

      /**
     * UserRepository constructor.
     * @param UserMaster $UserMaster
    
    */

    function __construct(UserMaster $UserMaster)
    {
        $this->UserMaster = $UserMaster;
    }

    public function getAllUser()
    {
        //
    }
}



