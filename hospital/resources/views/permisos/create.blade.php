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

<select name="tipo_id" id="tipo_id"  class="form-control {{$errors->has('tipo_id')? 'is-invalid':''}}" required>
            <option value="{{ isset($permiso->tipo_id)?$permiso->tipo_id:old('tipo_id')}}" selected="selected"  >{{ isset($permiso->tipo_id)?$permiso->tipo_id:old('tipo_id')}}</option>
            <option value="3">Cumpleaños</option>
            <option value="1">Urgencia</option>
            <option value="2">Baja Medica</option>
            <option value="4">Actividades Programadas</option>
        </select>
{!!  $errors->first('tipo_id','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>
<tr>
<td>
<div class="form-group">
<label for="Fecha" class="control-label">{{'Hora Permiso'}}</label>
<input type="time"class="form-control {{$errors->has('hora_ini')? 'is-invalid':''}}" name="hora_ini" id="hora_ini"   value="{{ isset($permiso->hora_ini)?$permiso->hora_ini:old('hora_ini')}}"
required>
{!!  $errors->first('hora_ini','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
  <td>
<div class="form-group">
<label for="Dia" class="control-label">{{'Fecha Inicio Del Permiso'}}</label>
<input type="date"class="form-control {{$errors->has('ini_permiso')? 'is-invalid':''}}" name="ini_permiso" id="ini_permiso"   value="{{ isset($permiso->ini_permiso)?$permiso->ini_permiso:old('ini_permiso')}}"
required>
        {!!  $errors->first('ini_permiso','<div class="invalid-feedback">:message</div>')!!}
         <br> 
        
</div>
</td>

</tr>
<tr>
  <td>
  <div class="form-group">
<label for="Dia" class="control-label">{{'Fecha Inicio Del Permiso'}}</label>
<input type="date"class="form-control {{$errors->has('fin_permiso')? 'is-invalid':''}}" name="fin_permiso" id="fin_permiso"   value="{{ isset($permiso->fin_permiso)?$permiso->fin_permiso:old('fin_permiso')}}"
required>
        {!!  $errors->first('fin_permiso','<div class="invalid-feedback">:message</div>')!!}
         <br> 
        
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