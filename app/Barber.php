<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
	//
    public function schedules() {
    	return $this->hasMany('App/Schedule');
    }
}
