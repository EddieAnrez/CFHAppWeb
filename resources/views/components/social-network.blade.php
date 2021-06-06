@props(['weather'])
<div class="bg-black text-gray-700 text-right px-4 py-2">
    <div class="container mx-auto py-4 px-5 flex flex-wrap  justify-around flex-col lg:flex-row items-center">

        <div class="lg:w-1/3 w-full lg:my-auto my-4  lg:order-1 order-3 text-gray-700 text-md text-center flex flex-row justify-around items-baseline">

            <p {{-- class="mx-2" --}}>
            
                <i class="fas fa-thermometer-three-quarters text-2xl"></i> <span class="text-gray-700 lg:text-lg ">{{number_format($weather['main']['temp'], 0) }} °C </span> 
            </p>

            <p  >
                <i class="fas fa-tint text-2xl"></i> <span class="text-gray-700 lg:text-lg"> {{number_format($weather['main']['humidity'], 0) }}%</span>

            </p>
            <p>
                <i class="fas fa-wind text-2xl"></i><span class="text-gray-700 lg:text-lg"> {{number_format((($weather['wind']['speed'])*3.6),1)}}Km/Hr</span>
            </p>


            

   

        </div>

        <div class="w-1/3 object-contain lg:order-2 order-1 hidden lg:block">

            
            <a href="/">
                <img src="{{Storage::url('cfh_black.jpg')}}" class=" w-40 text-white p-2  mx-auto bg-black {{-- rounded-full --}}">
                
            </a>

           

        </div>
           

        <div class="lg:hidden block order-1 ">
            <span><i class="fas fa-arrow-down"></i> Siguenos en nuestras redes sociales <i class="fas fa-arrow-down"></i></span>
        </div>

        <div class="lg:w-1/3 w-full text-center  order-2  ">
            <div class="inline-flex space-x-7 {{-- sm:ml-auto sm:mt-0--}} mt-4  {{-- mx-auto justify-center --}}">

                <a href="https://facebook.com" class="text-gray-700" >
                    {{-- <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6"
                        viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg> --}}
                    <i class="fab fa-facebook text-2xl"></i>
                </a>
                <a class="ml-3 text-gray-700">
                    {{-- <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6"
                        viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg> --}}
                    <i class="fab fa-twitter text-2xl"></i>
                </a>
    
                <a class="ml-3 text-gray-700">
                   {{--  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-6 h-6" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg> --}}
                    <i class="fab fa-instagram text-2xl"></i>
                </a>

                <a href="https://youtube.com" class="ml-3 text-gray-700">
                   {{--  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                      </svg> --}}
                      <i class="fab fa-youtube text-2xl"></i>
                </a>


                <a href="https://youtube.com" class="ml-3 text-gray-700">
                    <i class="fab fa-whatsapp text-2xl"></i>
              
                 </a>


                
    
            </div>

        </div>

        
    </div>
</div>
