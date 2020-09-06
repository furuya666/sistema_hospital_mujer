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
<form action=" {{url('/permisos')}}" method="POST" enctype="multipart/form-data" autocomplete="off" class="form-horizontal">
{{ csrf_field()}}
<tr>
  <td>
<div class="form-group">
<label for="Ci" class="control-label">{{'Ci'}}</label>
<input type="text" name="persona_id" id="persona_id" class="form-control {{$errors->has('persona_id')? 'is-invalid':''}}" value="{{ isset($permiso->persona_id)?$permiso->persona_id:old('persona_id')}}"
 required>
{!!  $errors->first('persona_id','<div class="invalid-feedback">:message</div>')!!}

</div>
</td>
<td>
<div class="form-group">
<label for="Tipo" class="control-label">{{'Motivo de Permiso'}}</label>

<select name="tipo" id="tipo"  class="form-control {{$errors->has('tipo')? 'is-invalid':''}}" required>
            <option value="{{ isset($permiso->tipo)?$permiso->tipo:old('tipo')}}" selected="selected"  >{{ isset($permiso->tipo)?$permiso->tipo:old('tipo')}}</option>
            <option value="cumpleaños">Cumpleaños</option>
            <option value="urgencia">Urgencia</option>
            <option value="baja medica">Baja Medica</option>
            <option value="actividades programadas">Actividades Programadas</option>
        </select>
{!!  $errors->first('tipo','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>
<tr>
  <td>
<div class="form-group">
<label for="Fecha" class="control-label">{{'Fecha Inicio Permiso'}}</label>
<input type="date"class="form-control {{$errors->has('fecha_inicio')? 'is-invalid':''}}" name="fecha_inicio" id="fecha_inicio"   value="{{ isset($permiso->fecha_inicio)?$permiso->fecha_inicio:old('fecha_inicio')}}"

required>
{!!  $errors->first('fecha_inicio','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>
<div class="form-group">
<label for="Hora" class="control-label">{{'Hora Inicio Permiso'}}</label>
<input type="time" class="form-control {{$errors->has('hora_inicio')? 'is-invalid':''}}"name="hora_inicio" id="hora_inicio" value="{{ isset($permiso->hora_inicio)?$permiso->hora_inicio:old('hora_inicio')}}"

required>
{!!  $errors->first('hora_inicio','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>
<tr>
  <td>
<div class="form-group">
<label for="Fecha" class="control-label">{{'Fecha Fin Permiso'}}</label>
<input type="date"class="form-control {{$errors->has('fecha_fin')? 'is-invalid':''}}" name="fecha_fin" id="fecha_fin"   value="{{ isset($permiso->fecha_fin)?$permiso->fecha_fin:old('fecha_fin')}}"

required>
{!!  $errors->first('fecha_fin','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>
<tr>
<td>
<input type="submit" value="Agregar" class="btn btn-success">
<a href="{{ url('permisos')}}" class="btn btn-secondary">Regresar</a>
</td>
</tr>
</form>
</table>
</div>
@endsection