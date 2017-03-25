<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;
use App\Booking;

class RoomType extends Model
{
     protected $table = 'roomtypes';
     protected $fillable = ['name','features','bed_no','count','price','image'];

     public function rooms()
     {
     	return $this->hasMany(Room::class,'roomtype_id'); 
     }

     public function bookings(){

		return $this->hasMany(Booking::class,'roomtype_id');
	}
}
