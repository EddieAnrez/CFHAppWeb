@extends('layouts.app')
@section('main')
<div class="container bg-black  px-4 py-8 sm:px-6 lg:px-8 vertical ">
    <h1 class=" text-white text-center mb-4 text-6xl font-bold ">Leyes y Reglamentos</h1>
    <hr class="container mb-8 border-gray-700">


    <div class="bg-gray-600 max-h-screen  flex-row rounded-lg relative my-8">
        <div class="p-4 bg-gray-500 text-gray-200 rounded-t">
          <h5 class="text-gray-200 text-2xl font-bold capitalize">Ley Federal de Cinematografía </h5>
        </div>
        <div class="p-4 w-full h-full overflow-y-auto text-gray-600 bg-gray-200 rounded-b-lg ">
         
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nostrum officia voluptates commodi, 
              ullam, cupiditate cum deserunt quasi voluptatum possimus fugiat doloribus quam ratione sunt in 
              consequuntur enim? Optio, illo.
            </p>
            
            <div>
                <a href="http://www.comefilm.gob.mx/wp-content/uploads/2013/11/Ley-Federal-de-Cinematografia.pdf" target="_blank" class="float-right rounded-lg bg-comision py-2 px-4 m-2 text-gray-200">Visualizar <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        
    </div>
    

    
</div>

    
@endsection