<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


     public function accounts() {
    return $this->hasOne('App\Account', 'user_id');
   }

	public function friends(){
		return $this->hasOne('App\Friend','user_id');
		
}
	public function friendsuser(){
		return $this->hasOne('App\Friend','friend_id');
		
}
    public function articles(){
		return $this->hasMany('App\Article','user_id');
		
}
     public function comments(){
		return $this->belongsTo('App\Comment','user_id');
		
}
	public function events(){
		return $this->hasMany('App\Event','user_id');
	}
	

}
