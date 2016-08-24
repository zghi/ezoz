<?php

use Illuminate\Http\Request;
use App\Form;
use App\Firma;
use App\Customer;
use App\User;
 use App\IletisimBilgi;
 use App\Il;
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
        $firmalar=Firma::find($id);  
        return view('firmalar.upload' )->with('firmalar',$firmalar);
    });
    
    Route::get('/upload', function() {
        return View::make('firmalar.upload');
     });
     
     
     
     Route::post('apply/upload/{id}', 'ApplyController@upload');
     
      Route::delete('/iletisimbilgilerii/{id}', 'ApplyController@destroy');
     
  //modal form
     
     
   Route::get('/iletisimbilgileri', function () {
      $ietisimbilgi = IletisimBilgi::all();
       $iller =Il::all();
        return view('iletisimbilgileri.FirmaProfili')->with('iletisimbilgileri',$iletisimbilgi)->with('iller', $iller);
       
    });

   Route::get('/iletisimbilgileri/{id?}',function($id="1"){
    $iletisimbilgi = IletisimBilgi::find($id);
    
    return Response::json($iletisimbilgi);
});
   Route::get('/iletisimbilgilerii/{id?}',function($id){
    $iletisimbilgileri = IletisimBilgi::find($id);
    $iller = Il::all();
    $firmalar = Firma::find($id);
   return view('iletisimbilgileri.FirmaProfili')->with('iletisimbilgileri',$iletisimbilgileri)->with('iller', $iller)->with('firmalar', $firmalar);
});

Route::post('/iletisimbilgileri',function(Request $request){
    $iletisimbilgi = IletisimBilgi::create($request->all());

    return Response::json($iletisimbilgi);
});

Route::put('/iletisimbilgileri/{id?}',function(Request $request,$id){
    $iletisimbilgi = IletisimBilgi::find($id);

    
     $iletisimbilgi->city_id = $request->city_id;
      $iletisimbilgi->district_id = $request->district_id;
      $iletisimbilgi->neighborhood_id = $request->neighborhood_id;
      $iletisimbilgi->adres = $request->adres;
      $iletisimbilgi->telefon = $request->telefon;
      $iletisimbilgi->fax = $request->fax;
      $iletisimbilgi->web_sayfası = $request->web_sayfası;
      $iletisimbilgi->save();
 

    return Response::json($iletisimbilgi);
});

Route::delete('/iletisimbilgileri/{id?}',function($id){
    $iletisimbilgi =  IletisimBilgi::destroy($id);

    return Response::json($iletisimbilgi);
});

Route::get('/', function () {
    $iletisimbilgi = IletisimBilgi::all();

    return View::make('welcome')->with('iletisimbilgileri',$iletisimbilgi);
});







 Route::auth();


Route::get('/city', 'IllerController@index');
Route::get('/ajax-subcat', 'IlcelerController@ajax');
Route::get('/ajax-subcatt', 'SemtlerController@ajaxilce');
Route::get('/ajax-subcattt', 'SemtlerController@ajaxsemt');
