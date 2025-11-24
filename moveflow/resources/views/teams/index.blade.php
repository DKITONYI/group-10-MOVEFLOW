@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Teams</h1>
    @foreach($teams as $t)
        <div class="p-4 border rounded mb-3">
            <h2 class="text-lg font-semibold">{{ $t->name }} <span class="text-sm text-gray-500">({{ $t->points }} pts)</span></h2>
            <p class="text-sm">{{ Str::limit($t->description, 200) }}</p>
            <div class="mt-2 flex gap-2">
                <a class="px-3 py-1 bg-blue-500 text-white rounded" href="{{ route('teams.show',$t) }}">View</a>
                <form method="POST" action="{{ route('teams.addUser',$t) }}">
                    @csrf
                    <input type="text" name="user_name" placeholder="User Name" class="px-2 py-1 border rounded">
                    <button class="px-3 py-1 bg-green-500 text-white rounded">Add User</button>
                </form>
            </div>
        </div>
    @endforeach
    {{ $teams->links() }}
</div>
@endsection
