<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ isset($proveedore->Nombre) ? $proveedore->Nombre : ''}}" >
    {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Correo') ? 'has-error' : ''}}">
    <label for="Correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="Correo" type="email" id="Correo" value="{{ isset($proveedore->Correo) ? $proveedore->Correo : ''}}" required>
    {!! $errors->first('Correo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Direccion') ? 'has-error' : ''}}">
    <label for="Direccion" class="control-label">{{ 'Direccion' }}</label>
    <input class="form-control" name="Direccion" type="text" id="Direccion" value="{{ isset($proveedore->Direccion) ? $proveedore->Direccion : ''}}" >
    {!! $errors->first('Direccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Telefono') ? 'has-error' : ''}}">
    <label for="Telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control" name="Telefono" type="text" id="Telefono" value="{{ isset($proveedore->Telefono) ? $proveedore->Telefono : ''}}" >
    {!! $errors->first('Telefono', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
