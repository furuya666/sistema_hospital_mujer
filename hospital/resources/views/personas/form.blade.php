
<table class="table table-light table-hover">
    <tr>
        <td width="50%">
<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" name="nombre" id="nombre" class="form-control {{$errors->has('nombre')? 'is-invalid':''}}" value="{{ isset($persona->nombre)?$persona->nombre:old('nombre')}}"

>
{!!  $errors->first('nombre','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>
<div class="form-group">
<label for="ApellidoPaterno" class="control-label">{{'Apellido Paterno'}}</label>
<input type="text"class="form-control {{$errors->has('apellido_paterno')? 'is-invalid':''}}" name="apellido_paterno" id="apellido_paterno"   value="{{ isset($persona->apellido_paterno)?$persona->apellido_paterno:old('apellido_paterno')}}"

>
{!!  $errors->first('apellido_paterno','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>
<tr>
    <td>
<div class="form-group">
<label for="ApellidoMaterno" class="control-label">{{'Apellido Materno'}}</label>
<input type="text" class="form-control {{$errors->has('apellido_materno')? 'is-invalid':''}}"name="apellido_materno" id="apellido_materno" value="{{ isset($persona->apellido_materno)?$persona->apellido_materno:old('apellido_materno')}}"

>
{!!  $errors->first('apellido_materno','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>
<div class="form-group">
<label for="Dia" class="control-label">{{'Dia'}}</label>
<input type="number" name="dia" id="dia" class="form-control {{$errors->has('dia')? 'is-invalid':''}}"  value="{{ isset($persona->dia)?$persona->dia:old('dia')}}"

>
{!!  $errors->first('dia','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>
<tr>
    <td>
<div class="form-group">
<label for="Mes" class="control-label">{{'Mes'}}</label>
<select name="mes" id="mes" class="form-control">

            <option value="{{ isset($persona->mes)?$persona->mes:old('mes')}}"selected="selected">{{$persona['mes']}} </option>
            <option value="Enero">Enero</option>
            <option value="Febrero">Febrero</option>
            <option value="Marzo">Marzo</option>
            <option value="Abril">Abril</option>
            <option value="Mayo">Mayo</option>
            <option value="Junio">Junio</option>
            <option value="Julio">Julio</option>
            <option value="Agosto">Agosto</option>
            <option value="Septiembre">Septiembre</option>
            <option value="Octubre">Octubre</option>
            <option value="Noviembre" >Noviembre</option>
            <option value="Diciembre">Diciembre</option>
        </select>
        {!!  $errors->first('mes','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>
<div class="form-group">
<label for="Año" class="control-label">{{'Año'}}</label>
<input type="number" name="año" id="año" class="form-control {{$errors->has('año')? 'is-invalid':''}}" value="{{ isset($persona->año)?$persona->año:old('año')}}"

>
{!!  $errors->first('año','<div class="invalid-feedback">:message</div>')!!}
</td>
</div>
</tr>
<tr>
    <td>
<div class="form-group">
<label for="Telefono" class="control-label">{{'Telefono'}}</label>
<input type="number" name="telefono" id="telefono" class="form-control {{$errors->has('telefono')? 'is-invalid':''}}" value="{{ isset($persona->telefono)?$persona->telefono:old('telefono')}}"

>
{!!  $errors->first('telefono','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>
<tr>
    <td>
<input type="submit" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}" class="btn btn-success">
<a href="{{ url('personas')}}" class="btn btn-secondary">Regresar</a>
</td>
</tr>
</table>