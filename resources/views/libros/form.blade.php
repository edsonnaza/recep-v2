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
 
 
 <input type="hidden" name="sede_id" id="sede_id" value={{session()->get('sede_id')}}>