<div class="form-group">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el link del enlace']) !!}
    @error('link')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('img', 'Link de Imagen:') !!}
    {!! Form::text('img', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el link de la imagen enlace']) !!}
    @error('img')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

{{-- <div class="row mb-3">
    <div class="col">
        <div class="image-wrapper"> 
            @isset ($link->image)
            <img id="picture" src="{{Storage::url($link->image->url)}}"
            alt="">
            @else
            <img id="picture" src="https://cdn.pixabay.com/photo/2017/03/27/14/49/beach-2179183_1280.jpg"
            alt="">
            @endisset

        </div>

    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrara en el enlace') !!}
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
</div> --}}



