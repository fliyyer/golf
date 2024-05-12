<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'id';
    protected $allowedFields = ['userId', 'title', 'selectedDay', 'selectedTeeTime', 'selectedPlayer', 'selectedPrice', 'selectedPaymentMethod'];
}
