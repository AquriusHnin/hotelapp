<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Barservice;
use App\User;

class billing extends Model
{
    protected $table = 'billings';
    protected $fillable=["barservice_id","user_id"];

    public function barservice()
	{
		return $this->belongsTo(Barservice::class);
	}

}
