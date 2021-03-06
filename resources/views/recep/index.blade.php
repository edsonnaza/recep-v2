<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo', 'RECEP') | Recepción Inteligente.</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
 <script src="{{asset("js/app.js")}}"></script>
    <!-- Tell the browser to be responsive to screen width -->
 <!-- CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha256-IdfIcUlaMBNtk4Hjt0Y6WMMZyMU0P9PN/pH+DFzKxbI=" crossorigin="anonymous" />

    <!-- Script -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">

  
  
    <style type="text/css">
    ul.ui-autocomplete {
    z-index: 1100;
}
</style>
<style type="text/css">
  .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background:  url("{{ asset('assets/img/cargando.gif') }}") 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
    display:none;
}
</style>
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>

 
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

 
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">

     <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
     <link rel="stylesheet" href="{{asset("assets/$theme/plugins/select2/css/select2.min.css")}}">
     <link rel="stylesheet" href="{{asset("assets/$theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">

       <!-- DataTables -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
  <link rel="stylesheet" href=""{{asset("assets/$theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">

    <!-- AdminLTE Skins. Choose a skin from the css/skins -->
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
 
    @yield("styles")




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">



 
</head>

<body class="control-sidebar-slide-open sidebar-closed sidebar-collapse" >
    <!-- Site wrapper -->
    <div class="content">
        <!-- Inicio Header -->
         <div id="cargando"   ></div>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
  
    <h6 class="page-header">NOVARA SA - DEPARTAMENTOS DISPONIBLES </h6> 
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i> {{session()->get('nombre_usuario', 'Inivitado')}} - {{session()->get('rol_nombre', 'Guest')}}
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                @guest
                    <a href="{{route('login')}}" class="dropdown-item">
                        <i class="fas fa-lock mr-2"></i> Login
                    </a>
                @endguest
                @auth
                    <a href="{{route('logout')}}" class="nav-link">
                        <i class="fas fa-users mr-2"></i> Salir
                    </a>
                @endauth
                <div class="dropdown-divider"></div>
                @if(session()->get("roles") && count(session()->get("roles")) > 1)
                    <a href="#" class="cambiar-rol dropdown-item dropdown-footer">Cambiar Rol</a>
                @endif
            </div>
        </li>
    </ul>
</nav>
        <!-- Fin Header -->
      
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
<div id="app" >
        <recep-card></recep-card>
           </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                     <div class="row">
                        @foreach($datas as $data)
                            <div data-toggle="modal" id="openModal" data-target="#SolicitarAtencion" data-action="{{ route('recepguardar') }}"   data-id="{{$data->id}}" data-name="{{$data->dpto_nombre }}"  class="col-lg-3 col-6">

                            <div class="small-box bg-info">
                            <div class="inner">
                            <h3>{{$data->orden}}</h3>
                            <p>{{$data->dpto_nombre }}</p>
                             <small class="text-warning"> {{$data->descripcion}}</small>   
                            </div>
                            <div class="icon">                           
                                {!! $data->glyphicon !!}
                            </div>
                            
                            <a href="#"   class="small-box-footer">Solicitar atención <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                            </div>
                           @endforeach 
                     </div>   
                </div>
            </section>
        </div>



        <!-- Modal Solicitar Atencion-->
        <div class="modal fade" data-backdrop="static" id="SolicitarAtencion">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Solicitar atención en recepción</h4>
 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button> 
                      
                
                     
                </div>

              <div class="modal-body">
 <div class="form-group">
    
    <div id="aviso" class="" role="alert">
    <h6 id="message"></h6>
</div>
        <form   method="post" id="formData">

        @csrf
             <input type="hidden" id="id_visitante">
                    <div class="form-group  ">
                        <label class="label-control" for="id_dpto">Departamento seleccionado:</label>
                             <select class="form-control" onchange=" BuscarColaborador(document.getElementById('id_dpto').value);document.getElementById('aviso').innerHTML='';document.getElementById('btnguardarPNModalModificar').disabled=false;"  id="id_dpto"        >
                                <option value="">-Selecciona Departamento-</option>
                                    @foreach($datas as $dptos)
                                            <option value="{{$dptos->id}}">                            
                                                 {{$dptos->dpto_nombre}}
                                            </option>
                                    @endforeach
                             </select>
                    </div>

                    <div class="form-group">
                            <label for="nombre_visitante">Nombre del visitante:</label>
                            <input type="text" class="form-control"   onclick="select(); $('.alert').alert('close'); document.getElementById('btn-save').disabled=false; " placeholder="Ejemplo: Pepe Gómez"    onkeyup="javascript:this.value=this.value.toUpperCase();"  id="nombre_visitante">
                    </div>
                    <div class="form-group">
                            <label for="nombre_moneda">Origen/Empresa:</label>
                            <input type="text" class="form-control"   onclick="select();$('.alert').alert('close'); document.getElementById('btn-save').disabled=false;  " placeholder="EJ.: PRODUCTOR AGRICOLA"   onkeyup="javascript:this.value=this.value.toUpperCase();"  id="empresa">
                    </div>
 
                         <input type="hidden" value="Otros" id="motivo">
                         <input type="hidden" value="6" id="id_motivo">        
                        <input type="hidden" value="Default" id="nombre_colaborador">
                        <input type="hidden" value="1" id="id_colaborador">
                        <input type="hidden" value="1" id="id_colaborador_atencion">
                         <input type="hidden" name="sede_id" id="sede_id" value={{session()->get('sede_id')}}>
      
                    <div class="form-group">
                          <label for="descripcion">Comentario del visitante <small>(opcional)</small>:</label>
                          <input type="text" class="form-control"   onclick="select(); document.getElementById('btn-save').disabled=false;" value="" placeholder="Descripcion de la visita." onkeyup="javascript:this.value=this.value.toUpperCase();" id="comentario_visitante">
                    </div>
                      
                    <div class="modal-footer justify-content-between">
                    <button type="button" id="btn-salir" class="btn btn-default" href="index.php" onclick="limpiarCampos();$('.alert').alert('close');")  data-dismiss="modal">Cancelar</button>
                          <button type="button" onclick="createPost();" class="btn btn-primary" id="btn-create">Guardar</button>
                    </div>
             </div>
            </div>
        </div>
</form>
        <!--Inicio Footer -->
      
        <!-- Fin Footer -->
        <!-- Control Sidebar -->
       
        <!-- /.control-sidebar -->
        <!--Inicio de ventana modal para login con más de un rol -->
 
    </div>
   
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
   <script src="{{asset("assets/js/recep.js")}}"></script>
  
     
 
 
 
 
    <!-- Select2 -->
   


   
      
    @yield("scripts")

   <script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#nombre_visitante" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('buscar_personas')}}",
            type: 'get',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
               console.log(data);
            }
          });
        },
        select: function (event, ui) {
           $('#nombre_visitante').val(ui.item.nombre_visitante);
           $('#id_visitante').val(ui.item.value); 
            $('#empresa').val(ui.item.empresa_origen);
           return false;
        }
      });

    });
    </script>
</body>

</html>
