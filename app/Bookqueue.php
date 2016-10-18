<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookqueue extends Model
{
    public function User(){
    	return $this->belongsTo(User::class);
    }
    public function Service(){
    	return $this->belongsToMany(Service::class);
    }
    public function ServiceTable(){
    	return $this->hasMany(ServiceTable::class);
    }
    public function Car(){
    	return $this->belongsTo(Car::class);
    }
}
