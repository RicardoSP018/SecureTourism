<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($destino->nombre) ? $destino->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cupoMax') ? 'has-error' : ''}}">
    <label for="cupoMax" class="control-label">{{ 'Cupomax' }}</label>
    <input class="form-control" name="cupoMax" type="text" id="cupoMax" value="{{ isset($destino->cupoMax) ? $destino->cupoMax : ''}}" required>
    {!! $errors->first('cupoMax', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('paquete_id') ? 'has-error' : ''}}">
    <label for="paquete_id" class="control-label">{{ 'Paquete Id' }}</label>
    <input class="form-control" name="paquete_id" type="number" id="paquete_id" value="{{ isset($destino->paquete_id) ? $destino->paquete_id : ''}}" >
    {!! $errors->first('paquete_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
