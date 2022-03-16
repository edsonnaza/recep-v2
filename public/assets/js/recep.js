 

 

function createPost() {
    
//alert('crea');
          var id_visitante = $("#id_visitante").val();
          var empresa_origen = $("#empresa").val();
          var id_dpto = $("#id_dpto").val();
          var comentario_visitante = $("#comentario_visitante").val();
          var nombre_visitante = $('#nombre_visitante').val();
          var id_colaborador = 1;//$('#nombre_visitante').val();
          var motivo = 'Otros'; //$('#nombre_visitante').val();
          var id_motivo = 6;
          var colaborador = 'Default';
          var sede_id=$('#sede_id').val();
          var nombre_colaborador='Default';
            var id_colaborador_atencion = 1;
         
          var comentario_colaborador='Default';

         let _url     = `/recepguardar`;
         let _token   = $('meta[name="csrf-token"]').attr('content');



if (id_dpto=="" || nombre_visitante=="" || empresa_origen==""   ) {
    
       
    document.getElementById("aviso").innerHTML="<div class='alert alert-warning alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><h5><i class='icon fas fa-exclamation-triangle'></i> Atención!</h5><small> Nombre del visitante y Empresa, son campos obligatorios, favor intente nuevamente!</small></div>";

   
 
    return;
  } 

      $.ajax({
        url: _url,
        type: "POST",
        data: {
              id_visitante:id_visitante,
              empresa_origen:empresa_origen,
              id_dpto:id_dpto,
              comentario_visitante:comentario_visitante,
              nombre_visitante:nombre_visitante,
              id_colaborador:id_colaborador,
              motivo:motivo,
              id_motivo: id_motivo,
              colaborador:colaborador,
              sede_id:sede_id,
              nombre_colaborador:nombre_colaborador,
              comentario_colaborador:comentario_colaborador,
              nombre_colaborador:nombre_colaborador,
              id_colaborador_atencion:id_colaborador_atencion,
              _token: _token
        },
             beforeSend:function(){
          $('#btn-create').addClass("disabled").html("Procesando...").attr('disabled',true);
        $(document).find('span.error-text').text('');
                },
                complete: function exitoConfirmado(data){
                    //alert(data.status);
                    if(data.status==400){  
                              $('#btn-create').removeClass("disabled").html("Guardar").attr('disabled',false);
                            return; 
                    } else {
                                $('#btn-create').removeClass("disabled").html("Éxito!").attr('disabled',true);
                                $('#btn-salir').removeClass("disabled").html("Salir").attr('disabled',false);
                    }       
                },
        success: function(response) {
            if(response.code == 200) {
             
              $('#aviso').val('');
                    // $("#iexclamation").addClass("icon fas fa-exclamation-triangle");
                    $("#aviso").addClass("alert alert-success") ;
                    $("#message").text(response.message);
                    //$(document).find('span.error-text').text(response.message);
                   // $("#message").text(response.message);
                    Biblioteca.notificaciones('Solicitud registrado con éxito, en breve sera atendido por un representante, favor tome asiento!', 'Recep', 'success');             
                    //$('#SolicitarAtencion').modal('hide');
            }
        },
        error: function(data) {
            // $('#aviso').text(response.responseJSON.errors.title);
         // $('#aviso').text(response.responseJSON.errors.description);
        // console.log(response.message);
         //alert(data.responseText);
            //res=data.getResponseHeader;
let i;
var res="";
for (i = 0; i < data.responseText.length; i++ ) {
  res+= data.responseText[i];
 
}
    var re="/[:{]s/";
     res=res.replace(re," ");
    /* var re= "}";
     res=res.replace(re," ");
        var re= "[";
     res=res.replace(re," ");
      var re= "]";
     res=res.replace(re," ");
 var re= '"';
     res=res.replace(re," ");
 var re= /"/;
     res=res.replace(re," ");*/


       // const obj = Object.assign({}, data.responseText);
          //      console.log(obj);
                              
             $("#aviso").addClass("alert alert-warning") ;
             $("#message").text(res);


                
         console.log('Error:', data.responseText);
                
          //  alert(data.status);
                 $('#btn-create').removeClass("disabled").html("Guardar").attr('disabled',false);
                 $('#btn-salir').removeClass("disabled").html("Cancelar").attr('disabled',false);
        }
      });
  }  


  function limpiarCampos() {
       // clear fields from the popup
        $("#id_visitante").val("");
        $("#nombre_visitante").val("");
        $("#empresa").val("");
        $("#comentario_visitante").val("");
        $('#btn-create').removeClass("disabled").html("Guardar").attr('disabled',false);
        
  }
