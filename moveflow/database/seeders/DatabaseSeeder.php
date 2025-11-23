<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            WorkoutSeeder::class,
            MissionSeeder::class,
            ChapterSeeder::class,
            TeamSeeder::class,
            UserSeeder::class,
            AchievementSeeder::class,
        ]);
    }
}
