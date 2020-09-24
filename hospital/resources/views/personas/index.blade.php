@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('Mensaje'))
    <div class="alert alert-secondary" role="alert">
  {{ Session::get('Mensaje') }}  
    </div>

@endif
<div class="g">
<a href="{{ url('personas/create')}}" class="btn btn-success">Agregar Personal</a>
<a href="{{ url('vacacions')}}" class="btn btn-primary">Vacaciones</a>
<a href="{{url('faltas')}}" class=" btn btn-warning">Faltas</a>
<a href="{{ url('permisos')}}" class="btn btn-danger" >Permisos</a>
<a href="{{url('files')}}" class=" btn btn-info" >Files</a>
</div>
</br>
     
   <nav class="navbar navbar-light float-right">
  <form class="form-inline">
  <a href="{{ url('personas')}}" class="btn btn-dark">Atras</a>
    <input  name="Buscador"class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" autocomplete="off">
   
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
<style>
.r{
  background: #008840 ;
}
.t{
  background:#790DB8 ;
}

@media all and (max-width: 630px){
       .a{
           display: none;
       }
       .b{
           display: none;
       }
       .c{
           display: none;
       }
       .d{
           display: none;
       }
       .e{
           display: none;
       }
       .g{
           display: flex;
           flex-direction: column wrap;
           justify-content: space-around;
       }
      
    }
    @media all and (max-width: 730px){
        .c{
           display: none;
       }
       .d{
           display: none;
       }
       .e{
           display: none;
       }
    }
    @media all and (max-width: 430px){
        .c{
           display: none;
       }
       .d{
           display: none;
       }
       .e{
           display: none;
       }
       .g{
           display: flex;
           flex-direction: column;
           
       }
    }
    @media all and (max-width: 930px){
       
        .c{
           display: none;
       }
        .d{
           display: none;
       }
       .e{
           display: none;
       }
    }
    @media all and (max-width: 1030px){
      
        .c{
           display: none;
       }
        .d{
           display: none;
       }
       .e{
           display: none;
       }
    }
</style>
<br>
<br>
<table class="table table-light table-hover">
<center><h2>PERSONAL DEL HOSPITAL DE LA MUJER</h2></center>
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>CI</th>
            <th class="a">Nombre Completo</th>
            <th class="b">Especialidad</th>
            <th class="d">Cumpleaños</th>
            <th class="e">Telefono</th>
            
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($personas as $persona)
        <tr>
            
            <td>{{$loop->iteration}}</td>
            <td>{{$persona->id}}</td>
            <td class="a">{{$persona->nombre}} {{$persona->apellido_paterno}} {{$persona->apellido_materno}}</td>
           <td class="b">{{$persona->tipo}}</td>
            <td class="d">{{$persona->cumpleaños}}</td>
            <td class="e">{{$persona->telefono}}</td>
           
           
            <td>
                <a href="{{url('/personas/'.$persona->id.'/edit')}}" class=" btn btn-dark">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $personas->links()}}
<table class="table table-light table-hover">    
    <h2><center>Reporte General Del Personal Telefonos</center></h2>
    <thead class="thead-light">
        <tr>
            <th><center>Especialidad</center></th>
            <th><center>Reporte</center></th>
        </tr>
    </thead>
    <tbody>
    <tr>
             <td class="r">
  
  <form action=" {{url('/personas/index')}}">
    <select name="Buscador1" id="Buscador1"  class="form-control mr-sm-2" required autocomplete="off">
           <option value="" selected="selected"  >Seleccione una Especialidad</option>
           <option value="1">Urologia</option>
           <option value="2">Dermatologia</option>
           <option value="3">Oftalmologia</option>
           <option value="4">Traumatologia</option>
        </select>

</td>

    <td class="r">
    <center><button class="btn btn-dark" type="submit">Reporte</button></center></td>
  </form>

</tr>
</tbody>
</table>
</div>
@endsection