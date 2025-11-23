@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Mission: {{ $mission->title }}</h1>
    <div class="mb-2 text-gray-700">Points: <span class="font-semibold">{{ $mission->points }}</span></div>
    <div class="mb-2">Summary: {{ $mission->summary }}</div>
    <div class="mb-2">Workout: {{ $mission->workout ? $mission->workout->title : 'None' }}</div>
    <div class="mb-2">Starts: {{ $mission->starts_at ?? 'N/A' }}</div>
    <div class="mb-2">Ends: {{ $mission->ends_at ?? 'N/A' }}</div>
    <div class="mb-2">Type: {{ $mission->is_team_mission ? 'Team' : 'Individual' }}</div>
    <a href="{{ route('missions.index') }}" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded">Back to Missions</a>
</div>
@endsection
