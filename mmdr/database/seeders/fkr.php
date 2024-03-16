<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use faker\factory as faker;
use Illuminate\Support\Facades\Hash;
class fkr extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(100)->create();
        $faker =Faker::create();
        \App\Models\User::factory()->create([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' =>Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);  
    }
}
