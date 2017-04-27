<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
	protected $fillable = array('user_id', 'feedback', 'company_id');

    public function users() 
	{
   	return $this->belongsTo('App\User', 'user_id');
    }

    public function companies() 
	{
   	return $this->belongsTo('App\Company', 'company_id');
    }
}
