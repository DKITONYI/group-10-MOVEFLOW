@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Workouts</h1>
    @foreach($workouts as $w)
        <div class="p-4 border rounded mb-3">
            <h2 class="text-lg font-semibold">{{ $w->title }} <span class="text-sm text-gray-500">({{ $w->duration }} min, {{ ucfirst($w->difficulty) }})</span></h2>
            <p class="text-sm">{{ Str::limit($w->description, 200) }}</p>
            <div class="mt-2 flex gap-2">
                <a class="px-3 py-1 bg-blue-500 text-white rounded" href="{{ route('workouts.show',$w) }}">View</a>
            </div>
        </div>
    @endforeach
    {{ $workouts->links() }}
</div>
@endsection
