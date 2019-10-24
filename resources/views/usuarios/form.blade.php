<div class="form-group {{ $errors->has('Username') ? 'has-error' : ''}}">
    <label for="Username" class="control-label">{{ 'Username' }}</label>
    <input class="form-control" name="Username" type="text" id="Username" value="{{ isset($usuario->Username) ? $usuario->Username : ''}}" required>
    {!! $errors->first('Username', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Correo') ? 'has-error' : ''}}">
    <label for="Correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="Correo" type="email" id="Correo" value="{{ isset($usuario->Correo) ? $usuario->Correo : ''}}" required>
    {!! $errors->first('Correo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Contrasena') ? 'has-error' : ''}}">
    <label for="Contrasena" class="control-label">{{ 'Contrasena' }}</label>
    <input class="form-control" name="Contrasena" type="password" id="Contrasena" required>
    {!! $errors->first('Contrasena', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
