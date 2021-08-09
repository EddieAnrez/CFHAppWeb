@extends('adminlte::page')

@section('title', 'Crear Sub Categoría Servicios')

@section('content_header')
    <h1>Crear Sub Categoría Servicios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=> 'config.subCategoriesServices.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!} 
                {!! Form::text('name', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de la sub categoría']) !!}
                 @error('name')
                 <span class="text-danger">{{$message}}</span>
    
                 @enderror

            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese el slug de la sub categoría','readOnly']) !!}
                @error('slug')
                <span class="text-danger">{{$message}}</span>
   
                @enderror
            
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Pertenece a Categoría') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                @error('category_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            {!! Form::submit('Crear Sub Categoría', ['class'=>'btn btn-primary']) !!}
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