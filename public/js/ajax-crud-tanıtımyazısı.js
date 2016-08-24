$(document).ready(function(){

    var url = "/laravelform/public/index.php/commucations";
   
    //display modal form for task editing
    $('.open-modal-tanıtımyazısı').click(function(){
        var firma_id = $(this).val();

        $.get(url + '/' + firma_id, function (data) {
            //success data
            console.log(data);
            $('#firma_id').val(data.id);
            $('#tanıtım_yazısı').val(data.tanıtım_yazısı);
            
           
            
            $('#btn-save-tanıtımyazısı').val("update");

            $('#myModal-tanıtımyazısı').modal('show');
            
        }) 
    });
        //display modal form for task editing
   

    //display modal form for creating new task
    $('#btn-add-tanıtımyazısı').click(function(){
        $('#btn-save-tanıtımyazısı').val("add");
        $('#frmTanıtımYazısı').trigger("reset");
        $('#myModal-tanıtımyazısı').modal('show');
    });

    //delete task and remove it from list
    $('.delete-tanıtımyazısı').click(function(){
        var firma_id = $(this).val();

        $.ajax({

            type: "DELETE",
            url: url + '/' + firma_id,
            success: function (data) {
                console.log(data);

                $("#task" + firma_id).remove(); //task yerine ne yazmam lazım ?? o task html adı???
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    //create new task / update existing task
    $("#btn-save-tanıtımyazısı").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
               
            }
        });

        e.preventDefault(); 

        var formData = {
            tanıtım_yazısı: $('#tanıtım_yazısı').val(),
            
           
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save-tanıtımyazısı').val();

        var type = "POST"; //for creating new resource
        var firma_id = $('#firma_id').val();
        var my_url = url;

        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + firma_id;
        }

        console.log(formData);

        $.ajax({

            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);

               
                $('#frmTanıtımYazısı').trigger("reset");

                $('#myModal-tanıtımyazısı').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});