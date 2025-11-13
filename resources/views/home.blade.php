<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finder</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/x-icon" href="{{ asset('Imagenes/finder.ico') }}">
</head>

<body class="bg-gray-900 overflow-x-hidden">

  <!-- Navbar (componente Blade) -->
  <x-navbar />

  <!-- Hero Section -->
  <section class="bg-blue-600 min-h-screen flex flex-col justify-center items-center text-center px-6 py-20">
    <div class="max-w-5xl">
      <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold leading-tight">
        <span class="text-yellow-500">Finder:</span>
        <span class="text-white"> La plataforma que conecta talento y oportunidades</span>
      </h1>

      <p class="mt-6 text-white text-lg sm:text-xl leading-relaxed">
        Encuentra el empleo ideal o el candidato perfecto para tu negocio, de forma rápida y eficiente.
      </p>

      <hr class="my-8 border-white w-1/2 mx-auto rounded border-2">

      <div class="mt-4">
        <a href="{{ route('searchjob') }}"
          class="bg-green-400 text-white font-semibold px-8 py-3 rounded-full hover:scale-110 transition duration-300 inline-block">
          Buscar Empleos
        </a>
      </div>
    </div>
  </section>

  <!-- Sección 2 -->
  <section class="bg-white w-full flex flex-col md:flex-row justify-center items-center gap-10 py-20 px-6">
    <div class="flex justify-center w-full md:w-1/2">
      <img src="./Imagenes/LogoFinderA.png" alt="Logo" class="w-2/3 sm:w-1/2 md:w-2/3 lg:w-1/2 h-auto">
    </div>

    <div class="text-center md:text-left w-full md:w-1/2 space-y-6">
      <h2 class="text-black text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight">
        El Problema que Resuelve Finder
      </h2>
      <p class="text-gray-700 text-lg max-w-xl mx-auto md:mx-0">
        Los empleadores a menudo enfrentan dificultades para encontrar personal calificado que realmente se ajuste a sus
        necesidades. El proceso de búsqueda tradicional es ineficiente, costoso y consume mucho tiempo. Finder fue creado
        para superar estos desafíos.
      </p>

      <h2 class="text-black text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight">
        Nuestra Solución
      </h2>
      <p class="text-gray-700 text-lg max-w-xl mx-auto md:mx-0">
        Finder es una aplicación web intuitiva que centraliza la información sobre vacantes disponibles en empresas locales
        y nacionales. Optimizamos la visibilidad de las ofertas y simplificamos la postulación en línea, conectando el talento
        con las oportunidades.
      </p>
    </div>
  </section>

  <!-- Sección 3 -->
  <section class="bg-blue-600 flex flex-col justify-center items-center py-20 px-6 text-center">
    <hr class="my-6 border-yellow-400 border-4 w-1/2 mx-auto rounded mb-20">
    <div class="max-w-5xl">
      <h2 class="text-white text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-10">
        ¿Por Qué Elegir Finder?
      </h2>
      <p class="text-white text-xl sm:text-2xl leading-relaxed">
        En Finder, nos dedicamos a facilitar la conexión entre empleadores y candidatos. Nuestra plataforma ofrece una
        experiencia de usuario excepcional, con herramientas avanzadas de búsqueda y filtrado que garantizan que encuentres
        exactamente lo que necesitas.
      </p>
    </div>
    <hr class="my-6 border-yellow-400 border-4 w-1/2 mx-auto rounded mt-20">
  </section>

  <!-- Sección Servicios -->
  <section id="servicios" class="min-h-screen flex flex-col items-center justify-center bg-gray-50 py-16 px-6">
    <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-16 text-gray-800 text-center">Nuestros Servicios</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl mx-auto">
      <!-- Servicio 1 -->
      <div
        class="bg-white p-8 shadow-lg rounded-2xl transform transition duration-300 hover:scale-105 flex flex-col items-center text-center">
        <img src="./Imagenes/empresa.png" alt="Empresas" class="w-24 sm:w-28 lg:w-32 h-auto mb-4">
        <h3 class="font-bold text-2xl text-gray-700">Empresas Públicas y Privadas</h3>
        <p class="text-gray-600 mt-3 text-lg">Facilitaremos la publicación de sus ofertas de empleo y la gestión de sus procesos de selección.</p>
      </div>

      <!-- Servicio 2 -->
      <div
        class="bg-white p-8 shadow-lg rounded-2xl transform transition duration-300 hover:scale-105 flex flex-col items-center text-center">
        <img src="./Imagenes/empleador.png" alt="Empleadores" class="w-24 sm:w-28 lg:w-32 h-auto mb-4">
        <h3 class="font-bold text-2xl text-gray-700">Empleadores y Reclutadores</h3>
        <p class="text-gray-600 mt-3 text-lg">Tendrán acceso a un pool de talento calificado y herramientas para encontrar al candidato ideal.</p>
      </div>

      <!-- Servicio 3 -->
      <div
        class="bg-white p-8 shadow-lg rounded-2xl transform transition duration-300 hover:scale-105 flex flex-col items-center text-center">
        <img src="./Imagenes/candidato.png" alt="Candidatos" class="w-24 sm:w-28 lg:w-32 h-auto mb-4">
        <h3 class="font-bold text-2xl text-gray-700">Candidatos y Buscadores de Empleo</h3>
        <p class="text-gray-600 mt-3 text-lg">Podrán explorar y postularse a diversas oportunidades laborales de forma centralizada y sencilla.</p>
      </div>
    </div>
  </section>

  <!-- Componentes Blade -->
  <x-links />
  <x-footer />

</body>
</html>
