<?php

// database/factories/WorkoutFactory.php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkoutFactory extends Factory
{
    protected $model = \App\Models\Workout::class;

    public function definition()
    {
        return [
            'title' => $this->faker->words(3,true),
            'description' => $this->faker->sentence(),
            'duration' => $this->faker->numberBetween(5,40),
            'difficulty' => $this->faker->randomElement(['easy','medium','hard']),
            'equipment' => json_encode([$this->faker->randomElement(['none','dumbbells','mat'])]),
        ];
    }
}
