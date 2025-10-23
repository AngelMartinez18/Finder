<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finder</title>
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="bg-gray-900">
    <!-- Navbar como componente Blade -->
    <x-navbar />

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
            <a href="{{ route('searchjob') }}">
            <button class="bg-green-400 text-white font-semibold px-6 py-3 rounded-[40px] hover:scale-110 transition duration-300">
                Buscar Empleos
            </button>
            </a>

            <a href="{{ route('publishjob') }}">
            <button class="bg-yellow-400 text-blue-600 font-semibold px-6 py-3 rounded-[40px] hover:scale-110 transition duration-300">
                Publicar Empleos
            </button>
            </a>
        </div>
    </div>

    <!-- Segundo Contenedor -->
    <div class="bg-white w-full h-screen flex flex-col justify-center items-center">
        <div class="flex items-center">
            
            <img src="./Imagenes/LogoFinderA.png" alt="Logo" class="w-1/3 h-auto ml-20 mr-40">
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