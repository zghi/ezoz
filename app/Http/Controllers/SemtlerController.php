<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;
class SemtlerController extends Controller
{
    //
    
    
      public function ajaxilce()
	{
		$ilce_id = Input::get('ilce_id');

		$semtler = \App\Semt::where('ilce_id', '=', $ilce_id)->get();

		return Response::json($semtler);
	}
        public function ajaxsemt()
	{
		$semt_id=Input::get('semt_id');

		$semtler = \App\Semt::where('id', '=', $semt_id)->get();

		return Response::json($semtler);
	}
}
