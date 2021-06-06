@extends('layouts.app')
@section('main')
<div class="container bg-black  px-4 py-8 sm:px-6 lg:px-8 vertical ">
<h1 class=" text-white text-center mb-8 text-6xl">Noticias y Eventos</h1>
        <hr class="container mb-2">
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        
        <h1 class="uppercase text-center text-3xl font-bold text-white my-4">Mostrando publicaciones con etiqueta: <span class="italic text-5xl">{{$tag->name}}</span></h1>
        @foreach ($posts as $post)
            <x-card-post :post="$post"></x-card-post>
        @endforeach
        <div class="mt-4">
            {{$posts->links()}}
        <div>

    </div>
</div>
@endsection