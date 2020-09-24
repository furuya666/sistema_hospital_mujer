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
<form action=" {{url('/faltas')}}" method="POST" enctype="multipart/form-data" autocomplete="off" class="form-horizontal">
{{ csrf_field()}}
<tr>
<td>
<div class="form-group">
<label for="Ci" class="control-label">{{'Ci'}}</label>
<input type="text" name="persona_id" id="persona_id" class="form-control {{$errors->has('persona_id')? 'is-invalid':''}}" value="{{ isset($falta->persona_id)?$falta->persona_id:old('persona_id')}}"
 required>
{!!  $errors->first('persona_id','<div class="invalid-feedback">:message</div>')!!}

</div>
</td>
<td>
<div class="form-group">
<label for="Año" class="control-label">{{'Año'}}</label>
<input type="date" name="fecha" id="fecha" class="form-control {{$errors->has('fecha')? 'is-invalid':''}}" value="{{ isset($falta->fecha)?$falta->fecha:old('fecha')}}"

required>
{!!  $errors->first('fecha','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>
<tr>
  <td>
<input type="submit" value="Agregar" class="btn btn-success">
<a href="{{ url('faltas')}}" class="btn btn-secondary">Regresar</a>
</td>
</tr>
</form>
</table>
</div>
@endsection