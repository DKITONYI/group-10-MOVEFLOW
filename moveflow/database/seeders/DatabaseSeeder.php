<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    // database/seeders/DatabaseSeeder.php (call factories)
    public function run()
    {
        \App\Models\User::factory(10)->create()->each(function($user){
            // attach to team later
        });

        \App\Models\Team::factory(3)->create()->each(function($team){
            $team->users()->attach(\App\Models\User::inRandomOrder()->take(3)->pluck('id')->toArray());
        });

        \App\Models\Workout::factory(20)->create();
        \App\Models\Mission::factory(30)->create();
        \App\Models\Chapter::factory()->count(5)->create();
    }

}
