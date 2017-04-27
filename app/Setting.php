<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = array('sett_user_id', 'sett_name', 'sett_show_hide', 'sett_url');
}
