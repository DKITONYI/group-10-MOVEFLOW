@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Chapter: {{ $chapter->title }}</h1>
    <div class="mb-2">Unlock Points: {{ $chapter->unlock_points }}</div>
    <div class="mb-2">Content:</div>
    <div class="p-2 border rounded bg-gray-50">{{ $chapter->content }}</div>
    <a href="{{ route('chapters.index') }}" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded">Back to Chapters</a>
</div>
@endsection
