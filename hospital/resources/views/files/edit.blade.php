@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ url('/files/' .$file->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('files.form',['Modo'=>'modificar'])
</form>
</div>
@endsection