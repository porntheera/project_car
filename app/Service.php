<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	public function ServiceTable(){
    	return $this->hasOne(ServiceTable::class);
    }
}