<div class="form-group {{ $errors->has('nombreAgencia') ? 'has-error' : ''}}">
    <label for="nombreAgencia" class="control-label">{{ 'Nombreagencia' }}</label>
    <input class="form-control" name="nombreAgencia" type="text" id="nombreAgencia" value="{{ isset($agencia->nombreAgencia) ? $agencia->nombreAgencia : ''}}" >
    {!! $errors->first('nombreAgencia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombreDueno') ? 'has-error' : ''}}">
    <label for="nombreDueno" class="control-label">{{ 'Nombredueno' }}</label>
    <input class="form-control" name="nombreDueno" type="text" id="nombreDueno" value="{{ isset($agencia->nombreDueno) ? $agencia->nombreDueno : ''}}" >
    {!! $errors->first('nombreDueno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control" name="telefono" type="text" id="telefono" value="{{ isset($agencia->telefono) ? $agencia->telefono : ''}}" required>
    {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ isset($agencia->descripcion) ? $agencia->descripcion : ''}}" required>
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="control-label">{{ 'Direccion' }}</label>
    <input class="form-control" name="direccion" type="text" id="direccion" value="{{ isset($agencia->direccion) ? $agencia->direccion : ''}}" required>
    {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('correo') ? 'has-error' : ''}}">
    <label for="correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="correo" type="text" id="correo" value="{{ isset($agencia->correo) ? $agencia->correo : ''}}" >
    {!! $errors->first('correo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('redesSociales') ? 'has-error' : ''}}">
    <label for="redesSociales" class="control-label">{{ 'Redessociales' }}</label>
    <input class="form-control" name="redesSociales" type="text" id="redesSociales" value="{{ isset($agencia->redesSociales) ? $agencia->redesSociales : ''}}" >
    {!! $errors->first('redesSociales', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('administrador_id') ? 'has-error' : ''}}">
    <label for="administrador_id" class="control-label">{{ 'Administrador Id' }}</label>
    <input class="form-control" name="administrador_id" type="number" id="administrador_id" value="{{ isset($agencia->administrador_id) ? $agencia->administrador_id : ''}}" >
    {!! $errors->first('administrador_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
