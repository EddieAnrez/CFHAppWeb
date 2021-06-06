@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{ route('config.subCategoriesServices.create') }}">Agregar Sub Categoría Servicio</a>
    <h1>Lista Sub Categorías</h1>
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
                    <th>Pertenece a categoría</th>
                    <th colspan="2"></th>

                </thead>
                <tbody>
                    @foreach ($SubCategoriesServices as $SubCategoriesService)
                        <tr>
                            <td>{{ $SubCategoriesService->id }}</td>
                            <td>{{ $SubCategoriesService->name }}</td>
                            <td>{{ $SubCategoriesService->category->name }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{route('config.subCategoriesServices.edit',$SubCategoriesService)}}"><i class="fas fa-edit mr-1"></i>Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('config.subCategoriesServices.destroy', $SubCategoriesService) }}" method="post">
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
