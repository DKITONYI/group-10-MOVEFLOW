<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chapter;

class ChapterSeeder extends Seeder
{
    public function run(): void
    {
        $chapters = [
            [
                'title' => 'Chapter 1: The Beginning – Awakening the Body',
                'content' => 'You take your first step into MoveFlow. Your body feels stiff but ready. This chapter guides you through gentle movement — a reminder that every journey begins with one breath, one stretch. Workouts included: 10-Minute Morning Stretch, Full-Body Flow Yoga.',
                'unlock_points' => 0,
            ],
            [
                'title' => 'Chapter 2: Momentum Rising – Igniting the Spark',
                'content' => 'Your confidence is building. Each session feels a little easier, and your body feels lighter. This chapter represents your growing momentum — your spark has been lit. Workouts included: Beginner Bodyweight Blast, Core Crusher, Full-Body Flow Yoga.',
                'unlock_points' => 50,
            ],
            [
                'title' => 'Chapter 3: The First Challenge – Facing Resistance',
                'content' => 'The excitement fades, and resistance creeps in. But you choose to push through — real progress begins here. This chapter teaches discipline and resilience. Workouts included: HIIT Fat Burner, Leg Day Challenge, Beginner Bodyweight Blast.',
                'unlock_points' => 120,
            ],
            [
                'title' => 'Chapter 4: Strength Within – Becoming Unstoppable',
                'content' => 'Something changes inside you. Movement now feels natural, and you begin chasing challenges. This chapter represents reclaiming your power. Workouts included: Dumbbell Power Circuit, HIIT Fat Burner, Core Crusher, Leg Day Challenge.',
                'unlock_points' => 250,
            ],
            [
                'title' => 'Chapter 5: The Flow Master – Transformation Complete',
                'content' => 'You’ve evolved. Movement is now a lifestyle. This chapter celebrates mastery of strength, balance, and endurance. Workouts included: Full-Body Flow Yoga, HIIT Fat Burner, Dumbbell Power Circuit, Leg Day Challenge.',
                'unlock_points' => 400,
            ],
        ];

        foreach ($chapters as $chapter) {
            Chapter::create($chapter);
        }
    }
}
