<?php

use App\Http\Controllers\Api\AuthViewController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthViewController::class, 'register']);
Route::post('/login', [AuthViewController::class, 'login']);
