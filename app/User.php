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

    public function Car(){
        return $this->hasMany(Car::class);
    }
    public function Bookqueue(){
        return $this->hasMany(Bookqueue::class);
    }
    public function Detail(){
        return $this->hasOne(UserDetail::class);
    }
}
