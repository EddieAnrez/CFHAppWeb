@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Crear Área</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=> 'config.areas.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!} 
                {!! Form::text('name', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de el àrea']) !!}
                 @error('name')
                 <span class="text-danger">{{$message}}</span>
    
                 @enderror

            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese el slug de el àrea','readOnly']) !!}
                @error('slug')
                <span class="text-danger">{{$message}}</span>
   
                @enderror
            
            </div>
            {!! Form::submit('Crear Área', ['class'=>'btn btn-primary']) !!}
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