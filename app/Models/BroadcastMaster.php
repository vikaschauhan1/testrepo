<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserMaster ;


class BroadcastMaster extends Model
{

	protected $guarded = [];
	protected $primaryKey = 'BROADCASTID';
	public $table = 'AXIOM6_BROADCAST_MASTER';
	const  ADDACTION = 'add';
    const REMOVEACTION = 'remove';



    public function UserMaster()
    {
        return $this->belongsTo(UserMaster::class,'USERID','USERID');
    }

  

}
