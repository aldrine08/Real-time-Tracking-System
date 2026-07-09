@props([
    'title',
    'value',
    'icon' => '📦',
    'color' => 'blue',
    'trend' => null,
    'description' => null,
])

@php
    $colors = [
        'blue' => 'bg-blue-100 text-blue-600',
        'green' => 'bg-green-100 text-green-600',
        'yellow' => 'bg-yellow-100 text-yellow-600',
        'red' => 'bg-red-100 text-red-600',
        'purple' => 'bg-purple-100 text-purple-600',
        'gray' => 'bg-gray-100 text-gray-600',
    ];

    $iconColor = $colors[$color] ?? $colors['blue'];
@endphp

<div
    class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 hover:shadow-lg transition duration-300">

    <div class="flex items-start justify-between">

        <div>

            <p class="text-sm text-gray-500 font-medium">
                {{ $title }}
            </p>

            <h2 class="mt-2 text-3xl font-bold text-gray-800">
                {{ $value }}
            </h2>

            @if($description)
                <p class="mt-2 text-sm text-gray-500">
                    {{ $description }}
                </p>
            @endif

            @if($trend)
                <div class="mt-3">

                    <span
                        class="inline-flex items-center rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">

                        {{ $trend }}

                    </span>

                </div>
            @endif

        </div>

        <div
            class="h-14 w-14 rounded-xl flex items-center justify-center text-2xl {{ $iconColor }}">

            {{ $icon }}

        </div>

    </div>

</div>