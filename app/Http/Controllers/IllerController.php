<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Il;

class IllerController extends Controller
{
    //
     public function index()
	{
		//
		$iller = Il::all();
		return view ('index')->with('iller', $iller);
	}
}
