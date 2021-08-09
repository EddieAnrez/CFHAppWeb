@extends('adminlte::page')

@section('title', 'Nueva Configuración')

@section('content_header')
    <h1>Nueva Configuración</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'config.live.store', 'autocomplete' => 'off']) !!}
            
    <div class="form-group">
    {!! Form::label('id_youtube', 'ID Youtube') !!}
    {!! Form::text('id_youtube', null, ['class'=>'form-control', 'placeholder'=> 'Ingrese ID Youtube']) !!}
    @error('id_youtube')
        <small class="text-danger">
            {{$message}}
        </small>
    @enderror

    </div>
    <div class="form-group">
        {!! Form::label('website', 'Dominio') !!}
        {!! Form::text('website', null, ['class'=>'form-control', 'placeholder'=> 'Ingrese Dominio']) !!}
        @error('website')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
    
        </div>
        <div class="form-group">
            {!! Form::label('descripcion', 'Descripcíon') !!}
            {!! Form::textarea('descripcion', null, ['class'=>'form-control', 'placeholder'=> 'Ingrese Descripcíon']) !!}
            @error('descripcion')
                <small class="text-danger">
                    {{$message}}
                </small>
            @enderror
        
            </div>
            <div class="form-group">
                {!! Form::label('link', 'Link para Compartir') !!}
                {!! Form::text('link', null, ['class'=>'form-control', 'placeholder'=> 'Ingrese Link' ]) !!}
                @error('link')
                    <small class="text-danger">
                        {{$message}}
                    </small>
                @enderror
            
                </div>
                
            

            
            
            {!! Form::submit('Crear Configuración', ['class' => 'btn  btn-primary']) !!}


            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    
@stop

@section('js')
   
@stop
