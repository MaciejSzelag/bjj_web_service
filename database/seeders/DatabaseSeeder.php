<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tworzymy zwykłego użytkownika
        User::factory()->create([
            'name' => 'Maciek user',
            'email' => 'szelag.marta@gmail.com',
            'password' => Hash::make('user123'), // ustaw hasło dla usera
            'role' => 'user', // rola zwykłego użytkownika
        ]);

        // Tworzymy admina
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'), // ustaw hasło dla admina
            'role' => 'admin', // rola admina
        ]);
    }
}