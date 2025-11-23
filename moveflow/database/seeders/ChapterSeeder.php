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
                'title' => 'Chapter 1: The Beginning',
                'content' => 'Your story begins. You take your first steps toward a stronger, healthier future.',
                'unlock_points' => 0,
            ],
            [
                'title' => 'Chapter 2: Momentum Rising',
                'content' => 'You start building consistency. The fire inside you grows.',
                'unlock_points' => 50,
            ],
            [
                'title' => 'Chapter 3: The First Challenge',
                'content' => 'A real challenge appears — but so does your determination.',
                'unlock_points' => 120,
            ],
            [
                'title' => 'Chapter 4: Strength Within',
                'content' => 'Your body adapts, your mind sharpens, and you unlock a new version of yourself.',
                'unlock_points' => 250,
            ],
            [
                'title' => 'Chapter 5: The Flow Master',
                'content' => 'You have transformed. Fitness is no longer a task — it’s a lifestyle.',
                'unlock_points' => 400,
            ],
        ];

        foreach ($chapters as $chapter) {
            Chapter::create($chapter);
        }
    }
}
