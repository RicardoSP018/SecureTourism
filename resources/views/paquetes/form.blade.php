<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ isset($paquete->Nombre) ? $paquete->Nombre : ''}}" required>
    {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
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
<div class="form-group {{ $errors->has('destino') ? 'has-error' : ''}}">
    <label for="destino" class="control-label">{{ 'Destino' }}</label>
    <input class="form-control" name="destino" type="text" id="destino" value="{{ isset($paquete->destino) ? $paquete->destino : ''}}" >
    {!! $errors->first('destino', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="text" id="precio" value="{{ isset($paquete->precio) ? $paquete->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('imagen') ? 'has-error' : ''}}">
    <label for="imagen" class="control-label">{{ 'Imagen' }}</label>
    <input class="form-control" name="imagen" type="file" id="imagen" value="{{ isset($paquete->imagen) ? $paquete->imagen : ''}}" >
    {!! $errors->first('imagen', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('categoria_id') ? 'has-error' : ''}}">
    <label for="categoria_id" class="control-label">{{ 'Categoria Id' }}</label>
    <input class="form-control" name="categoria_id" type="number" id="categoria_id" value="{{ isset($paquete->categoria_id) ? $paquete->categoria_id : ''}}" >
    {!! $errors->first('categoria_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('promocion_id') ? 'has-error' : ''}}">
    <label for="promocion_id" class="control-label">{{ 'Promocion Id' }}</label>
    <input class="form-control" name="promocion_id" type="number" id="promocion_id" value="{{ isset($paquete->promocion_id) ? $paquete->promocion_id : ''}}" >
    {!! $errors->first('promocion_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('guia_id') ? 'has-error' : ''}}">
    <label for="guia_id" class="control-label">{{ 'Guia Id' }}</label>
    <input class="form-control" name="guia_id" type="number" id="guia_id" value="{{ isset($paquete->guia_id) ? $paquete->guia_id : ''}}" >
    {!! $errors->first('guia_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
