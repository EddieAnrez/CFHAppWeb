@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Editar Elemento Directorio</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>

        </div>

    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($directory, ['route' => ['config.directory.update', $directory], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}
            
            <div class="form-group">
                {!! Form::label('pos', 'Posición:') !!}
                {!! Form::text('pos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la posición']) !!}
                @error('pos')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Descripción:') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción de la posición']) !!}
                @error('body')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('user_id', 'Usuario Asociado') !!}
                {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
                @error('user_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
           

            {!! Form::submit('Actualizar Elemento', ['class' => 'btn  btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
