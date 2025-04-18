<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
  public function run()
  {
    $faker = Faker::create();

    for ($i = 1; $i <= 10; $i++) {
      User::create([
        'name' => $faker->name(),
        'email' => $faker->unique()->safeEmail(),
        'password' => Hash::make('password'), // default password for all
        'gender' => $faker->randomElement(['Male', 'Female']),
        'birthday' => $faker->dateTimeBetween('-40 years', '-18 years')->format('Y-m-d'),
        'status' => $faker->boolean(80), // 80% chance active
        'created_at' => now(),
      ]);
    }
  }
}
