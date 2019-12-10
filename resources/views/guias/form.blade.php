<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($guia->nombre) ? $guia->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellido') ? 'has-error' : ''}}">
    <label for="apellido" class="control-label">{{ 'Apellido' }}</label>
    <input class="form-control" name="apellido" type="text" id="apellido" value="{{ isset($guia->apellido) ? $guia->apellido : ''}}" >
    {!! $errors->first('apellido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="control-label">{{ 'Direccion' }}</label>
    <input class="form-control" name="direccion" type="text" id="direccion" value="{{ isset($guia->direccion) ? $guia->direccion : ''}}" >
    {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechaNac') ? 'has-error' : ''}}">
    <label for="fechaNac" class="control-label">{{ 'Fechanac' }}</label>
    <input class="form-control" name="fechaNac" type="date" id="fechaNac" value="{{ isset($guia->fechaNac) ? $guia->fechaNac : ''}}" >
    {!! $errors->first('fechaNac', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('redesSociales') ? 'has-error' : ''}}">
    <label for="redesSociales" class="control-label">{{ 'Redessociales' }}</label>
    <input class="form-control" name="redesSociales" type="text" id="redesSociales" value="{{ isset($guia->redesSociales) ? $guia->redesSociales : ''}}" >
    {!! $errors->first('redesSociales', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('agencia_id') ? 'has-error' : ''}}">
    <label for="agencia_id" class="control-label">{{ 'Agencia Id' }}</label>
    <input class="form-control" name="agencia_id" type="number" id="agencia_id" value="{{ isset($guia->agencia_id) ? $guia->agencia_id : ''}}" >
    {!! $errors->first('agencia_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
