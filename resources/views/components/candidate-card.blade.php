@props([
    'title' => 'Título',
    'text' => '',
    'btn' => 'Ver más',
    'color' => 'blue'
])

@php
    $colors = [
        'blue' => 'text-blue-600 bg-blue-600 hover:bg-blue-700',
        'green' => 'text-green-600 bg-green-600 hover:bg-green-700',
        'purple' => 'text-purple-600 bg-purple-600 hover:bg-purple-700',
        'yellow' => 'text-yellow-600 bg-yellow-500 hover:bg-yellow-600',
        'red' => 'text-red-600 bg-red-600 hover:bg-red-700',
    ];

    // Texto principal color
    $titleColor = $colors[$color] ?? $colors['blue'];

    // Botón color
    $btnColor = explode(' ', $titleColor)[1] ?? 'bg-blue-600 hover:bg-blue-700';
@endphp

<div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition h-full flex flex-col justify-between">

    <div>
        <h3 class="text-lg font-semibold {{ $titleColor }} mb-2">{{ $title }}</h3>
        <p class="text-gray-600 text-sm">{{ $text }}</p>
    </div>

    <a href="#"
       class="inline-block mt-4 text-sm text-white px-4 py-2 rounded-lg transition {{ $btnColor }}">
        {{ $btn }}
    </a>
</div>
