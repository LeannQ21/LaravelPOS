<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'username' => 'admin',
                'full_name' => 'System Administrator',
            ],
            [
                'id' => 2,
                'username' => 'cashier1',
                'full_name' => 'Taylor Sheesh',
            ],
            [
                'id' => 3,
                'username' => 'cashier2',
                'full_name' => 'Vinas Deluxe',
            ],
            [
                'id' => 4,
                'username' => 'manager',
                'full_name' => 'Precious Batumbakal',
            ],
            [
                'id' => 5,
                'username' => 'staff1',
                'full_name' => 'Minty Fresh',
            ],
        ];

        return view('users.index', compact('users'));
    }
}