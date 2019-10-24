<div class="form-group {{ $errors->has('Modelo') ? 'has-error' : ''}}">
    <label for="Modelo" class="control-label">{{ 'Modelo' }}</label>
    <input class="form-control" name="Modelo" type="text" id="Modelo" value="{{ isset($producto->Modelo) ? $producto->Modelo : ''}}" >
    {!! $errors->first('Modelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Cantidad') ? 'has-error' : ''}}">
    <label for="Cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="Cantidad" type="text" id="Cantidad" value="{{ isset($producto->Cantidad) ? $producto->Cantidad : ''}}" >
    {!! $errors->first('Cantidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Descripcion') ? 'has-error' : ''}}">
    <label for="Descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control" name="Descripcion" type="text" id="Descripcion" value="{{ isset($producto->Descripcion) ? $producto->Descripcion : ''}}" required>
    {!! $errors->first('Descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Precio') ? 'has-error' : ''}}">
    <label for="Precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="Precio" type="text" id="Precio" value="{{ isset($producto->Precio) ? $producto->Precio : ''}}" >
    {!! $errors->first('Precio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Imagen') ? 'has-error' : ''}}">
    <label for="Imagen" class="control-label">{{ 'Imagen' }}</label>
    <input class="form-control" name="Imagen" type="file" id="Imagen" value="{{ isset($producto->Imagen) ? $producto->Imagen : ''}}" >
    {!! $errors->first('Imagen', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <label for="">Proveedor</label>
    <select name="proveedor_id" id="inputProveedor_id" class="form-control">
        @foreach ($proveedores as $proveedore)
        <option value ="{{ $proveedore ['id'] }}">{{ $proveedore['Nombre']
        }}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
