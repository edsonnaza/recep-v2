 
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NOVARA S.A</title>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  .ui-autocomplete-loading {
    background: white url("images/ui-anim_basic_16x16.gif") right center no-repeat;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">

     <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">

     
       <!-- DataTables -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
  <link rel="stylesheet" href=""{{asset("assets/$theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

 



     <script type="text/javascript">
        $(function() {
          $("#nombre_visitante").autocomplete({
            source: "nombre_visitante.php",
            minLength: 2,
            select: function(event, ui) {
              event.preventDefault();
               //     $('#nrodoc').val(ui.item.nrodoc);
        //  $('#nombrepaciente').val(ui.item.nombrepaciente);
         // $('#apellidopaciente').val(ui.item.apellidopaciente);
         // $('#paciente').val(ui.item.paciente);
          $('#id_visitante').val(ui.item.id_visitante);
          $('#nombre_visitante').val(ui.item.nombre_visitante);
           $('#empresa').val(ui.item.empresa);


         // $('#id').val(ui.item.iddet);
        }



      });

     
        });
      </script>



          <script type="text/javascript">
        $(function() {
          $("#empresa").autocomplete({
            source: "empresas.php",
            minLength: 2,
            select: function(event, ui) {
              event.preventDefault();
               //     $('#nrodoc').val(ui.item.nrodoc);
        //  $('#nombrepaciente').val(ui.item.nombrepaciente);
         // $('#apellidopaciente').val(ui.item.apellidopaciente);
         // $('#paciente').val(ui.item.paciente);
         // $('#id_visitante').val(ui.item.id_visitante);
        //  $('#nombre_visitante').val(ui.item.nombre_visitante);
           $('#empresa').val(ui.item.empresa);


         // $('#id').val(ui.item.iddet);
        }



      });

     
        });
      </script>

<style type="text/css">
    ul.ui-autocomplete {
    z-index: 1100;
}
</style>


<script type="text/javascript">
   

   function Motivo(id_motivo) {
       // body...

       // creamos un variable que hace referencia al select
    var select=document.getElementById("id_motivo");
 
    // obtenemos el valor a buscar
    var buscar=id_motivo;
    //alert(buscar);
 
    // recorremos todos los valores del select
    for(var i=1;i<select.length;i++)
    {
        if(select.options[i].value==buscar)
        {
            // seleccionamos el valor que coincide
            select.selectedIndex=i;

        }
    }

    document.getElementById('motivo').value=((select.options[select.selectedIndex].text));
   }

</script>


<script type="text/javascript">
   

   function Colaborador(id_colaborador) {
       // body...

       // creamos un variable que hace referencia al select
    var select=document.getElementById("id_colaborador");
 
    // obtenemos el valor a buscar
    var buscar=id_colaborador;
    //alert(buscar);
 
    // recorremos todos los valores del select
    for(var i=1;i<select.length;i++)
    {
        if(select.options[i].value==buscar)
        {
            // seleccionamos el valor que coincide
            select.selectedIndex=i;

        }
    }

    document.getElementById('colaborador').value=((select.options[select.selectedIndex].text));
   }

</script>

<script>
function BuscarColaborador(id_dpto) {
  //if (document.getElementById('buscarinternado').value=="") {
   // alert( )
   // document.getElementById("avisoquitar").innerHTML="<div class='alert alert-warning'><strong>Atención! </strong>No se encuentra el numero de apertura, falvor vuelta a intentarlo!</div>";
  // return;
 // } 
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
               document.getElementById("colaborador_nombre").innerHTML=this.responseText;  
               // document.getElementById("avisoquitar").innerHTML="<div class='alert alert-success'><strong>Aviso! </strong>Item eliminado con éxito!!</div>";  
                document.getElementById('cargando').style.display = 'none';   
               //document.getElementById("ttcompras").click();
                //datoscotizacionactual();
                  // cantidaditemcargado();
               //    porcentajebar();
           //  descuentogral();
    } 

    if(this.readyState <= 3) 
      { 
          document.getElementById('cargando').style.display = 'block';   
      } 
  }
  xmlhttp.open("GET","buscar_colaborador.php?id_dpto="+id_dpto+"&accion=buscarcolaborador",true);
  xmlhttp.send();
}
</script> 





<script>
function RegistrarRecep(id_dpto,nombre_visitante,empresa,id_motivo,id_colaborador,comentario_visitante,id_visitante,motivo,colaborador ) {
  if (id_dpto=="" || nombre_visitante=="" || empresa==""   ) {
    
       
    document.getElementById("aviso").innerHTML="<span class='label-danger'><strong>Atencion:</strong> Nombre del visitante y Empresa, son campos obligatorios, favor intente nuevamente!</span>";

   
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
        // document.getElementById('cargando').style.display = 'block';   
      } 
  }
  xmlhttp.open("GET","insertar_recepcion.php?id_dpto="+id_dpto+"&nombre_visitante="+nombre_visitante+"&empresa="+empresa+"&id_motivo="+id_motivo+"&id_colaborador="+id_colaborador+"&comentario_visitante="+comentario_visitante+"&id_visitante="+id_visitante+"&motivo="+motivo+"&colaborador="+colaborador+"&accion=GuardarNuevo",true);
  xmlhttp.send();
}

 </script>


 <style type="text/css">
  .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('cargando.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
    display:none;
}
</style>

<script type="text/javascript">
var t=false; 
function contar(){ 
if(t)clearTimeout(t); 
s=arguments[0] || 0; 
if(s>600)recargarpagina(); 
s++; 
t=setTimeout("contar("+s+")",1000); 
} 
window.onload=document.onmousemove=contar; 
</script> 


<script type="text/javascript">
function recargarpagina() {
  // body...
  //alert("Atencion: El sistema reiniciará la página por inactividad!");
  window.parent.location.reload();


}
</script>
</head>

<body >

   <div   class="container">

          <div id="cargando"   ></div>

        <!-- Navigation -->
        

 
                                   

        
             
                <div class="col-lg-12">
                    <h3 class="page-header">DEPARTAMENTOS DISPONIBLES <br> <small> - Recepción Inteligente -</small> </h3> 
                </div>
        <div class="row">

       @foreach($datas as $data)
 
        
                    <div class="col-md-4">
                      
                    <div  class="card">
                        <div class="card-body card-primary">
                            <div class="row"   href="#"     data-target='#LlamarDpto'  title="Solicitar atención en la recepción" data-id="{{ $data->id_dpto }}" data-name="{{$data->dpto_nombre}}" data-toggle='modal' >
                               
                                  <img  class="rounded float-left" > {!! $data->icon !!}  </img>
                                
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$data->orden}}</div>
                                    <div>{{$data->dpto_nombre }}</div>
                                </div>
                            </div>
                        </div>
                        
                     
                            <a   data-target='#LlamarDpto' data-toggle='modal' href="LlamarDpto=?iddpto_seleccionado={{ $data->id_dpto }}"   title="Solicitar atención en la recepción" data-id="{{$data->id_dpto }}" data-name="{{$data->dpto_nombre}}" >
                            <div class="card-footer">
                                <span class="pull-left">Solicitar Atención</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>

                                
                            </div>
                            </a>
                    </div>
                    </div>
                    
                           
   @endforeach          
                 
            </div>

            <!-- /.row -->
         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                 
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                    
                        <!-- /.panel-heading -->
                        
                        <!-- /.panel-body -->
                         
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            
            <!-- /.row -->
