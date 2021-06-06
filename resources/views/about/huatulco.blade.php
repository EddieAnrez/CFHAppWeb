@extends('layouts.app')
@section('main')

    <div class="container bg-black px-4 py-8 sm:px-6 lg:px-8 vertical text-white">
        <h1 class=" text-white text-center mb-4 text-6xl font-bold ">Acerca de Huatulco</h1>
        <hr class="container mb-8 border-gray-700 ">


        <section class="text-gray-600 body-font">
            <div class=" px-4 py-4">

                <div class="flex items-center w-100 mx-auto border-b pb-10 mb-10 border-gray-700 sm:flex-row flex-col">
                    <div
                        class="w-60 h-60 lg:h-auto lg:w-1/2 sm:mr-10 inline-flex items-center justify-center rounded flex-shrink-0">
                        <img alt="gallery" class="rounded object-cover object-center" src="https://picsum.photos/500/500">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                        <h2 class="text-white title-font font-medium mb-2 italic text-3xl">Santa María Huatulco </h2>
                        <p class="text-xl text-white font-light">
                            Santa María Huatulco, también conocido como <span class="italic font-bold">Huatulco</span>, es
                            uno de los 570 municipios que conforman al estado
                            mexicano de Oaxaca. Pertenece al distrito de Pochutla, dentro de la región costa. Fue fundado
                            aproximadamente
                            hace 489 años y cuenta con una población de 38 629 habitantes.
                        </p>

                    </div>
                </div>

                <div class="flex items-center w-100 mx-auto border-b pb-10 mb-10 border-gray-700 sm:flex-row flex-col">
                    <div>
                        <h2 class="text-white title-font font-medium mb-2 italic text-3xl text-center">Su principal
                            atractivo son sus 9 bahías y 36 playas. Las bahías llevan por nombre:</h2>
                        <hr class="container mb-4 border-gray-700 ">
                        <div class="grid lg:grid-cols-3 grid-cols-1 gap-4 ">


                            <div class="flex relative rounded-lg w-full h-96">
                                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                    src="https://picsum.photos/500/700">
                                <div
                                    class="px-8 py-10 relative z-10 w-full border-2  bg-gray-600 bg-opacity-70  opacity-0 hover:opacity-100 text-center">

                                    <h2 class="title-font text-xl font-bold text-black mb-3 uppercase underline">Conejos
                                        </h1>
                                        <div class=" text-white">Cuenta con tres playas: El Tejoncito, Playa Conejos y Punta
                                            Arena.</div>

                                </div>
                            </div>




                            <div class="flex relative rounded-lg w-full h-96">
                                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                    src="https://picsum.photos/500/700">
                                <div
                                    class="px-8 py-10 relative z-10 w-full border-2  bg-gray-600 bg-opacity-70  opacity-0 hover:opacity-100 text-center">

                                    <h2 class="title-font text-xl font-bold text-black mb-3 uppercase underline">Tangolunga
                                        </h1>
                                        <div class=" text-white">En zapoteco significa "mujer bonita"; considerada la
                                            principal zona hotelera del municipio.</div>

                                </div>
                            </div>








                            <div class="flex relative rounded-lg w-full h-96">
                                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                    src="https://picsum.photos/500/700">
                                <div
                                    class="px-8 py-10 relative z-10 w-full border-2  bg-gray-600 bg-opacity-70  opacity-0 hover:opacity-100 text-center">

                                    <h2 class="title-font text-xl font-bold text-black mb-3 uppercase underline">Santa Cruz
                                        </h1>
                                        <div class=" text-white">Cuenta con tres playas: La Entrega, Yerbabuena y Punta
                                            Santa Cruz; es una de las bahías más importantes del lugar, ya que ahí se
                                            encuentra la dárcena o embarcadero de donde zarpan todas las embarcaciones, y un
                                            muelle para cruceros de talla internacional;</div>

                                </div>
                            </div>





                            <div class="flex relative rounded-lg w-full h-96">
                                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                    src="https://picsum.photos/500/700">
                                <div
                                    class="px-8 py-10 relative z-10 w-full border-2  bg-gray-600 bg-opacity-70  opacity-0 hover:opacity-100 text-center">

                                    <h2 class="title-font text-xl font-bold text-black mb-3 uppercase underline">Chahué</h1>
                                        <div class=" text-white">En zapoteco significa "tierra fértil" o "tierra húmeda";
                                            cuenta con una marina para yates;</div>

                                </div>
                            </div>



                            <div class="flex relative rounded-lg w-full h-96">
                                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                    src="https://picsum.photos/500/700">
                                <div
                                    class="px-8 py-10 relative z-10 w-full border-2  bg-gray-600 bg-opacity-70  opacity-0 hover:opacity-100 text-center">

                                    <h2 class="title-font text-xl font-bold text-black mb-3 uppercase underline">Maguey</h1>
                                        <div class=" text-white">Esta playa de aproximadamente 500 metros de longitud y 25 a
                                            50 metros de ancho es muy visitada debido a la tranquilidad de sus aguas, el
                                            agua es cristalina con tonalidades verdes y azules, y tiene temperatura
                                            templada;</div>

                                </div>
                            </div>


                            <div class="flex relative rounded-lg w-full h-96">
                                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                    src="https://picsum.photos/500/700">
                                <div
                                    class="px-8 py-10 relative z-10 w-full border-2  bg-gray-600 bg-opacity-70  opacity-0 hover:opacity-100 text-center">

                                    <h2 class="title-font text-xl font-bold text-black mb-3 uppercase underline">Órgano</h1>
                                        <div class=" text-white">Playa virgen de aproximadamente 240 metros de longitud y 20
                                            metros de ancho; su pendiente es moderada, al igual que sus oleajes;

                                            ​</div>

                                </div>
                            </div>


                            <div class="flex relative rounded-lg w-full h-96">
                                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                    src="https://picsum.photos/500/700">
                                <div
                                    class="px-8 py-10 relative z-10 w-full border-2  bg-gray-600 bg-opacity-70  opacity-0 hover:opacity-100 text-center">

                                    <h2 class="title-font text-xl font-bold text-black mb-3 uppercase underline">Cacaluta
                                        </h1>
                                        <div class=" text-white">En zapoteco significa "ave negra" o cacalote; recibe año
                                            con año a distintas aves migratorias;

                                            ​</div>

                                </div>
                            </div>


                            <div class="flex relative rounded-lg w-full h-96">
                                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                    src="https://picsum.photos/500/700">
                                <div
                                    class="px-8 py-10 relative z-10 w-full border-2  bg-gray-600 bg-opacity-70  opacity-0 hover:opacity-100 text-center">

                                    <h2 class="title-font text-xl font-bold text-black mb-3 uppercase underline">Chachacual
                                        </h1>
                                        <div class=" text-white">Es una gran reserva ecológica integrada al Parque nacional
                                            Huatulco; posee dos playas virgenes: Chachacual y La India;

                                            ​</div>

                                </div>
                            </div>



                            <div class="flex relative rounded-lg w-full h-96">
                                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                    src="https://picsum.photos/500/700">
                                <div
                                    class="px-8 py-10 relative z-10 w-full border-2  bg-gray-600 bg-opacity-70  opacity-0 hover:opacity-100 text-center">

                                    <h2 class="title-font text-xl font-bold text-black mb-3 uppercase underline">

                                        San Agustín</h2>
                                    <div class=" text-white">Con aproximadamente 1,500 metros de longitud y de 20 a 80
                                        metros de anchura, cuenta con una arrecife de coral blanco a tan sólo unos metros
                                        mar adentro; cuenta con dos playas: San Agustín y Cacalutilla.

                                        ​</div>

                                </div>
                            </div>














                        </div>
                    </div>

                </div>


                <div class="flex items-center w-100 mx-auto border-b pb-10 mb-10 border-gray-700 sm:flex-row flex-col">

                    <div class="flex-grow lg:text-right text-center mt-6 sm:mt-0">
                        <h2 class="text-white title-font font-bold mb-2 text-4xl  px-4 ">Localización</h2>
                        <div class="text-xl text-white px-4 font-light">
                            <p class="my-2">
                                Las Bahías de Huatulco se localizan en la costa del Estado de Oaxaca, en la parte final de
                                la Sierra Madre del Sur. Abarcan 35 kilómetros del Litoral Pacífico Mexicano, entre los ríos
                                de Coyula y Copalita. Situado a 277 km de la capital de Oaxaca y a 50 minutos de la ciudad
                                de México por vía aérea. Cuenta también con vías de acceso terrestres y marítimas.</p>
                            <p class="my-2">
                                La agresiva belleza de la zona es resultado de su ubicación en las estribaciones de la
                                Sierra Madre del Sur, de topografía accidentada de montañas, laderas y valles, adornada por
                                los ríos Coyula, San Agustín y Copalita.

                            </p>
                            <p class="my-2">
                                Agrega atractivo a la zona el hecho de contar en sus alrededores con puertos tradicionales
                                como son: Puerto Ángel, Mazunte y Zipolite a 52 kilómetros aproximadamente, Puerto Escondido
                                a 109 km, además de pintorescos poblados como la cabecera municipal a 34 km y Pochutla a 40
                                km de distancia del desarrollo turístico.

                                ​
                            </p>

                        </div>



                    </div>
                    <div
                        class="{{-- w-11/12 h-8 --}} lg:h-auto lg:w-1/3  {{-- sm:mr-10 --}} inline-flex items-center justify-center rounded flex-shrink-0">
                        <img alt="gallery" class="rounded object-cover object-center" src="https://picsum.photos/700/500">
                    </div>



                </div>


                <div class="flex items-center lg:w-100 mx-auto border-b pb-10 mb-10 border-gray-700 flex-col">
                    <div class="flex-grow  text-center mt-6 sm:mt-0">
                        <h2 class="text-white title-font font-bold mb-2 text-4xl ">Clima</h2>
                        <p class="text-xl text-white font-light my-2">El clima cálido permite disfrutar de 325 días soleados
                            al año y solamente 40 días lluviosos.</p>
                        <p class="text-xl text-white font-light my-2">
                            Uno de tantas bondades con las que cuenta Bahías de Huatulco es su clima: cálido subhúmedo, con
                            una temperatura media anual de 28 °C, con una media extrema de 18 °C en invierno y 38 °C a
                            finales de la primavera y durante el verano.

                        </p>


                    </div>
                </div>


                <div class="flex items-center w-100 mx-auto border-b pb-10 mb-10 border-gray-700 sm:flex-row flex-col">
                    <div class="flex-grow lg:text-right text-center mt-6 sm:mt-0">
                        <h2 class="text-white title-font font-bold mb-2 text-4xl px-4 ">Flora y Fauna</h2>
                        <div class="text-xl text-white px-4  font-light">
                            <p class="my-2">
                                La vegetación de Bahías de Huatulco es exuberante, puesto que se pueden encontrar las
                                principales especies arbóreas, como el tepeguanje, el cazarate, la amapola, los ficus,
                                mecianos, el colorin, así como selva baja espinosa, matorral espinoso, bosque de galería y
                                manglar en el cordón litoral. </p>
                            <p class="my-2">
                                Su fauna es típica de la zona neotropical, con ausencia de grandes mamíferos y depredadores;
                                se encuentran las ratas de campo, ratones, tlacuaches, tejones, mapaches, armadillos.
                                conejos, ardillas, venado cola blanca.
                            </p>
                            <p class="my-2">
                                Existe una variedad de reptiles y anfibios, entre ellos salamandras, sapos, ranas tortugas
                                terrestres y acuáticas, iguanas, boas, víboras, así como una extensa variedad de aves, donde
                                las más importantes son los halcones, gavilanes, lechuzas, palomas, pelícanos, gaviotas,
                                urracas, cardenales, calandrias, caciques, carpinteros, colorines, gorriones y colibríes.
                            </p>
                            <p class="my-2">
                                Huatulco es rico en fauna marina. Destacan el ostión, la langosta, el camarón, el delfín, el
                                atún, el dorado, el pargo, el pez vela y el marlin, la tortuga, el huachinango, la almeja,
                                el caracol y ocasionalmente ballenas.
                            </p>
                        </div>
                    </div>
                    <div class=" lg:h-auto lg:w-1/3 sm:mr-10 inline-flex items-center justify-center rounded flex-shrink-0">
                        <img alt="gallery" class="rounded object-cover object-center" src="https://picsum.photos/500/500">
                    </div>
                </div>



                <div class="flex items-center w-100 mx-auto border-b pb-10 mb-10 border-gray-700 sm:flex-row flex-col">
                    <div class=" lg:h-auto lg:w-1/3 sm:mr-10 inline-flex items-center justify-center rounded flex-shrink-0">
                        <img alt="gallery" class="rounded object-cover object-center" src="https://picsum.photos/500/700">
                    </div>
                    <div class="flex-grow lg:text-left text-center mt-6 sm:mt-0">
                        <h2 class="text-white title-font font-bold mb-2 text-4xl px-4">Tradición</h2>
                        <div class="text-xl text-white px-4  font-light">
                            <p class="my-2">
                                Las generaciones pasan, el tiempo no se detiene, pero las formas no cambian, los procesos perduran, la alegría se mantiene, los sabores se identifican; Huatulco es toda una forma de vida heredada, naves mercantes venidas del oriente, leyendas con un toque de misticismo, caminos antiguos por donde transitaban los ancestros que fundaron los pueblos, vestigios arqueológicos a la orilla del mar, bailes, sones y chilenas que con su ritmo y cadencia invitan a disfrutarlos. </p>
                            <p class="my-2">
                                Es por ello que con mucho orgullo dan a conocer sus costumbres y tradiciones en la máxima fiesta de los oaxaqueños: “La Guelaguetza”. Mostrando al turismo nacional e internacional, la algarabía que los caracteriza, agregándole un toque pícaro a su presentación, exhibiendo con sus trajes vistosos, la maravilla de su corales.
                            </p>
                            
                        </div>
                    </div>

                </div>


                <div class="flex items-center w-100 mx-auto {{-- border-b border-gray-700  --}}pb-10 mb-10  sm:flex-row flex-col">
                    
                    <div class="flex-grow lg:text-right text-center mt-6 sm:mt-0">
                        <h2 class="text-white title-font font-bold mb-2 text-4xl px-4">Gastronomìa</h2>
                        <div class="text-xl text-white px-4  font-light">
                            <p class="my-2">
                                La gastronomía de Oaxaca se distingue por la gran variedad de elementos que la conforman, condimentos prehispánicos que se han mezclado con ingredientes del Viejo Mundo, destacando por su sabor y color en cada platillo. </p>
                            <p class="my-2">
                                Del chocolate al chile, sin excluir al mezcal acompañado de los exóticos chapulines, la carne de iguana, el delicioso quesillo y su pan de yema, la cocina oaxaqueña tiene siempre una sorpresa para el paladar. 
                            </p>
                            <p class="my-2">
                                Y en la costa, frente a sus cálidas aguas y la hermosura de sus playas, los mariscos se proponen como una alternativa más para los visitantes. 
                            </p>

                            <p class="my-2">
                                En Huatulco los ingredientes de la gastronomía oaxaqueña se unen a los pescados y mariscos, como camarones, langosta y pulpo para elaborar platillos como los caldos de camarón gigante o el pescado a la talla, las mariscadas calientes y las exóticas piñas gratinadas rellenas de mariscos.
                            </p>
                            
                        </div>
                    </div>
                    <div class=" lg:h-auto lg:w-1/3 sm:mr-10 inline-flex items-center justify-center rounded flex-shrink-0">
                        <img alt="gallery" class="rounded object-cover object-center" src="https://picsum.photos/1600/800">
                    </div>

                </div>





            </div>







        </section>



    </div>

@endsection
