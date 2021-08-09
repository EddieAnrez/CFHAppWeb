@extends('adminlte::page')

@section('title', 'Edicion Acerca de')

@section('content_header')
     <h1>Edición Información - Acerca de la Comisión Fílmica de Huatulco</h1>
@stop

@section('content')
@if (session('info'))
        <div class="alert alert-success">
            <strong> {{ session('info') }}</strong>
        </div>

@endif

<div class="card">
    <div class="card-body">
        {!! Form::model($about, ['route' => ['config.about.update', $about], 'method' => 'put']) !!}
        
        <div class="form-group">
            {!! Form::label('main', 'Principal') !!}
            {!! Form::textarea('main', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de el área']) !!}
            @error('main')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('mision', 'Misión') !!}
            {!! Form::textarea('mision', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de el área']) !!}
            @error('mision')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('goal', 'Objetivo') !!}
            {!! Form::textarea('goal', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de el área']) !!}
            @error('goal')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('local', 'Acción Local') !!}
            {!! Form::textarea('local', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de el área']) !!}
            @error('local')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        
        <div class="form-group">
            {!! Form::label('exterior', 'Acción Exterior') !!}
            {!! Form::textarea('exterior', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de el área']) !!}
            @error('exterior')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('difusion', 'Acción Difusión') !!}
            {!! Form::textarea('difusion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de el área']) !!}
            @error('difusion')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        {!! Form::submit('Actualizar Información', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>


    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
<script>
       ClassicEditor
            .create(document.querySelector('#main'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#mision'))
            .catch(error => {
                console.error(error);
            });

            ClassicEditor
            .create(document.querySelector('#goal'))
            .catch(error => {
                console.error(error);
            });

            ClassicEditor
            .create(document.querySelector('#local'))
            .catch(error => {
                console.error(error);
            });

            ClassicEditor
            .create(document.querySelector('#exterior'))
            .catch(error => {
                console.error(error);
            });

            ClassicEditor
            .create(document.querySelector('#difusion'))
            .catch(error => {
                console.error(error);
            });
</script>
@stop 