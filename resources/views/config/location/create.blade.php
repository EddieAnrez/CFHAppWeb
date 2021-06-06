@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
     <h1>Crear Locación</h1>
@stop

@section('content') 

<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=> 'config.locations.store','autocomplete'=>'off', 'files'=>true]) !!}
        

        @include('config.location.partials.form')


        {!! Form::submit('Crear Locación', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
    
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
    
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}">  </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>
    <script>
    $(document).ready( function() {
        $("#name").stringToSlug({
          setEvents: 'keyup keydown blur',
          getPut: '#slug',
          space: '-'
        });
      });

      ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#features' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#contact' ) )
        .catch( error => {
            console.error( error );
        } );


        document.getElementById("file").addEventListener('change', cambiarImagen);
           function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        } 



        document.getElementById("file1").addEventListener('change', cambiarImagen1);
           function cambiarImagen1(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture1").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        } 



        document.getElementById("file2").addEventListener('change', cambiarImagen2);
           function cambiarImagen2(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture2").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        } 

        document.getElementById("file3").addEventListener('change', cambiarImagen3);
           function cambiarImagen3(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture3").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        } 

        document.getElementById("file4").addEventListener('change', cambiarImagen4);
           function cambiarImagen4(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture4").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        } 

    </script>
@stop