@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ url('/vacacions/' .$vacacion->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('vacacions.form',['Modo'=>'modificar'])
</form>
</div>
@endsection