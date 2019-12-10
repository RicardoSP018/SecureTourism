<div class="form-group {{ $errors->has('Inicio') ? 'has-error' : ''}}">
    <label for="Inicio" class="control-label">{{ 'Inicio' }}</label>
    <input class="form-control" name="Inicio" type="date" id="Inicio" value="{{ isset($dispositivoasignado->Inicio) ? $dispositivoasignado->Inicio : ''}}" >
    {!! $errors->first('Inicio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Final') ? 'has-error' : ''}}">
    <label for="Final" class="control-label">{{ 'Final' }}</label>
    <input class="form-control" name="Final" type="date" id="Final" value="{{ isset($dispositivoasignado->Final) ? $dispositivoasignado->Final : ''}}" >
    {!! $errors->first('Final', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dispositivo_id') ? 'has-error' : ''}}">
    <label for="dispositivo_id" class="control-label">{{ 'Dispositivo Id' }}</label>
    <input class="form-control" name="dispositivo_id" type="number" id="dispositivo_id" value="{{ isset($dispositivoasignado->dispositivo_id) ? $dispositivoasignado->dispositivo_id : ''}}" >
    {!! $errors->first('dispositivo_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('paquete_adquiridos_id') ? 'has-error' : ''}}">
    <label for="paquete_adquiridos_id" class="control-label">{{ 'Paquete Adquiridos Id' }}</label>
    <input class="form-control" name="paquete_adquiridos_id" type="number" id="paquete_adquiridos_id" value="{{ isset($dispositivoasignado->paquete_adquiridos_id) ? $dispositivoasignado->paquete_adquiridos_id : ''}}" >
    {!! $errors->first('paquete_adquiridos_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
