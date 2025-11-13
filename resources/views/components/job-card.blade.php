@php
    $estado = data_get($job, 'estado');

    if ($estado === 'activa')
    {
        $estadoDisplay = 'Activo';
    }
    elseif ($estado === 'pausada')
    {
        $estadoDisplay = 'En revisión';
    }
    else 
    {
        $estadoDisplay = 'Cerrado';
    }
@endphp

<div class="w-full bg-white rounded-lg shadow flex flex-col md:flex-row gap-4 hover:-translate-y-1 duration-300">
    
    <div class="flex-1 p-4">
        <h3 class="text-lg font-semibold text-gray-900">
            {{ data_get($job, 'titulo', 'Título del puesto') }}
        </h3>
        <p class="text-blue-600">
            {{ data_get($job, 'nombre_empresa', 'Empresa') }}
        </p>
        <p class="mt-2 text-gray-500">
            <i class="fas fa-map-marker-alt mr-2 text-gray-500" aria-hidden="true"></i>
            {{ data_get($job, 'ubicacion', 'Ubicación') }}
        </p>
        <p class="mt-2 text-sm text-gray-700">
            {{ data_get($job, 'descripcion', 'Descripción breve del puesto...') }}
        </p>
    </div>

    <div class="w-1/3 bg-gray-200 flex items-center justify-center p-4">
        <div class="text-sm text-gray-700 text-center space-y-4">
            @if ($estadoDisplay === 'Activo')
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full">{{ $estadoDisplay }}</span>
            @elseif ($estadoDisplay === 'En revisión')
                <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full">{{ $estadoDisplay }}</span>
            @elseif ($estadoDisplay === 'Cerrado')
                <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full">{{ $estadoDisplay }}</span>
            @endif

            @if(data_get($job, 'salario'))
                <div class="font-medium text-gray-900">
                    {{ data_get($job, 'salario') }}
                </div>
            @endif
        </div>
    </div>
</div>
