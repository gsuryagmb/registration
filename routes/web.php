<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\AuthViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/register', [AuthViewController::class, 'showRegister'])->name('register');
// Route::get('/login', [AuthViewController::class, 'showLogin'])->name('login');

Route::post('/api/register', [AuthController::class, 'register']);
Route::post('/api/login', [AuthController::class, 'login']);