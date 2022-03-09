<div class="form-group row">
    <label for="dpto_nombre" class="col-lg-3 col-form-label requerido">Nombre Motivo</label>
    <div class="col-lg-8">
    <input type="text" name="nombre_motivo" id="nombre_motivo" class="form-control" value="{{old('nombre_motivo', $data->nombre_motivo ?? '')}}" required/>
    </div>
  
</div>
 
 
 <input type="hidden" name="sede_id" id="sede_id" value={{session()->get('sede_id')}}>