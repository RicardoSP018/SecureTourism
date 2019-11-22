<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($dispositivo->nombre) ? $dispositivo->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alcance') ? 'has-error' : ''}}">
    <label for="alcance" class="control-label">{{ 'Alcance' }}</label>
    <input class="form-control" name="alcance" type="text" id="alcance" value="{{ isset($dispositivo->alcance) ? $dispositivo->alcance : ''}}" required>
    {!! $errors->first('alcance', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="control-label">{{ 'Estado' }}</label>
    <input class="form-control" name="estado" type="text" id="estado" value="{{ isset($dispositivo->estado) ? $dispositivo->estado : ''}}" required>
    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Imagen') ? 'has-error' : ''}}">
    <label for="Imagen" class="control-label">{{ 'Imagen' }}</label>
    <input class="form-control" name="Imagen" type="file" id="Imagen" value="{{ isset($dispositivo->Imagen) ? $dispositivo->Imagen : ''}}" >
    {!! $errors->first('Imagen', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
