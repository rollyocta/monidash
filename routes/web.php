<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// -----------------------------
// Welcome Page (landing page)
// -----------------------------
Route::get('/', function () {
    // Redirect logged-in users sa dashboard
    if(auth()->check()) {
        return redirect('/dashboard');
    }
    return view('pages.welcome'); // resources/views/welcome.blade.php
})->name('welcome');

// -----------------------------
// Dashboard (authenticated users only)
// -----------------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// -----------------------------
// Profile routes (authenticated users only)
// -----------------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// -----------------------------
// Breeze Auth routes (login, register, forgot password)
// -----------------------------
require __DIR__.'/auth.php';

