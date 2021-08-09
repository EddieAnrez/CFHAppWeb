@extends('layouts.app')
@section('title', 'Contacto')
@section('main')
    <div class="container bg-black  px-4 py-8 sm:px-6 lg:px-8 vertical ">
        <h1 class=" text-white text-center lg:text-6xl text-4xl">Contáctanos</h1>
        <h2 class=" text-white text-center lg:text-5xl text-3xl italic my-2">¿Cómo podemos ayudarte?</h2>
        <h3 class=" text-white text-center lg:text-4xl text-2xl italic my-2">¿Tienes una pregunta o algo que compartir? Llámanos, envianos un correo o deja tú mensaje... </h3>
        <hr class="container border-gray-700 m-8">

        <div>

        @if (session('info'))
      

            <div class="bg-gray-100 border border-gray-400 text-gray-700 px-4 py-3 rounded relative mb-8" role="alert">
                <strong class="font-bold"><i class="fas fa-thumbs-up mr-1"></i> {{ session('info') }}</strong>
             
          
              </div>
            </div>
  
        @endif

        <section class="text-gray-600 body-font relative bg-gray-200 py-4 rounded">
            <div class="container px-5 py-5 mx-auto flex sm:flex-nowrap flex-wrap">
               
                <div class=" bg-gray-300 lg:w-2/3 md:w-1/2 w-full rounded-lg overflow-hidden sm:mr-10 p-10  items-end  relative flex justify-start">
                
                    <iframe class="absolute  inset-0  p-2" style="" title="map"
                        marginheight="0" marginwidth="0" scrolling="no"
                        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ6VMgy38uv4URRVgPTmippsg&key=AIzaSyDUc7qfwOzYw3GDdv17LrM5ttnC2ypx5ws{{-- https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%C4%B0zmir+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed --}}"
                        width="100%" height="100%" frameborder="0"></iframe>

                       
                    <div class="bg-white relative lg:flex flex-wrap  lg:py-4 py-2 lg:mt-0 mx-10 mt-60 rounded lg:shadow-md ">
                        <div class="lg:w-1/2 px-6 lg:block hidden">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">DIRECCIÒN </h2>
                            <p class="mt-1 ">Ed. A-2, Depto. 101, Fracc. Marina, Santa Cruz Huatulco, Santa María Huatulco, Oaxaca, C.P. 70987</p>
                        </div>
                        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0 lg:block hidden">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                            <a class="text-comision font-bold text-xs leading-relaxed">comisionfilmicadehuatulco@gmail.com</a>
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">TELEFONO</h2>
                            <p class="leading-relaxed">951 179 62 49</p>
                        </div>
                    </div> 


                </div>

                <div class="lg:w-1/3 md:w-1/2  bg-gray-300 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0 rounded-lg px-8">
                    <h2 class="text-gray-900 text-lg m-2 font-medium title-font block lg:hidden">Datos de Contacto</h2>
                    <h2 class="text-gray-900 text-lg m-2 font-medium title-font hidden lg:block">Formulario de Contacto</h2>
                    

                    <div class="bg-white relative sm:flex flex-wrap py-4 rounded shadow-md lg:hidden">
                        <div class="lg:w-1/2 px-6">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">DIRECCIÒN </h2>
                            <p class="mt-1">Ed. A-2, Depto. 101, Fracc. Marina, Santa Cruz Huatulco, Santa María Huatulco, Oaxaca, C.P. 70987</p>
                        </div>
                        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                            <a class="text-comision font-bold leading-relaxed">comisionfilmicahuatulco@gmail.com</a>
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">TELEFONO</h2>
                            <p class="leading-relaxed">951 179 62 49</p>
                        </div>
                    </div>

                    <hr class="container border-gray-600 m-4">


                    <h2 class="text-gray-900 text-lg m-2 font-medium title-font block lg:hidden">Formulario de Contacto</h2>



                    <p class="leading-relaxed my-4 text-gray-600">Introduce tu nombre, correo de contacto, y mensaje.</p>

                   
           
                    
                    
                    
                    
                    
                    
                    
                    <form action="{{route('contact.store')}}" method="POST">
                    @csrf
                       
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-gray-600">Nombre <span class="text-red-600">*</span></label>
                        <input type="text" id="name" name="name"
                            class="w-full bg-white rounded border border-gray-300 focus:border-fuchsia-900 focus:ring-2 focus:ring-fuchsia-900 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        @error('name')
                            <small class="text-red-500">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email <span class="text-red-600">*</span></label>
                        <input type="email" id="email" name="email"
                            class="w-full bg-white rounded border border-gray-300 focus:border-fuchsia-900 focus:ring-2 focus:ring-fuchsia-900 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('email')
                            <small class="text-red-500">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="relative mb-4">
                        <label for="body" class="leading-7 text-sm text-gray-600">Mensaje <span class="text-red-600">*</span></label>
                        <textarea id="body" name="body"
                            class="w-full bg-white rounded border border-gray-300 focus:border-fuchsia-900 focus:ring-2 focus:ring-fuchsia-900 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        @error('body')
                            <small class="text-red-500">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="hidden">
                        <label for="status" class="leading-7 text-sm text-gray-600">Email <span class="text-red-600">*</span></label>
                        <input type="status" id="status" name="status" value="Sin Leer"
                            class="w-full bg-white rounded border border-gray-300 focus:border-fuchsia-900 focus:ring-2 focus:ring-fuchsia-900 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

                    </div>

                    
                        <button
                        class="py-2 px-6 w-full block  {{-- inline-flex --}} items-center text-white bg-comision border-0 {{-- py-2 px-10 --}} focus:outline-none hover:bg-white hover:text-comision rounded text-lg justify-center items-center" type="submit">
                        <i class="far fa-envelope mx-1"></i><span class="font-bold"> Enviar</span>  
                        
                    </button>

                   
                    
                  
                </form>

  
                    <p class="text-xs text-gray-500 mt-3 text-center">(<span class="text-red-600">*</span>) - Campo Requerido </p>
                </div>
            </div>
        </section>
    </div>
    </div>
@endsection
