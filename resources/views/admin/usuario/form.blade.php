 
<div class="form-group row">
    <label for="nombre" class="col-lg-3 col-form-label requerido">Nombre completo</label>
    <div class="col-lg-8">
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="usuario" class="col-lg-3 col-form-label requerido">Login del usuario</label>
    <div class="col-lg-8">
        <input type="text" name="usuario" id="usuario" class="form-control" value="{{old('usuario', $data->usuario ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-lg-3 col-form-label requerido">E-Mail</label>
    <div class="col-lg-8">
        <input type="email" name="email" id="email" class="form-control" value="{{old('email', $data->email ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="password" class="col-lg-3 col-form-label {{!isset($data) ? 'requerido' : ''}}">Contraseña</label>
    <div class="col-lg-8">
        <input type="password" name="password" id="password" class="form-control" value="" {{!isset($data) ? 'required' : ''}} minlength="5"/>
    </div>
</div>
<div class="form-group row">
    <label for="re_password" class="col-lg-3 col-form-label {{!isset($data) ? 'requerido' : ''}}">Repita Contraseña</label>
    <div class="col-lg-8">
        <input type="password" name="re_password" id="re_password" class="form-control" value="" {{!isset($data) ? 'required' : ''}} minlength="5"/>
    </div>
</div>
<div class="form-group row">
    <label for="rol_id" class="col-lg-3 col-form-label requerido">Rol</label>
    <div class="col-lg-8">
        <select name="rol_id[]" id="rol_id" class="form-control" multiple required>
            <option value="">Seleccione el rol</option>
            @foreach($rols as $id => $nombre)
                <option
                value="{{$id}}"
                {{is_array(old('rol_id')) ? (in_array($id, old('rol_id')) ? 'selected' : '')  : (isset($data) ? ($data->roles->firstWhere('id', $id) ? 'selected' : '') : '')}}
                >
                {{$nombre}}
                </option>
            @endforeach
        </select>
    </div>
</div>
 <div class="form-group row">
    <label for="rol_id" class="col-lg-3 col-form-label requerido">Sedes</label>
    <div class="col-lg-8">
        <select name="sede_id" id="sede_id" class="form-control"  required>
            <option value="">Seleccione Sede</option>
         @foreach ($sedes as $item)
    <option value="{{ $item->id }}" 
    {{ (isset($data) ? ($item->id == $data->sede_id ? 'selected' : '') : '')   }}> {{ $item->nombre_sede }} </option>
  @endforeach 
        </select>
    </div>
</div>

 <div class="form-group row">
    <label for="rol_id" class="col-lg-3 col-form-label requerido">Persona </label>
    <div class="col-lg-8">
        <select name="id_persona" id="id_persona" class="form-control"  >
            <option value="">Seleccione Persona </option>
         @foreach ($personas as $item)
    <option value="{{ $item->id }}" 
    {{ (isset($data) ? ($item->id == $data->id_persona ? 'selected' : '') : '')   }}> {{ $item->full_name_persona }} </option>
  @endforeach 
        </select>
    </div>
</div>

<div class="form-group row">
     <label for="foto" class="col-lg-3 col-form-label">Foto</label>
     <div class="col-lg-5">
         <div id="results">
             <img id="foto_persona" src="{{isset($data->foto) ? Storage::url("imagenes/usuarios/$data->foto") : "https://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Usuario+Persona"}}" alt="">
         </div>
         <div id="my_camera"></div>
         <br>
         <input type="button" class="btn btn-secondary" value="Acceder a la cámara" onClick="setup(); $(this).hide().next().show();">

         <input type="button" value="Capturar Imagen" onClick="take_snapshot()" style="display:none">
     </div>
     <input  id="prueba"  name="foto_up" type="hidden">
 </div>
