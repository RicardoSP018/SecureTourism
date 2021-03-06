<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($promocion->nombre) ? $promocion->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('requisitos') ? 'has-error' : ''}}">
    <label for="requisitos" class="control-label">{{ 'Requisitos' }}</label>
    <input class="form-control" name="requisitos" type="text" id="requisitos" value="{{ isset($promocion->requisitos) ? $promocion->requisitos : ''}}" >
    {!! $errors->first('requisitos', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="number" id="precio" value="{{ isset($promocion->precio) ? $promocion->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechaInicio') ? 'has-error' : ''}}">
    <label for="fechaInicio" class="control-label">{{ 'Fechainicio' }}</label>
    <input class="form-control" name="fechaInicio" type="date" id="fechaInicio" value="{{ isset($promocion->fechaInicio) ? $promocion->fechaInicio : ''}}" >
    {!! $errors->first('fechaInicio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechaFinal') ? 'has-error' : ''}}">
    <label for="fechaFinal" class="control-label">{{ 'Fechafinal' }}</label>
    <input class="form-control" name="fechaFinal" type="date" id="fechaFinal" value="{{ isset($promocion->fechaFinal) ? $promocion->fechaFinal : ''}}" >
    {!! $errors->first('fechaFinal', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
