<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Team;

class LeaderboardController extends Controller
{
    public function index()
    {
        // Top 20 users by points
        $topUsers = User::orderByDesc('points')->take(20)->get();

        // Top 10 teams by points
        $topTeams = Team::orderByDesc('points')->take(10)->get();

        return view('leaderboard', compact('topUsers', 'topTeams'));
    }
}
