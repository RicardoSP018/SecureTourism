<div class="form-group {{ $errors->has('paquete_id') ? 'has-error' : ''}}">
    <label for="paquete_id" class="control-label">{{ 'Paquete Id' }}</label>
    <input class="form-control" name="paquete_id" type="number" id="paquete_id" value="{{ isset($guiaasignado->paquete_id) ? $guiaasignado->paquete_id : ''}}" >
    {!! $errors->first('paquete_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('guia_id') ? 'has-error' : ''}}">
    <label for="guia_id" class="control-label">{{ 'Guia Id' }}</label>
    <input class="form-control" name="guia_id" type="number" id="guia_id" value="{{ isset($guiaasignado->guia_id) ? $guiaasignado->guia_id : ''}}" >
    {!! $errors->first('guia_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
