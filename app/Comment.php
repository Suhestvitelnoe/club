<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = array('user_id',  'article_id','comment', 'body_comment', 'picture');

    public function users() 
	{
   		return $this->belongsTo('App\User', 'user_id');
    }
      public function formatCreatedDate()
	{
   
		return $this->created_at->format('M d Y');
	}

  
}
