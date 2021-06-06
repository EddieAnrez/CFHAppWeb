@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{ route('config.links.create') }}">Agregar Enlace</a>
    <h1>Lista Enlaces</h1>
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
                    <th>Link</th>
                    <th colspan="2"></th>

                </thead>
                <tbody>
                    @foreach ($links as $link)
                        <tr>
                            <td>{{ $link->id }}</td>
                            <td>{{ $link->link }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{route('config.links.edit',$link)}}"><i class="fas fa-edit mr-1"></i>Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('config.links.destroy', $link) }}" method="post">
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