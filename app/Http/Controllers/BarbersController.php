<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barber;

class BarbersController extends Controller
{
    //

    public function index()
    {
    	$barbers = Barber::all();
    	//dd($barbers);
    	return view('barbers.index', compact('barbers'));
    }
}
