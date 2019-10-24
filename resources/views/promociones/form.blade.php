<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($promocione->nombre) ? $promocione->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('requsitos') ? 'has-error' : ''}}">
    <label for="requsitos" class="control-label">{{ 'Requsitos' }}</label>
    <input class="form-control" name="requsitos" type="text" id="requsitos" value="{{ isset($promocione->requsitos) ? $promocione->requsitos : ''}}" >
    {!! $errors->first('requsitos', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="number" id="precio" value="{{ isset($promocione->precio) ? $promocione->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechaExpiracion') ? 'has-error' : ''}}">
    <label for="fechaExpiracion" class="control-label">{{ 'Fechaexpiracion' }}</label>
    <input class="form-control" name="fechaExpiracion" type="date" id="fechaExpiracion" value="{{ isset($promocione->fechaExpiracion) ? $promocione->fechaExpiracion : ''}}" >
    {!! $errors->first('fechaExpiracion', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
