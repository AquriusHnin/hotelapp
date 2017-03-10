<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\RoomType;

class Room extends Model
{
  
    protected $table = 'rooms';
    protected $fillable=["room_no","roomtypes_id","num_bed"];

    public function roomtype()
	{
		return $this->belongsTo(RoomType::class);
	}
}
