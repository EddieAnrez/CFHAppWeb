<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
   {!! Form::text('name', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de la locación', 'autocomplete'=>'nope']) !!}
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror 
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
   {!! Form::text('slug', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese el slug de la locación','readOnly']) !!}
   @error('slug')
   <small class="text-danger">{{$message}}</small>
@enderror
</div>
<div class="form-group">
    {!! Form::label('adress', 'Dirección') !!}
   {!! Form::text('adress', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese la dirección de la locación']) !!}
   @error('adress')
   <small class="text-danger">{{$message}}</small>
@enderror
</div>

<div class="form group">
    {!! Form::label('category_id','Categoría') !!}
    {!! Form::select('category_id', $categories,null, ['class'=>'form-control']) !!}
    @error('category_id')
    <small class="text-danger">{{$message}}</small>
@enderror
</div>
<div class="form group">
    {!! Form::label('area_id','Área') !!}
    {!! Form::select('area_id', $areas,null, ['class'=>'form-control']) !!}
    @error('area_id')
    <small class="text-danger">{{$message}}</small>
@enderror
</div>
<hr class="my-4">
<div class="form-group">
    {!! Form::label('body','Descripción') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
    @error('body')
    <small class="text-danger">{{$message}}</small>
@enderror

</div>
<div class="form-group">
    {!! Form::label('features','Características') !!}
    {!! Form::textarea('features', null, ['class'=>'form-control']) !!}
    @error('features')
    <small class="text-danger">{{$message}}</small>
@enderror

</div>
<div class="form-group">
    {!! Form::label('contact','Contacto') !!}
    {!! Form::textarea('contact', null, ['class'=>'form-control']) !!}
    @error('contac')
    <small class="text-danger">{{$message}}</small>
@enderror

</div>
<hr class="my-4">
<div class="form-group">
    {!! Form::label('latlocation', 'Latitud Locación') !!}
   {!! Form::text('latlocation', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese la latitud de la locación']) !!}
   @error('latlocation')
   <small class="text-danger">{{$message}}</small>
@enderror
</div>
<div class="form-group">
    {!! Form::label('lonlocation', 'Longitud Locación') !!}
   {!! Form::text('lonlocation', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese la longitud de la locación']) !!}
   @error('lonlocation')
   <small class="text-danger">{{$message}}</small>
@enderror
</div>
<hr class="my-4">
<div class="form-group">
    {!! Form::label('facebook', 'Link de Facebook ') !!}
   {!! Form::text('facebook', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese el link de Facebook de la locación']) !!}
</div>
<div class="form-group">
    {!! Form::label('twitter', 'Link de Twitter') !!}
   {!! Form::text('twitter', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese el link de Twitter de la locación']) !!}
</div>
<div class="form-group">
    {!! Form::label('youtube', 'Link de Youtube') !!}
   {!! Form::text('youtube', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese el link de Youtube de la locación']) !!}
</div>
<div class="form-group">
    {!! Form::label('website', 'Link de Website') !!}
   {!! Form::text('website', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese el link del sitio web de la locación']) !!}
</div>
<hr class="my-4">
<div class="form-group">
    <p class="font-weight-bold">Estado de Publicación</p>
    <label for="">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label for="">
        {!! Form::radio('status', 2, false) !!}
        Publicado
    </label>
    
    @error('status')
    <br>
    <small class="text-danger">{{$message}}</small>
@enderror
</div>

<hr class="my-4">

<div class="form-group">
    <p class="font-weight-bold">Mostrar En Mapa</p>
    <label for="">
        {!! Form::radio('showInMap', 1, true) !!}
        Mostrar
    </label>
    <label for="">
        {!! Form::radio('showInMap', 2, false) !!}
        No Mostrar
    </label>
    @error('showInMap')
    <br>
    <small class="text-danger">{{$message}}</small> 
@enderror
</div>

<hr class="mt-4 mb-10">

<div class="row my-2">
    <div class="col">
        <div class="image-wrapper">
            @if(isset($images[0]))
            <img id="picture" src="{{Storage::url($images[0]->url)}}" >
            @else
            <img id="picture" src="{{ asset('storage/cfh_white.jpg') }}" alt="">
            @endif

        </div>
        
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrará de portada') !!}
            {!! Form::file('file', ['class'=> 'form-control-file','accept'=>'image/*']) !!}
        </div>
        @error('file')
        <span class="text-danger">{{$message}}</span>
            
        @enderror

    </div>
</div>



<div class="row my-2">
    <div class="col">
        <div class="image-wrapper">
            @if(isset($images[1]))
            <img id="picture1" src="{{Storage::url($images[1]->url)}}" >
            @else
            <img id="picture1" src="{{ asset('storage/cfh_white.jpg') }}" alt="">
            @endif

        </div>
        
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file1', 'Imagen adicional 1') !!}
            {!! Form::file('file1', ['class'=> 'form-control-file','accept'=>'image/*']) !!}
           
        </div>
        @error('file1')
        <span class="text-danger">{{$message}}</span>
            
        @enderror

    </div>
</div>

<div class="row my-2">
    <div class="col">
        <div class="image-wrapper">
            @if(isset($images[2]))
            <img id="picture2" src="{{Storage::url($images[2]->url)}}" >
            @else
            <img id="picture2" src="{{ asset('storage/cfh_white.jpg') }}" alt="">
            @endif

        </div>
        
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file2', 'Imagen adicional 2') !!}
            {!! Form::file('file2', ['class'=> 'form-control-file','accept'=>'image/*']) !!}
        </div>
        @error('file2')
        <span class="text-danger">{{$message}}</span>
            
        @enderror

    </div>
</div>

<div class="row my-2">
    <div class="col">
        <div class="image-wrapper">
            @if(isset($images[3]))
            <img id="picture3" src="{{Storage::url($images[3]->url)}}" >
            @else
            <img id="picture3" src="{{ asset('storage/cfh_white.jpg') }}" alt="">
            @endif

        </div>
        
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file3', 'Imagen adicional 3') !!}
            {!! Form::file('file3', ['class'=> 'form-control-file','accept'=>'image/*']) !!}
        </div>
        @error('file3')
        <span class="text-danger">{{$message}}</span>
            
        @enderror

    </div>
</div>

<div class="row my-2">
    <div class="col">
        <div class="image-wrapper">
            @if(isset($images[4]))
            <img id="picture4" src="{{Storage::url($images[4]->url)}}" >
            @else
            <img id="picture4" src="{{ asset('storage/cfh_white.jpg') }}" alt="">
            @endif

        </div>
        
    </div> 
    <div class="col">
        <div class="form-group">
            {!! Form::label('file4', 'Imagen adicional 4') !!}
            {!! Form::file('file4', ['class'=> 'form-control-file','accept'=>'image/*']) !!}
        </div>
        @error('file4')
        <span class="text-danger">{{$message}}</span>
            
        @enderror

    </div>
</div>


