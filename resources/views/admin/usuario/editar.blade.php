@extends("theme.$theme.layout")
@section('titulo')
    Usuarios
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/usuario/crear.js")}}" type="text/javascript"></script>
{{-- <script src="//code.jquery.com/jquery-2.1.4.min.js"></script> --}}
<script src="{{asset("assets/js/webcam.min.js")}}" type="text/javascript"></script>
<script language="JavaScript">
    Webcam.set({
        width: 320,
        height: 240,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
</script>
<script language="JavaScript">
        function setup() {
        Webcam.reset();
        Webcam.attach('#my_camera');
    }

    function take_snapshot() {
        // take snapshot and get image data
        Webcam.snap(function(data_uri) {
            // display results in page
            document.getElementById('results').innerHTML = '<img id="foto_persona"   src="' + data_uri + '"/>';
            document.getElementById('prueba').value = data_uri;
        });
    }
</script>
@endsection
@section("styles")
<link href="{{asset("assets/js/bootstrap-fileinput/css/fileinput.min.css")}}" rel="stylesheet" type="text/css"/>
@endsection

@section("scriptsPlugins")
<script src="{{asset("assets/js/bootstrap-fileinput/js/fileinput.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/bootstrap-fileinput/js/locales/es.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/bootstrap-fileinput/themes/fas/theme.min.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Editar Usuario {{$data->nombre}}</h3>
                <div class="card-tools">
                    <a href="{{route('usuario')}}" class="btn btn-outline-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver al listado
                    </a>
                </div>
            </div>
            <form action="{{route('actualizar_usuario', ['id' => $data->id])}}" id="form-general" class="form-horizontal form--label-right" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf @method("put")
                <div class="card-body">
                    @include('admin.usuario.form')
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            @include('includes.boton-form-editar')
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
