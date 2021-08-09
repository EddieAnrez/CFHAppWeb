@extends('adminlte::page')

@section('title', 'Editar Enlace')

@section('content_header')
    <h1>Editar Enlace</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>

        </div>

    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($live, ['route' => ['config.live.update', $live], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}
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
                            
                        
            

            

            {!! Form::submit('Actualizar Transmisión', ['class' => 'btn  btn-primary']) !!}


            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
   
@stop


