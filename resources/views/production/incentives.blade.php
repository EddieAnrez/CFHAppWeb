@extends('layouts.app')
@section('main')
    <div class="container bg-black px-4 py-8 sm:px-6 lg:px-8 vertical">
        <h1 class=" text-white text-center mb-4 text-6xl font-bold ">Estímulos a la Producción</h1>
        <hr class="container mb-8 border-gray-700">
        <div>
           
            @foreach ($incentives as $incentive)
                <div class="text-gray-600 flex flex-col lg:flex-row bg-gray-200 my-4 mx-6 rounded-lg">
                    <div class="p-4 lg:w-1/3 sm:h-1/2 ">
                        
                        <img src="@if ($incentive->image) {{ Storage::url($incentive->image->url) }} @else
                            https://cdn.pixabay.com/photo/2017/03/27/14/49/beach-2179183_1280.jpg @endif"
                            class="">
                    </div>
                    <div
                        class="p-4 lg:w-2/3 lg:h-auto sm:h-1/2 lg:border-l lg:border-t-0 border-t border-gray-400 m-4 lg:text-left text-center lg:relative">
                        <span class="text-3xl font-bold my-2 ">{{ $incentive->name }} </span>
                        <p class="text-light mt-2 mb-8">{{ $incentive->desc }}</p>
                        <a href="{{ $incentive->link }}" target="_blank"
                            class="lg:absolute lg:right-0 lg:bottom-0 rounded-lg bg-comision py-2 px-4 m-1 text-gray-200">Ir
                            a Vínculo <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
