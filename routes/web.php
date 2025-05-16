<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Home page
Route::get('/', function () {
    return view('welcome');
});

// Protected profile page (only accessible after login)
Route::get('/profile', function () {
    return view('profile', ['user' => Auth::user()]);
})->middleware(['auth']);

// Auth routes (login, register, etc.)
Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
