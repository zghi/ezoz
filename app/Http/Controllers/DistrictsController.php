<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;
class DistrictsController extends Controller
{
    //
     public function ajax()
	{
		$city_id = Input::get('city_id');

		$districts = \App\District::where('city_id', '=', $city_id)->get();

		return Response::json($districts);
	}
}
