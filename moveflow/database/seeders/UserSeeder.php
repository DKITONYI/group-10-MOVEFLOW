<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Team;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['name' => 'Ethan Tsuma', 'email' => 'ethan.tsuma@example.com'],
            ['name' => 'Diana Kitonyi', 'email' => 'diana.kitonyi@example.com'],
            ['name' => 'Ray King\'ori', 'email' => 'ray.kingori@example.com'],
            ['name' => 'Darlene Nyaboke', 'email' => 'darlene.nyaboke@example.com'],
            ['name' => 'Karrl Kamau', 'email' => 'karrl.kamau@example.com'],
            ['name' => 'Jeremy Kigen', 'email' => 'jeremy.kigen@example.com'], // admin candidate
            ['name' => 'Brian Otieno', 'email' => 'brian.otieno@example.com'],
            ['name' => 'Michelle Achieng', 'email' => 'michelle.achieng@example.com'],
            ['name' => 'Hanifa Said', 'email' => 'hanifa.said@example.com'],
            ['name' => 'Sarah Waweru', 'email' => 'sarah.waweru@example.com'],
            ['name' => 'Kevin Muriithi', 'email' => 'kevin.muriithi@example.com'],
        ];

        foreach ($users as $u) {
            $user = User::create([
                'name' => $u['name'],
                'email' => $u['email'],
                'password' => Hash::make('password'),
                'role' => $u['email'] === 'jeremy.kigen@example.com' ? 'admin' : 'user',
                'points' => rand(20, 400),
            ]);

            // Assign user to a random Team
            $teamId = Team::inRandomOrder()->first()->id;
            $user->teams()->attach($teamId);
        }
    }
}
