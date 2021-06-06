<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 p-4 sm:pt-0 ">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-300 text-black shadow-md overflow-hidden rounded-lg {{-- sm:rounded-lg --}}">
        {{ $slot }}
    </div>
    <p class="text-gray-600 text-center py-6">Comision Filmica de Hualtulco©  {{date("Y")}}</p>
</div>
