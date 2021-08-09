
<div class="container bg-black  px-4 py-8 sm:px-6 lg:px-8 vertical ">
    <h1 class=" text-white text-center mb-4 text-6xl font-bold ">Servicios</h1>
    <hr class="container mb-8 border-gray-700">
    <div class="text-center mb-8 ">
        <div class="flex lg:flex-row flex-col {{-- items-center --}} justify-center {{-- justify-items-center --}} {{-- text-center --}}">
            @csrf
          
            <label class="text-white mx-2 my-2" for="">Categorías</label>
            <Select class="lg:mr-6 rounded-lg" wire:model="subcategory">
              <option  class="italic" value="">Seleccione Categoría</option>
                @foreach ($subcategories as $subcategory)
                <option value="{{$subcategory->id}}">{{$subcategory->category->name}}-{{$subcategory->name}}</option>
                @endforeach
               
            </Select>
            <label class="text-white mx-2 my-2" for="">Busqueda por Nombre</label>
            <input class="rounded-lg" wire:model="name" type="text">
        </div>

    </div>
    <hr class="container mb-8 border-gray-700">
    @if ($services->count())
    @foreach ($services as $service)
     <div class='p-5'>
          <div class="bg-gray-200 max-h-screen  flex-row rounded relative">
            <div class="p-4 bg-gray-500 text-gray-200 rounded-t">
              <h5 class="text-gray-200 text-2xl font-bold capitalize">{{$service->name}}</h5>
            </div>

            <div class="p-4 w-full h-full overflow-y-auto text-gray-600">
              <p><span class="font-bold m-1">Categoría:</span>{{$service->subcategory->category->name}}</p>
              <p><span class="font-bold m-1">Sub-Categoría:</span>{{$service->subcategory->name}}</p>
              <p><span class="font-bold m-1">Contacto:</span>{{$service->contact}}</p>
              <p><span class="font-bold  m-1">Dirección:</span>{{$service->adress}}</p>
              <p><span class="font-bold  m-1">Telefono:</span>{{$service->phone}}</p>
              <p><span class="font-bold  m-1">Correo Electronico:</span>{{$service->email}}</p>
              <p><span class="font-bold  m-1">Pagina Web:</span>{{$service->website}}</p>
              <p class="m-1 font-light">{{$service->desc}}</p>
            </div>
            <div class="text-gray-400 font-normal lg:text-right text-center text-3xl m-2 p-4">
              @if ($service->facebook!=null)
              <a href="https://www.facebook.com/{{$service->facebook}}" target="_blank"><i class="fab fa-facebook m-2 hover:text-comision "></i></a>
              @endif

              @if ($service->twitter!=null)
              <a href="https://www.twitter.com/{{$service->twitter}}" target="_blank"><i class="fab fa-twitter m-2 hover:text-comision"></i></a>
              @endif

              @if ($service->instagram!=null)
              <a href="https://www.instagram.com/{{$service->instagram}}" target="_blank"><i class="fab fa-instagram m-2 hover:text-comision"></i></a>
              @endif

              @if ($service->youtube!=null)
              <a href="https://www.yotube.com/{{$service->youtube}}" target="_blank"><i class="fab fa-youtube m-2 hover:text-comision"></i></a>
              @endif

              @if ($service->pinterest!=null)
              <a href="{{$service->pinterest}}" target="_blank"><i class="fab fa-pinterest m-2 hover:text-comision"></i></a>
              @endif

              

              
              
              
              
             
                  </div>
          </div>
        </div>
        @endforeach

        <div>
  {{$services->links()}} 
</div>
@else
<div class="text-center text-white font-bold ">
    <strong>No Hay Registros! <i class="far fa-thumbs-down"></i></strong>
</div>
@endif
    
</div>




{{-- 
Desarrollo -> Guionistas - Investigadores

Preproduccion -> 

Servicios de Produccion -> Animaleros , Asistentes de Dirección , Asistentes de Producción, Casas de animación y Videojuegos
Compañías de Producción, Continuista, Coordinadores de producción, Crew, Dirección de Arte, Directores de Fotografía, Ecónomos y Estilistas de Alimentos
Efectos Especiales, Foros, Músicos, Supervisión musical, Fotografía Fija / Producción Gráfica, Gaffers / Eléctricos
Gerentes de Locación, Grip, Maquillistas, Productores, Renta de Locaciones, Servicios Aduanales, Sindicatos, Sonidistas / Microfonistas
Stunts, Utilería, Vestuaristas, Compositores

Servicios de Post - Produccion -> Casas Post-Productoras y Corrección de Color, Doblaje y Subtitulaje, Estudios de Grabación y Diseño de Audio
Laboratorios de Cine, Visualizadores y Editores

Equipo de Produccion - > Renta de Equipo, Proveedores de Insumos

Proveedores - > Alimentación Fílmica, Renta de Baños, Seguridad, Seguros Fílmicos, Transporte Especializado, Servicios de desinfección y limpieza
Hospedaje

Talento-> Agencias de Casting, Directores de Casting, Locutores

Lanzamiento -> Agencias de Publicidad Especializadas en Cine, Agencia de Relaciones Públicas, Distribuidoras de Películas
Publicaciones de la Industria

Instituciones y Organizaciones Cinematograficas -> Comisiones Fílmicas , Instituciones y Organizaciones

Educacion -> Centros de Educación Cinematográfica , Escuelas de Comunicación y Cine


Festivales de cine -> Festivales de Cine , Muestras de Cine, Ciclos de Cine --}}

