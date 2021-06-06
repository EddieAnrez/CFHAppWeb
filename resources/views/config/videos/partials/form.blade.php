<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
   {!! Form::text('name', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre del video', 'autocomplete'=>'nope']) !!}
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror 
</div>

<div class="form-group">
    {!! Form::label('desc','Descripción') !!}
    {!! Form::textarea('desc', null, ['class'=>'form-control']) !!}
    @error('desc')
    <small class="text-danger">{{$message}}</small>
@enderror

</div>




<div class="form-group">
    {!! Form::label('url', 'Codigo Video') !!}
   {!! Form::text('url', NULL, ['class'=>'form-control', 'placeholder'=>'Ingrese el codigo del video de Youtube', 'autocomplete'=>'nope']) !!}
    @error('url')
        <small class="text-danger">{{$message}}</small>
    @enderror 
</div>

<hr class="my-4">
<div class="form-group">
    <p class="font-weight-bold">Estado</p>
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

