<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    public function schedule()
    {
    	return $this->belongsTo('App/Schedule');
    }
}
