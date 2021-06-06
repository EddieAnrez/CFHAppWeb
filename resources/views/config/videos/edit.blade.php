@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
     <h1>Editar Video</h1>
@stop

@section('content')

<div class="card"> 
    <div class="card-body">
        {!! Form::model($video,['route'=>  ['config.videos.update',$video],'autocomplete'=>'off','method'=>'put' ]) !!}
       

        @include('config.videos.partials.form')


        {!! Form::submit('Actualizar Video', ['class'=>'btn btn-primary']) !!}
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