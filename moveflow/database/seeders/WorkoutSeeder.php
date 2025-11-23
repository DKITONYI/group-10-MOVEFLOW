<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Workout;

class WorkoutSeeder extends Seeder
{
    public function run(): void
    {
        $workouts = [
            [
                'title' => '10-Minute Morning Stretch',
                'description' => 'A quick full-body mobility routine to wake your body up.',
                'duration' => 10,
                'difficulty' => 'easy',
                'equipment' => ['none'],
            ],
            [
                'title' => 'Beginner Bodyweight Blast',
                'description' => 'Simple movements to build foundational strength.',
                'duration' => 15,
                'difficulty' => 'easy',
                'equipment' => ['none'],
            ],
            [
                'title' => 'HIIT Fat Burner',
                'description' => 'High-intensity interval training that pushes your limits.',
                'duration' => 12,
                'difficulty' => 'hard',
                'equipment' => ['mat'],
            ],
            [
                'title' => 'Dumbbell Power Circuit',
                'description' => 'A strength-focused routine using dumbbells.',
                'duration' => 20,
                'difficulty' => 'medium',
                'equipment' => ['dumbbells'],
            ],
            [
                'title' => 'Core Crusher',
                'description' => 'A short but intense core-focused workout.',
                'duration' => 8,
                'difficulty' => 'medium',
                'equipment' => ['mat'],
            ],
            [
                'title' => 'Full-Body Flow Yoga',
                'description' => 'Slow, energizing yoga flow for balance and coordination.',
                'duration' => 15,
                'difficulty' => 'easy',
                'equipment' => ['mat'],
            ],
            [
                'title' => 'Leg Day Challenge',
                'description' => 'A lower-body strength workout targeting glutes and quads.',
                'duration' => 18,
                'difficulty' => 'hard',
                'equipment' => ['none'],
            ],
        ];

        foreach ($workouts as $workout) {
            Workout::create($workout);
        }
    }
}
