<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\BookingsRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Booking;

class BookingController extends Controller
{
    //
    private $booking;


    public function __construct(Booking $booking)
    {
    	$this->booking=$booking;
    }

    public function index()
    {
       $bookings= $this->booking->with("user")->paginate(5);
       
       return view('backend.booking.index',["bookings"=>$bookings]);
    }
}
