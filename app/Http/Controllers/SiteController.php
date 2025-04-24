<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('pages/home'); // assumes resources/views/home.blade.php
    }

    public function about()
    {
        return view('pages/about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function handleContact(Request $request)
    {
        // Form processing logic here
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        // Process the data (you could save to database, send email, etc.)
        
        return view('contact-success', [
            'name' => $request->name
        ]);
    }
}