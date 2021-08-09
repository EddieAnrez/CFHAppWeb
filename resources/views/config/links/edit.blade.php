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
            {!! Form::model($link, ['route' => ['config.links.update', $link], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}
            {!! Form::hidden('user_id', auth()->user()->id) !!}

            @include('config.links.partials.form')

            {!! Form::submit('Actualizar Enlace', ['class' => 'btn  btn-primary']) !!}


            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
            border: 0.5em;
            border-color: black;
        }

    </style>
@stop

@section('js')
    <script>
        //Cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }

    </script>
@stop
