<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index(){
        $bookings = Booking::all();
        return view('bookings', compact('bookings'));
    }
}
