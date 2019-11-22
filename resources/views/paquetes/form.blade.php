<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($paquete->nombre) ? $paquete->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ isset($paquete->descripcion) ? $paquete->descripcion : ''}}" >
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('contenido') ? 'has-error' : ''}}">
    <label for="contenido" class="control-label">{{ 'Contenido' }}</label>
    <input class="form-control" name="contenido" type="text" id="contenido" value="{{ isset($paquete->contenido) ? $paquete->contenido : ''}}" >
    {!! $errors->first('contenido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('duracion') ? 'has-error' : ''}}">
    <label for="duracion" class="control-label">{{ 'Duracion' }}</label>
    <input class="form-control" name="duracion" type="text" id="duracion" value="{{ isset($paquete->duracion) ? $paquete->duracion : ''}}" >
    {!! $errors->first('duracion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('imagen') ? 'has-error' : ''}}">
    <label for="imagen" class="control-label">{{ 'Imagen' }}</label>
    <input class="form-control" name="imagen" type="file" id="imagen" value="{{ isset($paquete->imagen) ? $paquete->imagen : ''}}" >
    {!! $errors->first('imagen', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
