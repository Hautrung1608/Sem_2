<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('login.index');
    }
    public function register()
    {
        return view('register.index');
    }
}
