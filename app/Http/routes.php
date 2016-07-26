<?php

use Illuminate\Http\Request;
use App\Form;
use App\Firma;
use App\Customer;
use App\User;
 use App\Commucation;
 use App\City;
 use App\Task;

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
   return view('welcome');
});
Route::post('/form', function (Request $request) {
    $validator = Validator::make($request->all(), [
                'firma_adi' => 'required|max:255',
                'firma_sektoru' => 'required|max:255',
                'city_id' => 'required',
                'district_id' => 'required',
                'neighborhood_id' => 'required',
                'telefon' => 'required',
                'adi' => 'required|max:255',
                'soyadi' => 'required',
                'email' => 'required',
                'unvan' => 'required',
                'telefonkisisel' => 'required',
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required|min:6'
    ]);

    if ($validator->fails()) {
        return redirect('/')
                        ->withInput()
                        ->withErrors($validator);
    }
    
      $firma= new Firma();
      $firma->firma_adi = $request->firma_adi;
      $firma->firma_sektoru = $request->firma_sektoru;
      $firma->telefon = $request->telefon;
      $firma->city_id = $request->city_id;
      $firma->district_id = $request->district_id;
      $firma->neigborhood_id = $request->neighborhood_id;
      $firma->save();

      $uye= new Customer();
      $uye->adi = $request->adi;
      $uye->soyadi = $request->soyadi;
      $uye->email = $request->email;
      $uye->unvan = $request->unvan;
      $uye->telefon = $request->telefonkisisel;

      $uye->save(); 

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password =Hash::make( $request->password);


    $user->save();

    return redirect('/');
});




  
    
    
   
    
    
   Route::get('/image/{id}', function ($id) {
        $firmas=Firma::find($id);  
        return view('firmas.upload' )->with('firmas',$firmas);
    });
    
    Route::get('/upload', function() {
        return View::make('firmas.upload');
     });
     Route::post('apply/upload/{id}', 'ApplyController@upload');
     
     
     
  //modal form
     
     
   Route::get('/commucations', function () {
      $commucations = Commucation::all();
       $cities = City::all();
        return view('commucations.FirmaProfili')->with('commucations',$commucations)->with('cities', $cities);
       
    });

   Route::get('/commucations/{id?}',function($id="1"){
    $commucation = Commucation::find($id);
    
    return Response::json($commucation);
});
   Route::get('/commucationss/{id?}',function($id){
    $commucations = Commucation::find($id);
    $cities = City::all();
    $firmas = Firma::find($id);
   return view('commucations.FirmaProfili')->with('commucations',$commucations)->with('cities', $cities)->with('firmas', $firmas);
});

Route::post('/commucations',function(Request $request){
    $commucation = Commucation::create($request->all());

    return Response::json($commucation);
});

Route::put('/commucations/{id?}',function(Request $request,$id){
    $commucation = Commucation::find($id);

    
     $commucation->city_id = $request->city_id;
      $commucation->district_id = $request->district_id;
      $commucation->neighborhood_id = $request->neighborhood_id;
      $commucation->adres = $request->adres;
      $commucation->telefon = $request->telefon;
      $commucation->fax = $request->fax;
      $commucation->web_sayfası = $request->web_sayfası;
      $commucation->save();
 

    return Response::json($commucation);
});

Route::delete('/commucations/{id?}',function($id){
    $commucation = Commucation::destroy($id);

    return Response::json($commucation);
});

Route::get('/', function () {
    $commucation = Commucation::all();

    return View::make('welcome')->with('commucations',$commucation);
});







 Route::auth();


Route::get('/city', 'CitiesController@index');
Route::get('/ajax-subcat', 'DistrictsController@ajax');
Route::get('/ajax-subcatt', 'NeighborhoodsController@ajaxdistrict');
Route::get('/ajax-subcattt', 'NeighborhoodsController@ajaxneighborhood');
