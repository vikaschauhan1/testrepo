<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemplateMaster extends Model
{
	protected $guarded = [];
	public $table = 'AXIOM6_TEMPLATE_MASTER';
	protected $primaryKey = 'TEMPLATEID';

    public function UserMaster()
    {
    	return $this->belongsTo('App\Models\UserMaster','CREATIONBY','USERID');
    }

   
}
