@extends('layouts.app')

@section('content')
<div class="container">
   
        @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
              @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
              @endforeach
            </ul>
    </div>
    @endif
<table class="table table-light table-hover">
<form action=" {{url('/personas')}}" method="POST" enctype="multipart/form-data" autocomplete="off" class="form-horizontal">
{{ csrf_field()}}
<tr>
<td>
<div class="form-group">
<label for="Ci" class="control-label">{{'Ci'}}</label>
<input type="text" name="id" id="id" class="form-control {{$errors->has('id')? 'is-invalid':''}}" value="{{ isset($persona->id)?$persona->id:old('id')}}"
required>
{!!  $errors->first('id','<div class="invalid-feedback">:message</div>')!!}

</div>
</td>
<td>
<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" name="nombre" id="nombre" class="form-control {{$errors->has('nombre')? 'is-invalid':''}}" value="{{ isset($persona->nombre)?$persona->nombre:old('nombre')}}"

required>
{!!  $errors->first('nombre','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>
<tr>
  <td>
<div class="form-group">
<label for="ApellidoPaterno" class="control-label">{{'Apellido Paterno'}}</label>
<input type="text"class="form-control {{$errors->has('apellido_paterno')? 'is-invalid':''}}" name="apellido_paterno" id="apellido_paterno"   value="{{ isset($persona->apellido_paterno)?$persona->apellido_paterno:old('apellido_paterno')}}"

required>
{!!  $errors->first('apellido_paterno','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>
<div class="form-group">
<label for="ApellidoMaterno" class="control-label">{{'Apellido Materno'}}</label>
<input type="text" class="form-control {{$errors->has('apellido_materno')? 'is-invalid':''}}"name="apellido_materno" id="apellido_materno" value="{{ isset($persona->apellido_paterno)?$persona->apellido_materno:old('apellido_materno')}}"

required>
{!!  $errors->first('apellido_materno','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>
<tr>
  <td>
<div class="form-group">
<label for="Dia" class="control-label">{{'Dia'}}</label>
<input type="number" name="dia" id="dia" class="form-control {{$errors->has('dia')? 'is-invalid':''}}"  value="{{ isset($persona->dia)?$persona->dia:old('dia')}}"

required>
{!!  $errors->first('dia','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>
<div class="form-group">
<label for="Mes" class="control-label">{{'Mes'}}</label>
<select name="mes" id="mes" class="form-control {{$errors->has('mes')? 'is-invalid':''}}" required>
            <option value="{{ isset($persona->mes)?$persona->mes:old('mes')}}" selected="selected"  >{{ isset($persona->mes)?$persona->mes:old('mes')}}</option>
            <option value="enero">Enero</option>
            <option value="febrero">Febrero</option>
            <option value="marzo">Marzo</option>
            <option value="abril">Abril</option>
            <option value="mayo">Mayo</option>
            <option value="junio">Junio</option>
            <option value="julio">Julio</option>
            <option value="agosto">Agosto</option>
            <option value="septiembre">Septiembre</option>
            <option value="octubre">Octubre</option>
            <option value="noviembre" >Noviembre</option>
            <option value="diciembre">Diciembre</option>
        </select>
        {!!  $errors->first('mes','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>
<tr>
  <td>
<div class="form-group">
<label for="Año" class="control-label">{{'Año'}}</label>
<input type="number" name="año" id="año" class="form-control {{$errors->has('año')? 'is-invalid':''}}" value="{{ isset($persona->año)?$persona->año:old('año')}}"

required>
{!!  $errors->first('año','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>
<div class="form-group">
<label for="Telefono" class="control-label">{{'Telefono'}}</label>
<input type="number" name="telefono" id="telefono" class="form-control {{$errors->has('telefono')? 'is-invalid':''}}" value="{{ isset($persona->telefono)?$persona->telefono:old('telefono')}}"

required>
{!!  $errors->first('telefono','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
  <td>
<input type="submit" value="Agregar" class="btn btn-success">
<a href="{{ url('personas')}}" class="btn btn-secondary">Regresar</a>
</td>
</tr>
</form>

</table>
</div>
@endsection