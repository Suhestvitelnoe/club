<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
 protected $fillable=[
 'name','body','user_id','group_id',
 ];
	public function users(){
		return $this->belongsTo('App\User','user_id');
	}
	public function members(){
		return $this->hasMany('App\Member','group_id');
		
	}
}
