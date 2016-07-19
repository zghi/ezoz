<?php

namespace App\Http\Controllers;

use Input;
use Redirect;
use Illuminate\Http\Request;
use App\Form;
use App\City;
use App\District;
use App\Neighborhood;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\_FormRequest;

class FormController extends Controller
{
    //
    
    protected $rules = [
        'name' => ['required'],
        'surname' => ['required'],
        'city_id' => ['required'],
        'district_id' => ['required'],
        'neighborhood_id' => ['required'],
    ];

    public function store(Request $request) {
        $this->validate($request, $this->rules);

        $input = Input::all();
        Form::create($input);

        return Redirect::route('index')->with('message', 'Category created');
    }
}
