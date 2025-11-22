@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">

    <h1 class="text-3xl font-bold mb-6">Leaderboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- Users leaderboard -->
        <div>
            <h2 class="text-2xl font-semibold mb-3">Top Users</h2>
            <ul class="bg-white shadow rounded p-4">
                @foreach($topUsers as $user)
                    <li class="flex justify-between border-b py-2">
                        <span>{{ $loop->iteration }}. {{ $user->name }}</span>
                        <span class="font-bold">{{ $user->points }} pts</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Teams leaderboard -->
        <div>
            <h2 class="text-2xl font-semibold mb-3">Top Teams</h2>
            <ul class="bg-white shadow rounded p-4">
                @foreach($topTeams as $team)
                    <li class="flex justify-between border-b py-2">
                        <span>{{ $loop->iteration }}. {{ $team->name }}</span>
                        <span class="font-bold">{{ $team->points }} pts</span>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>

</div>
@endsection
