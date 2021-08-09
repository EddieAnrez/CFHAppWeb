@extends('adminlte::page')

@section('title', 'Listado de Estímulos')

@section('content_header')
<a class="btn btn-secondary float-right" href="{{ route('config.incentives.create') }}">Agregar Estímulo</a>
     <h1>Listado de Estímulos</h1>
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
            <th>Name</th>
            <th colspan="2"></th>

        </thead>
        <tbody>
            @foreach ($incentives as $incentive)
                <tr>
                    <td>{{ $incentive->id }}</td>
                    <td>{{ $incentive->name }}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{route('config.incentives.edit',$incentive)}}"><i class="fas fa-edit mr-1"></i>Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{ route('config.incentives.destroy', $incentive) }}" method="post">
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
    <script> console.log('Hi!'); </script>
@stop