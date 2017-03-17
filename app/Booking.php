<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\RoomType;
use App\User;

class Booking extends Model
{
    //
	protected $table = 'bookings';
    protected $fillable=["user_id","roomtype_id","no_days","status","check_in","check_out"];

    public function roomtype()
	{
		return $this->belongsTo(RoomType::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}



}
