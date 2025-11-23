<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Achievement;

class AchievementSeeder extends Seeder
{
    public function run(): void
    {
        $achievements = [
            [
                'name' => 'First Steps',
                'icon' => '🥾',
                'unlock_points' => 10,
            ],
            [
                'name' => 'Consistency King',
                'icon' => '🔥',
                'missions_required' => 10,
            ],
            [
                'name' => 'Core Master',
                'icon' => '💪',
                'missions_required' => 5,
            ],
            [
                'name' => 'HIIT Hero',
                'icon' => '⚡',
                'missions_required' => 3,
            ],
            [
                'name' => 'Flow Spirit',
                'icon' => '🌿',
                'missions_required' => 3,
            ],
            [
                'name' => 'Level Up',
                'icon' => '⭐',
                'unlock_points' => 100,
            ],
        ];

        foreach ($achievements as $achievement) {
            Achievement::create($achievement);
        }
    }
}
