@extends('adminlte::page')

@section('title', 'Configuraciones')

@section('content_header')
     <h1>Configuraciones</h1>
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
                            <a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{route('config.live.edit', $live[0])}}"><i class="fas fa-edit mr-1"></i>Configurar</a>
                    </td>
                        
                </tr>
                <tr> 
                    <td>Información Comisión Fílmica</td>
                    <td><a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{route('config.about.edit', $about[0])}}"><i class="fas fa-edit mr-1"></i>Configurar</a></td>
                </tr>
                <tr>
                    <td>Directorio Comisión</td>
                    <td><a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{route('config.directory.index')}}"><i class="fas fa-edit mr-1"></i>Configurar</a></td>
                </tr> 
               <tr>
                    <td>Información Región</td>
                    <td><a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href="{{route('config.huatulco.index')}}"><i class="fas fa-edit mr-1"></i>Configurar</a></td>
                </tr>
              {{--   <tr>
                    <td>Información Acerca de Protocolo Covid</td>
                    <td><a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href=""><i class="fas fa-edit mr-1"></i>Configurar</a></td>
                </tr>  --}}
              
                {{-- 
                <tr>
                    <td>Seleccionar Video Inicio</td>
                    <td><a class="btn btn-primary btn-sm d-inline-flex d-flex align-items-center" href=""><i class="fas fa-edit mr-1"></i>Configurar</a></td>
                </tr> --}}
                

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