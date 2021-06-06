@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{route('config.videos.create')}}">Nuevo Video</a>
     <h1>Lista de Videos</h1>
@stop

@section('content')
@if(session('info'))
 <div class="alert alert-success">
     <strong>{{session('info')}}</strong>
 </div>
@endif

@livewire('config.video-index')  

 
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop