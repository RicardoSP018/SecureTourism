<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="fecha" type="date" id="fecha" value="{{ isset($waypoint->fecha) ? $waypoint->fecha : ''}}" >
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('hora') ? 'has-error' : ''}}">
    <label for="hora" class="control-label">{{ 'Hora' }}</label>
    <input class="form-control" name="hora" type="number" id="hora" value="{{ isset($waypoint->hora) ? $waypoint->hora : ''}}" >
    {!! $errors->first('hora', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dispositivoA_id') ? 'has-error' : ''}}">
    <label for="dispositivoA_id" class="control-label">{{ 'Dispositivoa Id' }}</label>
    <input class="form-control" name="dispositivoA_id" type="number" id="dispositivoA_id" value="{{ isset($waypoint->dispositivoA_id) ? $waypoint->dispositivoA_id : ''}}" >
    {!! $errors->first('dispositivoA_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
