<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
     protected $fillable=['name','user_id', 'cat_id', 'executor', 'album', 'picture', 'ringhtone', 'birthday', 'years', 'file'];
}
