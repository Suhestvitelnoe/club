<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupMessages extends Model
{
    protected $fillable=['user_id','group_id'];
	public function users(){
	return $this->belongsTo('App\User','user_id');
	}
	public function groups(){
		return $this->belongsTo('App\Group','group_id');
	}
	public function formatCreatedDate()
	{
		return $this->created_at->format('M d Y');
	}
}
