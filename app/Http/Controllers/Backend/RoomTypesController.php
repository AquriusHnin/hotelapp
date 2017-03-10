<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\RoomTypesRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\RoomType;

class RoomTypesController extends Controller
{
    //
    private $roomtype;

    public function __construct(RoomType $roomtype)
    {
    	$this->roomtype=$roomtype;
    }


    public function index(Request $request)
    {
    	 $roomtypes = $this->roomtype->paginate(5); 
         return view('backend.roomtypes.index',["roomtypes"=>$roomtypes]);
    	
    }



}
