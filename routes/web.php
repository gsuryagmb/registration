<?php

use App\Http\Controllers\AuthViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthViewController::class, 'showRegister'])->name('register');
Route::get('/login', [AuthViewController::class, 'showLogin'])->name('login');