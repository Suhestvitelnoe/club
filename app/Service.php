<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = array('user_id', 'cat_id', 'name', 'description', 'picture', "company_id");

    public function companies() 
	{
   	return $this->belongsTo('App\Company', 'company_id');
    }

    public function users() 
	{
   	return $this->belongsTo('App\User', 'user_id');
    }
}
