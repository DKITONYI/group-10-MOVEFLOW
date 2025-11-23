@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Team: {{ $team->name }}</h1>
    <div class="mb-2">Points: {{ $team->points }}</div>
    <div class="mb-2">Description: {{ $team->description }}</div>
    <div class="mb-2">Members:</div>
    <ul class="list-disc ml-6">
        @foreach($team->users as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
        @endforeach
    </ul>
    <a href="{{ route('teams.index') }}" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded">Back to Teams</a>
</div>
@endsection
