@extends('layouts.app')
<?php use App\Commucation; ?>
<?php use App\City; ?>
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
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
                                        <div class="col-sm-4" ><img src="/laravelform/public/uploads/{{$firmas->image}}" alt="HTML5 Icon" style="width:128px;height:128px;"></div>
                                        <div class="col-sm-4" ><h3>Firma Adı</h3>Firma Adı</div>

                                    </div>
                                    <a href="{{ url('image/'.$firmas->id )  }}">
                                        <button class="button1"><i class=" medium material-icons">mode_edit</i>Düzenle</button>
                                    </a>

                                </div>


                            </div>

                        </div>

                        <div></div>


                        <br>






                        <div class="container">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i class=" medium material-icons">call</i>İletişim Bilgileri</a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            
                                            <table class="table" >
                                                <thead id="tasks-list" name="tasks-list">
                                                     <tr id="commucation{{$commucations->id}}">
                                                        <tr>
                                                            <td>Şehir:</td>
                                                            <td>{{$commucations->city_id}}</td>

                                                        </tr>
                                                        <tr>
                                                            <td>İlçe:</td>
                                                            <td>{{$commucations->district_id}}</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Semt:</td>
                                                            <td>{{$commucations->neighborhood_id}}</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Adres:</td>
                                                            <td>{{$commucations->adres}}</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Telefon:</td>
                                                            <td>{{$commucations->telefon}}</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Fax</td>
                                                            <td>{{$commucations->fax}}</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Web Sayfası:</td>
                                                            <td>{{$commucations->web_sayfası}}</td>

                                                        </tr>
                                                    </tr>
                                                </thead>

                                          
                                            </table>
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">İletişim Bilgileri</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="frmTasks" name="frmTasks" class="form-horizontal" novalidate="">

                                                                <div class="form-group error">
                                                                    <label for="inputTask" class="col-sm-3 control-label">Şehir</label>
                                                                    <div class="col-sm-9">
                                                                    <select class="form-control" name="city_id" id="city_id" required>
                                                                        <option selected disabled>Seçiniz</option>
                                                                        @foreach($cities as $city)
                                                                        <option  value="{{$city->id}}">{{$city->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    </div>

                                                                </div>
                                                                <div class="form-group error">
                                                                    <label for="inputTask" class="col-sm-3 control-label">İlçe</label>
                                                                    <div class="col-sm-9">
                                                                    <select class="form-control" name="district_id" id="district_id" required>
                                                                        <option selected disabled>Seçiniz</option>
                                                                        <!--option selected value="{{$commucations->district_id}}">{{$commucations->district_id}}</option-->
                                                                    </select>
                                                                    </div>

                                                                </div>
                                                                <div class="form-group error">
                                                                    <label for="inputTask" class="col-sm-3 control-label">Semt</label>
                                                                    <div class="col-sm-9">
                                                                    <select class="form-control" name="neighborhood_id" id="neighborhood_id" required>
                                                                        <option selected disabled>Seçiniz</option>

                                                                    </select>
                                                                    </div>

                                                                </div>                                                     


                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Adres</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="adres" name="adres" placeholder="Adres" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Telefon</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="telefon" name="telefon" placeholder="Telefon" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Fax</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="fax" name="fax" placeholder="Fax" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Web Sayfası</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="web_sayfası" name="web_sayfası" placeholder="Web Sayfası" value="">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Değişiklikleri Kaydet</button>
                                                            <input type="hidden" id="commucation_id" name="commucation_id" value="{{$commucations->id}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button id="btn-add" name="btn-add" class="btn btn-primary btn-xs">Ekle</button>
                                            <button class="btn btn-primary btn-xs btn-detail open-modal" onclick="alert('mete');" value="{{$commucations->id}}">Düzenle</button>
                                           
                                            <meta name="_token" content="{!! csrf_token() !!}" />
                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                                            <script src="{{asset('js/ajax-crud.js')}}"></script>
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
                        <script>
$('#city_id').on('change', function (e) {
    console.log(e);

    var city_id = e.target.value;

    //ajax
    $.get('/laravelform/public/index.php/ajax-subcat?city_id=' + city_id, function (data) {
        //success data
        //console.log(data);
        $('#district_id').empty();
        $('#district_id').append('<option value=""> Seçiniz </option>');
        $.each(data, function (index, subcatObj) {
            $('#district_id').append('<option value="' + subcatObj.id + '">' + subcatObj.name + '</option>');
        });
    });
   //$("#district_id)").val={{$commucations->district_id}};
});

$('#district_id').on('change', function (e) {
    console.log(e);

    var district_id = e.target.value;

    //ajax
    $.get('/laravelform/public/index.php/ajax-subcatt?district_id=' + district_id, function (data) {
        //success data
        //console.log(data);
        $('#neighborhood_id').empty();
        $('#neighborhood_id').append('<option value=" ">Seçiniz </option>');
        $.each(data, function (index, subcatObj) {
            $('#neighborhood_id').append('<option value="' + subcatObj.id + '">' + subcatObj.name + '</option>');
        });
    });
});
$('#neighborhood_id').on('change', function (e) {
    console.log(e);

    var neighborhood_id = e.target.value;

    //ajax
    $.get('/laravelform/public/index.php/ajax-subcattt?neighborhood_id=' + neighborhood_id, function (data) {
        //success data
        //console.log(data);
        $('#neighborhood_id').empty();
        $.each(data, function (index, subcatObj) {
            $('#neighborhood_id').append('<option value="' + subcatObj.id + '">' + subcatObj.name + '</option>');
        });
    });
});




                        </script>

                        </body>
                        </html>

@endsection