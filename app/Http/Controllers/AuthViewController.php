<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthViewController extends Controller
{
    //
    public function showRegister()
    {
        return view('register');
    }

    public function showLogin()
    {
        return view('login');
    }
}
