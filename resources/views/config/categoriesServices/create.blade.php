@extends('adminlte::page')

@section('title', 'Crear Categoría Servicios')

@section('content_header')
    <h1>Crear Categoría Servicios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=> 'config.categoriesServices.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!} 
                {!! Form::text('name', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de la categoria']) !!}
                 @error('name')
                 <span class="text-danger">{{$message}}</span>
    
                 @enderror

            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese el slug de la categoria','readOnly']) !!}
                @error('slug')
                <span class="text-danger">{{$message}}</span>
   
                @enderror
            
            </div>
            {!! Form::submit('Crear Categoría', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}">  </script>
    <script>
    $(document).ready( function() {
        $("#name").stringToSlug({
          setEvents: 'keyup keydown blur',
          getPut: '#slug',
          space: '-'
        });
      });
    </script>
@stop