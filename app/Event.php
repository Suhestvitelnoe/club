<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   protected $fillable=[
 'title','body','user_id','date','location',
 ];
}
