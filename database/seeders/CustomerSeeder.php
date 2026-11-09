<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        Customer::create([
            'full_name' => 'Leann Querubin',
            'email' => 'leann@example.com',
            'phone' => '09171234567',
        ]);

        Customer::create([
            'full_name' => 'Edward Sevilla',
            'email' => 'edward@example.com',
            'phone' => '09181234567',
        ]);

        Customer::create([
            'full_name' => 'Martina Balba',
            'email' => 'martina@example.com',
            'phone' => '09191234567',
        ]);

        Customer::create([
            'full_name' => 'Keanna Reeves',
            'email' => 'keanna@example.com',
            'phone' => '09201234567',
        ]);

        Customer::create([
            'full_name' => 'Don Marciano',
            'email' => 'don@example.com',
            'phone' => '09211234567',
        ]);
    }
}