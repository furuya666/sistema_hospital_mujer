
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
<label for="Año" class="control-label">{{'Cumpleaños'}}</label>
<input type="date" name="cumpleaños" id="cumpleaños" class="form-control {{$errors->has('cumpleaños')? 'is-invalid':''}}" value="{{ isset($persona->cumpleaños)?$persona->cumpleaños:old('cumpleaños')}}"

>
{!!  $errors->first('cumpleaños','<div class="invalid-feedback">:message</div>')!!}

</div>
</td>
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
<td>
<div class="form-group">
<label for="especialidad" class="control-label">{{'Especialidad'}}</label>
<select name="especialidad_id" id="especialidad_id"  class="form-control {{$errors->has('especialidad_id')? 'is-invalid':''}}"  required>
           <option value="{{ isset($persona->especialidad_id)?$persona->especialidad_id:old('especialidad_id')}}" selected="selected" ><?php
           if( $persona->especialidad_id==1){
              echo "Urologia";
           }else{
               if($persona->especialidad_id==2){
                  echo "Dermatologia";
               }else{
                   if($persona->especialidad_id==3){
                        echo "oftalmologia";
                   }else{
                       echo "traumatologia";
                   }
               }
           }
           ?></option>
           <option value="1">Urologia</option>
           <option value="2">Dermatologia</option>
           <option value="3">Oftalmologia</option>
           <option value="4">Traumatologia</option>
        </select>
       
{!!  $errors->first('especialidad_id','<div class="invalid-feedback">:message</div>')!!}
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
