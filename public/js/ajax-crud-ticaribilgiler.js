$(document).ready(function(){

    var url = "/laravelform/public/index.php/commucations";
   
    //display modal form for task editing
    $('.open-modal-ticaribilgiler').click(function(){
        var malibilgiler_id = $(this).val();

        $.get(url + '/' + malibilgiler_id, function (data) {
            //success data
            console.log(data);
            $('#malibilgiler_id').val(data.id);
            $('#city_id').val(data.city_id);
            
            $('#district_id').val(data.district_id);
            $('#neighborhood_id').val(data.neighborhood_id);
            $('#adres').val(data.adres);
             $('#telefon').val(data.telefon);
            $('#fax').val(data.fax);
             $('#web_sayfası').val(data.web_sayfası);
            
            
            $('#btn-save-ticaribilgiler').val("update");

            $('#myModal-ticaribilgiler').modal('show');
            
        }) 
    });
        //display modal form for task editing
   

    //display modal form for creating new task
    $('#btn-add-ticaribilgiler').click(function(){
        $('#btn-save-ticaribilgiler').val("add");
        $('#frmTicariBilgiler').trigger("reset");
        $('#myModal-ticaribilgiler').modal('show');
    });

    //delete task and remove it from list
    $('.delete-ticaribilgiler').click(function(){
        var malibilgiler_id = $(this).val();

        $.ajax({

            type: "DELETE",
            url: url + '/' + malibilgiler_id,
            success: function (data) {
                console.log(data);

                $("#task" + malibilgiler_id).remove(); //task yerine ne yazmam lazım ?? o task html adı???
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    //create new task / update existing task
    $("#btn-save-ticaribilgiler").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
               
            }
        });

        e.preventDefault(); 

        var formData = {
            city_id: $('#city_id').val(),
            district_id: $('#district_id').val(),
            neighborhood_id: $('#neighborhood_id').val(),
            adres: $('#adres').val(),
            telefon: $('#telefon').val(),
            fax: $('#fax').val(),
            web_sayfası: $('#web_sayfası').val(),
           
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save-ticaribilgiler').val();

        var type = "POST"; //for creating new resource
        var malibilgiler_id = $('#malibilgiler_id').val();
        var my_url = url;

        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + malibilgiler_id;
        }

        console.log(formData);

        $.ajax({

            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);

               
                $('#frmTicariBilgiler').trigger("reset");

                $('#myModal-ticaribilgiler').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});