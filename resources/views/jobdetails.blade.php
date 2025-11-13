@php
    $estado = data_get($job, 'estado');
@endphp

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ data_get($job, 'titulo') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body class="bg-gray-100">
    <x-navbar />

    <main class="max-w-5xl mx-auto bg-white p-6 rounded shadow m-8">
        <section>
            <h1 class="text-left text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight">
                {{ data_get($job, 'titulo', 'Título del puesto') }}
            </h1>
            <p class="text-lg text-gray-600 mt-2 mb-2">{{ data_get($job, 'fecha_publicacion', 'Publicado hace rato') }}</p>
            
            @if ($estado === 'Activo')
                <span class="bg-green-100 text-green-800 px-3 py-1 mt-2 rounded-full">{{ $estado }}</span>
            @elseif ($estado === 'En revision')
                <span class="bg-gray-100 text-gray-800 px-3 py-1 mt-2 rounded-full">{{ $estado }}</span>
            @elseif ($estado === 'Cerrado')
                <span class="bg-red-100 text-red-800 px-3 py-1 mt-2 rounded-full">{{ $estado }}</span>
            @endif
        </section>

        <section class="flex gap-4">
             <div class="flex-1 mt-6 w-2/3">
                <p class="text-2xl font-semibold text-gray-700">{{ data_get($job, 'descripcion', 'Descripción del puesto...') }}</p><br>
                <h2 class="text-xl font-semibold text-gray-800">Detalles del Puesto</h2>
                <P class="mt-2 text-gray-600"><strong>Requisitos:</strong> {{ data_get($job, 'requisitos') }} </P>
                <p class="mt-2 text-gray-600"><strong>Tipo de Contrato:</strong> {{ data_get($job, 'tipo_contrato', 'Tipo') }}</p>
                @if(data_get($job, 'salario'))
                    <p class="mt-2 text-gray-600"><strong>Salario:</strong> {{ data_get($job, 'salario') }}</p>
                @endif
            </div>

            <div class="flex-2 mt-6 w-1/3 mx-auto text-center">
                <img src="{{ data_get($job, 'logo', 'https://via.placeholder.com/150') }}" alt="Logo de la empresa" class="mt-4 mb-4 w-64 object-contain text-center mx-auto">
                <div class="flex items-center justify-center">
                    <i class="fas fa-building mr-2 text-gray-500" aria-hidden="true"></i>
                    <p class="mt-2 text-gray-600">{{ data_get($job, 'nombre_empresa', 'Empresa') }}</p>
                </div>
                <div class="flex items-center justify-center">
                    <i class="fas fa-map-marker-alt mr-2 text-gray-500" aria-hidden="true"></i>
                    <p class="mt-2 text-gray-600">{{ data_get($job, 'ubicacion', 'Ubicación') }}</p>
                </div>
            </div>
        </section>

        @if ($estado === 'Activo')
            <div class="text-center">
                <button type="submit" class="bg-green-400 text-white font-semibold px-10 py-3 rounded-[10px] hover:scale-110 transition duration-300 hover:bg-green-600">Aplicar</button>
            </div>
        @else
            <div class="text-center">
                <button type="submit" disabled class="bg-gray-400 text-white font-semibold px-10 py-3 rounded-[10px]">Aplicar</button>
            </div>
        @endif
    </main>
    <x-footer />
</body>
</html>