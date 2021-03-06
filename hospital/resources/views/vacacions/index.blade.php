@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('Mensaje'))
    <div class="alert alert-secondary" role="alert">
  {{ Session::get('Mensaje') }}  
    </div>

@endif
<a href="{{ url('personas')}}" class="btn btn-success">Volver Atras</a>
<a href="{{ url('vacacions/create')}}" class="btn btn-primary">Agregar Vacaciones</a>
</br>
<br>
</br>
<style>
.a{
  background: #008840 ;
}
.b{
  background:#790DB8 ;
}

</style>
<table class="table table-light table-hover">
<center><h2>REGISTRO DE PERMISOS DEL PERSONAL</h2></center>
<br>
    
    <h2><center>Reporte General Del Personal</center></h2>
    <thead class="thead-light">
        <tr>
          
      
            <th><center>Mes</center></th>
            <th><center>Año</center></th>
            <th><center>Reporte</center></th>
        </tr>
    </thead>
    <tbody>
    <nav class="navbar navbar-light float-right">
 
 <form action=" {{url('/vacacions/index')}}" class="form-inline">
          <tr>
         <td class="a" width="35%">
        
          <select name="Buscador1" id="Buscador1"  class="form-control mr-sm-2" required autocomplete="off">
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
      
         <td width="35%" class="a"> 
        
         <input  class="form-control mr-sm-2" name="Buscador2" type="number" placeholder="Introduzca Año" aria-label="Search" autocomplete="off" required>
         <br> 
        </td>
       
       <td class="a" width="30%">
         
          <center><input type="submit"  value="Ver" target="blank" class="btn btn-dark"></center></td>
          </tr>
           </form>
</nav>
</tbody>
</table>
<!--////////////////////////////////////////////////////-->
<table class="table table-light table-hover">

<br>
    
    <h2><center>Reporte Individual Del Personal</center></h2>
    <thead class="thead-light">
        <tr>
            
            <th><center>Ci</center></th>
            <th><center>Mes</center></th>
            <th><center>Año</center></th>
            <th><center>Reporte</center></th>
        </tr>
    </thead>
    <tbody>
    <nav class="navbar navbar-light float-right">
 
 <form action=" {{url('/vacacions/index')}}" class="form-inline">
          <tr>
         
          <td width="25%" class="b"> 
         
         <input  class="form-control mr-sm-2" name="Buscador3" type="number" placeholder="Introduzca Ci" aria-label="Search" autocomplete="off">
         <br> 
        </td>
        
        
       
       
         <td class="b" width="25%">
        
          <select name="Buscador1" id="Buscador1"  class="form-control mr-sm-2" required autocomplete="off">
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
        
       </td>
      
         <td width="25%" class="b"> 
        
         <input  class="form-control mr-sm-2" name="Buscador2" type="number" placeholder="Introduzca Año" aria-label="Search" autocomplete="off" required>
         
        </td>
       
       <td class="b">
          <center><input type="submit"  value="Ver" target="blank" class="btn btn-dark"></center></td>
          </tr>
           </form>
</nav>
</tbody>
</table>

{{ $vacacions->links()}}
</div>
@endsection