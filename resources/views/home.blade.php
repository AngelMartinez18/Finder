<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finder</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('Imagenes/finder.ico') }}">

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
            <a href="{{ route('searchjob') }}" class="bg-green-400 text-white font-semibold px-6 py-3 rounded-[40px] hover:scale-110 transition duration-300 inline-block">
                Buscar Empleos
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

    <!-- Tercer Contenedor -->
    <div class="bg-blue-600 w-full h-screen flex flex-col justify-center items-center">
        <hr class="my-6 border-yellow-400 border-4 w-1/2 mx-auto rounded mb-20">
        <div class="text-center w-full max-w-5xl">

            <h1 class="text-white text-5xl md:text-6xl font-extrabold leading-tight mb-14">¿Por Qué Elegir Finder?</h1>
            <p class="text-white text-3xl mb-10">
                En Finder, nos dedicamos a facilitar la conexión entre empleadores y candidatos. Nuestra plataforma ofrece una experiencia
                de usuario excepcional, con herramientas avanzadas de búsqueda y filtrado que garantizan que encuentres exactamente lo que necesitas.
            </p>

        </div>
        <hr class="my-6 border-yellow-400 border-4 w-1/2 mx-auto rounded mb-20">
    </div>

    <section id="servicios" class="min-h-screen flex flex-col items-center justify-center bg-gray-50 py-16">
        <h2 class="text-7xl font-bold mb-20 text-gray-800">Nuestros Servicios</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl mx-auto px-6">
            <!-- Servicio 1 -->
            <div class="bg-white p-8 shadow-xl rounded-xl transform transition-transform duration-300 hover:scale-105 flex flex-col items-center text-center">
                <img src="./Imagenes/empresa.png" alt="Servicio 1" class="w-32 h-auto object-cover rounded-t-lg mb-4">
                <h3 class="font-bold text-2xl text-gray-700">Empresas Públicas y Privadas</h3>
                <p class="text-gray-600 mt-3 text-lg">Facilitaremos la publicación de sus ofertas de empleo y la gestión de sus procesos de selección.</p>
            </div>
            <!-- Servicio 2 -->
            <div class="bg-white p-8 shadow-xl rounded-xl transform transition-transform duration-300 hover:scale-105 flex flex-col items-center text-center">
                <img src="./Imagenes/empleador.png" alt="Servicio 2" class="w-32 h-auto object-cover rounded-t-lg mb-4">
                <h3 class="font-bold text-2xl text-gray-700">Empleadores y Reclutadores</h3>
                <p class="text-gray-600 mt-3 text-lg">Tendrán acceso a un pool de talento calificado y herramientas para encontrar al candidato ideal.</p>
            </div>
            <!-- Servicio 3 -->
            <div class="bg-white p-8 shadow-xl rounded-xl transform transition-transform duration-300 hover:scale-105 flex flex-col items-center text-center">
                <img src="./Imagenes/candidato.png" alt="Servicio 3" class="w-32 h-auto object-cover rounded-t-lg mb-4">
                <h3 class="font-bold text-2xl text-gray-700">Candidatos y Buscadores de Empleo</h3>
                <p class="text-gray-600 mt-3 text-lg">Podrán explorar y postularse a diversas oportunidades laborales de forma centralizada y sencilla.</p>
            </div>
        </div>
    </section>

    <!-- Links como componente Blade -->
    <x-links />

    <!-- Footer como componente Blade -->
    <x-footer />

</body>

</html>