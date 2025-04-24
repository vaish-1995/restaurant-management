<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display static profile page
     */
    public function show()
    {
        // Hardcoded user data (static, no database)
        $user = [
            'name'    => 'Restaurant Admin',
            'email'   => 'admin@restaurant.com',
            'age'     => 30,
            'gender'  => 'Male',
            'address' => '123 Main St, Food City',
            'avatar'  => 'images/default-avatar.png'
        ];

        return view('pages.profile', compact('user'));
    }
}