<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServicesRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services;

class ServicesController extends Controller
{
    private $services;

    public function __construct(Services $services)
    {
       $this->services=$services;
   	}


   public function index(Request $request)
   {
      // $services = $this->services->paginate(5);

      // return view('frontend.services',["services"=>$services]);

      var_dump("hello");

      


  }
}
