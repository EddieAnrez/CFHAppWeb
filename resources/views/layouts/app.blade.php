<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Comisión Fílmica de Huatulco') }}</title> --}}
    {{-- <title>{{ config('Comisión Fílmica de Huatulco') }}</title> --}}
    <title>@yield('title') - {{config ('app.name')}}</title>

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Exo:wght@200&family=Fjalla+One&family=Oswald&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">  
    
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/d28e3072be.js" crossorigin="anonymous"></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-black ">
        <x-social-network></x-social-network>

        @livewire('navigation')

        <!-- Page Content -->
        <main>
            @yield('main')
        </main>
        <x-custom-footer></x-custom-footer>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
