@extends('layouts.app')
@section('main')
    <div class="container bg-black  px-4 py-8 sm:px-6 lg:px-8 vertical ">
        {{-- <h1 class=" text-white font-bold text-center mb-8 lg:text-7xl text-5xl">Comisión Fílmica de Huatulco</h1> --}}
        
        
        <h1 class="  text-white font-bold text-center mb-8 lg:text-7xl text-5xl">Bienvenidos</h1>
        <hr class="container mb-8 border-gray-700 ">
        
        

        <div class="relative h-0 overflow-hidden max-w-full my-8 rounded-lg" style="padding-bottom: 56.25%">
            <iframe class=" absolute top-0 left-0 w-full h-full" src="https://www.youtube-nocookie.com/embed/Dkr2xg5vKQ4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div> 

        <h2 class="  text-white text-center mb-4 mt-8 lg:text-6xl text-4xl">Objetivo</h2>
        <hr class="container mb-4 border-gray-700 ">
        <p class="text-gray-300 italic text-center mb-10">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime nam aperiam nobis in? Architecto
            repellendus repellat excepturi temporibus adipisci. Aperiam amet impedit dolores consequatur consequuntur,
            accusamus quibusdam reiciendis quod. Quos!
        </p>



        <h2 class="  text-white text-center mb-4 mt-8 lg:text-6xl text-4xl">Locaciones Destacadas</h2>
        <hr class="container mb-4 border-gray-700 ">
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-4 ">

            <div >
                
                    <img src="{{ Storage::url('misc/imagen1jpg.jpg') }}" alt="" class="object-contain w-full h-60 "
                    {{-- title="Prueba" --}}>

               
                
                <div class="text-center p-6">
                    <h3 class="text-white mt-2 font-bold text-xl">Locacion 1</h3>
                    <p class="text-white font-light">
                        Lorem ipsum dolor,sit amet consectetur adipisicing
                        elit. Obcaecati aperiam voluptate beatae veniam
                        nulla porro
                        quisquam eius consequuntur vitae provident saepe quibusdam hic assumenda, nostrum eveniet,
                        recusandae iusto
                        laborum iure.

                    </p>
                </div>
            </div>
            <div>
                <img src="{{ Storage::url('misc/imagen2.jpg') }}" alt="" class="object-contain w-full h-60" srcset="">
                <div class="text-center p-6">
                    <h3 class="text-white mt-2 font-bold text-xl">Locacion 1</h3>
                    <p class="text-white font-light">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati aperiam voluptate beatae veniam
                        nulla porro
                        quisquam eius consequuntur vitae provident saepe quibusdam hic assumenda, nostrum eveniet,
                        recusandae iusto
                        laborum iure.

                    </p>
                </div>
            </div>
            <div>
                <img src="{{ Storage::url('misc/imagen3.jpg') }}" alt="" class="object-contain w-full h-60 " srcset="">
                <div class="text-center p-6">
                    <h3 class="text-white mt-2 font-bold text-xl">Locacion 1</h3>
                    <p class="text-white font-light">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati aperiam voluptate beatae veniam
                        nulla porro
                        quisquam eius consequuntur vitae provident saepe quibusdam hic assumenda, nostrum eveniet,
                        recusandae iusto
                        laborum iure.

                    </p>
                </div>
            </div>

        </div>

        <h2 class="  text-white text-center mb-4 mt-8 lg:text-6xl text-4xl">Noticias Recientes</h2>
        <hr class="container mb-8 border-gray-700 ">


        <div class="grid lg:grid-rows-3 lg:grid-cols-2 gap-4 bg-black  rounded-t bg-cover">
            <div class="row-span-3 col-span-1 bg-gray-200 rounded bg-cover  ">

                {{-- <div class="max-w-sm rounded overflow-hidden shadow-lg"> --}}
                <img class="w-full rounded-t " src="{{ Storage::url($posts[0]->image->url) }}" alt="">

                <div class="px-6 py-4 m-1">
                    <div class="my-1">
                        @foreach ($posts[0]->tags as $tag)
                            <a href="{{ route('blog.tag', $tag) }}" class="inline-block p-2 mr-2 {{-- h-6 --}}
                                                              rounded bg-gray-300 text-comision text-xl font-bold tracking-widest
                                                              ">#{{ $tag->name }}</a>
                        @endforeach
                    </div>
                   
                    <h2 class="tracking-widest text-lg title-font font-medium text-gray-400 mb-1 mt-4 uppercase">{{ $posts[0]->category->name }}</h2>
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
                        class="py-2 m-1 text-comision  inline-flex items-center font-bold text-xl">Continuar Leyendo...
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
   

            <x-newscard :post='$posts[1]'></x-newscard>
            <x-newscard :post='$posts[2]'></x-newscard>
            <x-newscard :post='$posts[3]'></x-newscard>
        </div>

        <h2 class="  text-white text-center mb-4 mt-8 lg:text-6xl text-4xl">Filmación Segura en Huatulco</h2>
        <hr class="container mb-4 border-gray-700 ">
        <div class="flex lg:flex-row flex-col items-center">
            <div class="w-1/2 text-white text-center ">
                <h3 class="font-bold text-3xl">Protocolo COVID</h3>
                <p class="p-4 ">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur modi, magnam dolores pariatur at magni illo doloribus officiis, quia unde exercitationem nemo quasi eum. Dolorum odio omnis exercitationem deleniti illo?
                </p>
            </div>
            <div class="w-1/2">
                <div class="relative h-0 overflow-hidden max-w-full my-8" style="padding-top: 100%">
                    <iframe class="absolute top-0 left-0 w-full h-full" src ="{{ asset('./laraview/pdf/protocolocovid.pdf') }}"   ></iframe>
                </div>
            </div>
    

        </div>
      
        

    </div>

    






</div>
@endsection
