<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Rifky Najra Adipura',
            'email' => 'rifkyadipura@gmail.com',
            'password' => Hash::make('rifky12345'),
            'role' => 1,
        ]);
    }
}
