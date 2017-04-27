<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = array('logo', 'user_id', 'name', 'slogan', 'country', 'description', 'work_area', 'adress', 'phone', 'mobilephone', 'site', 'email','raiting');

    public function users() 
	{
   	return $this->belongsTo('App\User', 'user_id');
    }
}
