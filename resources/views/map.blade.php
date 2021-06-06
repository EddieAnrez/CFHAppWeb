{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    {!! $map['js'] !!}
</head>
<body>
    {!! $map['html'] !!}
    
</body>
</html> --}}


@extends('layouts.app')
@section('main')
<h1 class=" text-white text-center mb-4 text-6xl font-bold ">Mapa Fílmico Huatulco</h1>
<hr class="container mb-8 border-gray-700">
<div>
    
    <p class="text-center text-white italic">
        Click en el marcador para visualizar información sobre la locación
    </p>
    
</div>
<div class="px-6 py-4">
    {!! $map['html'] !!}
</div>

{!! $map['js'] !!}
@endsection

