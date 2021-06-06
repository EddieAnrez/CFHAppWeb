@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
     <h1>Detalle de Locación</h1>
@stop

@section('content')

@livewire('config.config-index')

 

    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop