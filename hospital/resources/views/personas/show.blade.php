<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Persona</title>
</head>
<body>
<style>

td {
	border: 5px solid black;
  
}
label{
       color: blue;
   }
</style>
<h3><i>La Paz {{date('d-m-Y')}}</i></h3>
<h3><center><i> Hospital De La Mujer La Paz Bolivia</i></center></h3> 

<h3><center><i>Reporte Personal</i></center></h3>
<table class="table table-light table-hover" align="center"  cellpadding="10"  width="100%">

         <tr>
            <td>
               
<div class="form-group">
<label for="Ci" class="control-label">{{'Ci'}}</label>
<br>
<input type="text" name="id" id="id" class="form-control {{$errors->has('id')? 'is-invalid':''}}" value="{{ isset($persona->id)?$persona->id:old('id')}}"
required>
{!!  $errors->first('id','<div class="invalid-feedback">:message</div>')!!}

</div>
</td>
<td>
<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<br>
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
<br>
<input type="text"class="form-control {{$errors->has('apellido_paterno')? 'is-invalid':''}}" name="apellido_paterno" id="apellido_paterno"   value="{{ isset($persona->apellido_paterno)?$persona->apellido_paterno:old('apellido_paterno')}}"

required>
{!!  $errors->first('apellido_paterno','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>
<div class="form-group">
<label for="ApellidoMaterno" class="control-label">{{'Apellido Materno'}}</label>
<br>
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
<br>
<input type="text" name="dia" id="dia" class="form-control {{$errors->has('dia')? 'is-invalid':''}}"  value="{{ isset($persona->dia)?$persona->dia:old('dia')}}"
required>
{!!  $errors->first('dia','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>
<div class="form-group">
<label for="Mes" class="control-label">{{'Mes'}}</label>
<br>
<input type="text" name="mes" id="mes" class="form-control {{$errors->has('mes')? 'is-invalid':''}}"   value="{{ isset($persona->mes)?$persona->mes:old('mes')}}"
required>
 {!!  $errors->first('mes','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr> 
<tr>
  <td>
<div class="form-group">
<label for="Año" class="control-label">{{'Año'}}</label>
<br>
<input type="text" name="año" id="año" class="form-control {{$errors->has('año')? 'is-invalid':''}}" value="{{ isset($persona->año)?$persona->año:old('año')}}"

required>
{!!  $errors->first('año','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>
<div class="form-group">
<label for="Telefono" class="control-label">{{'Telefono'}}</label>
<br>
<input type="text" name="telefono" id="telefono" class="form-control {{$errors->has('telefono')? 'is-invalid':''}}" value="{{ isset($persona->telefono)?$persona->telefono:old('telefono')}}"

required>
{!!  $errors->first('telefono','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>  
</table>
<br>
<br>
<br>
<p><center>..........................</center>
    <center><i>Lic. Rosario Mendoza</i></center></p>
</body>
</html>