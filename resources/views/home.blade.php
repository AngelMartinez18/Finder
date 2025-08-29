<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finder</title>
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="bg-gray-900">
    <!-- Barra de navegación -->
    <nav class="bg-gray-800 px-8 py-4 flex items-center">
        <div class="flex items-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Logo" class="w-12 h-12 ml-40">
        </div>
        <div class="flex space-x-8 ml-14">
            <a href="#" class="text-gray-300 hover:text-white text-2x1">Buscar Empleos</a>
            <a href="#" class="text-gray-300 hover:text-white text-2x1">Contacto</a>
        </div>
        <div class="flex space-x-6 mr-14 ml-auto">
            <a href="{{ route('login') }}" class="text-gray-300 hover:text-white text-2x1">Log in</a>
            <a href="{{ route('register') }}" class="text-gray-300 hover:text-white text-2x1">Register</a>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="bg-blue-600 h-screen flex flex-col justify-center items-center">
        <div class="w-full max-w-5xl text-center">
            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight">
                <span class=" text-yellow-500 ">Finder:</span>
                <span class="text-white"> La plataforma que conecta talento y oportunidades</span>

            </h1>
        </div>
        <div class="mt-6 text-center">
            <span class="text-white text-xl">Encuentra el empleo ideal o el candidato perfecto para tu negocio, de forma rápida y eficiente.</span>
            <hr class="my-6 border-white w-1/2 mx-auto rounded border-4">
        </div>

        <div class="flex space-x-6 mt-2">
            <button class="bg-green-400 text-white font-semibold px-6 py-3 rounded-[40px] hover:scale-110 transition duration-300">
                Buscar Empleos
            </button>
            <button class="bg-yellow-400 text-blue-600 font-semibold px-6 py-3 rounded-[40px] hover:scale-110 transition duration-300">
                Publicar Empleos
            </button>
        </div>
    </div>

    <!-- Segundo Contenedor -->
    <div class="bg-white w-full h-screen flex flex-col justify-center items-center">
        <div class="flex items-center">
            <img src="./Imagenes/LogoFinderB.png" alt="Logo" class="w-1/3 h-auto ml-20 mr-40">
            <div class="">
                <h1 class="text-black text-5xl md:text-6xl font-extrabold leading-tight mb-6 mr-10">El Problema que Resuelve Finder</h1>
                <p class="text-gray-700 text-lg max-w-xl mb-10  ">
                    Los empleadores a menudo enfrentan dificultades para encontrar personal calificado que realmente se ajuste a sus necesidades.
                    El proceso de búsqueda tradicional es ineficiente, costoso y consume mucho tiempo. Finder fue creado para superar estos desafíos.
                </p>

                <h1 class="text-black text-5xl md:text-6xl font-extrabold leading-tight mb-6">Nuestra Solución</h1>
                <p class="text-gray-700 text-lg max-w-xl">
                    Finder es una aplicación web intuitiva que centraliza la información sobre vacantes disponibles en empresas locales y a nivel nacional.
                    Optimizamos la visibilidad de las ofertas y simplificamos la postulación en línea, conectando de manera efectiva el talento con las oportunidadesfíos.
                </p>
            </div>
        </div>

    </div>
</body>

</html>