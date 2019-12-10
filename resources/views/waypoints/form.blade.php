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
<div class="form-group {{ $errors->has('dispositivo_asignados_id') ? 'has-error' : ''}}">
    <label for="dispositivo_asignados_id" class="control-label">{{ 'Dispositivo Asignados Id' }}</label>
    <input class="form-control" name="dispositivo_asignados_id" type="number" id="dispositivo_asignados_id" value="{{ isset($waypoint->dispositivo_asignados_id) ? $waypoint->dispositivo_asignados_id : ''}}" >
    {!! $errors->first('dispositivo_asignados_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
