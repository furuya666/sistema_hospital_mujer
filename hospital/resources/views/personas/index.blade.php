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
  <a href="{{ url('personas')}}" class=" btn btn-secondary my-2 my-sm-0">Volver Atras</a>
    <input  name="Buscador"class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" autocomplete="off">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>

</br>
<style>

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
            <th class="a">Nombre</th>
            <th class="b">Apellido Paterno</th>
            <th class="c">Apellido Materno</th>
            <th class="d">Cumpleaños</th>
            <th class="e">Telefono</th>
            <th>Accion</th>
            <th>Reporte</th>
        </tr>
    </thead>
    <tbody>
        @foreach($personas as $persona)
        <tr>
            
            <td>{{$loop->iteration}}</td>
            <td>{{$persona->id}}</td>
            <td class="a">{{$persona->nombre}}</td>
            <td class="b">{{$persona->apellido_paterno}}</td>
            <td class="c">{{$persona->apellido_materno}}</td>
            <td class="d">{{$persona->dia}} {{$persona->mes}}</td>
            <td class="e">{{$persona->telefono}}</td>
           
           
            <td>
                <a href="{{url('/personas/'.$persona->id.'/edit')}}" class=" btn btn-dark">Editar</a>
            </td>
            <td> <a href="{{ url('/personas/' .$persona->id) }}"class=" btn btn-dark" target="blank" >Ver</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $personas->links()}}
</div>
@endsection