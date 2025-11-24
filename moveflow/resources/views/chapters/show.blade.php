@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-4">

    <h1 class="text-3xl font-bold mb-4">{{ $chapter->title }}</h1>

    <p class="text-gray-800 leading-relaxed">
        {{ $chapter->content }}
    </p>

</div>
@endsection
