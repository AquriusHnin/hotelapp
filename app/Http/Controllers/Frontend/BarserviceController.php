<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Barservice;

class BarserviceController extends Controller
{
	private $barservice;

	public function __construct(Barservice $barservice)
	{
		$this->barservice=$barservice;
	}
	
	public function index(Request $request)
	{
		$barservices = $this->barservice->paginate(10); 
		return view('frontend.services',["barservices"=>$barservices]);


	}



}