<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($suscripcione->nombre) ? $suscripcione->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ isset($suscripcione->descripcion) ? $suscripcione->descripcion : ''}}" >
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="control-label">{{ 'Estado' }}</label>
    <input class="form-control" name="estado" type="text" id="estado" value="{{ isset($suscripcione->estado) ? $suscripcione->estado : ''}}" required>
    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('inicio') ? 'has-error' : ''}}">
    <label for="inicio" class="control-label">{{ 'Inicio' }}</label>
    <input class="form-control" name="inicio" type="date" id="inicio" value="{{ isset($suscripcione->inicio) ? $suscripcione->inicio : ''}}" >
    {!! $errors->first('inicio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vencimiento') ? 'has-error' : ''}}">
    <label for="vencimiento" class="control-label">{{ 'Vencimiento' }}</label>
    <input class="form-control" name="vencimiento" type="date" id="vencimiento" value="{{ isset($suscripcione->vencimiento) ? $suscripcione->vencimiento : ''}}" >
    {!! $errors->first('vencimiento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('agencia_id') ? 'has-error' : ''}}">
    <label for="agencia_id" class="control-label">{{ 'Agencia Id' }}</label>
    <input class="form-control" name="agencia_id" type="number" id="agencia_id" value="{{ isset($suscripcione->agencia_id) ? $suscripcione->agencia_id : ''}}" >
    {!! $errors->first('agencia_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
