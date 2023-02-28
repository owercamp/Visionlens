<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ower Armando Campos ALfonso',
            'username' => "ocampos",
            'email' => 'owerion22@gmail.com',
            'password' => bcrypt("LoreCamiJuli1")
        ]);
    }
}
