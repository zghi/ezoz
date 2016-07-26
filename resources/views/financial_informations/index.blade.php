<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    </head>
    <body>
    <div class="container">

 
        <div class="col-lg-6">
            {!! Form::open(array('url'=>'commucationss' ,'method' => 'POST','files'=>true))!!}
            <div class="form-group">
                <h1>Mali Bilgileri</h1>
                
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
            <div class="form-group">
                    {!! Form::label('Adres') !!}
                    {!! Form::text('adres', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Adres')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Telefon') !!}
                    {!! Form::text('telefon', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Telefon')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Fax') !!}
                    {!! Form::text('fax', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Fax')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Web Sayfası') !!}
                    {!! Form::text('web_sayfası', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Web Sayfası')) !!}
                </div>
            
            
            <div class="form-group">
                {!! Form::submit('Register!', 
                array('class'=>'btn btn-primary')) !!}
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

