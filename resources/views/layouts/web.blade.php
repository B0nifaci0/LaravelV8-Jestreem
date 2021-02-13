<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta para acentos -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- meta para modo responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Introducción a Laravel8</title>
    <!-- Archivo css mandado a llamar-->
    <link rel="stylesheet" href="{{ asset ('css/app.css')}}">
</head>
<body>
<!-- HEADER DE MI PLANTILLA -->
<header class="bg-blue-900 py-1">
<!-- Navegación -->
<nav class="bg-blue-800 py-2">
    <a href="{{route('home') }}" class="">
    <!-- queda pendeinte la imagen -->
        <img src="{{asset('images/isotio-platzi.png')}}" 
        alt="" 
        class="h-8 mx-auto">
    </a>
</nav>
</header>
</header>
<main class="py-10">
    <div class="container mx-auto px-4">
     @yield('content')   
    </div>

<main>
<footer class="py-4 text-center">
<!-- if si estamos logeados hacemos algo si no no hacemos nada -->
    @auth
        <a href="{{url('dashboard')}}" class="text-sm text-gray-700 underline ">
            Dashboard
        </a>
    @else 
        <a href="{{url('login')}}" class="text-sm text-gray-700 underline ">
            login
        </a>
        <a href="{{url('register')}}" class="ml-4 text-sm text-gray-700 underline ">
            register
        </a>
    @endif
</footer>
    
</body>
</html>