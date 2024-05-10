<?php

namespace App\Controllers;

class Account extends BaseController
{
    public function index(): string
    {
        return view('account');
    }
}
