<nav class="bg-black" x-data="{open: false}">
    <div class="max-w-7xl mx-auto px-2 sm:px-3 lg:px-4">

        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center {{-- lg:block --}}  lg:hidden">

                <!-- Mobile menu button-->
                <button x-on:click="open = true" type="button"
                    class="transition delay-150 duration-300 ease-in-out inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed. -->
                    <!--
              Heroicon name: outline/menu
  
              Menu open: "hidden", Menu closed: "block"
             -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon when menu is open. -->
                    <!--
              Heroicon name: outline/x
  
              Menu open: "block", Menu closed: "hidden"
             -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>


            <div class="flex-1 flex items-center justify-center  lg:items-stretch  lg:justify-start">
                <a href="/" class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-24 w-auto mb-2" src="{{ asset('storage/cfh_logo_n.jpg') }}"
                        alt="Huatulco">

                </a>

                <div class="hidden lg:block sm:ml-6 font-semibold">
                    <div class="flex md:space-x-1 lg:space-x-4 ">
                        <div class="group inline-block relative ">
                            <div
                                class="bg-black text-gray-300 hover:bg-gray-700 py-2 px-3 rounded inline-flex items-center hover:text-white">
                                <span class="mr-1">Sobre Nosotros</span>
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                            <ul class="absolute hidden  text-gray-700 pt-1  group-hover:block text-center">
                                <li class="border-b border-gray-300">
                                    <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-1 px-6 block whitespace-no-wrap text-sm"
                                        href="{{ route('about') }}">Comisión Fílmica</a>
                                </li>
                                <li class="border-b border-gray-300">
                                    <a class="bg-gray-200 hover:bg-gray-400 py-1 px-6 block whitespace-no-wrap text-sm"
                                        href="{{ route('huatulco') }}">Info. Región</a>
                                </li>
                                <li class="">
                                    <a class=" bg-gray-200 rounded-b hover:bg-gray-400 py-1 px-6 block whitespace-no-wrap text-sm"
                                        href="{{ route('links') }}">Enlaces de Interés</a>
                                </li>

                            </ul>
                        </div>
                        <a href="{{ route('location.index') }}"
                            class="  text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base ">Locaciones</a>
                        <a href="{{ route('map') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base">Mapa
                            Fílmico</a>
                        <a href="{{ route('videos') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base">Videos</a>
                        <a href="{{ route('services') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base ">Servicios</a>
                        <a href="{{ route('blog.index') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base">Blog</a>
                        <div class="group inline-block relative">
                            <div
                                class="bg-black text-gray-300 hover:bg-gray-700 py-2 px-4 rounded inline-flex items-center hover:text-white">
                                <span class="mr-1">Filma en Huatulco</span>
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                            <ul
                                class="absolute hidden  text-gray-700 pt-1  group-hover:block text-center {{-- divide-solid divide-black --}} ">
                                <li class="border-b border-gray-300">
                                    <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-1 px-7 block whitespace-no-wrap text-sm"
                                        href="{{ route('permissions') }}">Trámites y Permisos</a>
                                </li>
                                                            

                                <li class="border-b border-gray-300">
                                    <a class="bg-gray-200 hover:bg-gray-400 py-1 px-7 block whitespace-no-wrap text-sm"
                                        href="{{ route('regulations') }}">Leyes y Reglamentos</a>
                                </li>

                                <li class="border-b border-gray-300">
                                    <a class=" bg-gray-200 hover:bg-gray-400 py-1 px-7 block whitespace-no-wrap text-sm"
                                        href="{{ route('covid') }}">Protocolo COVID-19</a>
                                </li>

                                <li class="">
                                    <a class="rounded-b bg-gray-200 hover:bg-gray-400 py-1 px-4 block whitespace-no-wrap text-sm"
                                        href="{{ route('incentives') }}">Estímulos</a>
                                </li>
                            </ul>
                        </div>
                        <a href="{{route('live')}}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white  px-3 py-2 rounded-md text-base  flex items-start justify-items-start">En Vivo
                            <div class="blob"></div>
                        </a>
                        <a href="{{ route('contact.index') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base ">Contacto</a>
                    </div>
                </div>
            </div>

            @auth
                <div
                    class="absolute inset-y-0 right-0 lg:flex items-center pr-2 hidden  sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button
                        class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="ml-3 relative" x-data={open:false}>
                        <div>
                            <button x-on:click="open=true"
                                class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                id="user-menu" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                            </button>
                        </div>
                        <!--
                              Profile dropdown panel, show/hide based on dropdown state.
                  
                              Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                              Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->
                        <div x-show="open" x-on:click.away="open=false"
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                            <a href="{{ route('profile.show') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Perfil</a>
                            <a href="{{ route('config.home') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Configuración</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" onclick="event.preventDefault();
                                this.closest('form').submit();">
                                    Cerrar Sesión
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="hidden lg:block ">
                    <a href="{{ route('login') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white sm:hidden lg:block md:block px-3 py-2 rounded-md text-base  font-semibold ">
                        Login
                    </a>

                </div>
            @endauth
        </div>
    </div>



    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="lg:hidden " id="mobile-menu" x-show="open" x-on:click.away="open=false">
        <div class="px-2 pt-5 pb-3 space-y-1 font-semibold" x-data="{ nosotros: false , filma:false}">

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base " @click="nosotros = true" {{-- x-show="!nosotros" --}}>Sobre Nosotros <i class="fas fa-chevron-down"></i></a>
            <div x-show="nosotros" @click.away="nosotros = false">
            <a href="{{ route('about') }}" class="text-gray-300 bg-gray-600 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base"  >Comisión Fílmica</a> 
            <a href="{{ route('huatulco') }}" class="text-gray-300 bg-gray-600 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base" >Info. Región</a>   
            <a href="{{ route('links') }}" class="text-gray-300 bg-gray-600 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base" >Enlaces de Interés</a> 
            </div>
            
            <a href="{{ route('location.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base ">Locaciones</a>
            
            <a href="{{ route('map') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base ">Mapa Fílmico</a>
            
            <a href="{{ route('videos') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base ">Videos</a>
            
            <a href="{{ route('services') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base ">Servicios</a>
            
            <a href="{{ route('blog.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base ">Blog</a>
            
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base " @click="filma = true">Filma en Huatulco <i class="fas fa-chevron-down"></i></a>
                <div x-show="filma" @click.away="filma = false">
                    <a href="{{ route('permissions') }}" class="text-gray-300 bg-gray-600 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base ">Trámites y Permisos</a>  
                    <a href="{{ route('regulations') }}" class="text-gray-300 bg-gray-600 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base ">Leyes y Reglamentos</a>    
                    <a href="{{ route('covid') }}" class="text-gray-300 bg-gray-600 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base ">Protocolo COVID-19</a>  
                    <a href="{{ route('incentives') }}" class="text-gray-300 bg-gray-600 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base ">Estímulos</a>
                </div>
 
            
            <a href="{{route('live')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base ">Radio</a>
            
            <a href="{{ route('contact.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base ">Contacto</a>
            

        </div>
    </div>


</nav>
