<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'phone' => '0123456789',
            'password' => 'P@ssw0rd',
            'name' => 'Admin',
            'gender' => 'man',
            'role' => 'admin'
        ];

        User::create($user);
    }
}