</div>
        </div>
        <!-- /#page-wrapper -->




 <div id="LlamarDpto" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Solicitar atención en recepción</h4> 
      </div>
      <div class="modal-body">
        <div class="form-group  ">
         <div id="aviso"></div>

       </div>
       <div class="row">

        <input type="hidden" id="id_visitante">

              <div class="col-md-12">
                        <div class="form-group  ">
                        <label class="label-control" for="id_dpto">Departamento seleccionado:</label>
                        <select class="form-control" onchange=" BuscarColaborador(document.getElementById('id_dpto').value);document.getElementById('aviso').innerHTML='';document.getElementById('btnguardarPNModalModificar').disabled=false;"  id="id_dpto"        >

                            <option value="">-Selecciona Departamento-</option>
                                 @foreach($datas as $dptos)
                              <option>
                                value="{{$dptos->id}}"
                                
                                {{$dptos->dpto_nombre}}
                                </option>
                            @endforeach
                             </select>

                         </div>

                     </div>

                     

                              
                     <div class="ui-widget">

                               <div class="col-md-6"> 
                                 <div class="form-group">

                                  <label for="nombre_visitante">Nombre del visitante:</label>
                                  <input type="text" class="form-control"   onclick="select(); document.getElementById('btnguardarPN').disabled=false;" placeholder="Ejemplo: Pepe Gómez"    onkeyup="javascript:this.value=this.value.toUpperCase();"  id="nombre_visitante">


                                </div>

                              </div>
                          </div>

                            <div class="ui-widget">

                               <div class="col-md-6"> 
                                 <div class="form-group">

                                  <label for="nombre_moneda">Origen/Empresa:</label>
                                  <input type="text" class="form-control"   onclick="select(); document.getElementById('btnguardarPN').disabled=false;" placeholder="EJ.: PRODUCTOR AGRICOLA"   onkeyup="javascript:this.value=this.value.toUpperCase();"  id="empresa">
                                </div>

                              </div>
                          </div>

                          <input type="hidden" id="motivo">
                          <input type="hidden" id="id_motivo">

        
                        <input type="hidden" id="colaborador">
                         <input type="hidden" id="id_colaborador">
                        
                        

                     
                       <div class="col-md-12">  

                        <div class="form-group">
                          <label for="descripcion">Comentario del visitante <small>(opcional)</small>:</label>
                          <input type="text" class="form-control"   onclick="select(); document.getElementById('btnguardarPN').disabled=false;" value="" placeholder="Descripcion de la visita." onkeyup="javascript:this.value=this.value.toUpperCase();" id="comentario_visitante">
                        </div>
                      </div>


             


                    </div>


 
                  </div>

                  <div class="modal-footer">
                   <button type="button" class="btn btn-primary" id="btnguardarPN" onclick="RegistrarRecep(document.getElementById('id_dpto').value,document.getElementById('nombre_visitante').value,document.getElementById('empresa').value,document.getElementById('id_motivo').value=5,document.getElementById('id_colaborador').value,document.getElementById('comentario_visitante').value,document.getElementById('id_visitante').value,document.getElementById('motivo').value='OTROS',document.getElementById('colaborador').value);this.disabled=true;" >Guardar</button>

                   <a type="button" class="btn btn-default" href="index.php"    >Cerrar</a>
                 </div>

               </div>

             </div>
           </div>

    </div>
    <!-- /#wrapper -->

   
 

 

 

    <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
    <!-- AdminLTE for demo purposes -->
    @yield("scriptsPlugins")
    <script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset("assets/js/scripts.js")}}"></script>
    <script src="{{asset("assets/js/funciones.js")}}"></script>

   <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true,
           "language":{ 
    "decimal":        "",
    "emptyTable":     "Sin datos",
    "info":           "Mostrando _START_ hasta _END_ de _TOTAL_ registros",
    "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
    "infoFiltered":   "(filtrado desde _MAX_ total registros)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "Muestra _MENU_ registros",
    "loadingRecords": "Cargando...",
    "processing":     "Procesando...",
    "search":         "Buscar:",
    "zeroRecords":    "Registro no encontrado",
    "paginate": {
        "first":      "Primero",
        "last":       "Ultimo",
        "next":       "Siguiente",
        "previous":   "Previo"
    } 
    } 



        });
    });


  
    </script>

     <script>  


        $('#LlamarDpto').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient0 = button.data('id')
        var recipient1 = button.data('name')
        //alert(recipient0)
        //var recipient2 = button.data('tiene_item')
        //var recipient3 = button.data('Imposible eliminar, la ficha aun contiene items, favor eliminar los items primero.')
      //  var recipient4 = button.data('skype')
       // var recipient5 = button.data('correo')
         // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
       
        var modal = $(this)    
       // modal.find('.modal-body #iddpto_seleccionado').val(recipient0)
     //   modal.find('.modal-body #dpto_nombre').val(recipient1)
      //  modal.find('.modal-body #mes').val(recipient2)
       // modal.find('.modal-body #importe').val(recipient3)     
        // modal.find('.modal-body #skype').val(recipient4) 
        //  modal.find('.modal-body #correo').val(recipient5) 

// creamos un variable que hace referencia al select
    var select=document.getElementById("id_dpto");
 
    // obtenemos el valor a buscar
    var buscar=recipient1;
   // alert(buscar);
 
    // recorremos todos los valores del select
    for(var i=1;i<select.length;i++)
    {
        if(select.options[i].text==buscar)
        {
            // seleccionamos el valor que coincide
            select.selectedIndex=i;

        }
    }

    BuscarColaborador(select.selectedIndex);

    select.disabled=true;


      });
      
    </script>

</body>

</html>
