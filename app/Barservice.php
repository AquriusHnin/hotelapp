<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Billing;

class Barservice extends Model
{
	protected $table = 'barservice';
	protected $fillable=["name","price","image"];

	public function billing()
	{
		return $this->hasMany(Billing::class,'barservice_id');
	}


}
