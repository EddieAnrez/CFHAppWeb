@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
     <h1>Configuraciónes</h1>
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
                <th></th>

            </thead>
            <tbody>
                <tr>
                        <td>Transmisión en Vivo</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{route('config.live.index')}}"><i class="fas fa-edit mr-1"></i>Configurar</a>
                        </td>
                        
                    </tr>
                

            </tbody>

        </table>

    </div>
</div>

    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop