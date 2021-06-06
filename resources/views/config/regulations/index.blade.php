@extends('adminlte::page')

@section('title', 'Comisión Fílmica de Huatulco - Configuración - Leyes y Reglamentos')

@section('content_header')
    <a href="{{ route('config.regulations.create') }}" class="btn btn-secondary float-right">Nueva Ley - Reglamento</a>
    <h1>Listado de Leyes y Reglamentos</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong> {{ session('info') }}</strong>
        </div>
    @endif
    @livewire('config.regulation-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop