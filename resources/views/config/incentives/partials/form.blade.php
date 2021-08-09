<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del estimulo']) !!}
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del post', 'readonly']) !!}
    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('desc', 'Cuerpo:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción del estímulo']) !!}
    @error('desc')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el link del estímulo']) !!}
    @error('link')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper"> 
            @isset ($incentive->image)
            <img id="picture" src="{{Storage::url($incentive->image->url)}}"
            alt="">
            @else
            <img id="picture" src="https://cdn.pixabay.com/photo/2017/03/27/14/49/beach-2179183_1280.jpg"
            alt="">
            @endisset

        </div>

    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrara en el estímulo') !!}
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



