<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo', 'RECEP') | Recepción Inteligente.</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Tell the browser to be responsive to screen width -->
 <!-- CSS -->
      <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">

     <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
     <link rel="stylesheet" href="{{asset("assets/$theme/plugins/select2/css/select2.min.css")}}">
     <link rel="stylesheet" href="{{asset("assets/$theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">

       <!-- DataTables -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
  <link rel="stylesheet" href=""{{asset("assets/$theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}"
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
<link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}">
@section("scripts")

<script src="{{asset("assets/$theme/plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
<script src="{{asset("assets/pages/scripts/recep/recep-alert.js")}}" type="text/javascript"></script>
@endsection




    <style type="text/css">
    ul.ui-autocomplete {
    z-index: 1100;
}
</style>
<style type="text/css">


.modal-fullscreen-xl{
    padding: 0 !important;
}
.modal-dialog-xl {

  width: 100%;
  max-width: none;
  height: 100%;
  margin: 0;
}

.modal-content-xl {
  height: 100%;
  border: 0;
  border-radius: 0;
}

.modal-body-xl {
  overflow-y: auto;
}
.iframePDF-xl{
    height: 100%;
}



:root {
  --main-color: #ecf0f1;
  --point-color: #555;
  --size: 5px;
}

.loader {
  background-color: var(--main-color);
  overflow: hidden;
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0; left: 0;
  display: flex;
  align-items: center;
  align-content: center;
  justify-content: center;
  z-index: 100000;
}

.loader__element {
  border-radius: 100%;
  border: var(--size) solid var(--point-color);
  margin: calc(var(--size)*2);
}

.loader__element:nth-child(1) {
  animation: preloader .6s ease-in-out alternate infinite;
}
.loader__element:nth-child(2) {
  animation: preloader .6s ease-in-out alternate .2s infinite;
}

.loader__element:nth-child(3) {
  animation: preloader .6s ease-in-out alternate .4s infinite;
}

@keyframes preloader {
  100% { transform: scale(2); }
}
</style>


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
 <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    <h6 class="page-header">NOVARA SA - VISITAS EN RECEPCIÓN </h6>
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

<div class="content-wrapper mb-2" >
            <!-- Content Header (Page header) -->


<br>

<section class="content"  >





<div class="row">

<div class="col-md-12 justify-center ">
        @foreach($recepEspera as $recep)
        @php
            $recepobj= new \app\Repositories\RecepClass();
            $time= $recepobj->waitTime($recep->created_at);

        @endphp

        @if($time<10)



                  <input type="hidden"  id="nv" value="{{$recep->nombre_visitante}}" >
                  <input type="hidden"  id="ne" value="{{$recep->empresa_origen}}" >
                  <input type="hidden"  id="comentario_visitante" value="{{$recep->comentario_visitante}}" >
            <div class="col-sm-12"  >

                <div class="small-box bg-danger text-center animate__animated animate__headShake animate__infinite	infinite " >

                    <div class="inner">
                        <h1 class="animate__animated animate__headShake animate__repeat-5">{{$recep->nombre_visitante}}</h1>
                        <p > {{$recep->comentario_visitante}}</p>
                        <i class="fa fa-building"></i> Empresa: <strong> {{$recep->empresa_origen}}  </strong>
                        <p><i class="fa fa-clock"></i> Tiempo en espera:
                        <span  class="pull-right text-description small">
                        {{ \Carbon\Carbon::parse($recep->created_at)->diffForHumans();}}. </span></p>
                        </div>
                            <input type="hidden" id="waittime" value=" {{ \Carbon\Carbon::parse($recep->created_at)->diffForHumans();}}">
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                        <a href="#" class="small-box-footer">
                        Atender <i class="fas fa-arrow-circle-right"></i>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                 let timerInterval
                        Swal.fire({
                        title: '<strong> <h1 style="color:white !important; font-size:50;" class="animate__animated animate__headShake animate__infinite infinite">'+ document.getElementById('nv').value+'</h1></strong> <br> <em><h4 style="color:white">'+ document.getElementById('comentario_visitante').value+ "</h4> </em>",
                        html: '<h2 style="color:white"><i class="fa fa-building"></i> Empresa: ' + document.getElementById('ne').value + '</h2>',
                        footer: '<h3 style="color:white"><span  class="pull-right text-description small"><i class="fa fa-clock"></i>'+ ' '+ document.getElementById('waittime').value + '</span></h3>',
                        position: 'center',
                        grow:'fullscreen',
                        icon: "info",
                        background: 'red',
                        timer: 10000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                        }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                        })
            </script>
        @endif


        @endforeach
                     <div class="col-md-12">
                       <div class="card card-outline card-warning">
                        <div class="card-header">
                        <h3 class="card-title">VISTAS RECIENTES EN RECEPCIÓN</h3>
                        </div>

                        <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                        <th>ID</th>
                        <th>VISITA</th>
                        <th>EMPRESA</th>
                        <th>COMENTARIO DEL VISITANTE</th>
                        <th>DEPARTAMENTO</th>
                        <th>SITUACION</th>
                        <th>ACCION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($recepAll as $recepall)
                             @php
                                $situacion=$recepall->situacion;
                             @endphp
                        <tr>
                        <td>{{$recepall->id}}</td>
                        <td><strong>{{$recepall->nombre_visitante}}</strong></td>
                        <td>{{$recepall->empresa_origen}}</td>
                        <td>{{$recepall->comentario_visitante}}</td>
                        <td>{{$recepall->departamentos->dpto_nombre}}</td>
                        <td><strong>
                             <h6 class="animate__animated animate__headShake animate__infinite infinite span span-success">{{$recepall->situacion}}
                            </strong>
                             </h6>


                            @if ($situacion=='EN ESPERA')
                                 <span class="badge badge-warning">
                               {{\Carbon\Carbon::parse($recepall->created_at)->diffForHumans() }}
                                 </span>
                            @endif



                        </td>

                        <td>

                            @if ($situacion=='ATENDIDOS')
                                <button type="button" class="btn btn-primary" disabled="true">Atender</button>

                            @endif
                            @if ($situacion=='EN ESPERA')
                                 <button type="button" class="btn btn-primary">Atender</button>
                            @endif

                        </td>
                        </tr>
                        @endforeach

                        </tfoot>
                        </table>
                        </div>

                     </div>
        </div>

 <!--Call your modal-->

</div>
</section>

</div>


<!--Inicio Footer -->
        @include("theme/$theme/footer")
        <!-- Fin Footer -->

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
       <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables-buttons/js/dataTables.buttons.min.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("assets/$theme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}"></script>


 <script src="{{asset("assets/$theme/plugins/datatables-buttons/js/buttons.html5.min.js")}}"></script>
 <script src="{{asset("assets/$theme/plugins/datatables-buttons/js/buttons.print.min.js")}}"></script>
 <script src="{{asset("assets/$theme/plugins/datatables-buttons/js/buttons.colVis.min.js")}}"></script>
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

 <script src="{{asset(mix("js/app.js"))}}"></script>

<script src="{{asset("assets/pages/scripts/recep-alert.js")}}" type="text/javascript"></script>


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

     <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
          "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
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
    } ,
    }) ;
  });
</script>
<script>
  $("#demo01").animatedModal();


</script>

 <script type="text/javascript">
        setTimeout(function () {

            // Adding the class dynamically
           location.reload();
        }, 10000);
    </script>
</body>

</html>
