<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupDetail extends Model
{
    public $timestamps = true;

    public $table = 'AXIOM6_GROUP_DETAIL';
    protected $primaryKey = 'ID';
    
    public function GroupMaster()
    {
    	return $this->belongsTo(GroupMaster::class);
    }
}
