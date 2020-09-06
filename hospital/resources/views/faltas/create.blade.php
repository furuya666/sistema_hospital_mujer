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
<form action=" {{url('/faltas')}}" method="POST" enctype="multipart/form-data" autocomplete="off" class="form-horizontal">
{{ csrf_field()}}
<div class="form-group">
<label for="Ci" class="control-label">{{'Ci'}}</label>
<input type="text" name="persona_id" id="persona_id" class="form-control {{$errors->has('persona_id')? 'is-invalid':''}}" value="{{ isset($falta->persona_id)?$falta->persona_id:old('persona_id')}}"
 required>
{!!  $errors->first('persona_id','<div class="invalid-feedback">:message</div>')!!}

</div>


<div class="form-group">
<label for="Fecha" class="control-label">{{'Fecha'}}</label>
<input type="date"class="form-control {{$errors->has('fecha')? 'is-invalid':''}}" name="fecha" id="fecha"   value="{{ isset($falta->fecha)?$falta->fecha:old('fecha')}}"

required>
{!!  $errors->first('fecha','<div class="invalid-feedback">:message</div>')!!}
</div>

<input type="submit" value="Agregar" class="btn btn-success">
<a href="{{ url('faltas')}}" class="btn btn-secondary">Regresar</a>
</form>
</div>
@endsection