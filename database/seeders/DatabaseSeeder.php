<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Miguel Ceballos',
            'email' => 'miguel@example.com',
        ]);

        User::factory()->create([
            'name' => 'Sofia Huitzili',
            'email' => 'sofia@example.com',
        ]);
    }
}
