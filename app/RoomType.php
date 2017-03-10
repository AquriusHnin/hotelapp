<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;

class RoomType extends Model
{
     protected $table = 'roomtypes';
     protected $fillable = ['name'];

     public function rooms()
     {
     	return $this->hasMany(Room::class,'roomtype_id'); 
     }
}
