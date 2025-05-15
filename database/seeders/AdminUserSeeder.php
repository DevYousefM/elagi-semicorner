<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'elagi_admin@gmail.com',
            'password' => Hash::make('Elagi@admin_147852'),
            'is_admin' => 1,
            'phone' => '01027421293',
        ]);
    }
}
