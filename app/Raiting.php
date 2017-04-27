<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raiting extends Model
{
     protected $fillable=[
   'user_id','reason',
 ];
	public function users(){
	 return $this->belongsTo('App\User','user_id');
 }
	
}
