@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <a href="{{ route('config.posts.create') }}" class="btn btn-secondary float-right">Nuevo Post</a>
    <h1>Listado de Posts</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong> {{ session('info') }}</strong>
        </div>
    @endif
    @livewire('config.post-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
