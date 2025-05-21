<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// Home page
Route::get('/', function () {
    return view('welcome');
});

// Auth routes (login, register, etc.)
Auth::routes();

// Profile page (only accessible after login)
Route::get('/profile', function () {
    return view('profile', ['user' => Auth::user()]);
})->middleware(['auth']);

// Home redirect after login
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Dashboard and User CRUD (only for logged-in users)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
});
