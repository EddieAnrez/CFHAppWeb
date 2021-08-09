@extends('adminlte::page')

@section('title', 'Editar Área')

@section('content_header')
    <h1>Editar Área</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>

        </div>

    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($area, ['route' => ['config.areas.update', $area], 'method' => 'put']) !!}
            
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de el área']) !!}
                @error('name')
                    <span class="text-danger">{{ $message }}</span>

                @enderror

            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Slug de el área', 'readOnly']) !!}
                @error('slug')
                    <span class="text-danger">{{ $message }}</span>

                @enderror

            </div>
            {!! Form::submit('Actualizar Área', ['class' => 'btn btn-primary']) !!}
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

    </script>
@stop
