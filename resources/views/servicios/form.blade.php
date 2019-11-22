<div class="form-group {{ $errors->has('tiempo') ? 'has-error' : ''}}">
    <label for="tiempo" class="control-label">{{ 'Tiempo' }}</label>
    <input class="form-control" name="tiempo" type="text" id="tiempo" value="{{ isset($servicio->tiempo) ? $servicio->tiempo : ''}}" >
    {!! $errors->first('tiempo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ isset($servicio->descripcion) ? $servicio->descripcion : ''}}" >
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('suscripcion_id') ? 'has-error' : ''}}">
    <label for="suscripcion_id" class="control-label">{{ 'Suscripcion Id' }}</label>
    <input class="form-control" name="suscripcion_id" type="number" id="suscripcion_id" value="{{ isset($servicio->suscripcion_id) ? $servicio->suscripcion_id : ''}}" >
    {!! $errors->first('suscripcion_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
