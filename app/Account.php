<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
	protected $fillable = array('fio', 'body', 'user_id', 'avatar', 'phone', 'birthday', 'family', 'hobby', 'city', 'status', 'cabinet_fon');

	public function scopeApp($query, $id) {
		return $query->where('user_id', $id);
	}
	  public function formatCreatedDate()
	{
   
		return $this->created_at->format('M d Y');
	}
}
