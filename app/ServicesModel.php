<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesModel extends Model
{
    protected $fillable = array('user_id', 'name', 'description', 'picture', );
}
