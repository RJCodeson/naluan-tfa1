<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Angela Cruz', 'email' => 'angela.cruz@example.com', 'phone' => '0917 123 4567'],
            ['full_name' => 'Marco Santos', 'email' => 'marco.santos@example.com', 'phone' => '0918 234 5678'],
            ['full_name' => 'Beatrice Reyes', 'email' => 'beatrice.reyes@example.com', 'phone' => '0919 345 6789'],
            ['full_name' => 'Joshua Garcia', 'email' => 'joshua.garcia@example.com', 'phone' => '0920 456 7890'],
            ['full_name' => 'Nicole Mendoza', 'email' => 'nicole.mendoza@example.com', 'phone' => '0921 567 8901'],
        ];

        $data = [
            'title' => 'Customer Accounts',
            'customers' => $customers,
        ];

        return view('customers/index', $data);
    }
}
