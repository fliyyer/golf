<?php

namespace App\Controllers;

use App\Models\BookingModel;
use CodeIgniter\Controller;

class BookingController extends Controller
{
    public function saveBooking()
    {
        if (!session()->has('userId')) {
            return redirect()->to('/login')->with('error', 'Silakan login untuk melakukan booking.');
        }

        $userId = session()->get('userId');

        $data = [
            'userId' => $userId,
            'selectedDay' => $this->request->getPost('selectedDay'),
            'selectedTeeTime' => $this->request->getPost('selectedTeeTime'),
            'selectedPlayer' => $this->request->getPost('selectedPlayer'),
            'selectedPrice' => $this->request->getPost('selectedPrice'),
            'selectedPaymentMethod' => $this->request->getPost('selectedPaymentMethod'),
            'title' => $this->request->getPost('title'),
        ];

        // Simpan data booking ke database
        $bookingModel = new BookingModel();
        if ($bookingModel->insert($data)) {
            return redirect()->to('/')->with('success', 'Booking berhasil disimpan.');
        } else {
            return redirect()->to('/')->with('error', 'Gagal menyimpan booking.');
        }
    }

    public function account()
    {
        if (!session()->has('userId')) {
            return redirect()->to('/login')->with('error', 'Silakan login untuk melihat riwayat booking.');
        }

        $userId = session()->get('userId');
        $bookingModel = new BookingModel();
        $bookings = $bookingModel->where('userId', $userId)->findAll();
        return view('account',  ['bookings' => $bookings]);
    }
}
