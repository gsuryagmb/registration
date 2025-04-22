<?php

use App\Http\Controllers\Authentication;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('login', [Authentication::class, 'login']);