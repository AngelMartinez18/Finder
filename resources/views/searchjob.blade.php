<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Busca tu empleo! | Finder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('Imagenes/finder.ico') }}">
</head>
<body class="bg-gray-200">
    <!-- Componente Blade: resources/views/components/navbar.blade.php -->
    <x-navbar />
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-center text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight">
            Encuentra tu <span class="text-blue-600">Próximo Empleo</span>
        </h1>

        <section id="search-bar" class="mt-6 flex flex-col md:flex-row gap-4 items-center justify-center bg-white p-6 rounded-lg shadow-md">
            <div id="input-search-div">
                <label for="input-search">Buscar empleos</label>
                <input id="input-search" name="input-search" type="text" placeholder="Ej: Desarrollo, Diseño, Cocina, Mecánico..." class="w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div id="input-location-div">
                <label for="input-location">Ubicación</label>
                <input id="input-location" name="input-location" type="text" placeholder="Ej: Desarrollo, Diseño, Cocina, Mecánico..." class="w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div id="select-category-div" class="">
                <label for="select-category" class="">Categorías de empleos</label>
                <select id="select-category" name="select-category" aria-label="Categorías" class="w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Todas las categorías</option>
                <option value="tecnologia">Tecnología</option>
                <option value="salud">Salud</option>
                <option value="educacion">Educación</option>
                <option value="marketing">Marketing</option>
                <option value="ventas">Ventas</option>
            </select>
            </div>
        </section>
        <section id="job-cards" class="mt-6 flex flex-col md:flex-row gap-4 items-center justify-center bg-white p-6 rounded-lg shadow-md">
            @php
                $jobs = $jobs ?? [
                    ['id' => 1, 'title' => 'Frontend Developer', 'company' => 'ACME S.A.', 'location' => 'Madrid', 'type' => 'Remoto', 'salary' => '€30k-€40k', 'description' => 'Desarrolla interfaces con Vue/React', 'working-time'=> 'Jornada Diurna', 'charge'=>'Administrador', 'category'=>'', 'apply_url' => '#'],
                    ['id' => 2, 'title' => 'Chef', 'company' => 'Restaurante Buen Gusto', 'location' => 'Valencia', 'type' => 'Presencial', 'salary' => '€18k-€24k', 'description' => 'Responsable de carta y equipo de cocina', 'working-time'=> 'Jornada Diurna', 'charge'=>'Administrador', 'category'=>'', 'apply_url' => '#'],
                    ['id' => 3, 'title' => 'Marketing Specialist', 'company' => 'MarketPro', 'location' => 'Barcelona', 'type' => 'Híbrido', 'salary' => '€25k-€35k', 'description' => 'Estrategias de marketing digital', 'working-time'=> 'Jornada Diurna', 'charge'=>'Administrador', 'category'=>'', 'apply_url' => '#'],
                ];
            @endphp

            <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($jobs as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>
        </section>
    </div>
</body>
</html>