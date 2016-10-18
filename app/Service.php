<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	public function ServiceTable(){
    	return $this->belongsToMany(ServiceTable::class);
    }
    public function Bookqueue(){
    	return $this->belongsToMany(Bookqueue::class);
    }
}