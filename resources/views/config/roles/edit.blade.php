@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Editar Rol</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}

        </div>

    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($role, ['route' => ['config.roles.update', $role], 'method' => 'put']) !!}
            @include('config.roles.partials.form')
            {!! Form::submit('Editar Rol', ['class' => 'btn btn-primary']) !!}

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
