<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
//use App\Country;

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
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function country(){
        return $this->hasOne('App\Country', 'user_id', 'id'); // user_id (foreign_key) // id (local_key)
    }

    public function articles(){
        return $this->hasMany('App\Article');
    }
}