/*$(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });  
 $('#btn-create').click(function (e) {
        e.preventDefault();
       
        $(this).html('Save');

          var id_visitante = $("#id_visitante").val();
          var empresa_origen = $("#empresa").val();
          var id_dpto = $("#id_dpto").val();
          var comentario_visitante = $("#comentario_visitante").val();
          var nombre_visitante = $('#nombre_visitante').val();
          var id_colaborador = 1;//$('#nombre_visitante').val();
          var motivo = 'Otros'; //$('#nombre_visitante').val();
          var id_motivo = 6;
          var colaborador = 'Default';
    
        $.ajax({
          data: $('#SolicitarAtencion').serialize(),
          url: "{{ route('recepguardar') }}",
          type: "POST",
          dataType: 'json',
          success: function (response) {
            if(response.code == 200) {

                    alert('dispara');

                     // $('#bookForm').trigger("reset");
             // $('#ajaxModel').modal('hide');
              //table.draw();
           
              //  console.log(map(data));
          $('#btn-create').html('Save Changes');

                }

            
          },
          error: function (data) {
              console.log('Error:', data);
              $('#btn-create').html('Save Changes');
          }
      });
    }); 
  }); */



/*  // Add Record
function addRecord() {
    // get values
          var id_visitante = $("#id_visitante").val();
          var empresa_origen = $("#empresa").val();
          var id_dpto = $("#id_dpto").val();
          var comentario_visitante = $("#comentario_visitante").val();
          var nombre_visitante = $('#nombre_visitante').val();
          var id_colaborador = 1;//$('#nombre_visitante').val();
          var motivo = 'Otros'; //$('#nombre_visitante').val();
          var id_motivo = 6;
          var colaborador = 'Default';
        
          $("#btn-save").html('Please Wait...');
          $("#btn-save"). attr("disabled", true);

    var url= "{{route('recepguardar')}}";
    // Add record
    $.post(url, {
              id_visitante:id_visitante,
              empresa_origen:empresa_origen,
              id_dpto:id_dpto,
              comentario_visitante:comentario_visitante,
              nombre_visitante:nombre_visitante,
              id_colaborador:id_colaborador,
              motivo:motivo,
              id_motivo: id_motivo,
              colaborador:colaborador,
             _token: CSRF_TOKEN, 
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
      // readRecords();

        // clear fields from the popup
        $("#idalumno").val("");
        $("#codalumno").val("");
        $("#codmatri").val("");
        $("#obs").val("");
    });
}
*/

       
// Selecciona en el modal el departamento solcitado en la atencion por el cliente.

 $('#SolicitarAtencion').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient0 = button.data('id')
        var recipient1 = button.data('name')
            
        var modal = $(this)    
    
        // creamos un variable que hace referencia al select
        var select=document.getElementById("id_dpto");
 
        // obtenemos el valor a buscar
        var buscar=recipient1;
      
        
            // recorremos todos los valores del select
            for(var i=1;i<select.length;i++)
            {
                if(select.options[i].text==buscar)
                {
                    // seleccionamos el valor que coincide
                    select.selectedIndex=i;

                }
            }

    //BuscarColaborador(select.selectedIndex);

    select.disabled=true;


});

/*
 

function RegistrarRecep(id_dpto,nombre_visitante,empresa,id_motivo,id_colaborador,comentario_visitante,id_visitante,motivo,colaborador ) {
  if (id_dpto=="" || nombre_visitante=="" || empresa==""   ) {
    
       
    document.getElementById("aviso").innerHTML="<div class='alert alert-warning alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><h5><i class='icon fas fa-exclamation-triangle'></i> Atención!</h5><small> Nombre del visitante y Empresa, son campos obligatorios, favor intente nuevamente!</small></div>";

   
 
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      //document.getElementById("datosruc").innerHTML=this.responseText;      
             //idcliente=document.getElementById("hc").value;
              //document.getElementById("rucfactura").value= document.getElementById("rucf").value;   
              //  ;    
          document.getElementById("aviso").innerHTML=this.responseText;  
          document.getElementById('cargando').style.display = 'none';  
          //document.getElementById('paciente').value=document.getElementById('nombrepacientenuevo').value+' '+document.getElementById('apellidopacientenuevo').value;

                document.getElementById('btnguardarPN').style.visibility='hidden'; 

                //document.getElementById("ttcompras").click();
                //datoscotizacionactual();
                 //  cantidaditemcargado();
               //    porcentajebar();
             //descuentogral();
            
            
    } 

    if(this.readyState <= 3) 
      { 
         document.getElementById('cargando').style.display = 'block';   
      } 
  }
  xmlhttp.open("POST","recep/?id_dpto="+id_dpto+"&nombre_visitante="+nombre_visitante+"&empresa="+empresa+"&id_motivo="+id_motivo+"&id_colaborador="+id_colaborador+"&comentario_visitante="+comentario_visitante+"&id_visitante="+id_visitante+"&motivo="+motivo+"&colaborador="+colaborador+"&accion=GuardarNuevo",true);
  xmlhttp.send();
}



$(document).ready(function() {    
    $('guardar').on('click', function(){
//alert('Guardar');
        //Añadimos la imagen de carga en el contenedor
        $('#aviso').html('<div class="loading"><img src="images/loader.gif" alt="loading" /><br/>Un momento, por favor...</div>');
 
        $.ajax({
            type: "POST",
            url: "{{ url('recep') }}",
            success: function(data) {
                //Cargamos finalmente el contenido deseado
                $('#content').fadeIn(1000).html(data);
            }
        });
        return false;
    });              
});   

*/

