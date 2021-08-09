@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Registrar Usuario</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

           {{--  {!! Form::open(['route' => 'config.users.store', 'autocomplete' => 'off']) !!} --}}
            {!!Form::open(['route'=>'config.users.store', 'autocomplete' => 'off'])!!}
           {{--  {{ method_field('POST') }}
            @csrf --}}

            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del usuario']) !!}
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Correo Electrónico') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo electrónico del usuario']) !!}
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            
           

            <div class="form-group">
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la contraseña del usuario']) !!}
                <a data-toggle="modal" data-target="#exampleModal" href="http://"><i class="fas fa-question-circle"></i></a>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Requisitos Contraseña</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <ul>
                              <li>Al menos 6 caracteres</li>
                              <li>Al menos una mayúscula [A-Z]</li>
                              <li>Al menos una minúscula [a-z]</li>
                              <li>Al menos un dígito [0-9]</li>
                              <li>Al menos un caracter especial [@$!%*#?&]</li> 
                          </ul>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                {!! Form::label('password_confirm', 'Confirmar Contraseña') !!}
                {!! Form::password('password_confirm', null, ['class' => 'form-control','placeholder' => 'Ingrese la contraseña del usuario']) !!}
                
                @error('password_confirm')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                
            </div>
            
            {!! Form::submit('Crear Usuario', ['class' => 'btn btn-primary']) !!}
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
