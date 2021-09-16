<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TemplateMaster ;

class UserMaster extends Model
{
	protected $guarded = [];
	public $table = 'AXIOM6_USER_MASTER';
	protected $primaryKey = 'USERID';

    public function GroupMaster()
    {
    	return $this->hasMany('App\Models\GroupMaster','USERID');

    }

    public function TemplateMaster()
    {
    	return $this->hasMany(TemplateMaster::class,'CREATIONBY');
    }


}
