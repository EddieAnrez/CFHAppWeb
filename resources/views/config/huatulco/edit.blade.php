@extends('adminlte::page')

@section('title', 'Editar Post')

@section('content_header')
    <h1>Editar Sección</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>

        </div>

    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($section, ['route' => ['config.huatulco.update', $section], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('section', 'Sección:') !!}
                {!! Form::text('section', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la sección']) !!}
                @error('section')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Descripción') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                @error('body')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>


            <div class="row mb-3">
                <div class="col">
                    <div class="image-wrapper"> 
                        @isset ($section->image)
                        <img id="picture" src="{{Storage::url($section->image->url)}}"
                        alt="">
                        @else
                        <img id="picture" src="https://cdn.pixabay.com/photo/2017/03/27/14/49/beach-2179183_1280.jpg"
                        alt="">
                        @endisset
            
                    </div>
            
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'Imagen que se mostrara en la sección') !!}
                        {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                        @error('file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
            
                    </div>
            
            
            
            
                    <p class="m-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius obcaecati est amet
                        necessitatibus sunt
                        nobis laudantium optio ut architecto odio? Ipsam sequi impedit quae eligendi optio qui quia eveniet
                        expedita?</p>
                </div>
            </div>
            

            {!! Form::submit('Actualizar Sección', ['class' => 'btn  btn-primary']) !!}
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
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
    
    <script>
        

        ClassicEditor
            .create(document.querySelector('#body'))
            .catch(error => {
                console.error(error);
            });

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