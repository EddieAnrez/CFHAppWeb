@extends('adminlte::page')

@section('title', 'Lista de Servicios')

@section('content_header')
<a href="{{ route('config.services.create') }}" class="btn btn-secondary float-right">Nuevo Servicio</a>
     <h1>Lista de Servicios</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{ session('info') }}</strong>

</div>

@endif

@livewire('config.services-index') 

 

    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop