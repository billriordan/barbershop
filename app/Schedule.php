<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    public function appointments()
    {
    	return $this->hasMany('App/Appointment');
    }

    public function barber()
    {
    	return $this->belongsTo('App/Barber');
    }
}
