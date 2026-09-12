<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin01', 'full_name' => 'Paolo Dela Cruz', 'role' => 'Administrator'],
            ['username' => 'manager01', 'full_name' => 'Sofia Ramos', 'role' => 'Manager'],
            ['username' => 'cashier01', 'full_name' => 'Miguel Torres', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Andrea Flores', 'role' => 'Cashier'],
            ['username' => 'staff01', 'full_name' => 'Daniel Lim', 'role' => 'Staff'],
        ];

        $data = [
            'title' => 'User Accounts',
            'users' => $users,
        ];

        return view('users/index', $data);
    }
}
