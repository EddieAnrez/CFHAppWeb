@extends('adminlte::page')

@section('title', 'Comisión Fílmica de Huatulco - Configuración - Trámites y Servicios')

@section('content_header')
    <a href="{{ route('config.permissions.create') }}" class="btn btn-secondary float-right">Nuevo Trámite - Servicio</a>
    <h1>Listado de Trámites y Servicios</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong> {{ session('info') }}</strong>
        </div>
    @endif
    @livewire('config.permission-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop