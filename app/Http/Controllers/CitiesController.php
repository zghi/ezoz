<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\City;
class CitiesController extends Controller
{
    //
     public function index()
	{
		//
		$cities = City::all();
		return view ('index')->with('cities', $cities);
	}
}