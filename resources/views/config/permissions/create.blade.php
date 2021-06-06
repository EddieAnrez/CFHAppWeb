@extends('adminlte::page')

@section('title', 'Comisión Fílmica de Huatulco - Configuración - Trámites y Servicios')

@section('content_header')
    <h1>Crear Trámite/Servicio</h1> 
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=> 'config.permissions.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre del Trámite/Servicio']) !!}
                @error('name')
                    <span class="text-danger">{{ $message }}</span>

                @enderror

            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug:') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Trámite/Servicio', 'readonly']) !!}
                @error('slug')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('desc', 'Descripción') !!}
                {!! Form::textarea('desc', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción del Trámite/Servicio']) !!}
                @error('desc')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>



            <div class="form-group">
                {!! Form::label('url', 'URL') !!}
                {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de la URL del Trámite/Servicio']) !!}
                @error('url')
                    <span class="text-danger">{{ $message }}</span>

                @enderror

            </div>
            {!! Form::submit('Crear Trámite/Servicio', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"> </script>
<script>
    $(document).ready(function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });
@stop


