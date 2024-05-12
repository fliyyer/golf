<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (!session()->has('userId')) {
            return redirect()->to('/login');
        }
        return view('home');
    }
}
