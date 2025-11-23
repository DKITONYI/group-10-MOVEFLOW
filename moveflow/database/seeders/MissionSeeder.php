<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mission;
use App\Models\Workout;

class MissionSeeder extends Seeder
{
    public function run(): void
    {
        $missions = [

            // --------------------
            // DAILY MISSIONS
            // --------------------
            [
                'title' => 'Daily Warm-Up',
                'summary' => 'Complete any warm-up workout.',
                'points' => 10,
                'workout_id' => Workout::where('title', '10-Minute Morning Stretch')->first()->id ?? null,
            ],
            [
                'title' => 'Daily Core Boost',
                'summary' => 'Target your abs with a quick core session.',
                'points' => 12,
                'workout_id' => Workout::where('title', 'Core Crusher')->first()->id ?? null,
            ],

            // --------------------
            // WEEKLY MISSIONS
            // --------------------
            [
                'title' => 'Weekly Warrior',
                'summary' => 'Complete 3 workouts this week.',
                'points' => 40,
            ],
            [
                'title' => 'Team Power-Up',
                'summary' => 'Complete a workout that helps your team climb the ranks.',
                'points' => 50,
                'is_team_mission' => true,
            ],

            // --------------------
            // TIERED MISSIONS
            // --------------------
            [
                'title' => 'Beginner Strength',
                'summary' => 'Complete an easy workout.',
                'points' => 15,
                'workout_id' => Workout::where('difficulty', 'easy')->inRandomOrder()->first()->id ?? null,
            ],
            [
                'title' => 'Intermediate Push',
                'summary' => 'Challenge yourself with a medium-level workout.',
                'points' => 30,
                'workout_id' => Workout::where('difficulty', 'medium')->inRandomOrder()->first()->id ?? null,
            ],
            [
                'title' => 'Hardcore Session',
                'summary' => 'Push to your limits with a hard workout.',
                'points' => 50,
                'workout_id' => Workout::where('difficulty', 'hard')->inRandomOrder()->first()->id ?? null,
            ],

            // --------------------
            // STORY STARTER MISSIONS
            // --------------------
            [
                'title' => 'Start Your Journey',
                'summary' => 'Your first mission toward a healthier you.',
                'points' => 20,
            ],
            [
                'title' => 'Ignite the Fire',
                'summary' => 'Complete a HIIT workout and feel the burn.',
                'points' => 40,
                'workout_id' => Workout::where('title', 'HIIT Fat Burner')->first()->id ?? null,
            ],
        ];

        foreach ($missions as $mission) {
            Mission::create($mission);
        }
    }
}
