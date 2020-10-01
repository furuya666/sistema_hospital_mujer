@extends('layouts.app')

@section('content')
@if(Session::has('Mensaje'))
    <div class="alert alert-danger" role="alert">
  {{ Session::get('Mensaje') }}  
    </div>

@endif
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
<input type="text" class="form-control {{$errors->has('apellido_materno')? 'is-invalid':''}}"name="apellido_materno" id="apellido_materno" value="{{ isset($persona->apellido_materno)?$persona->apellido_materno:old('apellido_materno')}}"

required>
{!!  $errors->first('apellido_materno','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>
<tr>
<td>
<div class="form-group">
<label for="Año" class="control-label">{{'Cumpleaños'}}</label>
<input type="date" name="cumpleaños" id="cumpleaños" class="form-control {{$errors->has('cumpleaños')? 'is-invalid':''}}" value="{{ isset($persona->cumpleaños)?$persona->cumpleaños:old('cumpleaños')}}"

required>
{!!  $errors->first('cumpleaños','<div class="invalid-feedback">:message</div>')!!}
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
<div class="form-group">
<label for="especialidad" class="control-label">{{'Especialidad'}}</label>
<select name="especialidad_id" id="especialidad_id"  class="form-control {{$errors->has('especialidad_id')? 'is-invalid':''}}"  required>
           <option value="{{ isset($persona->especialidad_id)?$persona->especialidad_id:old('especialidad_id')}}" selected="selected"  >{{ isset($persona->especialidad_id)?$persona->especialidad_id:old('especialidad_id')}}</option>
           <option value="1">Urologia</option>
           <option value="2">Ginecologia</option>
           <option value="3">Oftalmologia</option>
           <option value="4">Traumatologia</option>
        </select>
{!!  $errors->first('especialidad_id','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>
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