<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $teams = [
            [
                'name' => 'Alpha Flow',
                'description' => 'A team focused on consistency, calmness and personal progress.',
                'points' => 180,
            ],
            [
                'name' => 'Fire Squad',
                'description' => 'High-energy warriors who push their limits every session.',
                'points' => 240,
            ],
            [
                'name' => 'Harmony Crew',
                'description' => 'Mind-body balance enthusiasts who love yoga and mobility.',
                'points' => 160,
            ],
            [
                'name' => 'Velocity Ninjas',
                'description' => 'Speed and agility masters who thrive on fast HIIT workouts.',
                'points' => 300,
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
