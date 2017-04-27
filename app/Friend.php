<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $fillable=[
	'user_id','friend_id','accept'
	];
	public function users(){
		
		return $this->belongsTo('App\User','user_id');
	}
		public function friends(){
		
		return $this->belongsTo('App\User','friend_id');
	}
}
