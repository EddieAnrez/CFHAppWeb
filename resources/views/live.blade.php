@extends('layouts.app')
@section('main')
<div class="container bg-black  px-4 py-8 sm:px-6 lg:px-8 vertical ">
    <h1 class=" text-white text-center mb-4 text-6xl font-bold ">Transmisión en Vivo</h1>
    <hr class="container mb-8 border-gray-700">

    @if ($live->count()) 

    <div class="bg-gray-200 p-4 text-center rounded-t text-gray-600 font-bold">
        <p>
            {{$live[0]->descripcion}}

        </p>
    </div>


   <div class="flex lg:flex-row flex-col items-center justify-items-center bg-gray-200 text-gray-700 p-4">
       <div class="lg:w-2/3 w-full p-4">
           <div class="relative h-0 overflow-hidden max-w-full my-8 rounded-lg border-4 border-gray-400" style="padding-bottom: 56.25%">
              <iframe class=" absolute top-0 left-0 w-full h-full" src="https://www.youtube-nocookie.com/embed/{{$live[0]->id_youtube}}"
               title="YouTube video player" frameborder="0"
               allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
               allowfullscreen>
                </iframe>
           </div> 
       </div>

        

        <div class="lg:w-1/3 w-full justify-center text-center items-center  ">

          <iframe class=" m-2 border-4 border-gray-400 lg:w-100 w-96 ml-auto mr-auto rounded-lg" allowfullscreen="" frameborder="0" width="480" height="500" src="https://www.youtube.com/live_chat?v={{$live[0]->id_youtube}}&embed_domain={{$live[0]->website}}" ></iframe><br />
       
        </div>
   </div>
   

  


    <div class="bg-gray-200 p-8 rounded-b flex justify-center flex-col lg:flex-row text-gray-600 text-3xl items-center">
        <p class="lg:mx-8 uppercase">¡¡¡ Compartelo !!! </p>
        <div class="lg:m-0 m-4 text-white">
        <a class="mx-2 bg-comision border-2 border-white rounded-full py-2 px-4" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$live[0]->link}}"><i class="fab fa-facebook-f"></i></a>
        <a class="mx-2 bg-comision border-2 border-white rounded-full py-2 px-3" target="_blank" href="https://twitter.com/home?status={{$live[0]->link}}"><i class="fab fa-twitter"></i></a>
        <a class="mx-2 bg-comision border-2 border-white rounded-full py-2 px-3" target="_blank" href="mailto:info@example.com?&subject=&cc=&bcc=&body={{$live[0]->link}}%0A"><i class="far fa-envelope"></i></a>
        </div>
             
    </div>

    @else

    <div class="justify-center flex">
        <img src="{{Storage::url('cfh_black.jpg')}}" alt="">
        
    </div>
    <p class="text-white text-center font-bold my-6">Espera Noticias Sobre Las Próximas Transmisiones...</p>

    @endif
    
</div>
@endsection