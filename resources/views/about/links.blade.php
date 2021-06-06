@extends('layouts.app')
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
                

                {{-- <div class="bg-gray-200 p-4 rounded-lg border-white border-2 h-60">
                    <a href="https://acapulco.tecnm.mx/" target="_blank" class="rounded-lg "><img src="https://acapulco.tecnm.mx/wp-content/themes/TecNMCampus/assets/img/logo-ita-summary.png" style='height: 100%; width: 100%; object-fit: contain'></a>
                </div>

                <div class="bg-gray-200 p-4 rounded-lg border-white border-2 h-60">
                    <a href="https://acapulco.tecnm.mx/" target="_blank" class="rounded-lg "><img src="https://scontent.fmex4-2.fna.fbcdn.net/v/t1.6435-9/49899932_2267114386891145_9014714803263897600_n.png?_nc_cat=104&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeElgCZj0aQ36A7f26YesOXPDoLU9MzOK1EOgtT0zM4rURb9P54W1kCQfulEe0omUAA&_nc_ohc=scAT8KtowHIAX-VUc5Q&_nc_ht=scontent.fmex4-2.fna&oh=629b0328b6cecabb83078fa7bc109e4d&oe=60BC9857" style='height: 100%; width: 100%; object-fit: contain'></a>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
