@extends('layouts.app')
@section('main')
<div class="container bg-black  px-4 py-8 sm:px-6 lg:px-8 vertical ">
    <h1 class=" text-white text-center mb-4 text-6xl font-bold ">Videos</h1>
    <hr class="container mb-8 border-gray-700">


    <section class="text-gray-600 body-font">
        <div class="container px-5 py-4 mx-auto">
          <div class="flex flex-wrap -mx-4 -mb-10 text-center">
           {{--  <div class="sm:w-1/2 mb-10 px-4">
              <div class="rounded-lg  relative h-0 overflow-hidden max-w-full " style="padding-bottom: 56.25%">
                <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/OBUFXcn6xfY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <h2 class="title-font text-2xl font-medium text-white mt-6 mb-3">Buy YouTube Videos</h2>
              <p class="leading-relaxed text-base text-gray-400">Williamsburg occupy sustainable snackwave gochujang. Pinterest cornhole brunch, slow-carb neutra irony.</p>
              
            </div>

            <div class="sm:w-1/2 mb-10 px-4">
                <div class="rounded-lg  relative h-0 overflow-hidden max-w-full " style="padding-bottom: 56.25%">
                    <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/PvOiFiZ-niM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
              <h2 class="title-font text-2xl font-medium text-white mt-6 mb-3">Buy YouTube Videos</h2>
              <p class="leading-relaxed text-base">Williamsburg occupy sustainable snackwave gochujang. Pinterest cornhole brunch, slow-carb neutra irony.</p>
             
            </div>

            <div class="sm:w-1/2 mb-10 px-4">
                <div class="rounded-lg  relative h-0 overflow-hidden max-w-full " style="padding-bottom: 56.25%">
                    <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/uqgnymESUsE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
              <h2 class="title-font text-2xl font-medium text-white mt-6 mb-3">Buy YouTube Videos</h2>
              <p class="leading-relaxed text-base">Williamsburg occupy sustainable snackwave gochujang. Pinterest cornhole brunch, slow-carb neutra irony.</p>
             
            </div>


            <div class="sm:w-1/2 mb-10 px-4">
                <div class="rounded-lg  relative h-0 overflow-hidden max-w-full " style="padding-bottom: 56.25%">
                    <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/5n-wYc2eNTU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
              <h2 class="title-font text-2xl font-medium text-white mt-6 mb-3">Buy YouTube Videos</h2>
              <p class="leading-relaxed text-base text-gray-400">Williamsburg occupy sustainable snackwave gochujang. Pinterest cornhole brunch, slow-carb neutra irony.</p>
             
            </div>

            <div class="sm:w-1/2 mb-10 px-4">
                <div class="rounded-lg  relative h-0 overflow-hidden max-w-full " style="padding-bottom: 56.25%">
                    <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/hoxHjiO6REg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
              <h2 class="title-font text-2xl font-medium text-white mt-6 mb-3">Buy YouTube Videos</h2>
              <p class="leading-relaxed text-base">Williamsburg occupy sustainable snackwave gochujang. Pinterest cornhole brunch, slow-carb neutra irony.</p>
             
            </div>

            <div class="sm:w-1/2 mb-10 px-4">
                <div class="rounded-lg  relative h-0 overflow-hidden max-w-full " style="padding-bottom: 56.25%">
                    <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/PuyjZjLOBes" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
              <h2 class="title-font text-2xl font-medium text-white mt-6 mb-3">Buy YouTube Videos</h2>
              <p class="leading-relaxed text-base">Williamsburg occupy sustainable snackwave gochujang. Pinterest cornhole brunch, slow-carb neutra irony.</p>
             
            </div>
 --}}

            @foreach ($videos as $video)
            <div class="sm:w-1/2 mb-10 px-4">
              <div class="rounded-lg  relative h-0 overflow-hidden max-w-full " style="padding-bottom: 56.25%">
                  <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/{{$video->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              <h2 class="title-font text-2xl font-medium text-white mt-6 mb-3">{{$video->name}}</h2>
              <p class="leading-relaxed text-base">{{$video->desc}}</p>
           
            </div>
                
            @endforeach


          </div>

          <div class="my-4">
            {{$videos->links()}}
          </div>
        </div>
      </section>




</div>
@endsection