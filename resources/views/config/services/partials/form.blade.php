<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del servicio']) !!}
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('contact', 'Nombre de contacto:') !!}
    {!! Form::text('contact', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del contacto del servicio']) !!}
    @error('contact')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('adress', 'Dirección:') !!}
    {!! Form::text('adress', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dirección del servicio']) !!}
    @error('adress')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('phone', 'Telefono:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono del servicio']) !!}
    @error('phone')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('email', 'Correo Electrónico:') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el email del servicio']) !!}
    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('website', 'Sitio Web:') !!}
    {!! Form::text('website', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el email del servicio']) !!}
    @error('website')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('desc', 'Descripción:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción del servicio']) !!}
    @error('desc')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<hr>
<div class="form-group">
    {!! Form::label('facebook', 'Link Facebook:') !!}
    {!! Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el facebook del servicio']) !!}
    @error('facebook')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('twitter', 'Link Twitter:') !!}
    {!! Form::text('twitter', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el twitter del servicio']) !!}
    @error('twitter')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>



<div class="form-group">
    {!! Form::label('instagram', 'Link Instagram:') !!}
    {!! Form::text('instagram', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el instagram del servicio']) !!}
    @error('instagram')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('youtube', 'Link Youtube:') !!}
    {!! Form::text('youtube', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el youtube del servicio']) !!}
    @error('youtube')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('pinterest', 'Link Pinterest:') !!}
    {!! Form::text('pinterest', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el pinterest del servicio']) !!}
    @error('pinterest')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<hr>
<div class="form-group">
    {!! Form::label('subcategory_id', 'Sub Categoria') !!}
    {!! Form::select('subcategory_id', $subcategories, null, ['class' => 'form-control']) !!}
    @error('subcategory_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>