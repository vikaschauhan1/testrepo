<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserMaster;


class GroupMaster extends Model
{

    protected $guarded = [];
    protected $primaryKey = 'GROUPID';
    public $table = 'AXIOM6_GROUP_MASTER';
    const CREATE = 'create';
    const UPDATE = 'update';

    public function GroupDetail()
    {
        return $this->hasMany(GroupDetail::class);
    }

    public function UserMaster()
    {
        return $this->belongsTo(UserMaster::class, 'USERID', 'USERID');
    }


}
