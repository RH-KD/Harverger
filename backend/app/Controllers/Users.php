<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function index()
    {
        return view('user/landing');
    }

    public function login()
    {
        return view('user/login');
    }

    public function dashboard()
    {
        return view('user/dashboard');
    }

    public function signup()
    {
        return view('user/signup');
    }
}
