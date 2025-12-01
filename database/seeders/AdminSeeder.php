<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Créer un admin par défaut
        User::create([
            'name' => 'Administrateur',
            'email' => 'admin@ecole.tn',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Créer un utilisateur normal pour tester
        User::create([
            'name' => 'User Test',
            'email' => 'user@ecole.tn',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
    }
}