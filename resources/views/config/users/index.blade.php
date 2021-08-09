@extends('adminlte::page')

@section('title', 'Lista de Usuarios')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{ route('config.users.create') }}">Nuevo Usuario</a>
    <h1>Lista de Usuarios</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    @livewire('config.users-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
