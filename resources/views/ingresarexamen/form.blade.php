<div class="form-group row">
    <label for="nombre_profesion" class="col-lg-3 col-form-label requerido">Nombre</label>
    <div class="col-lg-8">
    <input type="text" name="examen_nombre" id="examen_nombre" class="form-control" value="{{old('examen_nombre', $data->examen_nombre?? '')}}" required/>
    </div>
  
</div>

<div class="form-group row">
    <label for="descripcion" class="col-lg-3 col-form-label requerido">Descripcion</label>
    <div class="col-lg-8">
    <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{old('descripcion', $data->descripcion?? '')}}" required/>
    </div>
  
</div>
 
 <input type="hidden" name="sede_id" id="sede_id" value={{session()->get('sede_id')}}>