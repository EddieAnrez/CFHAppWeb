@extends('layouts.app')
@section('title', 'Trámites y Permisos')
@section('main')
<div class="container bg-black  px-4 py-8 sm:px-6 lg:px-8 vertical ">
    <h1 class=" text-white text-center mb-4 text-6xl font-bold ">Directorio de Trámites y Permisos Especiales</h1>
    <hr class="container mb-8 border-gray-700">

    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4">


         @foreach ($permissions as $permission)
         <div class="bg-gray-200 p-6 text-center rounded-lg h-full">
            <h2 class="text-gray-600 text-lg title-font font-bold mb-3 uppercase h-1/3">{{$permission->name}}</h2>
            <p class="leading-relaxed text-base text-gray-700 h-1/3">{!!$permission->desc!!}</p>
            <div class="h-1/3">
                <a href="{{$permission->link}}" target="_blank" class="mt-3 bg-comision text-white rounded-lg py-2 px-4 inline-flex items-center  font-bold">Ir a pagina <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
            
        </div>
             
         @endforeach

       
        

   
    </div>

    <div class="mt-4 mx-auto my-auto">
        {{$permissions->links()}}
    <div>


   





</div>

    
@endsection