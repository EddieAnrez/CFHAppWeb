@extends('adminlte::page')

@section('title', 'Lista Categorías Locación')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{ route('config.locationCategories.create') }}">Agregar Categoría Locación</a>
    <h1>Lista Categorías Locación</h1>
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
                    <th>Nombre</th>
                    <th colspan="2"></th>

                </thead>
                <tbody>
                    @foreach ($locationCategories as $locationCategory)
                        <tr>
                            <td>{{ $locationCategory->id }}</td>
                            <td>{{ $locationCategory->name }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{route('config.locationCategories.edit',$locationCategory)}}"><i class="fas fa-edit mr-1"></i>Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('config.locationCategories.destroy', $locationCategory) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm d-inline-flex d-flex align-items-center"><i class="fas fa-trash-alt mr-1"></i>Eliminar</button>
                                </form>
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
    <script>
        console.log('Hi!');

    </script>
@stop
