<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['name','body', 'keywords', 'slug', 'user_id', 'theme_id', 'group_id', 'picture'];

   public function users() {
   	return $this->belongsTo('App\User', 'user_id');
   }
   public function themes(){
	   return $this->belongsTo('App\Theme','theme_id');
	   
   }

}
