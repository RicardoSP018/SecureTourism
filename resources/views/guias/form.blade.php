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


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
