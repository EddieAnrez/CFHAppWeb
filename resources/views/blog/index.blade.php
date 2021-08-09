@extends('layouts.app')
@section('title', 'Blog')
@section('main')
    <div class="container bg-black  px-4 py-8 sm:px-6 lg:px-8 vertical ">
        <h1 class=" text-white text-center mb-8 text-6xl font-bold">Noticias y Eventos</h1>
        <hr class="container mb-6 border-gray-600">
        <p class="text-white text-center text-4xl my-4 l">Categorías</p>
        <hr class="border-gray-600 my-4">

        <ul class="flex justify-around flex-row mb-4 ">

            @foreach ($categories as $category)
                <li class="mr-6 text-center">
                    <a class="text-white hover:text-blue hover:bg-gray-600 px-3 py-2 rounded-md"
                        href="{{ route('blog.category', $category) }}">{{ $category->name }}</a>
                </li>
            @endforeach


        </ul>

        <hr class="border-gray-600 my-4">

        <div class="grid lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-4 mt-8 ">
            @foreach ($posts as $post)
                <div class="h-100 bg-gray-200 rounded-lg justify-between items-center p-4">
                    <div class="h-full bg-gray-200">
                        {{-- <div class="overflow-hidden " style="height: 47%;">
                        <img  src="@if ($post->image) {{ Storage::url($post->image->url) }} @else
                            https://cdn.pixabay.com/photo/2017/03/27/14/49/beach-2179183_1280.jpg @endif"
                            class="rounded-t-lg ">
                        </div > --}}
                        <div class="overflow-hidden rounded-t-lg h-48" 
                        style=" background-image: url('{{ Storage::url($post->image->url) }}'); background-size: cover; background-repeat: no-repeat; background-position:center;">
                       </div>
                        <div class="my-2">
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('blog.tag', $tag) }}" class="inline-block px-3 h-6  
                                                                        py-1  rounded bg-gray-300 text-comision text-xs font-medium tracking-widest
                                                                        
                                                                        ">#{{ $tag->name }}</a>
                            @endforeach
                        </div>


                        <div class="" >

                            <div class="h-3/6 ">
                                <a href="{{ route('blog.category', $post->category->name) }}"
                                    class="tracking-widest text-sm title-font font-medium text-gray-400  uppercase mt-4">{{ $post->category->name }}</a>
                                <h1 class="text-2xl font-bold text-regal-blue pb-2">{{ $post->name }}</h1>
                            </div>


                            <div class=" h-1/6 py-2 text-xs flex text-gray-600">
                                <p>
                                    Por <span class="font-bold">{{ $post->user->name }}</span>,
                                    Publicado el <span class="italic">{{ date('d', strtotime($post->created_at)) }} de
                                        {{ date('M', strtotime($post->created_at)) }} del
                                        {{ date('Y', strtotime($post->created_at)) }}</span>
                                </p>
                            </div>

                            <div class="overflow-auto h-2/6">
                                <p class="bg-gray-200 text-sm text-black">{!! $post->extract !!}</p>
                            </div>



                        </div>

                        
                        <div class="text-right mr-2" >
                            <a href="{{ route('blog.show', $post) }}"
                                class="py-2 text-comision inline-flex items-center font-bold">Continuar
                                Leyendo...<i class="fas fa-arrow-right"></i></a>
                        </div>

                        

                    </div>
                </div>

                {{-- </div> --}}

            @endforeach

        </div>
        <div class="mt-4 mx-auto my-auto">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
