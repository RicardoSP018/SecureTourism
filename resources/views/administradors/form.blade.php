<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($administrador->nombre) ? $administrador->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellido') ? 'has-error' : ''}}">
    <label for="apellido" class="control-label">{{ 'Apellido' }}</label>
    <input class="form-control" name="apellido" type="text" id="apellido" value="{{ isset($administrador->apellido) ? $administrador->apellido : ''}}" >
    {!! $errors->first('apellido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="control-label">{{ 'Direccion' }}</label>
    <input class="form-control" name="direccion" type="text" id="direccion" value="{{ isset($administrador->direccion) ? $administrador->direccion : ''}}" >
    {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechaNac') ? 'has-error' : ''}}">
    <label for="fechaNac" class="control-label">{{ 'Fechanac' }}</label>
    <input class="form-control" name="fechaNac" type="date" id="fechaNac" value="{{ isset($administrador->fechaNac) ? $administrador->fechaNac : ''}}" >
    {!! $errors->first('fechaNac', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control" name="telefono" type="text" id="telefono" value="{{ isset($administrador->telefono) ? $administrador->telefono : ''}}" >
    {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('usuario_id') ? 'has-error' : ''}}">
    <label for="usuario_id" class="control-label">{{ 'Usuario' }}</label>
    <select class="form-control" name="usuario_id">
        @foreach($usuarios as $u)
        <option value="{{ $u->id }}" {{ isset($administradors->usuario_id) && $administradors->usuario_id==$u->id ? 'selected' : ''}}>            
            {{$u->username}}
        </option>
        @endforeach
    </select>
    
    {!! $errors->first('usuario_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
