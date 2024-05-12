<?php

namespace App\Controllers;

class Facilities extends BaseController
{
    public function index()
    {
        if (!session()->has('userId')) {
            return redirect()->to('/login');
        }
        return view('facilities');
    }

    public function detail($id)
    {

        $facilityTitle = ' ' . $id;

        return view('facility_detail', [
            'facilityImage' => base_url("assets/g{$id}.png"),
            'facilityTitle' => $facilityTitle
        ]);
    }
}
