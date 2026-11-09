<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'full_name' => 'System Administrator',
        ]);

        User::create([
            'username' => 'cashier1',
            'full_name' => 'Taylor Sheesh',
        ]);

        User::create([
            'username' => 'cashier2',
            'full_name' => 'Vinas Deluxe',
        ]);

        User::create([
            'username' => 'manager',
            'full_name' => 'Precious Batumbakal',
        ]);

        User::create([
            'username' => 'staff1',
            'full_name' => 'Minty Fresh',
        ]);
    }
}