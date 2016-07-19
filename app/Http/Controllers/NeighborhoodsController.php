<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;
class NeighborhoodsController extends Controller
{
    //
       public function ajaxdistrict()
	{
		$district_id = Input::get('district_id');

		$neighborhoods = \App\Neighborhood::where('district_id', '=', $district_id)->get();

		return Response::json($neighborhoods);
	}
        public function ajaxneighborhood()
	{
		$neighborhood_id=Input::get('neighborhood_id');

		$neighborhoods = \App\Neighborhood::where('id', '=', $neighborhood_id)->get();

		return Response::json($neighborhoods);
	}
}
