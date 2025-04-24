<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $metrics = [
        'total_sales' => 0.00,
        'total_lost_sales' => 0.00,
        'total_cash_payments' => 0.00,
        'chart_data' => [
            'labels' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            'sales' => [120000, 190000, 300000, 250000, 420000, 550000, 400000],
            'lost_sales' => [20000, 15000, 40000, 30000, 50000, 25000, 35000]
        ]
    ];

    return view('pages/dashboard', compact('metrics'));
}
    
}