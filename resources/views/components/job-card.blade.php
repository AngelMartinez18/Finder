@php
    /*$jobId = data_get($job, 'id');
    $href = $jobId ? route('jobs.show', $jobId) : data_get($job, 'apply_url', '#');
    */
@endphp

<a href="#" class="w-full bg-white rounded-lg shadow p-4 flex flex-col md:flex-row gap-4 items-start
    hover:-translate-y-1 duration-300">
    <div class="flex-1">
        <h3 class="text-lg font-semibold text-gray-900">
            {{ data_get($job, 'title', 'Título del puesto') }}
        </h3>
        <p class="text-blue-600">
            {{ data_get($job, 'company', 'Empresa') }}
        </p>
        <p class="mt-2 text-gray-500">
            <i class="fas fa-map-marker-alt mr-2 text-gray-500" aria-hidden="true"></i>{{ data_get($job, 'location', 'Ubicación') }}
        </p>
        <p class="mt-2 text-sm text-gray-700">
            {{ data_get($job, 'description', 'Descripción breve del puesto...') }}
        </p>
        <div class="flex flex-wrap mt-2 gap-2 text-sm mb-4">
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">{{ $job['working-time'] }}</span>
            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full">{{ $job['charge'] }}</span>
            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full">{{ ucfirst($job['category']) }}</span>
        </div>
    </div>

    <div class="flex flex-col items-end justify-between md:items-center gap-3">
        <div class="text-sm text-gray-500 text-right">
            <div>{{ data_get($job, 'type', 'Tipo') }}</div>
            @if(data_get($job, 'salary'))
                <div class="font-medium text-gray-900">{{ data_get($job, 'salary') }}</div>
            @endif
        </div>
    </div>
</a>