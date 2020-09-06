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
<form action=" {{url('/vacacions')}}" method="POST" enctype="multipart/form-data" autocomplete="off" class="form-horizontal">
{{ csrf_field()}}
<div class="form-group">
<label for="Ci" class="control-label">{{'Ci'}}</label>
<input type="text" name="persona_id" id="persona_id" class="form-control {{$errors->has('persona_id')? 'is-invalid':''}}" value="{{ isset($vacacion->persona_id)?$vacacion->persona_id:old('persona_id')}}"
required>
{!!  $errors->first('persona_id','<div class="invalid-feedback">:message</div>')!!}

</div>

<div class="form-group">
<label for="inicio_vacaciones" class="control-label">{{'Inicio Vacacion'}}</label>
<input type="date"class="form-control {{$errors->has('inicio_vacaciones')? 'is-invalid':''}}" name="inicio_vacaciones" id="inicio_vacaciones"   value="{{ isset($vacacion->inicio_vacaciones)?$vacacion->inicio_vacaciones:old('inicio_vacaciones')}}"

required>
{!!  $errors->first('inicio_vacaciones','<div class="invalid-feedback">:message</div>')!!}
</div>
<div class="form-group">
<label for="fin_vacaciones" class="control-label">{{'Fin Vacacion'}}</label>
<input type="date"class="form-control {{$errors->has('fin_vacaciones')? 'is-invalid':''}}" name="fin_vacaciones" id="fin_vacaciones"   value="{{ isset($vacacion->fin_vacaciones)?$vacacion->fin_vacaciones:old('fin_vacaciones')}}"

required>
{!!  $errors->first('fin_vacaciones','<div class="invalid-feedback">:message</div>')!!}
</div>

<input type="submit" value="Agregar" class="btn btn-success">
<a href="{{ url('vacacions')}}" class="btn btn-secondary">Regresar</a>
</form>
</div>
@endsection