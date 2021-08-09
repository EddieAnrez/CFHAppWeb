@extends('layouts.app')
@section('title', 'Nosotros')
@section('main')
    <div class="container bg-black px-4 py-8 sm:px-6 lg:px-8 vertical text-white">
        <h1 class=" text-white text-center mb-4 text-6xl font-bold ">Acerca de Nosotros</h1>
        <hr class="container mb-8 border-gray-700 ">

        <div class="my-8 text-center">
            <h2 class=" my-2 text-3xl font-bold">Comisión Fílmica de Huatulco</h2>
            <hr class="my-2 border-gray-700 ">
            <p>
              {!!$about[0]->main!!}
              
            </p>
        </div>
        <div class="my-8 text-center">
            <h2 class="my-2 text-3xl font-bold">Misión</h2>
            <hr class="my-2 border-gray-700 ">
            <div>
                <p>
                  {!!$about[0]->mision!!}
                </p>

            </div>
            ​
        </div>

        <div class="my-8 text-center">
            <h2 class="my-2 text-3xl font-bold">Objetivo General</h2>
            <hr class="my-2 border-gray-700 ">
            <div>
                <p>
                  {!!$about[0]->goal!!}
                </p>

        </div>

        <div class="my-8">
            <h2 class="text-center my-2 text-3xl font-bold">Líneas de Acción</h2>
            <hr class="my-2 border-gray-700 ">
            <div class="text-center italic flex lg:flex-row flex-col">
                <div class="lg:w-1/3 mx-5 mb-6">
                    <h3 class="text-xl font-bold">Local <i class="fas fa-home"></i></h3>
                    <hr class="my-2 border-gray-700 ">
                    <ul class="text-left list-disc px-2">
                      {!!$about[0]->local!!}
                        
                    </ul>

                </div>
                <div class="lg:w-1/3 mx-5 mb-6"> 
                    <h3 class="text-xl font-bold">Exterior <i class="fas fa-external-link-alt"></i></h3>
                    <hr class="my-2 border-gray-700 ">
                    <ul class="text-left list-disc px-2">
                      {!!$about[0]->exterior!!}
                    </ul>

                </div>
                <div class="lg:w-1/3 mx-5 mb-6">
                    <h3 class="text-xl font-bold">Difusion <i class="fas fa-volume-up"></i></h3>
                    <hr class="my-2 border-gray-700 ">
                    <ul class="text-left list-disc px-2">
                        <li>

                          {!!$about[0]->difusion!!}

                  </li>
                      
                    </ul>

                </div>

        </div>

        <div class="my-8">
            <h2 class="text-center my-2 text-4xl font-bold">Directorio</h2> 
            <hr class="my-2 border-gray-700 ">
            {{-- <div class="flex flex-wrap my-4"> --}}
              {{-- @foreach ($directories as $directory) --}}


              {{-- <div class="lg:w-1/3 lg:mb-4 mb-6 p-4">
                <div class="h-full text-center"> --}}
                  {{-- <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/302x302"> --}}
{{--                   <p class="leading-relaxed">{!!$directory->body!!}</p>
                  <span class="inline-block h-1 w-10 rounded bg-comision mt-6 mb-4"></span>
                  <h2 class="text-gray-400 font-medium title-font tracking-wider text-xl italic">{!!$directory->user->name!!} --}}{{-- Óscar Sánchez L. --}}{{-- </h2>
                  <p class="text-gray-500">{!!$directory->pos!!} --}}{{-- Director --}}{{-- </p>
                </div>
              </div> --}}


              <div class="grid lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-6 mt-8 ">
                @foreach ($directories as $directory)
                <div class="h-full text-center">
                  <p class="h-1/2 leading-relaxed">{!!$directory->body!!}</p>
                
                  <div class="h-1/2">
                    <span class="inline-block h-1 w-10 rounded bg-comision mt-6 mb-4"></span>
                    <h2 class="text-gray-400 font-medium title-font tracking-wider text-xl italic">{!!$directory->user->name!!}{{-- Óscar Sánchez L. --}}</h2>
                    <p class="text-gray-500">{!!$directory->pos!!}{{-- Director --}}</p>
                  </div>
               </div>
               @endforeach
              </div>




              
                
                {{-- <div class="lg:w-1/3 lg:mb-4 mb-6 p-4">
                    <div class="h-full text-center">
                      <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/302x302">
                      <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                      <span class="inline-block h-1 w-10 rounded bg-comision mt-6 mb-4"></span>
                      <h2 class="text-gray-400 font-medium title-font tracking-wider text-xl italic">Carlos César Ramos Mantecón</h2>
                      <p class="text-gray-500">Coordinador General</p>
                    </div>
                  </div>
                  <div class="lg:w-1/3 lg:mb-4 mb-6 p-4">
                    <div class="h-full text-center">
                      <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/302x302">
                      <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                      <span class="inline-block h-1 w-10 rounded bg-comision mt-6 mb-4"></span>
                      <h2 class="text-gray-400 font-medium title-font tracking-wider text-xl italic">Eréndira Hernández Cárdenas</h2>
                      <p class="text-gray-500">Coordinadora de Producción</p>
                    </div>
                  </div>
                  <div class="lg:w-1/3 lg:mb-4 mb-6 p-4">
                    <div class="h-full text-center">
                      <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/302x302">
                      <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                      <span class="inline-block h-1 w-10 rounded bg-comision mt-6 mb-4"></span>
                      <h2 class="text-gray-400 font-medium title-font tracking-wider text-xl ">José Manuel Tenorio Salgado </h2>
                      <p class="text-gray-500">Coordinador de Investigación y Enlace Académico</p>
                    </div>
                  </div>
                  <div class="lg:w-1/3 lg:mb-4 mb-6 p-4">
                    <div class="h-full text-center">
                      <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/302x302">
                      <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                      <span class="inline-block h-1 w-10 rounded bg-comision mt-6 mb-4"></span>
                      <h2 class="text-gray-400 font-medium title-font tracking-wider text-xl ">Juan Miguél Buitrago Aledo</h2>
                      <p class="text-gray-500">Coordinador de Enlace Internacional</p>
                    </div>
                  </div>
                  <div class="lg:w-1/3 lg:mb-4 mb-6 p-4">
                    <div class="h-full text-center">
                      <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/302x302">
                      <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                      <span class="inline-block h-1 w-10 rounded bg-comision mt-6 mb-4"></span>
                      <h2 class="text-gray-400 font-medium title-font tracking-wider text-xl ">Lauro Santana Carrillo Solano </h2>
                      <p class="text-gray-500">Asesor Jurídico</p>
                    </div>
                  </div> --}}
                
                
              </div>
        </div>





    </div>

@endsection
