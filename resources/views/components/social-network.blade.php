@props(['weather'])
<div class="bg-black text-gray-700 text-right px-4 py-2">
    <div class="container mx-auto py-4 px-5 flex flex-wrap  justify-around flex-col lg:flex-row items-center">

        <div
            class="lg:w-1/3 w-full lg:my-auto my-4  lg:order-1 order-3 text-gray-700 text-md text-center flex flex-row justify-around items-baseline">
            <p {{-- class="mx-2" --}}>
                <i class="fas fa-thermometer-three-quarters text-2xl"></i> <span
                    class="text-gray-700 lg:text-lg ">{{ number_format($weather['main']['temp'], 0) }} °C </span>
            </p>
            <p>
                <i class="fas fa-tint text-2xl"></i> <span class="text-gray-700 lg:text-lg">
                    {{ number_format($weather['main']['humidity'], 0) }}%</span>
            </p>
            <p>
                <i class="fas fa-wind text-2xl"></i><span class="text-gray-700 lg:text-lg">
                    {{ number_format($weather['wind']['speed'] * 3.6, 1) }}Km/Hr</span>
            </p>
        </div>
        <div class="w-1/3 object-contain lg:order-2 order-1 hidden lg:block">
            <a href="/">
                <img src="{{ Storage::url('cfh_black.jpg') }}"
                    class=" w-52 text-white p-2  mx-auto bg-black">
            </a>
        </div>


        <div class="lg:hidden block order-1 ">
            <span><i class="fas fa-arrow-down"></i> Siguenos en nuestras redes sociales <i
                    class="fas fa-arrow-down"></i></span>
        </div>

        <div class="lg:w-1/3 w-full text-center  order-2  ">
            <div class="inline-flex space-x-10  mt-4">

                <a href="https://www.facebook.com/ComisionFilmicaHuatulco/" target="_blank" class="text-gray-700">
                    <i class="fab fa-facebook text-2xl"></i>
                </a>
                <a href="https://www.facebook.com/ComisionFilmicaHuatulco/" target="_blank" class="ml-3 text-gray-700">
                    <i class="fab fa-twitter text-2xl"></i>
                </a>

                <a href="https://www.facebook.com/ComisionFilmicaHuatulco/" target="_blank" class="ml-3 text-gray-700">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>

                <a href="https://www.facebook.com/ComisionFilmicaHuatulco/" target="_blank" class="ml-3 text-gray-700">
                    <i class="fab fa-youtube text-2xl"></i>
                </a>
                <a href="https://www.facebook.com/ComisionFilmicaHuatulco/" target="_blank" class="ml-3 text-gray-700">
                    <i class="fab fa-whatsapp text-2xl"></i>
                </a>


            </div>
        </div>

    </div>
</div>
