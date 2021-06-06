@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    
    <h1>Revisar Formulario Contacto</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong> {{ session('info') }}</strong>
        </div>


    @endif

    <div class="card">
   
        <div class="card-body">
            {!! Form::model($contact,['route'=> ['config.contacts.update',$contact],'autocomplete'=>'off', 'files'=>true,'method'=>'put']) !!}
           
            <div class="form-group">
              {!! Form::label('name', 'Nombre') !!}
              {!! Form::text('name', NULL, ['class'=>'form-control', 'autocomplete'=>'nope', 'readOnly']) !!}
              
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Correo Electrónico') !!}
                {!! Form::text('email', NULL, ['class'=>'form-control', 'autocomplete'=>'nope', 'readOnly']) !!}
                
              </div>

            <div class="form-group">
                {!! Form::label('body','Mensaje') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control', 'readOnly']) !!}
                
            
            </div>

            <div class="form-group">
                {!! Form::label('status', 'Cambiar Status') !!}
               {{--  {!! Form::select('status', $status, null, ['class' => 'form-control']) !!} --}}

                {!! Form::select('status', [
                    'Sin Leer' => 'Sin Leer',
                    'Leido' => 'Leido',
                    'Resuelto' => 'Resuelto',
                    
                ], null, ['class' => 'form-control']) !!}

                




                @error('status')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                
                @if ($contact->assigned_user_id)
                {!! Form::label('assigned_user_id','Usuario Asignado') !!}
                {!! Form::text('assigned_user_id', null, ['class'=>'form-control', 'readOnly']) !!}
                @else
                {!! Form::label('assigned_user_id','Usuario Actual') !!}
                 {!! Form::text('assigned_user_id', auth()->user()->id, ['class'=>'form-control', 'readOnly']) !!}
                @endif
                
               
             </div>
            
    
    
            {!! Form::submit('Actualizar Formulario', ['class'=>'btn btn-primary']) !!}
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