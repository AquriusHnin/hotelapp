<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BookingDetails extends Model
{
    //
    protected $table="bookingdetails";
    protected $fillable = ['booking_id','booking_date'];
    public $timestamps = false;
   
}
