<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        if (!session()->has('userId')) {
            return redirect()->to('/login');
        }
        return view('about');
    }
}
