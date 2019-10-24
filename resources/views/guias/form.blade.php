<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ isset($guia->Nombre) ? $guia->Nombre : ''}}" required>
    {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellido') ? 'has-error' : ''}}">
    <label for="apellido" class="control-label">{{ 'Apellido' }}</label>
    <input class="form-control" name="apellido" type="text" id="apellido" value="{{ isset($guia->apellido) ? $guia->apellido : ''}}" >
    {!! $errors->first('apellido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('edad') ? 'has-error' : ''}}">
    <label for="edad" class="control-label">{{ 'Edad' }}</label>
    <input class="form-control" name="edad" type="number" id="edad" value="{{ isset($guia->edad) ? $guia->edad : ''}}" >
    {!! $errors->first('edad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('genero') ? 'has-error' : ''}}">
    <label for="genero" class="control-label">{{ 'Genero' }}</label>
    <select name="genero" class="form-control" id="genero" >
    @foreach (json_decode('{"opcion1":"Hombre","opcion2":"Mujer","opcion3":"Sin especificar"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($guia->genero) && $guia->genero == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('genero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="text" id="precio" value="{{ isset($guia->precio) ? $guia->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
