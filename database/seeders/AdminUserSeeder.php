<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'profesor@utn.edu.ar'],
            [
                'name' => 'AdministradorProfesor',
                'password' => Hash::make('Profesor2026'),
                'is_admin' => true,
                'phone' => null,
                'professional_url' => null,
                'photo_path' => null,
            ]
        );
    }
}
