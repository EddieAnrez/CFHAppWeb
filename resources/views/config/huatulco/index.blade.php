@extends('adminlte::page')

@section('title', 'Edición Info. Huatulco')

@section('content_header')
     <h1>Edición Info. Huatulco</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    <strong> {{ session('info') }}</strong>
</div>


@endif
<div class="card">

<div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr></tr>
            <th>ID</th>
            <th>Sección</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($sections as $section)
                <tr>
                    <td>{{ $section->id }}</td>
                    <td>{{ $section->section }}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{route('config.huatulco.edit',$section)}}"><i class="fas fa-edit mr-1"></i>Editar</a>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>

</div>
</div>
 

    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop