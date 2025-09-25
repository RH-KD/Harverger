<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        return view('user/login'); // Login page
    }

    public function dashboard()
    {
        return view('user/dashboard'); // Dashboard page
    }
}
