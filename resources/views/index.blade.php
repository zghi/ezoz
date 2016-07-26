@extends('layouts.app')
<?phpuse App\Commucation; ?>
@section('content')


    <div class="container">

 
        <div class="col-lg-6">
            {!! Form::open(array('url'=>'form' ,'method' => 'POST','files'=>true))!!}
            <div class="form-group">
                <h1>Firma Bilgileri</h1>
                <div class="form-group">
                    {!! Form::label('Firma adı') !!}
                    {!! Form::text('firma_adi', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Firma adı')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Firma sektörü') !!}
                    {!! Form::text('firma_sektoru', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Firma sektörü')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Telefon') !!}
                    {!! Form::text('telefon', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Telefonunuz')) !!}
                </div>
                
                <label for="">Şehir</label>
                <select class="form-control input-sm" name="city_id" id="city_id" required>
                    <option selected disabled>Seçiniz</option>
                    @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">İlçe</label>
                <select class="form-control input-sm" name="district_id" id="district_id" required>
                 <option selected disabled>Seçiniz</option>  
              
                    
                    
                </select>
                
                
            </div>
            <div class="form-group">
                <label for="">Semt</label>
                <select class="form-control input-sm" name="neighborhood_id" id="neighborhood_id" required>
                    <option selected disabled>Seçiniz</option>
                    
                </select>

                
            </div>
            
            <br>
            
            
            <h1>Kişiler Bilgiler</h1>
            <div class="form-group">
                    {!! Form::label('Adınız') !!}
                    {!! Form::text('adi', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Adınız')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Soyadınız') !!}
                    {!! Form::text('soyadi', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Soyadınız')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('unvan') !!}
                    {!! Form::text('unvan', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Ünvanınız')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('E-posta') !!}
                    {!! Form::email('email', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'E-postanız')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Telefon') !!}
                    {!! Form::text('telefonkisisel', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Telefonunuz')) !!}
                </div>
            <br>   
            <hr>
            <h1>Giriş Bilgilerinizi Oluşturun</h1>
            
              <div class="form-group">
                    {!! Form::label('Adı') !!}
                    {!! Form::text('name', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Kullanıcı Adı')) !!}
                </div>
              <div class="form-group">
                    {!! Form::label('Email') !!}
                    {!! Form::email('email', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'E-postanız')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Şifre') !!}
                    {!! Form::password('password', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Şifre')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Şifre Tekrar') !!}
                    {!! Form::password('password_confirmation', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Şifre Tekrar')) !!}
                </div>
            
            
            <div class="form-group">
                {!! Form::submit('Kaydet!', 
                array('class'=>'btn btn-primary')) !!}
            </div>
            
            
            
            <div class="form-group">
                <a href="{{ url('commucationss/'.'1') }}">
                    
                    Tıkla
               </a>
           
            
            </div>
            
            
         
            
            {!! Form::close() !!}
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


@endsection