const baseUrl = 'http://127.0.0.1:8000';
/*$(document).ready(function($){
 $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

$('body').on('click', '#btn-save', function (event) {
          var id_visitante = $("#id_visitante").val();
          var empresa_origen = $("#empresa").val();
          var id_dpto = $("#id_dpto").val();
          var comentario_visitante = $("#comentario_visitante").val();
          var nombre_visitante = $('#nombre_visitante').val();
          var id_colaborador = 1;//$('#nombre_visitante').val();
          var motivo = 'Otros'; //$('#nombre_visitante').val();
          var id_motivo = 6;
          var colaborador = 'Default';
        
          $("#btn-save").html('Please Wait...');
          $("#btn-save"). attr("disabled", true);
         
        // ajax
        $.ajax({
            type:"POST",
           url: "{{ route('/recepguardar') }}",
            data: {
              id_visitante:id_visitante,
              empresa_origen:empresa_origen,
              id_dpto:id_dpto,
              comentario_visitante:comentario_visitante,
              nombre_visitante:nombre_visitante,
              id_colaborador:id_colaborador,
              motivo:motivo,
              id_motivo: id_motivo,
              colaborador:colaborador,
            },
            dataType: 'json',
            success: function(res,err){
             //window.location.reload();
            $("#btn-save").html('Submit');
            $("#btn-save"). attr("disabled", false);

                 var jsonData = JSON.parse(response);

                if (jsonData.success == "OK")
                {
                    //location.href = 'my_profile.php';
                        alert('OK');
                }
                else
                {
                    alert('Invalid Credentials!');
                }
           },
            error: function (xhr, textStatus, errorMessage,data) {

                console.log("ERROR" + errorMessage + textStatus + xhr);
               alert("ERROR" + errorMessage + textStatus + xhr+data);
                alert('Error:', data);
                  var jsonData = JSON.parse(response);

                if (jsonData.success == "OK")
                {
                    //location.href = 'my_profile.php';
                        alert('OK');
                }
                else
                {
                    alert('Invalid Credentials!');
                }

            }
        });
    });
});
 

/*
// Add Record
function addRecord() {
    // get values
    var idalumno = $("#idalumno").val();
    var codalumno = $("#codalumno").val();
    var codmatri = $("#codmatri").val();
    var obs = $("#obs").val();

    // Add record
    $.post("ajax/addRecord.php", {
        idalumno: idalumno,
        codalumno: codalumno,
        codmatri: codmatri,
		obs: obs
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#idalumno").val("");
        $("#codalumno").val("");
        $("#codmatri").val("");
        $("#obs").val("");
    });
}
*/
/*

$('div#openModal').click(function() {
let url = $(this).data('action');
$('#exampleModal').modal('show');
$('#formData').trigger("reset");
$('#formData').attr('action',url);
 var nombre_visitante = $('#nombre_visitante').val();
})
// Event for created and updated posts
$('#formData').submit(function(e) {
   e.preventDefault();
    let formData = new FormData(this);
      // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
         type: 'POST',
         data : {nombre_visitante: nombre_visitante,
                     _token: CSRF_TOKEN,},
         contentType: false,
          processData: false,
           url:"{{route('/recepguardar')}}",
          beforeSend:function(){
          $('#btn-create').addClass("disabled").html("Processing...").attr('disabled',true);
        $(document).find('span.error-text').text('');
                },
                complete: function(){
                $('#btn-create').removeClass("disabled").html("Save   Change").attr('disabled',false);
                },
                success: function(res){
                console.log(res);
                alert('Guardo');
                if(res.success == true){
                $('#formData').trigger("reset");
                $('#exampleModal').modal('hide');
                showPosts(); // call function show Posts
                Swal.fire(
                'Success!',
                res.message,
                'success'
                )
                }
                },
                error(err,data){
                $.each(err.responseJSON,function(prefix,val) {
                $('.'+prefix+'_error').text(val[0]);
                })
                console.log(err);
                alert(err);
                alert(data);
                }
                })
                })

*/

  
   $(document).ready(function() {
    $("#tabla-data").on('submit', '.form-eliminar', function() {
        event.preventDefault();
        const form = $(this);
        swal({
            title: '¿ Está seguro que desea eliminar el registro ?',
            text: "Esta acción no se puede deshacer!",
            icon: 'warning',
            buttons: {
                cancel: "Cancelar",
                confirm: "Aceptar"
            },
        }).then((value) => {
            if (value) {
                ajaxRequest(form);
            }
        });
    });

    function ajaxRequest(form) {
        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            success: function(respuesta) {
                if (respuesta.mensaje == "ok") {
                    form.parents('tr').remove();
                    Biblioteca.notificaciones('El registro fue eliminado correctamente', 'Aranto', 'success');
                } else {
                    Biblioteca.notificaciones('El registro no pudo ser eliminado, hay recursos usandolo', 'Aranto', 'error');
                }
            },
            error: function() {

            }
        });
    }
});