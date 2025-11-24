@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto p-4">

    <h1 class="text-3xl font-bold mb-4">{{ $workout->title }}</h1>

    <p class="text-gray-700 mb-4">{{ $workout->description }}</p>

    <h2 class="text-xl font-semibold mb-2">Exercises</h2>

    @forelse ($workout->exercises as $exercise)
        <div class="p-3 border rounded-lg mb-3 bg-white">
            <h3 class="text-lg font-semibold">{{ $exercise->name }}</h3>

            <p class="text-sm text-gray-600">
                <strong>Duration:</strong> {{ $exercise->duration }}
            </p>

            @if($exercise->instructions)
                <p class="text-sm text-gray-700 mt-1">
                    {{ $exercise->instructions }}
                </p>
            @endif
        </div>
    @empty
        <p>No exercises added to this workout yet.</p>
    @endforelse

</div>

@endsection
