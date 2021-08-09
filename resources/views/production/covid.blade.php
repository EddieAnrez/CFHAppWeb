@extends('layouts.app')
@section('title', 'Protocolo COVID-19')
@section('main')
<div class="container bg-black  px-4 py-8 sm:px-6 lg:px-8 vertical ">
    <h1 class=" text-white text-center mb-4 text-6xl font-bold ">Protocolo COVID-19</h1>
    <hr class="container mb-8 border-gray-700">
    {{-- <div class="bg-white {{-- items-center --">
        <iframe src ="{{ asset('./laraview/pdf/test.pdf') }}"   class="h-5/6 w-11/12 block"  ></iframe>
    </div> --}}
    <div class="relative h-0 overflow-hidden max-w-full my-8" style="padding-top: 100%">
        <iframe class="absolute top-0 left-0 w-full h-full" src ="{{ asset('./laraview/pdf/protocolocovid.pdf') }}"   ></iframe>
    </div>

    
@endsection