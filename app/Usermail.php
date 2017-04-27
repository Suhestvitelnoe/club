<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usermail extends Model
{
    protected $fillable = array('reciever_id', 'theme', 'sender_id', 'body', 'answer');

    public function recievers() {
    	return $this->belongsTo('App\User', 'reciever_id');
    }
    public function senders() {
    	return $this->belongsTo('App\User', 'sender_id');
    }
    
}
