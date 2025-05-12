<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin; // Import du modèle Admin
use Illuminate\Support\Facades\Hash; // Import de la classe Hash

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'admin',
            'email' => 'admin@pef.mg',
            'password' => Hash::make('adminpef2025admin'),
        ]);
    }
}