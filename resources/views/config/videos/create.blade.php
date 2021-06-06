@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
     <h1>Crear Video</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=> 'config.videos.store','autocomplete'=>'off', 'files'=>true]) !!}

        
        

        @include('config.videos.partials.form')


        {!! Form::submit('Crear Video', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
 

    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop