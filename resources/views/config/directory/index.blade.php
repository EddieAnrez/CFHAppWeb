@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
     <h1>Editar Directorio</h1>
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
                    <th>Posición</th>
                    <th>Nombre</th>
                    <th></th>

                </thead>
                <tbody>
                    @foreach ($directories as $directory)
                        <tr>
                            <td>{{ $directory->pos }}</td>
                            <td>{{ $directory->user->name }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{route('config.directory.edit',$directory)}}"><i class="fas fa-edit mr-1"></i>Editar</a>
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