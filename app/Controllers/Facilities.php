<?php

namespace App\Controllers;

class Facilities extends BaseController
{
    public function index(): string
    {
        return view('facilities');
    }
}
