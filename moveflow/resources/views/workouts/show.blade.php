@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Workout: {{ $workout->title }}</h1>
    <div class="mb-2">Duration: {{ $workout->duration }} min</div>
    <div class="mb-2">Difficulty: {{ ucfirst($workout->difficulty) }}</div>
    <div class="mb-2">Description: {{ $workout->description }}</div>
    <div class="mb-2">Equipment: {{ is_array($workout->equipment) ? implode(', ', $workout->equipment) : $workout->equipment }}</div>
    <a href="{{ route('workouts.index') }}" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded">Back to Workouts</a>
</div>
@endsection
