 
@extends("theme.$theme.layout")
@section('titulo')
Books
@endsection
@section("scripts")
<script src="{{asset("assets/pages/scripts/productos/index.js")}}" type="text/javascript"></script>
   <script src="{{asset("js/app.js")}}"></script>
 

<script src="{{asset("assets/$theme/plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
@endsection

@section('contenido')

<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')

         <form action="{{route('create_book')}}" id="form-general" class="form-horizontal form--label-right" method="POST" autocomplete="off">
           @csrf
            <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">List of Books</h3>
                <div class="card-tools">
                   
                </div>
            </div>
            <div class="card-body ">
                   <div class="form-group row">
    <label for="dpto_nombre" class="col-lg-3 col-form-label requerido">Name 1</label>
    <div class="col-lg-8">
    <input type="text" name="name1" id="name1" class="form-control" value="{{old('name1', $data->name1 ?? '')}}" required/>
    </div>
  
</div>
<div class="form-group row">
    <label for="dpto_nombre" class="col-lg-3 col-form-label requerido">NAME 2</label>
    <div class="col-lg-8">
    <input type="text" name="name2" id="name2" class="form-control" value="{{old('name2', $data->name2 ?? '')}}" required/>
    </div>
  
</div>
<div class="form-group row">
    <label for="dpto_nombre" class="col-lg-3 col-form-label requerido">NAME 3</label>
    <div class="col-lg-8">
    <input type="text" name="name3" id="name3" class="form-control" value="{{old('name3', $data->name3 ?? '')}}" required/>
    </div>
  
</div>
<div class="form-group row">
    <label for="dpto_nombre" class="col-lg-3 col-form-label requerido">NAME 4</label>
    <div class="col-lg-8">
    <input type="text" name="name4" id="name4" class="form-control" value="{{old('name4', $data->name4 ?? '')}}" required/>
    </div>
  
</div>
<div class="form-group row">
    <label for="dpto_nombre" class="col-lg-3 col-form-label requerido">NAME 5</label>
    <div class="col-lg-8">
    <input type="text" name="name5" id="name5" class="form-control" value="{{old('name5', $data->name5 ?? '')}}" required/>
    </div>
  
</div>
</div>
 <button type="submit" class="button btn-default" class="btn btn-outline-secondary btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i>Add new book
 </button>
 
</form>
 
        </div>
    </div>

             <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                             
                            <th>Name</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    @isset($libros)
                        @foreach ($libros as $key=>$value)
                        <tr>
                            <td>{{$value}}</td>
                        </tr>
                        @endforeach
                    @endisset
                    </tbody>
                </table>
</div>
@endsection
 

 
