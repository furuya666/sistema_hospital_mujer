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
<form action=" {{url('/vacacions')}}" method="POST" enctype="multipart/form-data" autocomplete="off" class="form-horizontal">
{{ csrf_field()}}

<tr>
  <td>
<div class="form-group">
<label for="Ci" class="control-label">{{'Ci'}}</label>
<input type="text" name="persona_id" id="persona_id" class="form-control {{$errors->has('persona_id')? 'is-invalid':''}}" value="{{ isset($vacacion->persona_id)?$vacacion->persona_id:old('persona_id')}}"
 required>
{!!  $errors->first('persona_id','<div class="invalid-feedback">:message</div>')!!}

</div>
</td>
<td>
<div class="form-group">
<label for="Dia" class="control-label">{{' Fecha Inicio De Vacacion'}}</label>
<input type="date" name="ini_vacacion" id="ini_vacacion" class="form-control {{$errors->has('ini_vacacion')? 'is-invalid':''}}" value="{{ isset($vacacion->ini_vacacion)?$vacacion->ini_vacacion:old('ini_vacacion')}}"
 required>

        {!!  $errors->first('ini_vacacion','<div class="invalid-feedback">:message</div>')!!}
         <br>     
</div>
</td>
</tr>
<tr>
<td>
<div class="form-group">
<label for="Dia" class="control-label">{{' Fecha Fin De Vacacion'}}</label>
<input type="date" name="fin_vacacion" id="fin_vacacion" class="form-control {{$errors->has('fin_vacacion')? 'is-invalid':''}}" value="{{ isset($vacacion->fin)?$vacacion->fin_vacacion:old('fin_vacacion')}}"
 required>

        {!!  $errors->first('fin_vacacion','<div class="invalid-feedback">:message</div>')!!}
         <br>     
</div>
</td>

</tr>
<tr>
<td>
<input type="submit" value="Agregar" class="btn btn-success">
<a href="{{ url('vacacions')}}" class="btn btn-secondary">Regresar</a>
</td>
</tr>
</form>
</table>
</div>
@endsection