<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = array('user_id', 'cat_id', 'photo', 'name', 'keywords');
}
