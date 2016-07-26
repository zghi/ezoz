


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>



                <style>
                    table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                    }

                    td, th {

                        text-align: left;
                        padding: 5px;
                    }
                    .button {
                        background-color: #555555; /* Green */
                        border: none;
                        color: white;
                        padding: 10px 22px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 13px;
                        margin: 4px 2px;
                        cursor: pointer;
                        float:right;
                    }
                    .button1 {
                        background-color: #555555; /* Green */
                        border: none;
                        color: white;
                        padding: 10px 22px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 13px;
                        margin: 4px 2px;
                        cursor: pointer;
                        float:left;
                    }



                </style>
                </head>
                <body>

                <div class="container">
                    <h2>Firma Profili</h2>
                    <div class="col-lg-6">



                        <div class="form-group">

                            <br>

                            <div class="row">
                                <div class="col-sm-4" ><img src="/uploads/$fileName" alt="HTML5 Icon" style="width:128px;height:128px;"></div>
                                <div class="col-sm-4" ><h3>Firma Adı</h3>Firma Adı</div>
     
                            </div>
                            <a href="{{ url('image') }}">
                           <button class="button1"><i class=" medium material-icons">mode_edit</i>Düzenle</button>
                 </a>

                        </div>

                  
                    </div>

                </div>
                
                <div>



                </div>


                <br>






                <div class="container">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i class=" medium material-icons">call</i>İletişim Bilgileri</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <table>

                                        <tr>
                                            <td>Şehir:</td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>İlçe:</td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>Semt:</td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>Adres:</td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>Telefon:</td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>Fax</td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>Web Sayfası:</td>
                                            <td></td>

                                        </tr>

                                    </table>
                                    <a href="{{ url('commucationss') }}">
                                        
                                        <button class="button"><i class=" medium material-icons">mode_edit</i>Düzenle</button>
                                    </a>


                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Mali Bilgileri</a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table>

                                        <tr>
                                            <td>Vergi numarası:</td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>Yıllık Cürosu:</td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>Sermaye:</td>
                                            <td></td>

                                        </tr>
                                      
                                    </table>
                                    <a href="{{ url('commucationss') }}">
                                        <button class="button"><i class=" medium material-icons">mode_edit</i>Düzenle</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Ticari Bilgiler</a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    
                                    
                                    <table>

                                        <tr>
                                            <td>Ticaret Sicil No:</td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>Kuruluş Tarihi:</td>
                                            <td></td>

                                        </tr>
                                      
                                        
                                    </table>
                                    <a href="{{ url('commucationss') }}">
                                        <button class="button"><i class=" medium material-icons">mode_edit</i>Düzenle</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </body>
                </html>


                
                
                
                
                   Route::get('/commucations', function () {
        
        $cities = City::all();
        return view('commucations.FirmaProfili' )->with('cities', $cities);
    });
    
    
    
    Route::post('/commucationss', function (Request $request) {
    $validator = Validator::make($request->all(), [
               
                'city_id' => 'required',
                'district_id' => 'required',
                'neighborhood_id' => 'required',
                'adres' => 'required',
                'telefon' => 'required|max:255',
                'fax' => 'required',
                'web_sayfası' => 'required',
              
    ]);

    if ($validator->fails()) {
        return redirect('/')
                        ->withInput()
                        ->withErrors($validator);
    }
    
      $iletisim= new Commucation();
     
      $iletisim->city_id = $request->city_id;
      $iletisim->district_id = $request->district_id;
      $iletisim->neigborhood_id = $request->neighborhood_id;
      $iletisim->adres = $request->adres;
      $iletisim->telefon = $request->telefon;
      $iletisim->fax = $request->fax;
       $iletisim->web_sayfası = $request->web_sayfası;
      $iletisim->save();

      

   

    return redirect('/');//redirect kendine gelmesi lazım bunu çöz !
});


//welcome
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html>
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">MENÜ</div>

                <div class="panel-body">
                  <a href="{{ url('city') }}">
                    
                    İLAN YAYINLA
               </a>
                </div>
            </div>
        </div>
    </div>
</div>