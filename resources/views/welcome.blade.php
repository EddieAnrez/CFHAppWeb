@extends('layouts.app')
@section('title', 'Inicio')
@section('main')
    <div class="container bg-black  px-4 py-8 sm:px-6 lg:px-8 vertical ">
        {{-- <h1 class=" text-white font-bold text-center mb-8 lg:text-7xl text-5xl">Comisión Fílmica de Huatulco</h1> --}}


        <h1 class="text-white font-bold text-center mb-2 lg:text-6xl text-4xl">Bienvenidos</h1>
        <hr class="container mb-8 border-gray-700 ">



        <div class="relative h-0 overflow-hidden max-w-full my-8 rounded-lg" style="padding-bottom: 56.25%">
            <iframe class=" absolute top-0 left-0 w-full h-full" src="https://www.youtube-nocookie.com/embed/Dkr2xg5vKQ4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>

        <h2 class="  text-white text-center mb-4 mt-8 lg:text-6xl text-4xl italic">Objetivo de la Comisión</h2>
        <hr class="container mb-4 border-gray-700 ">
        <p class="text-gray-300 italic text-center mb-10">
            {{$about[0]->goal}}
        </p>



        <h2 class="  text-white text-center mb-4 mt-8 lg:text-6xl text-4xl italic">Últimas Locaciones Agregadas</h2>
        <hr class="container mb-4 border-gray-700 ">
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-4 ">
            @foreach ($locations as $location)
                <div>
                    <div class="w-full h-60 object-fill rounded-lg" 
                        style="background-image: url('{{ Storage::url($location->image->url) }}'); background-size: cover; background-repeat: no-repeat; background-position:center;">
                    </div>
                    <div class="text-center p-6 text-white">
                        <h3 class="mt-2 font-bold text-xl">{{ $location->name }}</h3>
                        <p class="font-light">
                            {!! \Illuminate\Support\Str::limit($location->body, 200, $end = '...') !!} <a class="italic text-gray-300 font-bold"
                                href="{{ route('location.show', $location) }}">Continuar Leyendo... </a>
                        </p>
                    </div>

                </div>
            @endforeach
        </div>

        <h2 class="  text-white text-center mb-4 mt-8 lg:text-6xl text-4xl italic">Noticias Recientes</h2>
        <hr class="container mb-8 border-gray-700 ">
        <div class="lg:flex bg-black">
            <div class="lg:w-1/2 bg-gray-200 rounded m-2">
                <div>
                    <img class="w-full rounded-t " src="{{ Storage::url($posts[0]->image->url) }}" alt="">
                </div>


                <div class="px-6 py-4 m-1">
                    <div class="my-1">
                        @foreach ($posts[0]->tags as $tag)
                            <a href="{{ route('blog.tag', $tag) }}" class="inline-block p-2 mr-2 
                                                                  rounded bg-gray-300 text-comision text-xl font-bold tracking-widest
                                                                  ">#{{ $tag->name }}</a>
                        @endforeach
                    </div>
                    <h2 class="tracking-widest text-lg title-font font-medium text-gray-400 mb-1 mt-4 uppercase">
                        {{ $posts[0]->category->name }}</h2>
                    <div class="font-bold lg:text-3xl text-xl mb-2">{{ $posts[0]->name }}</div>
                    <p class="my-2 text-gray-600">
                        Por <span class="font-medium ">{{ $posts[0]->user->name }}</span>,
                        Publicado el <span class="italic">{{ date('d', strtotime($posts[0]->created_at)) }} de
                            {{ date('M', strtotime($posts[0]->created_at)) }} del
                            {{ date('Y', strtotime($posts[0]->created_at)) }}</span>
                    </p>

                    <p class="text-gray-900 text-base">
                        {!! \Illuminate\Support\Str::limit($posts[0]->extract, 200, $end = '...') !!}
                    </p>
                    <a href="{{ route('blog.show', $posts[0]) }}"
                        class="py-2 m-1 text-comision  inline-flex items-center font-bold text-xl">Continuar Leyendo...<i
                            class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="lg:w-1/2  m-2">
                <div class="pb-2">
                    <x-newscard :post='$posts[1]'></x-newscard>
                </div>
                <div class="py-1">
                    <x-newscard :post='$posts[2]'></x-newscard>
                </div>
                <div class="pt-2">
                    <x-newscard :post='$posts[3]'></x-newscard>
                </div>
            </div>
        </div>

        <h2 class=" text-white text-center mb-4 mt-8 lg:text-6xl text-4xl font-normal">Filmación Segura en Huatulco</h2>
        <hr class="container mb-4 border-gray-700 ">
        <div class="flex lg:flex-row flex-col items-center">
            <div class="w-1/2 text-white text-center ">
                <h3 class="font-bold text-3xl">Protocolo COVID</h3>
                <p class="p-4 font-normal not-italic">
                    PROPUESTA DE LINEAMIENTOS DE SEGURIDAD SANITARIA PARA EL PROCESO DE REAPERTURA PAULATINA DEL SECTOR FÍLMICO
                </p>
            </div>
            <div class="w-1/2">
                <div class="relative h-0 overflow-hidden max-w-full my-8" style="padding-top: 100%">
                    <iframe class="absolute top-0 left-0 w-full h-full"
                        src="{{ asset('./laraview/pdf/protocolocovid.pdf') }}"></iframe>
                </div>
            </div>


        </div>



    </div>








    </div>
@endsection
