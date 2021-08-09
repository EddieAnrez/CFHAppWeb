@extends('layouts.app')
@section('title', 'Enlaces de Interés')
@section('main')
    <div class="container bg-black px-4 py-8 sm:px-6 lg:px-8 vertical">
        <h1 class=" text-white text-center mb-4 text-6xl font-bold ">Enlaces de Interés</h1>
        <hr class="container mb-8 border-gray-700">
        <div>
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-6 m-4 text-gray-700">
                @foreach ($links as $link)
                <div class="bg-gray-200 p-4 rounded-lg border-white border-2 h-60">
                    <a href="{{$link->link}}" target="_blank" class="rounded-lg "><img src="{{$link->img}}" style='height: 100%; width: 100%; object-fit: contain'></a>
                </div>
                @endforeach
                

            </div>
        </div>
    </div>
@endsection
