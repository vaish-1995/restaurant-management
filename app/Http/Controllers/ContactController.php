<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactController extends Controller
{
    /**
     * Show the contact form
     */
    public function show()
    {
        return view('pages.contact');
    }

    /**
     * Handle contact form submission
     */
    public function submit(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10|max:2000'
        ]);

        // Process the data (you can customize this)
        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
            'ip_address' => $request->ip(),
            'submitted_at' => now()->toDateTimeString()
        ];

        // Option 1: Store in session (for display)
        session()->flash('contact_data', $data);

        // Option 2: Send email (uncomment to use)
        // Mail::to('your@restaurant.com')->send(new ContactFormSubmitted($data));

        // Option 3: Store in database (you'd need a model and migration)

        return redirect()->route('contact.thankyou');
    }

    /**
     * Show thank you page
     */
    public function thankyou()
    {
        if (!session()->has('contact_data')) {
            return redirect()->route('contact');
        }

        return view('pages.contact-thankyou', [
            'data' => session('contact_data')
        ]);
    }
}