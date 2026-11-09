<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'full_name' => 'Leann Querubin',
                'email' => 'leann@example.com',
                'phone' => '09171234567',
            ],
            [
                'id' => 2,
                'full_name' => 'Edward Sevilla',
                'email' => 'edward@example.com',
                'phone' => '09181234567',
            ],
            [
                'id' => 3,
                'full_name' => 'Martina Balba',
                'email' => 'martina@example.com',
                'phone' => '09191234567',
            ],
            [
                'id' => 4,
                'full_name' => 'Keanna Reeves',
                'email' => 'keanna@example.com',
                'phone' => '09201234567',
            ],
            [
                'id' => 5,
                'full_name' => 'Don Marciano',
                'email' => 'don@example.com',
                'phone' => '09211234567',
            ],
        ];

        return view('customers.index', compact('customers'));
    }
}