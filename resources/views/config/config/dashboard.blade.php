@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <a href="{{ route('config.config.create') }}" class="btn btn-secondary float-right">Nueva Difusión</a>
    <h1>Listado de Difusiones</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong> {{ session('info') }}</strong>
        </div>
    @endif
    @livewire('config.post-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
       
    </script>
@stop
