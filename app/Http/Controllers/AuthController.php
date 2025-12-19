<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function profile()
    {
        return view('auth.profile');
    }
}
