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

  public function create()
  {
    return view('backend.roomtypes.register');
  }

  public function show($id)
  {
        //
  }

  public function edit($id)
  {

    $roomtypes = Role::findOrFail($id);

    return view('backend.roomtypes.edit', compact('roomtypes'));
  }


  public function store(RoomTypesRequest $request)
  {

    
    //check the post method if ($request->isMethod('post')) {


    $imageName = $request->file('image')->getClientOriginalName();
    $data_create=["name"=>$request->input('name'),"features"=>$request->input('features'),"bed_no"=>(int)$request->input('bed_no'),"count"=>(int)$request->input('count'),"price"=>(double)$request->input('price'),"image"=>$imageName];
    
    $path = base_path() . '/public/img/frontendrooms/';
    // chmod
    $request->file('image')->move($path , $imageName);
    

    if($this->roomtype->create($data_create))
    {
      return redirect()->route('backend.roomtype.index');
    }

    // end of method
  }


  public function update(RoomTypesRequest $request, $id)
  {
    $roomtypes = Role::findOrFail($id);

    $roomtypes->update($request->all());

    
    return redirect()->route('backend.roomtype.index');
  }

  public function destroy($id)
  {
    $roomtypes = Role::findOrFail($id);

    $roomtypes->delete();

    return redirect()->route('backend.roomtype.index');

    
  }

}
