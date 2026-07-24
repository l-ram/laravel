<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Chirp;
use Illuminate\Database\Seeder;

class ChirpSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        if ($users->isEmpty()) {
            return;
        }

        foreach (range(1, 50) as $_) {
            Chirp::create([
                'user_id' => $users->random()->id,
                'message' => fake()->sentence(),
            ]);
        }
    }
}