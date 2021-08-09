@extends('adminlte::page')

@section('title', 'Crear Difusión')

@section('content_header')
     <h1>Crear Difusión</h1> 
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong> {{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=> 'config.config.store']) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}


            <div class="form-group">
                {!! Form::label('title', 'Título') !!} 
                {!! Form::text('title', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese el título del mensaje']) !!}
                 @error('title')
                 <span class="text-danger">{{$message}}</span> 
    
                 @enderror 

            </div>
            <div class="form-group">
                {!! Form::label('body', 'Mensaje') !!}
                {!! Form::textarea('body', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese el mensaje']) !!}
                @error('body')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>
            {!! Form::submit('Crear Mensaje', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
       
    </script> 
@stop