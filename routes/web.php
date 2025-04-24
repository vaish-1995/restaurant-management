
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StaticAuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Basic routes pointing to SiteController
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/services', [SiteController::class, 'services'])->name('services');
// Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/contact', [ContactController::class, 'show'])
     ->middleware('static.auth')
     ->name('contact');


// Form submission route (POST method)
Route::post('/contact', [SiteController::class, 'handleContact'])->name('contact.submit');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/orders', [OrderController::class, 'index'])
     ->middleware('static.auth')
     ->name('orders');

Route::get('/profile', function () {
    // Sample data - replace with actual user data later
    $user = [
        'name' => 'Admin User',
        'email' => 'admin@restaurant.com',
        'age' => 35,
        'gender' => 'Male',
        'address' => '123 Restaurant St, Food City',
        'avatar' => 'images/default-avatar.png'
    ];
    
    return view('profile', compact('user'));
})->name('profile');


Route::get('/customers', [CustomerController::class, 'index'])
     ->middleware('static.auth')
     ->name('customers');



// Login Routes (Static)
Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::post('/login', function () {
    if (request('username') === 'admin' && request('password') === 'admin123') {
        session()->put('logged_in', true);
        return redirect('/dashboard');
    }
    return back()->with('error', 'Invalid credentials (use admin/admin123)');
});


// Protected Routes
Route::middleware(['static.auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');

    Route::post('/logout', function () {
        session()->forget('logged_in');
        return redirect('/login')->with('success', 'Logged out!');
    })->name('logout');
});

// Optional: Redirect home to login
Route::redirect('/', '/login');


