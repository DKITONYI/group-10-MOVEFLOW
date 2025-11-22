<?php
namespace Database\Factories;

use App\Models\Mission;
use Illuminate\Database\Eloquent\Factories\Factory;

class MissionFactory extends Factory
{
    protected $model = Mission::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'summary' => $this->faker->paragraph(),
            'points' => $this->faker->randomElement([5,10,15,20]),
            'workout_id' => \App\Models\Workout::factory(),
            'is_team_mission' => $this->faker->boolean(20),
        ];
    }
}
