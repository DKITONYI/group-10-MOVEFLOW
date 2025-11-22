@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Chapters</h1>
    @foreach($chapters as $c)
        <div class="p-4 border rounded mb-3">
            <h2 class="text-lg font-semibold">{{ $c->title }} <span class="text-sm text-gray-500">(Unlock: {{ $c->unlock_points }} pts)</span></h2>
            <p class="text-sm">{{ Str::limit($c->content, 200) }}</p>
            <div class="mt-2 flex gap-2">
                <a class="px-3 py-1 bg-blue-500 text-white rounded" href="{{ route('chapters.show',$c) }}">View</a>
                <form method="POST" action="{{ route('chapters.unlock',$c) }}">
                    @csrf
                    <button class="px-3 py-1 bg-green-500 text-white rounded">Unlock</button>
                </form>
            </div>
        </div>
    @endforeach
    {{ $chapters->links() }}
</div>
@endsection
