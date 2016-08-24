<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;
class IlcelerController extends Controller
{
    //
    public function ajax()
	{
		$il_id = Input::get('il_id');

		$ilceler = \App\Ilce::where('il_id', '=', $il_id)->get();

		return Response::json($ilceler);
	}
}
