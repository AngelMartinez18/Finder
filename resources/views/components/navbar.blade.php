<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Componente Blade: resources/views/components/navbar.blade.php -->
<nav class="bg-gray-800 px-8 py-4 flex items-center">
    <div class="flex items-center">
        <a href="{{ route('home') }}"><img src="{{ asset('Imagenes/LogoFinderB.png') }}" alt="Logo" class="w-16 h-16 ml-40 resize"></a>
        
    </div>
    <div class="flex space-x-8 ml-14">
        <a href="{{ route('searchjob') }}" class="text-gray-300 hover:text-white text-2x1">Buscar Empleos</a>
        <a href="{{ route('contactus') }}" class="text-gray-300 hover:text-white text-2x1">Contacto</a>
    </div>
    <div class="flex space-x-6 mr-14 ml-auto">
        <a href="{{ route('login') }}" class="text-gray-300 hover:text-white text-2x1">Log in</a>
        <a href="{{ route('register') }}" class="text-gray-300 hover:text-white text-2x1">Register</a>
    </div>
</nav>
</body>
</html>


