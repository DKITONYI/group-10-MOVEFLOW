<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Workout;
use App\Models\Exercise;

class ExerciseSeeder extends Seeder
{
    public function run(): void
    {
        // ---- 10-Minute Morning Stretch ----
        $morning = Workout::where('title', '10-Minute Morning Stretch')->first();
        if ($morning) {
            Exercise::insert([
                [
                    'workout_id' => $morning->id,
                    'name' => 'Neck Circles',
                    'duration' => '30 sec',
                    'type' => 'warmup',
                    'order' => 1,
                ],
                [
                    'workout_id' => $morning->id,
                    'name' => 'Arm Rotations',
                    'duration' => '45 sec',
                    'type' => 'warmup',
                    'order' => 2,
                ],
                [
                    'workout_id' => $morning->id,
                    'name' => 'Hip Openers',
                    'duration' => '1 min',
                    'type' => 'mobility',
                    'order' => 3,
                ],
                [
                    'workout_id' => $morning->id,
                    'name' => 'Hamstring Stretch',
                    'duration' => '1 min',
                    'type' => 'stretch',
                    'order' => 4,
                ],
            ]);
        }

        // ---- Core Crusher ----
        $core = Workout::where('title', 'Core Crusher')->first();
        if ($core) {
            Exercise::insert([
                [
                    'workout_id' => $core->id,
                    'name' => 'Crunches',
                    'duration' => '20 reps',
                    'type' => 'strength',
                    'order' => 1,
                ],
                [
                    'workout_id' => $core->id,
                    'name' => 'Plank Hold',
                    'duration' => '45 sec',
                    'type' => 'strength',
                    'order' => 2,
                ],
                [
                    'workout_id' => $core->id,
                    'name' => 'Leg Raises',
                    'duration' => '15 reps',
                    'type' => 'strength',
                    'order' => 3,
                ],
            ]);
        }

        // ---- HIIT Fat Burner ----
        $hiit = Workout::where('title', 'HIIT Fat Burner')->first();
        if ($hiit) {
            Exercise::insert([
                [
                    'workout_id' => $hiit->id,
                    'name' => 'High Knees',
                    'duration' => '30 sec',
                    'type' => 'cardio',
                    'order' => 1,
                ],
                [
                    'workout_id' => $hiit->id,
                    'name' => 'Burpees',
                    'duration' => '15 reps',
                    'type' => 'cardio',
                    'order' => 2,
                ],
                [
                    'workout_id' => $hiit->id,
                    'name' => 'Mountain Climbers',
                    'duration' => '40 sec',
                    'type' => 'cardio',
                    'order' => 3,
                ],
            ]);
        }

        // ---- Dumbbell Power Circuit ----
        $dumbbell = Workout::where('title', 'Dumbbell Power Circuit')->first();
        if ($dumbbell) {
            Exercise::insert([
                [
                    'workout_id' => $dumbbell->id,
                    'name' => 'Dumbbell Squats',
                    'duration' => '12 reps',
                    'type' => 'strength',
                    'order' => 1,
                ],
                [
                    'workout_id' => $dumbbell->id,
                    'name' => 'Dumbbell Rows',
                    'duration' => '10 reps each side',
                    'type' => 'strength',
                    'order' => 2,
                ],
                [
                    'workout_id' => $dumbbell->id,
                    'name' => 'Shoulder Press',
                    'duration' => '12 reps',
                    'type' => 'strength',
                    'order' => 3,
                ],
            ]);
        }

        // ---- Leg Day Challenge ----
        $legs = Workout::where('title', 'Leg Day Challenge')->first();
        if ($legs) {
            Exercise::insert([
                [
                    'workout_id' => $legs->id,
                    'name' => 'Squats',
                    'duration' => '20 reps',
                    'type' => 'strength',
                    'order' => 1,
                ],
                [
                    'workout_id' => $legs->id,
                    'name' => 'Lunges',
                    'duration' => '15 reps each leg',
                    'type' => 'strength',
                    'order' => 2,
                ],
                [
                    'workout_id' => $legs->id,
                    'name' => 'Glute Bridges',
                    'duration' => '20 reps',
                    'type' => 'strength',
                    'order' => 3,
                ],
            ]);
        }
    }
}
