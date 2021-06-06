@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('config.locations.create')}}">Nueva Locación</a>
     <h1>Listado de Locaciones</h1>
@stop

@section('content')
@if (session('info'))
        <div class="alert alert-success">
            <strong> {{ session('info') }}</strong>
        </div>


    @endif

@livewire('config.locations-index')
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop