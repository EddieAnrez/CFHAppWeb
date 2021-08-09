<div>
    <div class="container bg-black px-4 py-8 sm:px-6 lg:px-8 vertical" x-data="{ panel: false }">
        <h1 class=" text-white text-center mb-4 text-6xl font-bold ">Locaciones</h1>
        <hr class="container mb-8 border-gray-700">

        <div class="text-right" >
            <button class="bg-comision text-white px-4 py-2 animate__fadeIn inline-flex items-center font-bold rounded-lg"  @click="panel = true" x-show="!panel" > 
                <i class="fas fa-angle-double-down mx-2"></i>Mostrar Panel Busqueda
            </button>
            <button class="bg-comision text-white px-4 py-2 animate__fadeIn inline-flex items-center font-bold rounded-lg"  @click="panel = true" x-show="panel" > 
                <i class="fas fa-angle-double-up mx-2"></i> Ocultar Panel Busqueda</button>

        </div>


        <div class="border-gray-600 border-2 my-2 p-2" x-show="panel" @click.away="panel = false">


            <div class="flex border-black border" >
                <input wire:model="idSearch" class="w-full rounded m-4 focus:ring-comision focus:ring-2  focus:shadow-outline text-xl   shadow-lg" type="search" placeholder="Buscar Locación...">
                <button class="bg-comision rounded-lg font-bold  m-4  px-8 py-2   hover:bg-white hover:text-black text-white">
                    Buscar
                            
                </button>
            </div> 

            
               
              

            <div class="m-2">
                <form class="w-full border-gray-600 border-2 bg-black py-2 px-4">
                    <h2 class="text-gray-400 font-bold uppercase text-center">filtros</h2>
                    <div class="flex flex-wrap -mx-3   m-2  ">
                        <div class="lg:w-1/4 w-1/2  px-3 mb-6 ">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name">
                                Categoría
                            </label>
                            <select wire:model="idCategory"
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-state">
                                <option value="">Todas las Categorías</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                
                                
                            </select>

                        </div>
                        <div class="lg:w-1/4 w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Área
                            </label>
                            <select wire:model="idArea"
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-state">
                                <option value="">Todas las Àreas</option>
                                @foreach ($areas as $area)
                                <option value="{{$area->id}}">{{$area->name}}</option>
                                @endforeach
                                
                                
                            </select>
                        </div>
                        <div class="lg:w-1/4 w-1/2 px-3 mb-6 ">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-city">
                                ID Locación
                            </label>
                            <input wire:model="idLocation"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-city" type="text" placeholder="Introduzca ID de Locación">
                        </div>

                        <div class="lg:w-1/4 w-1/2  flex p-2 {{-- mb-6 --}} ">

                            <button
                                class="w-1/2 my-4 mx-2 rounded-lg  bg-comision  text-white hover:bg-white hover:text-comision  font-bold">
                                Buscar

                            </button>
                            <button
                                class="w-1/2 my-4 mx-2 rounded-lg bg-gray-200  hover:bg-gray-400 hover:text-white font-bold  ">
                                Limpiar
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>





        <div class="grid lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-3 mt-8 text-center people">

            @foreach ($locations as $location)
            <div class="flex relative h-96">
                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" 
                    src="{{Storage::url($location->image->url)}}">
                <div class="px-8 py-10 relative z-10 w-full border-2 {{-- border-gray-200 --}} bg-gray-600 bg-opacity-70  opacity-0 hover:opacity-100">
                    <h2 class="tracking-widest text-xl title-font  text-black underline font-bold pt-8 mb-1">ID:{{$location->id}}</h2>
                    <h1 class="title-font text-lg font-medium text-gray-300 mb-1 uppercase">Categoría: {{$location->category->name}}</h1>
                    <h1 class="title-font text-lg font-medium text-gray-300 mb-1 uppercase">Área: {{$location->area->name}}</h1>
                    <h1 class="title-font text-lg font-medium text-white mb-3 uppercase">{{$location->name}}</h1>
                    <a href=" {{route('location.show', $location)}}" class="bg-comision py-2 px-4 rounded-lg text-white">Detalles</a>
                     
                </div>
            </div>

            @endforeach
  
        </div>

        <div class="mt-4 mx-auto my-auto">
            {{ $locations->links() }}
        </div>

    </div>
</div>
