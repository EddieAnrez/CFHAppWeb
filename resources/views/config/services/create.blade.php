@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Crear Nuevo Servicio</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'config.services.store', 'autocomplete' => 'off', 'files' => true]) !!}
            

            @include('config.services.partials.form')
            
            {!! Form::submit('Crear Servicio', ['class' => 'btn  btn-primary']) !!}


            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    
@stop

@section('js')
    
    
@stop
