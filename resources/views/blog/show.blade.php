@extends('layouts.app')
@section('title')
    {{$title}}
@endsection
@section('main')
<div class="container">
    <h1 class=" text-white text-center mb-8 text-6xl font-bold">Noticias y Eventos</h1>
        <hr class="container mb-6 border-gray-600">
        <div class="container text-4xl font-bold text-white py-8 "> 
            <h2>{{$post->name}}</h1>
            <div class="text-sm italic my-4 flex text-gray-400">
                <svg class= "mx-2" width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                  </svg>
                <p>
                    {{$post->user->name}}  
                </p> 
    
    
                <svg class= "mx-2" width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                <p>
                    {{date('d-m-Y', strtotime($post->created_at))}}
                </p>
                
                
            </div>
            {{-- <h2 class="text-base italic"><svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg> - {{$post->created_at}}</h2> --}}
            <div class="text-lg text-white my-2 font-bold">
                {!!$post->extract!!}
            </div>
    
            <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-6">
                {{-- Contenido Principal --}}
                <div class="col-span-2">
                    <figure>
                       @if ($post->image)
                       <img class="w-full h-80 object-cover object-center my-4" src="{{Storage::url($post->image->url)}}" alt="">
                           
                       @else
                       <img class="w-full h-80 object-cover object-center my-4" src="https://cdn.pixabay.com/photo/2017/03/27/14/49/beach-2179183_1280.jpg" alt="">
                       @endif
                    </figure>
                    <div class="text-lg font-light text-white mt-4 text-justify">
                        {!!$post->body!!}
                    </div>
    
                </div>
                {{-- Contenido Relacionado --}}
                <aside>
                    <h1 class="text-2xl font-bold text-white mb-4">Mas en {{$post->category->name}}</h1>
                    <ul>
                        @foreach ($similares as $similar)
                            <li class="mb-4">
                                <a class="flex content-between bg-gray-400 rounded-lg " href="{{route('blog.show',$similar)}}">
                                    @if ($similar->image)
                                    <img class="w-30 h-20 object-cover object-center rounded-l-lg" src="{{Storage::url($similar->image->url)}}" alt="">
                                    @else
                                    <img class="w-30 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2017/03/27/14/49/beach-2179183_1280.jpg" alt="">
                                    @endif
                                    <span class="ml-2 text-white text-base py-2">{{$similar->name}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
    
                </aside>
            </div>
        </div>
</div>

    @endsection