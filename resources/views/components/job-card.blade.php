<div class="w-full bg-white rounded-lg shadow p-4 flex flex-col md:flex-row gap-4 items-start
    hover:-translate-y-1 duration-300">
    <div class="flex-1">
        <h3 class="text-lg font-semibold text-gray-900">
            {{ data_get($job, 'titulo', 'Título del puesto') }}
        </h3>
        <p class="text-blue-600">
            {{ data_get($job, 'nombre_empresa', 'Empresa') }}
        </p>
        <p class="mt-2 text-gray-500">
            <i class="fas fa-map-marker-alt mr-2 text-gray-500" aria-hidden="true"></i>{{ data_get($job, 'ubicacion', 'Ubicación') }}
        </p>
        <p class="mt-2 text-sm text-gray-700">
            {{ data_get($job, 'descripcion', 'Descripción breve del puesto...') }}
        </p>
        
    </div>

    <div class="flex flex-col items-end justify-between md:items-center gap-3">
        <div class="text-sm text-gray-500 text-right">
            <div>{{ data_get($job, 'tipo_contrato', 'Tipo') }}</div>
            @if(data_get($job, 'salario'))
                <div class="font-medium text-gray-900">{{ data_get($job, 'salario') }}</div>
            @endif
        </div>
    </div>
</div>