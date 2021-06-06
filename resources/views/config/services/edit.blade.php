@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Editar Servicio</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            
            {!! Form::model($service, ['route' => ['config.services.update', $service], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}
            

            @include('config.services.partials.form')
            
            {!! Form::submit('Actualizar Servicio', ['class' => 'btn  btn-primary']) !!}


            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    
@stop

@section('js')
    
    
@stop