<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\BookingRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\User;
use App\Room;
use App\Booking;
use App\RoomType;
use App\BookingDetails;
use App\Http\Controllers\Backend\TraitsComponent\BookingTraits;
use Carbon\Carbon;
class BookingController extends Controller
{
    //Traits decleration
    use BookingTraits;

    private $booking;


    public function __construct(Booking $booking)
    {
    	$this->booking=$booking;
    }

    public function index()
    {
       $bookings= $this->booking->with("user")->paginate(5);
     
       return view('backend.booking.index',["bookings"=>$bookings]);
    }

  

    public function create()
    {
        $data=RoomType::lists("name","id");
      
        return view('backend.booking.create')->with("roomtypes",$data);
    }

    public function store(BookingRequest $request)
    {
     // $checkin=new Carbon($request->input("checkin"));
    //  $checkout=new Carbon($request->input("checkout"));
      $checkin=$request->input("checkin");
      $checkout=$request->input("checkout");
      $roomtype=(int)$request->input("roomtype_id");
      $user_data=["name"=>$request->input("customer_name"),"email"=>$request->input("email"),"role_id"=>2];
      $user=User::firstOrCreate($user_data);


      $booked_rooms = DB::select('select b.room_id from (SELECT * FROM bookings where   
             (check_in >= "'.$checkin.'" and check_in < "'.$checkout.'")
          or (check_out >= "'.$checkin.'" and check_out < "'.$checkout.'")
          or (check_in < "'.$checkin.'" and check_out > "'.$checkout.'") ) as b where b.roomtype_id='.$roomtype.' ');
      
    $booked_rooms = json_decode(json_encode($booked_rooms), true);
      
    $rooms_tobook=Room::select('id')->where('roomtypes_id',$roomtype)->whereNotIn('id',$booked_rooms)->first();

      if(!empty($rooms_tobook))
      {
        $booking_data=["user_id"=>$user->id,"roomtype_id"=>$roomtype,"room_id"=>$rooms_tobook->id,"no_days"=>1,"status"=>1,"check_in"=>$checkin,"check_out"=>$checkout];
        $booked=Booking::firstOrCreate($booking_data);

        if(!empty($booked))
        {
          $dates=$this->generate_booking_date($booked->check_in,$booked->check_out);

          foreach ($dates as $key => $value) {

            $condition=BookingDetails::create(['booking_id'=>$booked->id,"booking_date"=>$dates[$key]]);
          }

          if($condition)
          {
            return redirect()->route('backend.booking.index');
          }


        }
      }
        
      

    }

    public function destroy(Reqest $request)
    {
      
    }

    public function getBookingDate(Request $request)
    {
        
        if($request->ajax())
        {
          // $encryptedValue=$request->input("_token");
          // $decrypted = Crypt::decrypt($encryptedValue);
          // dd($decrypted);

          $roomtype=$request->input("roomtype");
          
          $dates=array();
          $rooms=Room::where("roomtypes_id",$roomtype)->get();

          $booking_room=Booking::select("check_in","check_out")->whereIn("room_id",$rooms)->where("status",1)->orWhere("status",2)->get();
          
          foreach ($booking_room as $key => $value) {
            # code...
            $date=$this->generate_booking_date($value->check_in,$value->check_out);
            $dates=array_merge($dates,$date);
          }

          return response()->json($dates);
          exit();
        }

    }


}
