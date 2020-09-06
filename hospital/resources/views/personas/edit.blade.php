@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ url('/personas/' .$persona->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('personas.form',['Modo'=>'modificar'])
</form>
</div>
@endsection