@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 text-white">
    <h2 class="text-4xl font-bold mb-8 mt-5 text-center">My Skills</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10 p-6">
        @php
            $skills = [
                ['name' => 'C', 'percent' => 80, 'color' => 'blue-500'],
                ['name' => 'C++', 'percent' => 70, 'color' => 'blue-400'],
                ['name' => 'DS & Algo', 'percent' => 60, 'color' => 'green-500'],
                ['name' => 'HTML, CSS', 'percent' => 80, 'color' => 'purple-500'],
                ['name' => 'Bootstrap, Tailwind', 'percent' => 75, 'color' => 'indigo-500'],
                ['name' => 'PHP, JavaScript', 'percent' => 55, 'color' => 'yellow-500'],
                ['name' => 'Laravel', 'percent' => 60, 'color' => 'red-500'],
                ['name' => 'MySQL', 'percent' => 80, 'color' => 'teal-500'],
            ];
        @endphp

        @foreach ($skills as $skill)
            <div class="relative flex flex-col items-center">
                <svg class="rotate-[135deg] size-36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-700" stroke-width="2" stroke-dasharray="100 100"></circle>
                    <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-{{ $skill['color'] }}" stroke-width="3" stroke-dasharray="{{ $skill['percent'] }} 100"></circle>
                </svg>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
                    <span class="text-2xl font-bold text-white">{{ $skill['percent'] }}%</span>
                    <span class="block text-sm text-gray-300">{{ $skill['name'] }}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    body {
        background: radial-gradient(circle at top, #1a1a2e, #16213e);
    }
</style>
@endsection
