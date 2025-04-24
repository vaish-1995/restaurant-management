<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = $this->getStaticOrders();
        
        return view('pages.orders', compact('orders'));
    }
    
    protected function getStaticOrders()
    {
        return [
            [
                'id' => 1,
                'customer' => 'Jean Tremblay',
                'items' => 'Poutine, Maple Syrup, Beer',
                'total' => '$18.99',
                'status' => 'Completed',
                'date' => now()->subHours(2)->format('Y-m-d H:i')
            ],
            [
                'id' => 2,
                'customer' => 'Sarah Johnson',
                'items' => 'Butter Tart, Nanaimo Bar, Coffee',
                'total' => '$9.75',
                'status' => 'Preparing',
                'date' => now()->subHour()->format('Y-m-d H:i')
            ],
            [
                'id' => 3,
                'customer' => 'Mohammed Singh',
                'items' => 'Beavertail, Ice Wine',
                'total' => '$14.50',
                'status' => 'Pending',
                'date' => now()->format('Y-m-d H:i')
            ],
            [
                'id' => 4,
                'customer' => 'Li Wei',
                'items' => 'Tourtière, Cider',
                'total' => '$22.25',
                'status' => 'Completed',
                'date' => now()->subDays(1)->format('Y-m-d H:i')
            ]
        ];
    }
}