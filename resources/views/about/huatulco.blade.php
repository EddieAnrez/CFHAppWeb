@extends('layouts.app')
@section('title', 'Huatulco')
@section('main')

    <div class="container bg-black px-4 py-8 sm:px-6 lg:px-8 vertical text-white">
        <h1 class=" text-white text-center mb-4 text-6xl font-bold ">Acerca de Huatulco</h1>
        <hr class="container mb-8 border-gray-700 ">


        <section class="text-gray-600 body-font">
            <div class=" px-4 py-4">


                <div class="flex items-center w-100 mx-auto border-b pb-10 mb-10 border-gray-700 sm:flex-row flex-col">
                    <div
                        class="w-60 h-60 lg:h-auto lg:w-1/2 sm:mr-10 inline-flex items-center justify-center rounded flex-shrink-0">
                        <img alt="gallery" class="rounded object-cover object-center"
                            src="{{ Storage::url($sections[0]->image->url) }}">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                        <h2 class="text-white title-font font-medium mb-2 italic text-3xl">{{ $sections[0]->section }}
                        </h2>
                        <div class="text-xl text-white px-4  font-light">
                            {!! $sections[0]->body !!}
                        </div>

                    </div>
                </div>

                <div class="flex items-center w-100 mx-auto border-b pb-10 mb-10 border-gray-700 sm:flex-row flex-col">
                    <div>
                        <h2 class="text-white title-font font-medium mb-2 italic text-3xl text-center">Su principal
                            atractivo son sus 9 bahías y 36 playas. Las bahías llevan por nombre:</h2>
                        <hr class="container mb-4 border-gray-700 ">


                        <div class="grid lg:grid-cols-3 grid-cols-1 gap-4 ">


                            @for ($i = 1; $i < 10; $i++)

                                <div class="flex relative rounded-lg w-full h-96">
                                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                        src="{{ Storage::url($sections[$i]->image->url) }}">
                                    <div
                                        class="px-8 py-10 relative z-10 w-full border-2  bg-gray-600 bg-opacity-70  opacity-0 hover:opacity-100 text-center">

                                        <h2 class="title-font text-xl font-bold text-black mb-3 uppercase underline">
                                            {{ $sections[$i]->section }}
                                            </h1>
                                            <div class=" text-white">{!! $sections[$i]->body !!}</div>

                                    </div>
                                </div>

                            @endfor

                        </div>
                    </div>

                </div>

                <h2 class="text-white title-font font-bold mb-2 text-4xl px-4 text-center">{{ $sections[10]->section }}
                </h2>
                <div class="flex items-center w-100 mx-auto border-b pb-10 mb-10 border-gray-700 sm:flex-row flex-col">
                    <div class="flex-grow lg:text-right text-center mt-6 sm:mt-0">

                        <div class="text-xl text-white px-4 font-light lg:mb-0 mb-6">
                            <p class="my-2">
                                {!! $sections[10]->body !!}
                            </p>
                        </div>
                    </div>
                    <div class="w-full h-96 object-fill rounded-lg"
                        style="background-image: url('{{ Storage::url($sections[10]->image->url) }}'); background-size: cover; background-repeat: no-repeat; background-position:center;">
                    </div>
                </div>


                <div class="flex items-center lg:w-100 mx-auto border-b pb-10 mb-10 border-gray-700 flex-col">
                    <div class="w-full h-48 object-fill rounded-lg mb-4"
                        style="background-image: url('{{ Storage::url($sections[11]->image->url) }}'); background-size: cover; background-repeat: no-repeat; background-position:center;">
                    </div>
                    <div class="flex-grow  text-center mt-6 sm:mt-0">
                        <h2 class="text-white title-font font-bold mb-2 text-4xl ">{{ $sections[11]->section }}</h2>
                        <div class="text-xl text-white px-4  font-light">
                            <p>
                                {!! $sections[11]->body !!}
                            </p>
                            
                        </div>
                    </div>
                </div>


                <div class="flex items-center w-100 mx-auto border-b pb-10 mb-10 border-gray-700 sm:flex-row flex-col">
                    <div class="flex-grow lg:text-right text-center mt-6 sm:mt-0">
                        <h2 class="text-white title-font font-bold mb-2 text-4xl px-4 ">{{ $sections[12]->section }}</h2>
                        <div class="text-xl text-white px-4  font-light">
                            <p class="my-2">
                                {!! $sections[12]->body !!}
                            </p>
                        </div>
                    </div>

                    <div class="w-full h-96 object-fill rounded-lg"
                        style="background-image: url('{{ Storage::url($sections[12]->image->url) }}'); background-size: cover; background-repeat: no-repeat; background-position:center;">
                    </div>
                </div>



                <div class="flex items-center w-100 mx-auto border-b pb-10 mb-10 border-gray-700 sm:flex-row flex-col">

                    <div class="w-full h-96 object-fill rounded-lg"
                        style="background-image: url('{{ Storage::url($sections[13]->image->url) }}'); background-size: cover; background-repeat: no-repeat; background-position:center;">
                    </div>
                    <div class="flex-grow lg:text-left text-center lg:mr-8">
                        <h2 class="text-white title-font font-bold mb-2 text-4xl px-4">{{ $sections[13]->section }}</h2>
                        <div class="text-xl text-white px-4  font-light">
                            <p class="my-2">
                                {!! $sections[13]->body !!}
                            </p>

                        </div>
                    </div>

                </div>


                <div class="flex items-center w-100 mx-auto {{-- border-b border-gray-700 --}}pb-10 mb-10  sm:flex-row flex-col">

                    <div class="flex-grow lg:text-right text-center mt-6 sm:mt-0">
                        <h2 class="text-white title-font font-bold mb-2 text-4xl px-4">{{ $sections[14]->section }}</h2>
                        <div class="text-xl text-white px-4  font-light">
                            <p class="my-2">
                                {!! $sections[14]->body !!}
                            </p>

                        </div>
                    </div>
                    <div class="w-full h-96 object-fill rounded-lg"
                        style="background-image: url('{{ Storage::url($sections[14]->image->url) }}'); background-size: cover; background-repeat: no-repeat; background-position:center;">
                    </div>

                </div>





            </div>







        </section>



    </div>

@endsection
