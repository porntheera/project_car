<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function User(){
    	return $this->belongsTo(User::class);
    }
    public function Bookqueue(){
    	return $this->hasMany(Bookqueue::class);
    }
}
