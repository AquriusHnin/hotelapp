<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\RoomType;
use App\User;
use App\BookingDetails;
use App\Room;
class Booking extends Model
{
    //
	protected $table = 'bookings';
    protected $fillable=["user_id","roomtype_id","room_id","no_days","status","check_in","check_out"];
    public $timestamps = false;

    public function roomtype()
	{
		return $this->belongsTo(RoomType::class);
	}

	public function room(){
		return $this->belongsTo(Room::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function details()
	{
		return $this->hasMany(BookingDetails::class,'booking_id'); 
	}


}
