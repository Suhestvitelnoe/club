<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
   protected $fillable=['name','description', 'keywords', 'slug', 'user_id', 'author', 'group_id'];

	public function users() {
		return $this->belongsTo('App\User', 'user_id');
   }
   
     public function formatCreatedDate()
	{
   
		return $this->created_at->format('M d Y');
	}
}


