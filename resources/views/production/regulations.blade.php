@extends('layouts.app')
@section('title', 'Leyes y Reglamentos')
@section('main')
    <div class="container bg-black  px-4 py-8 sm:px-6 lg:px-8 vertical ">
        <h1 class=" text-white text-center mb-4 text-6xl font-bold ">Leyes y Reglamentos</h1>
        <hr class="container mb-8 border-gray-700">


        <div>
            @foreach ($regulations as $regulation)
                <div class="bg-gray-600 max-h-screen flex-row rounded-lg relative my-8">
                    <div class="p-4 bg-gray-500 text-gray-200 rounded-t h-1/3">
                        <h5 class="text-gray-200 text-2xl font-bold capitalize">{!!$regulation->name!!} </h5>
                    </div>
                    <div class="p-4 w-full overflow-y-auto text-gray-600 bg-gray-200 rounded-b-lg h-2/3 ">

                        <p class="h-2/3">
                          {!!$regulation->desc!!}
                        </p>

                        <div class="h-1/3">
                            <a href="{{$regulation->url}}"
                                target="_blank"
                                class="float-right rounded-lg bg-comision py-2 px-4 m-2 text-gray-200">Visualizar <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="mt-4 mx-auto my-auto">
            {{ $regulations->links() }}
        </div>


    </div>


@endsection
