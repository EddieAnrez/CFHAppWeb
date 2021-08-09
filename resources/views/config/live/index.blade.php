@extends('adminlte::page')

@section('title', 'Configuración Transmisión')

@section('content_header')
@if (!$live->count())
<a href="{{ route('config.live.create') }}" class="btn btn-secondary float-right">Nueva Configuración</a>
@endif

     <h1>Configuración Transmisión</h1>
@stop

@section('content')
@if (session('info'))
        <div class="alert alert-success">
            <strong> {{ session('info') }}</strong>
        </div>
@endif
<div class="card">
    @if ($live->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr></tr>
                <th>Id Youtube</th>
                <th>Website</th>
                <th>Link</th>
                <th colspan="2"></th>
                
               
            </tr>
            </thead>
            <tbody>
                <tr>
                        <td>{{ $live[0]->id_youtube }}</td>
                        <td>{{ $live[0]->website }}</td>
                        
                        <td>{{ $live[0]->link }}</td>
                        
                       
                        <td width="10px">
                            <a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{route('config.live.edit',$live[0])}}"><i class="fas fa-edit mr-1"></i>Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('config.live.destroy', $live[0]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm d-inline-flex d-flex align-items-center"><i class="fas fa-trash-alt mr-1"></i>Eliminar</button>
                            </form>
                        </td>
                        
                    </tr>
                

            </tbody>

        </table>

    </div>
    @else
        <div class="card-body">
            <strong>No Hay Configuración Establecida...</strong>
        </div>
    @endif
</div>

    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop