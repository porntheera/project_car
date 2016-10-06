<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceTable extends Model
{
 	public function Bookqueue(){
    	return $this->belongsTo(Bookqueue::class);
    }
    public function Service(){
    	return $this->belongsTo(Service::class);
    }
}
