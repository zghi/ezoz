@extends('layouts.app')
<?php

use App\IletisimBilgi; ?>
<?php

use App\Il;
?>
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        
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
                                        <div class="col-sm-4" ><img src="/laravelform/public/uploads/{{$firmalar->logo}}" alt="HTML5 Icon" style="width:128px;height:128px;"></div>
                                        <div class="col-sm-4" ><h3>Firma Adı</h3>Firma Adı</div>

                                    </div>
                                    <div class="modal fade" id="myModal-image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Resmini Güncelle</h4>
                                                </div>
                                                <div class="modal-body">



                                                    <div class="span7 offset1">
                                                        @if(Session::has('success'))
                                                        <div class="alert-box success">
                                                            <h2>{!! Session::get('success') !!}</h2>
                                                        </div>
                                                        @endif
                                                        <div class="secure">Yeni Bir Resim Yükleyin</div>
                                                        {!! Form::open(array('url'=>'apply/upload/'.$firmalar->id,'method'=>'POST', 'files'=>true)) !!}
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                {!! Form::file('logo') !!}
                                                                <p class="errors">{!!$errors->first('image')!!}</p>
                                                                @if(Session::has('error'))
                                                                <p class="errors">{!! Session::get('error') !!}</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div id="success"> 

                                                        </div>

                                                        {!! Form::submit('Yükle', array('url'=>'apply/upload/'.$firmalar->id,'class'=>'btn btn-danger')) !!}


                                                        {!! Form::close() !!}
                                                        <br>
                                                        {{ Form::open(array('url'=>'iletisimbilgilerii/'.$firmalar->id,'method' => 'DELETE', 'files'=>true)) }}
                                                        {{ Form::hidden('id', $firmalar->logo) }}
                                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                                        {{ Form::close() }}
                                                    </div>




                                                </div>
                                                <div class="modal-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button class="btn btn-primary btn-xs btn-detail open-modal-image" onclick="" value="{{$firmalar->id}}">Düzenle</button>

                                    <script src="{{asset('js/ajax-crud-image.js')}}"></script>
                                </div>


                            </div>

                        </div>


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
                                                    <tr id="iletisimbilgisi{{$iletisimbilgileri->id}}">
                          
                                                   
                                                    
                                                    <tr>
                                                        <td>Adres:</td>
                                                        <td>{{$iletisimbilgileri->adres}}</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Telefon:</td>
                                                        <td>{{$iletisimbilgileri->telefon}}</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Fax</td>
                                                        <td>{{$iletisimbilgileri->fax}}</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Web Sayfası:</td>
                                                        <td>{{$iletisimbilgileri->web_sayfası}}</td>

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
                                                                        <select class="form-control" name="il_id" id="il_id" required>
                                                                            <option selected disabled>Seçiniz</option>
                                                                            @foreach($iller as $il)
                                                                            <option  value="{{$il->id}}" >{{$il->adi}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>

                                                                </div>
                                                                <div class="form-group error">
                                                                    <label for="inputTask" class="col-sm-3 control-label">İlçe</label>
                                                                    <div class="col-sm-9">
                                                                        <select class="form-control" name="ilce_id" id="ilce_id" required>
                                                                            <option selected disabled>Seçiniz</option>
                                                                           
                                                                        </select>
                                                                    </div>

                                                                </div>
                                                                <div class="form-group error">
                                                                    <label for="inputTask" class="col-sm-3 control-label">Semt</label>
                                                                    <div class="col-sm-9">
                                                                        <select class="form-control" name="semt_id" id="semt_id" required>
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
                                                            <input type="hidden" id="iletisimbilgisi_id" name="iletisimbilgisi_id" value="{{$iletisimbilgileri->id}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button id="btn-add" name="btn-add" class="btn btn-primary btn-xs">Ekle</button>
                                            <button class="btn btn-primary btn-xs btn-detail open-modal" onclick="alert('mete');$('#city_id').trigger('change');" value="{{$iletisimbilgileri->id}}">Düzenle</button>

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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Firma Tanıtım Yazısı</a>
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">

                                            <table class="table" >
                                                <thead id="tasks-list" name="tasks-list">
                                                    <tr id="firma{{$firmalar->id}}">
                                                    <tr>
                                                        <td>Tanıtım Yazısı:</td>
                                                        <td>{{$firmalar->tanıtım_yazısı}}</td>

                                                    </tr>


                                                    </tr>
                                                </thead>


                                            </table>

                                            <div class="modal fade" id="myModal-tanıtımyazısı" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Firma Tanıtım Yazısı</h4>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form id="frmTanıtımYazısı" name="frmImage" class="form-horizontal" novalidate="">


                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Tanıtım Yazısı</label>
                                                                    <div class="col-sm-9">
                                                                       
                                                                        <textarea id="tanıtım_yazısı" name="tanıtım_yazısı" rows="7" class="form-control ckeditor" placeholder="Lütfen tanıtım yazısını buraya yazınız.."></textarea>
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" id="btn-save-tanıtımyazısı" value="add">Değişiklikleri Kaydet</button>
                                                            <input type="hidden" id="firma_id" name="firma_id" value="{{$firmalar->id}}">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="btn btn-warning btn-xs btn-detail open-modal-tanıtımyazısı" value="{{$firmalar->id}}">Düzenle</button>
                                            <button id="btn-add-tanıtımyazısı" name="btn-add-tanıtımyazısı" class="btn btn-primary btn-xs">Ekle</button>
                                            <script src="{{asset('js/ajax-crud-tanıtımyazısı.js')}}"></script>
                                            <script src="//cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>



                                        </div>
                                    </div>
                                </div>

                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Mali Bilgileri</a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                         <table class="table" >
                                                <thead id="tasks-list" name="tasks-list">
                                                    <tr id="iletisimbilgisi{{$iletisimbilgileri->id}}">
                                                    <tr>
                                                        <td>Firma Ünvanı:</td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Şirket Türü:</td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Fatura Adresi:</td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Vergi Dairesi:</td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Vergi Numarası:</td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Yıllık Cirosu:</td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Sermayesi:</td>
                                                        <td></td>

                                                    </tr>
                                                    </tr>
                                                </thead>


                                            </table>
                                            <div class="modal fade" id="myModal-malibilgiler" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Mali Bilgiler</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="frmMaliBilgiler" name="frmMaliBilgiler" class="form-horizontal" novalidate="">


                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Firma Ünvanı</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="unvani" name="unvani" placeholder="Firma Ünvanı" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Şirket Türü</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="sirket_turu" name="sirket_turu" placeholder="Şirket Türü" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Fatura Adresi</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="fatura_adresi" name="fatura_adresi" placeholder="Fatura Adresi" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Vergi Dairesi</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="vergi_dairesi" name="vergi_dairesi" placeholder="Vergi Dairesi" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Vergi Numarası</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="vergi_numarasi" name="vergi_numarasi" placeholder="Vergi Numarası" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Yıllık Cirosu</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="yillik_cirosü" name="yıllık_cirosü" placeholder="Yıllık Cirosu" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Sermayesi</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="sermayesi" name="sermayesi" placeholder="Sermayesi" value="">
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" id="btn-save-malibilgiler" value="add">Değişiklikleri Kaydet</button>
                                                            <input type="hidden" id="firma_id" name="firma_id" value="{{$firmalar->id}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-warning btn-xs btn-detail open-modal-malibilgiler" value="{{$firmalar->id}}">Düzenle</button>
                                            <button id="btn-add-malibilgiler" name="btn-add-malibilgiler" class="btn btn-primary btn-xs">Ekle</button>
                                            <script src="{{asset('js/ajax-crud-malibilgiler.js')}}"></script>

                                        </div>
                                    </div>
                                </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Ticari Bilgiler</a>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                         <table class="table" >
                                                <thead id="tasks-list" name="tasks-list">
                                                    <tr id="iletisimbilgisi{{$iletisimbilgileri->id}}">
                                                    <tr>
                                                        <td>Ticaret Sicil No:</td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Ticaret Odası:</td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Üst Sektör:</td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Faliyet Sektör:</td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Firma Departmanları:</td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Kuruluş Tarihi:</td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Firma Faaliyet Türü:</td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Firmanın Ürettiği Markalar:</td>
                                                        <td></td>

                                                    </tr>
                                                     <tr>
                                                        <td>Firmanın Sattığı Markalar:</td>
                                                        <td></td>

                                                    </tr>
                                                    </tr>
                                                </thead>


                                            </table>
                                            <div class="modal fade" id="myModal-ticaribilgiler" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Ticari Bilgiler</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="frmTicariBilgiler" name="frmTicariBilgiler" class="form-horizontal" novalidate="">


                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Ticaret Sicil NO</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="ticaret_sicil_no" name="ticaret_sicil_no" placeholder="Ticaret Sicil No" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Ticaret Odası</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="ticaret_odasi" name="ticaret_odasi" placeholder="Ticaret Odası" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Üst Sektör</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="ust_sektor" name="ust_sektor" placeholder="Üst Sektör" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Faaliyet Sektörleri</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="faaliyet_sektorleri" name="faaliyet_sektorleri" placeholder="Faaliyet Sektörleri" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Firma Departmanları</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="firma_departmanları" name="firma_departmanları" placeholder="Firma Departmanları" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Kuruluş Tarihi</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="kurulus_tarihi" name="kurulus_tarihi" placeholder="Kuruluş Tarihi" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Firma Faaliyet Türü</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="firma_faaliyet_turu" name="firma_faaliyet_turu" placeholder="Firma Faaliyet Türü" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Firmanın Ürettiği Markalar</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="firmanin_ürettigi_markalar" name="firmanin_ürettigi_markalar" placeholder="Firmanın Ürettiği Markalar" value="">
                                                                    </div>
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label">Firmanın Sattığı Markalari</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="firmanin_sattıgı_markalar" name="firmanin_sattıgı_markalar" placeholder="Firmanın Sattığı Markalar" value="">
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" id="btn-save-ticaribilgiler" value="add">Değişiklikleri Kaydet</button>
                                                            <input type="hidden" id="firma_id" name="firma_id" value="{{$firmalar->id}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-warning btn-xs btn-detail open-modal-ticaribilgiler" value="{{$firmalar->id}}">Düzenle</button>
                                            <button id="btn-add-ticaribilgiler" name="btn-add-ticaribilgiler" class="btn btn-primary btn-xs">Ekle</button>
                                            <script src="{{asset('js/ajax-crud-ticaribilgiler.js')}}"></script>

                                        </div>
                                    </div>
                                </div>



                              
                           
                            </div>
                        </div>













                        <script>
$('#il_id').on('change', function (e) {
    console.log(e);

    var il_id = e.target.value;

    //ajax
    $.get('/laravelform/public/index.php/ajax-subcat?il_id=' + il_id, function (data) {
        //success data
        //console.log(data);
        $('#ilce_id').empty();
        $('#ilce_id').append('<option value=""> Seçiniz </option>');
        $.each(data, function (index, subcatObj) {
            $('#ilce_id').append('<option value="' + subcatObj.id + '">' + subcatObj.adi + '</option>');
        });
    });
  
});

$('#ilce_id').on('change', function (e) {
    console.log(e);

    var ilce_id = e.target.value;

    //ajax
    $.get('/laravelform/public/index.php/ajax-subcatt?ilce_id=' + ilce_id, function (data) {
        //success data
        //console.log(data);
        $('#semt_id').empty();
        $('#semt_id').append('<option value=" ">Seçiniz </option>');
        $.each(data, function (index, subcatObj) {
            $('#semt_id').append('<option value="' + subcatObj.id + '">' + subcatObj.adi + '</option>');
        });
    });
});
$('#semt_id').on('change', function (e) {
    console.log(e);

    var semt_id = e.target.value;

    //ajax
    $.get('/laravelform/public/index.php/ajax-subcattt?semt_id=' + semt_id, function (data) {
        //success data
        //console.log(data);
        $('#semt_id').empty();
        $.each(data, function (index, subcatObj) {
            $('#semt_id').append('<option value="' + subcatObj.id + '">' + subcatObj.adi + '</option>');
        });
    });
});




                        </script>

                        </body>
                        </html>

                        @endsection