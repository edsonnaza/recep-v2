<!--<template lang="pug">
    <div class="form-group row">
    <label for="dpto_nombre" class="col-lg-3 col-form-label requerido">Nombre Departamento</label>
    <div class="col-lg-8">
    <input type="text" name="dpto_nombre" id="dpto_nombre" class="form-control" value="{{old('dpto_nombre', $data->dpto_nombre ?? '')}}" required/>
    </div>
  
</div>

<div class="form-group row">
    <label for="glyphicon" class="col-lg-3 col-form-label requerido">Nombre del glyphicon(icono)</label>
    <div class="col-lg-8">
    <input type="text" name="glyphicon" id="glyphicon" class="form-control" value="{{old('glyphicon', $data->glyphicon ?? '')}}" required/>
    </div>

    <div class="col-lg-1">
        <span id="mostrar-icono" class="fa fa-fw {{ old('glyphicon', $data->glyphicon ?? '') }}"></span>
    </div>
  
</div>


<div class="form-group row">
    <label for="orden" class="col-lg-3 col-form-label requerido">Orden</label>
    <div class="col-lg-8">
    <input type="text" name="orden" id="orden" class="form-control" value="{{old('orden', $data->orden ?? '')}}" required/> 
    </div>
  
</div>

<div class="form-group row">
    <label for="orden" class="col-lg-3 col-form-label requerido">Class</label>
    <div class="col-lg-8">
    <input type="text" name="class" id="class" class="form-control" value="{{old('class', $data->class ?? '')}}" required/>
    </div>
  
</div>
 

</template>