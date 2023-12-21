<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Renato',
            'email' => 'renato@correo.com',
            'password' => Hash::make('password'),
            'status' => '0',
        ]);

        User::create([
            'name' => 'Mario',
            'email' => 'mario@correo.com',
            'password' => Hash::make('password'),
            'status' => '0',
        ]);

    }

}
