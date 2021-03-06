@extends("theme.$theme.layout")
@section('titulo')
Usuarios
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/$theme/plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Usuarios</h3>
                <div class="card-tools">
                    <a href="{{route('crear_usuario')}}" class="btn btn-outline-secondary btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                    </a>
                </div>
            </div>
            <div class="card-body  ">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="width20">ID</th>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Sede</th>

                            <th class="width80"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                             <td class="text-center"><img src="{{Storage::url("imagenes/usuarios/" . $data->foto)}}" alt="foto del perfil" style="width:50px"></td>
                            <td>{{$data->id}}</td>
                            <td>{{$data->usuario}}</td>
                            <td>{{$data->nombre}}</td>
                            <td>{{$data->email}}</td>
                            <td>
                                @foreach ($data->roles as $rol)
                                    {{$loop->last ? $rol->nombre : $rol->nombre . ', '}}
                                @endforeach
                            </td>
                             <td>
                                @foreach ($sedes as $sede)
                                   @if ($sede->id == $data->sede_id)
                                    {{$sede->nombre_sede}}
 
                                       
                                   @endif
                                


                                @endforeach

                                 
                            </td>

                            <td>
                                <a href="{{route('editar_usuario', ['id' => $data->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{route('eliminar_usuario', ['id' => $data->id])}}" class="d-inline form-eliminar" method="POST">
                                    @csrf @method("delete")
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                        <i class="fa fa-times-circle text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
