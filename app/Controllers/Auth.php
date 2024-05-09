<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function processLogin()
    {
        return redirect()->to('/');
    }

    public function register()
    {
        return view('register');
    }

    public function processRegister()
    {
        return redirect()->to('/login');
    }
}
