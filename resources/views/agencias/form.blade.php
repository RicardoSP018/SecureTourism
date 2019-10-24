<div class="form-group {{ $errors->has('NombreAgencia') ? 'has-error' : ''}}">
    <label for="NombreAgencia" class="control-label">{{ 'Nombreagencia' }}</label>
    <input class="form-control" name="NombreAgencia" type="text" id="NombreAgencia" value="{{ isset($agencia->NombreAgencia) ? $agencia->NombreAgencia : ''}}" >
    {!! $errors->first('NombreAgencia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('NombreDueno') ? 'has-error' : ''}}">
    <label for="NombreDueno" class="control-label">{{ 'Nombredueno' }}</label>
    <input class="form-control" name="NombreDueno" type="text" id="NombreDueno" value="{{ isset($agencia->NombreDueno) ? $agencia->NombreDueno : ''}}" >
    {!! $errors->first('NombreDueno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Telefono') ? 'has-error' : ''}}">
    <label for="Telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control" name="Telefono" type="text" id="Telefono" value="{{ isset($agencia->Telefono) ? $agencia->Telefono : ''}}" required>
    {!! $errors->first('Telefono', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Descripcion') ? 'has-error' : ''}}">
    <label for="Descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control" name="Descripcion" type="text" id="Descripcion" value="{{ isset($agencia->Descripcion) ? $agencia->Descripcion : ''}}" required>
    {!! $errors->first('Descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Direccion') ? 'has-error' : ''}}">
    <label for="Direccion" class="control-label">{{ 'Direccion' }}</label>
    <input class="form-control" name="Direccion" type="text" id="Direccion" value="{{ isset($agencia->Direccion) ? $agencia->Direccion : ''}}" required>
    {!! $errors->first('Direccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <label for="">Usuario</label>
    <select name="usuario_id" id="inputUsuario_id" class="form-control">
        @foreach ($usuarios as $usuario)
        <option value ="{{ $usuario ['id'] }}">{{ $usuario['Username']
        }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="">Suscripcion</label>
    <select name="suscripcion_id" id="inputSuscripcion_id" class="form-control">
        @foreach ($suscripciones as $suscripcione)
        <option value ="{{ $suscripcione ['id'] }}">{{ $suscripcione['nombre']
        }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
