<div class="form-group {{ $errors->has('fechaInicio') ? 'has-error' : ''}}">
    <label for="fechaInicio" class="control-label">{{ 'Fechainicio' }}</label>
    <input class="form-control" name="fechaInicio" type="date" id="fechaInicio" value="{{ isset($paquetesadquirido->fechaInicio) ? $paquetesadquirido->fechaInicio : ''}}" >
    {!! $errors->first('fechaInicio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechaFin') ? 'has-error' : ''}}">
    <label for="fechaFin" class="control-label">{{ 'Fechafin' }}</label>
    <input class="form-control" name="fechaFin" type="date" id="fechaFin" value="{{ isset($paquetesadquirido->fechaFin) ? $paquetesadquirido->fechaFin : ''}}" >
    {!! $errors->first('fechaFin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="text" id="precio" value="{{ isset($paquetesadquirido->precio) ? $paquetesadquirido->precio : ''}}" required>
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('turista_id') ? 'has-error' : ''}}">
    <label for="turista_id" class="control-label">{{ 'Turista Id' }}</label>
    <input class="form-control" name="turista_id" type="number" id="turista_id" value="{{ isset($paquetesadquirido->turista_id) ? $paquetesadquirido->turista_id : ''}}" >
    {!! $errors->first('turista_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('paquete_id') ? 'has-error' : ''}}">
    <label for="paquete_id" class="control-label">{{ 'Paquete Id' }}</label>
    <input class="form-control" name="paquete_id" type="number" id="paquete_id" value="{{ isset($paquetesadquirido->paquete_id) ? $paquetesadquirido->paquete_id : ''}}" >
    {!! $errors->first('paquete_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
