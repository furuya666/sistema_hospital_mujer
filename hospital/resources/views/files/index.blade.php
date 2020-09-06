@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('Mensaje'))
    <div class="alert alert-secondary" role="alert">
  {{ Session::get('Mensaje') }}  
    </div>

@endif
<a href="{{ url('personas')}}" class="btn btn-success"> Volver Atras</a>
<a href="{{url('/files/create/')}}" class=" btn btn-info">Agregar File</a>
</br>
<br>
   <nav class="navbar navbar-light float-right">
  <form class="form-inline">
  <a href="{{ url('files')}}" class=" btn btn-secondary my-2 my-sm-0">Volver Atras</a>
    <input  name="Buscador"class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" autocomplete="off">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
</br>

<table class="table table-light table-hover">
<center><h2>REGISTRO DE FILES DEL PERSONAL</h2></center>
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>CI</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>PDF</th>
            <th>Accion</th>
            <th>Reporte</th>
        </tr>
    </thead>
    <tbody>
        @foreach($files as $file)
        <tr>
           
            <td>{{$loop->iteration}}</td>
            <td>{{$file->persona_id}}</td>
            <td>{{$file->nombre}}</td>
            <td>{{$file->apellido_paterno}}</td>
            <td>{{$file->apellido_materno}}</td>
            <td><a href="{{ asset('storage').'/'.$file->pdf}}"><i class="fas fa-file-pdf"></i></a></td>
            
            
            <td>
                <a href="{{url('/files/'.$file->id .'/edit')}}" class=" btn btn-dark">Editar</a>
            </td>
            <td> <a href="{{ url('/files/' .$file->id) }}" target="blank" class=" btn btn-dark">Ver</a></td>
        </tr>
        @endforeach
   
    </tbody>
</table>

{{ $files->links()}}
</div>
@endsection