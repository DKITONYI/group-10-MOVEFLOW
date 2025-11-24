@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-4">

    <h1 class="text-3xl font-bold mb-4">Story Chapters</h1>

    @foreach ($chapters as $chapter)
        @php
            $unlocked = $chapter->isUnlockedFor(Auth::user());
        @endphp

        <div class="p-4 mb-4 border rounded-lg 
            {{ $unlocked ? 'bg-white' : 'bg-gray-200 opacity-70' }}">
            
            <h2 class="text-xl font-semibold">
                {{ $chapter->title }}

                @if(!$unlocked)
                    <span class="ml-2 text-gray-600">(Locked 🔒)</span>
                @endif
            </h2>

            <p class="text-gray-600">
                Unlocks at {{ $chapter->unlock_points }} points
            </p>

            @if($unlocked)
                <a href="{{ route('chapters.show', $chapter->id) }}"
                   class="inline-block mt-2 px-4 py-2 bg-blue-600 text-white rounded">
                    Enter Chapter
                </a>
            @else
                <button disabled
                        class="inline-block mt-2 px-4 py-2 bg-gray-500 text-white rounded cursor-not-allowed">
                    Locked
                </button>
            @endif
        </div>
    @endforeach
</div>
@endsection
