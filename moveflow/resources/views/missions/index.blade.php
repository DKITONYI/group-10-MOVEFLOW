@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Missions</h1>
    @foreach($missions as $m)
        <div class="p-4 border rounded mb-3">
            <h2 class="text-lg font-semibold">{{ $m->title }} <span class="text-sm text-gray-500">({{ $m->points }} pts)</span></h2>
            <p class="text-sm">{{ Str::limit($m->summary, 200) }}</p>
            <div class="mt-2 flex gap-2">
                <form method="POST" action="{{ route('missions.complete',$m) }}">
                    @csrf
                    <button class="px-3 py-1 bg-green-500 text-white rounded">Complete</button>
                </form>
            </div>
        </div>
    @endforeach
    {{ $missions->links() }}
</div>
@endsection
