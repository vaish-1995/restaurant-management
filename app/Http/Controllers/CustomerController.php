<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = $this->getStaticCustomers();
        return view('pages.customers', compact('customers'));
    }

    protected function getStaticCustomers()
    {
        return [
            [
                'id' => 1,
                'name' => 'Jean Tremblay',
                'email' => 'jean@example.com',
                'phone' => '+1 514-123-4567', // Montreal
                'total_spent' => '$245.50',
                'visits' => 12,
                'last_visit' => now()->subDays(2)->format('Y-m-d')
            ],
            [
                'id' => 2,
                'name' => 'Sarah Johnson',
                'email' => 'sarah@example.com',
                'phone' => '+1 416-234-5678', // Toronto
                'total_spent' => '$189.75',
                'visits' => 8,
                'last_visit' => now()->subDays(5)->format('Y-m-d')
            ],
            [
                'id' => 3,
                'name' => 'Mohammed Singh',
                'email' => 'mohammed@example.com',
                'phone' => '+1 604-345-6789', // Vancouver
                'total_spent' => '$320.00',
                'visits' => 15,
                'last_visit' => now()->subDays(1)->format('Y-m-d')
            ],
            [
                'id' => 4,
                'name' => 'Li Wei',
                'email' => 'li@example.com',
                'phone' => '+1 403-456-7890', // Calgary
                'total_spent' => '$175.25',
                'visits' => 7,
                'last_visit' => now()->subDays(3)->format('Y-m-d')
            ],
            [
                'id' => 5,
                'name' => 'Emily Ouellet',
                'email' => 'emily@example.com',
                'phone' => '+1 418-567-8901', // Quebec City
                'total_spent' => '$95.40',
                'visits' => 5,
                'last_visit' => now()->subDays(7)->format('Y-m-d')
            ],
            [
                'id' => 6,
                'name' => 'Jacob Smith',
                'email' => 'jacob@example.com',
                'phone' => '+1 905-678-9012', // Mississauga
                'total_spent' => '$210.80',
                'visits' => 9,
                'last_visit' => now()->subDays(4)->format('Y-m-d')
            ],
            [
                'id' => 7,
                'name' => 'Sophia Chen',
                'email' => 'sophia@example.com',
                'phone' => '+1 778-789-0123', // Burnaby
                'total_spent' => '$142.60',
                'visits' => 6,
                'last_visit' => now()->subDays(6)->format('Y-m-d')
            ],
            [
                'id' => 8,
                'name' => 'Lucas Martin',
                'email' => 'lucas@example.com',
                'phone' => '+1 519-890-1234', // London, ON
                'total_spent' => '$78.90',
                'visits' => 3,
                'last_visit' => now()->subDays(10)->format('Y-m-d')
            ],
            [
                'id' => 9,
                'name' => 'Emma Wilson',
                'email' => 'emma@example.com',
                'phone' => '+1 250-901-2345', // Victoria
                'total_spent' => '$305.75',
                'visits' => 11,
                'last_visit' => now()->subDays(2)->format('Y-m-d')
            ],
            [
                'id' => 10,
                'name' => 'Noah Thompson',
                'email' => 'noah@example.com',
                'phone' => '+1 902-012-3456', // Halifax
                'total_spent' => '$164.30',
                'visits' => 8,
                'last_visit' => now()->subDays(5)->format('Y-m-d')
            ]
        ];
    }
}