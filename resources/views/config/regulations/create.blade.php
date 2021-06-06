@extends('adminlte::page')

@section('title', 'Comisión Fílmica de Huatulco - Configuración - Leyes y Reglamentos')

@section('content_header')
    <h1>Crear Ley/Reglamento</h1> 
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=> 'config.regulations.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de la Ley/Reglamento']) !!}
                @error('name')
                    <span class="text-danger">{{ $message }}</span>

                @enderror

            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug:') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la Ley/Reglamento', 'readonly']) !!}
                @error('slug')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('desc', 'Descripción') !!}
                {!! Form::textarea('desc', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción de la Ley/Reglamento']) !!}
                @error('desc')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>



            <div class="form-group">
                {!! Form::label('url', 'URL') !!}
                {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de la URL de la Ley/Reglamento']) !!}
                @error('url')
                    <span class="text-danger">{{ $message }}</span>

                @enderror

            </div>
            {!! Form::submit('Crear Ley/Reglamento', ['class'=>'btn btn-primary']) !!}
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


