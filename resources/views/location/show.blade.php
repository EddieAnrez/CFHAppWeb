@extends('layouts.app')
@section('main')
    <div class="container bg-black px-4 py-8 sm:px-6 lg:px-8 vertical">
        {{-- <a href="{{route('URL::previous()')}}">Regresar</a> --}}
        <h1 class=" text-white text-center mb-4 text-6xl font-bold">{{$location->name}}</h1>
        <h2 class=" text-gray-500 text-center font-md mb-4 text-xl italic">ID: {{$location->id}}</h1>
        <hr class="container mb-8 border-gray-700 ">

       
        <div class="grid lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-3  text-center lg:auto-rows-auto  auto-rows-fr">

            <div class="lg:col-span-2 col-span-1 grid-flow-col swiper-container gallery-top lg:w-full w-full ml-auto mr-auto ">
                <div class="swiper-wrapper">
                    @foreach ($images as $image)
                    <div class="swiper-slide bg-cover bg-center"
                        style="background-image:url({{Storage::url($image->url)}})"></div>
                    @endforeach
                    
                  
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>


            <div class="col-span-1  mx-auto p-4 m-4 ">
                <h2 class="text-white text-center my-2 text-xl font-bold">
                    Ubicación
                </h2>
                <hr class="my-2 border-gray-700 ">
                <p class="my-2 text-gray-500">{{$location->adress}}</p>

                <iframe width="350" height="400" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q={{$location->latlocation}}%2C%20{{$location->lonlocation}}&key={{env('GOOGLE_MAPS_API_KEY')}}"></iframe> 
                 {{-- <img src="https://maps.googleapis.com/maps/api/staticmap?center='.{{$location->latlocation}}.'%2c%20'.{{$location->lonlocation}}.'&zoom=12&size=400x400&key='.{{env('GOOGLE_MAPS_API_KEY')}}.'" alt="">  --}}
                
                {{--  <img width="350" src="https://maps.googleapis.com/maps/api/staticmap?center={{$location->latlocation}},{{$location->lonlocation}}&zoom=16&scale=1&size=350x400&maptype=roadmap&key={{env('GOOGLE_MAPS_API_KEY')}}&format=png&visual_refresh=true&markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C{{$location->latlocation}},{{$location->lonlocation}}" alt="Mapa de {{$location->name}}">
 --}}
                
                     {{--  <img width="350" src="https://maps.googleapis.com/maps/api/staticmap?center={{$location->latlocation}},{{$location->lonlocation}}&zoom=16&scale=1&size=350x400&maptype=roadmap&key={{env('GOOGLE_MAPS_API_KEY')}}&format=png&visual_refresh=true&markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C{{$location->latlocation}},{{$location->lonlocation}}" > --}}



                {{-- <iframe class="object-contain mx-auto" width="375" height="400" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=40.714728%2C-73.998672&key='.env(GOOGLE_MAPS_API_KEY).'"></iframe> 
                <img class="object-contain mx-auto"
                    src="https://maps.googleapis.com/maps/api/staticmap?center=40.714728,-73.998672&zoom=16&size=400x400&maptype=terrain&markers=color:red%7C40.714728,-73.998672&key=AIzaSyDUc7qfwOzYw3GDdv17LrM5ttnC2ypx5ws"
                    alt="">  --}}

                   {{--  <img width="350" src="https://maps.googleapis.com/maps/api/staticmap?center=15.753088582250488,+-96.13049967840462&zoom=13&scale=1&size=350x400&maptype=roadmap&key=AIzaSyDUc7qfwOzYw3GDdv17LrM5ttnC2ypx5ws&format=png&visual_refresh=true&markers=size:mid%7Ccolor:0xff0000%7Clabel:1%7C15.753088582250488,+-96.13049967840462" alt="Google Map of 15.753088582250488, -96.13049967840462"> --}}
            </div>



            <div class="col-span-1 lg:col-span-3 my-6 hidden lg:block ">
                <div class="swiper-container gallery-thumbs ml-auto mr-auto w-100 h-40">
                    <div class="swiper-wrapper">
                        @foreach ($images as $image)
                        <div class="swiper-slide bg-cover bg-center"
                            style="background-image:url({{Storage::url($image->url)}})"></div>
                        @endforeach
                        
                        
                    </div>
                </div>
            </div>






        </div>


        


        <div class=" lg:flex-row flex-col flex my-4">
            <div class="text-center text-white m-2 p-2 lg:w-1/3">
                <h3 class="font-bold text-xl" >Descripción</h3>
                <hr class="my-2 border-gray-700 ">
                <p class="text-white font-light">{!!$location->body!!}
                </p>
            </div>
            <div class="text-white text-center m-2 p-2 lg:w-1/3">
                <h3 class="font-bold text-xl">Características</h3>
                <hr class="my-2 border-gray-700 ">
                <p class="text-white font-light">{!!$location->features!!}</p>
            </div>
            <div class="text-white text-center m-2 p-2 lg:w-1/3">
               <h3 class="font-bold text-xl">Contacto</h3> 
               <hr class="my-2 border-gray-700 ">
               <p class="text-white font-light">{!!$location->contact!!}</p>
                 <div mx-2>
                     @if($location->facebook)
                    <a href="{{$location->facebook}}"><i class="fab fa-facebook m-2"></i></a>
                    @endif
                    @if($location->twitter)
                    <a href="{{$location->twitter}}"><i class="fab fa-twitter m-2"></i></a>
                    @endif
                    @if($location->youtube)
                    <a href="{{$location->youtube}}"><i class="fab fa-youtube m-2"></i></a>
                    @endif
                    @if($location->instagram)
                    <a href="{{$location->instagram}}"><i class="fab fa-instagram m-2"></i></a>
                    @endif
                    
                    @if($location->website)
                    <a href="{{$location->website}}" target="_blank"><i class="fas fa-globe m-2"></i></a>
                    @endif
                 </div>
            </div>
        </div>

    </div>
    <script>
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            slidesPerView: 4,
            loop: true,
            freeMode: true,
            loopedSlides: 4, //looped slides should be the same
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });
        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 10,
            loop: true,
            loopedSlides: 4, //looped slides should be the same
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            thumbs: {
                swiper: galleryThumbs,
            },
        });

    </script>
@endsection
