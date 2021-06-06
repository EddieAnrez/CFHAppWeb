@extends('layouts.app')
@section('main')
    <div class="container bg-black  px-4 py-8 sm:px-6 lg:px-8 vertical ">
        <h1 class=" text-white text-center mb-8 text-6xl font-bold">Noticias y Eventos</h1>
        <hr class="container mb-6 border-gray-600">
        <p class="text-white text-center text-4xl my-4 l">Categorías</p>
        <hr class="border-white my-4">
        {{-- <hr class="container my-6"> --}}
        <ul class="lg:flex lg:justify-around lg:flex-row mb-4 ">

            @foreach ($categories as $category)
                <li class="mr-6 text-center">
                    <a class="text-white hover:text-blue hover:bg-gray-600 px-3 py-2 rounded-md"
                        href="{{ route('blog.category', $category) }}">{{ $category->name }}</a>
                </li>
            @endforeach 


        </ul>

        <hr class="border-white my-4">

        <div class="grid lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-6 mt-8 ">
            @foreach ($posts as $post)


           {{--   <div class="blogs__wraper bg-gray-200 ">
                    <div class="flex justify-between items-center pt-2 pl-4 pb-2">
                        <div class="blogs bg-gray-200   mr-5">
                        <img src="@if ($post->image) {{ Storage::url($post->image->url) }} @else
                            https://cdn.pixabay.com/photo/2017/03/27/14/49/beach-2179183_1280.jpg @endif"
                            class="">
                            <div class="p-5">
                                <h1 class="text-2xl font-bold text-regal-blue py-2">{{ $post->name }}</h1>


                                <div class="  italic text-xs mb-4 flex text-gray-400">

                                    <p>
                                        {{ $post->user->name }} - {{ date('d-m-Y', strtotime($post->created_at)) }}
                                    </p>

                                </div>
                                <p class="bg-gray-200 text-sm text-black">{!! $post->extract !!}</p>
                                <div>
                                    @foreach ($post->tags as $tag)
                                        <a href="{{ route('blog.tag', $tag) }}"
                                            class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 rounded-full">{{ $tag->name }}</a>
                                    @endforeach
                                </div>
                                <a href="{{ route('blog.show', $post) }}"
                                    class="py-2 px-6 mt-4 text-white bg-comision inline-block rounded">Leer Mas...</a>
                            </div>
                        </div>
                    </div>
                </div>  --}}


                <div class="blogs__wraper bg-gray-200 ">
                    <div class="flex justify-between items-center pt-2 pl-4 pb-2 rounded-lg">
                        <div class="blogs bg-gray-200   mr-5">
                        <img src="@if ($post->image) {{ Storage::url($post->image->url) }} @else
                            https://cdn.pixabay.com/photo/2017/03/27/14/49/beach-2179183_1280.jpg @endif"
                            class="">
                         
                            <div class="p-5">
                                <div class="mb-2">
                                    @foreach ($post->tags as $tag)
                                        <a href="{{ route('blog.tag', $tag) }}"
                                            class="inline-block px-3 h-6  
                                            py-1  rounded bg-gray-300 text-comision text-xs font-medium tracking-widest
                                            
                                            ">#{{ $tag->name }}</a>
                                    @endforeach
                                </div>
                                <a href="{{ route('blog.category', $post->category->name) }}" class="tracking-widest text-sm title-font font-medium text-gray-400  uppercase mt-4">{{ $post->category->name }}</a>
                                <h1 class="text-2xl font-bold text-regal-blue pb-2">{{ $post->name }}</h1>


                                <div class="  text-xs mb-4 flex text-gray-600">
                                    <p>
                                        Por <span class="font-bold">{{ $post->user->name }}</span>, 
                                        Publicado el <span class="italic">{{ date('d', strtotime($post->created_at)) }} de {{ date('M', strtotime($post->created_at)) }} del {{ date('Y', strtotime($post->created_at)) }}</span> 
                                    </p>
                                </div>
                                <p class="bg-gray-200 text-sm text-black">{!! $post->extract !!}</p>
                               
                                <a href="{{ route('blog.show', $post) }}"
                                    class="py-2 mt-4 text-comision  inline-flex items-center font-bold">Continuar Leyendo...
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                      </svg></a>

                               




                            </div>
                        </div>
                    </div>
                </div> 
                

             
             
                    
                    {{--     <div class="p-12 md:w-1/2 flex flex-col items-start">
                          <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest">CATEGORY</span>
                          <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4">Roof party normcore before they sold out, cornhole vape</h2>
                          <p class="leading-relaxed mb-8">Live-edge letterpress cliche, salvia fanny pack humblebrag narwhal portland. VHS man braid palo santo hoodie brunch trust fund. Bitters hashtag waistcoat fashion axe chia unicorn. Plaid fixie chambray 90's, slow-carb etsy tumeric. Cray pug you probably haven't heard of them hexagon kickstarter craft beer pork chic.</p>
                          <div class="flex items-center flex-wrap pb-4 mb-4 border-b-2 border-gray-100 mt-auto w-full">
                            <a class="text-indigo-500 inline-flex items-center">Learn More
                              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                              </svg>
                            </a>
                            <span class="text-gray-400 mr-3 inline-flex items-center ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                              </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                              </svg>6
                            </span>
                          </div>
                          <a class="inline-flex items-center">
                            <img alt="blog" src="https://dummyimage.com/104x104" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-4">
                              <span class="title-font font-medium text-gray-900">Holden Caulfield</span>
                              <span class="text-gray-400 text-xs tracking-widest mt-0.5">UI DEVELOPER</span>
                            </span>
                          </a>
                        </div> --}}
                      
                  
           
                








            @endforeach

        </div>
        <div class="mt-4 mx-auto my-auto">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
