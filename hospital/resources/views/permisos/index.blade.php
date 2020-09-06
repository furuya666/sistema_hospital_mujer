@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('Mensaje'))
    <div class="alert alert-secondary" role="alert">
  {{ Session::get('Mensaje') }}  
    </div>

@endif
<a href="{{ url('personas')}}" class="btn btn-success">Volver Atras</a>
<a href="{{ url('permisos/create')}}" class="btn btn-danger">Agregar Permiso</a>


</br>
<br>
   

</br>

<table class="table-hover" align="center" width="40%">
<center><h2>REGISTRO DE PERMISOS DEL PERSONAL</h2></center>
    <br>
    <br>
       <nav class="navbar navbar-light float-right">
 
 <form action=" {{url('/permisos/index')}}" class="form-inline">
          <tr>
         <td width="25%">
         <label for="Ci" class="control-label">{{'Ci'}}</label>
           <br>    
         <input  class="form-control mr-sm-2" name="Buscador" type="number" placeholder="Introduzca Ci" aria-label="Search" autocomplete="off" required>
        <br>
        </td>
        </tr>
        <tr>
         
          <td>
          <label for="Tipo" class="control-label">{{'Tipo Permiso'}}</label>
           <br>     
          <select name="Buscador2" id="Buscador2"  class="form-control mr-sm-2" required>
           <option value="" selected="selected"  >Seleccione un Permiso</option>
           <option value="cumpleaños">Cumpleaños</option>
           <option value="urgencia">Urgencia</option>
           <option value="baja medica">Baja Medica</option>
           <option value="actividades programadas">Actividades Programadas</option>
        </select>
          <br>
    </td>
           </tr>
           <tr>
           <td>
           <label for="Mes" class="control-label">{{'Mes'}}</label>
           <br>
          <select name="Buscador1" id="Buscador1"  class="form-control mr-sm-2" required>
           <option value="" selected="selected"  >Seleccione un Mes</option>
           <option value="-01-">Enero</option>
           <option value="-02-">Febrero</option>
           <option value="-03-">Marzo</option>
           <option value="-04-">Abril</option>
           <option value="-05-">Mayo</option>
           <option value="-06-">Junio</option>
           <option value="-07-">Julio</option>
           <option value="-08-">Agosto</option>
           <option value="-09-">Septiembre</option>
           <option value="-10-">Octubre</option>
           <option value="-11-" >Noviembre</option>
           <option value="-12-">Diciembre</option>
       </select>
      <br>
    </td>
       </tr>
       <tr>
         <td width="25%">
         <label for="Año" class="control-label">{{'Año'}}</label>
           <br>    
         <input  class="form-control mr-sm-2" name="Buscador3" type="number" placeholder="Introduzca Año" aria-label="Search" autocomplete="off" required>
        <br>
        </td>
        </tr>
       <tr>
       <td>
         
          <center><input type="submit"  value="Ver" target="blank" class="btn btn-dark"></center>
        </td>
        </tr>
           </form>
</nav>
      
    
</table>

{{ $permisos->links()}}
</div>
@endsection