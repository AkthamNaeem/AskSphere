<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i<25; $i++) {
            User::query()->create([
                'name' => fake()->name,
                'email' => fake()->email,
                'password' => bcrypt('12345678'),
            ]);
        }
    }
}
