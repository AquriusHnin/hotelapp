<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Auth\AuthController@getlogin');
Route::post('/','Auth\AuthController@postlogin');
Route::get('auth/login','Auth\AuthController@getlogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::group(['prefix'=>"frontend"],function()
{	
	//get
	
	Route::get('gallery', function()
	{
		return View::make('frontend.gallery');
	});
	Route::get('contact', function()
	{
		return View::make('frontend.contact');
	});

	Route::get('services', function()
	{
		return View::make('frontend.services');
	});

	//resource


	Route::resource('rooms','Frontend\RoomsController');
	Route::resource('services','Frontend\BarserviceController');


	Route::get('contact',['as'=>"frontend.aboutController.create","uses"=>"Frontend\AboutController@create"]);

	Route::post('contact/store',['as'=>"frontend.aboutController.store","uses"=>"Frontend\AboutController@store"]);
	
	// index page

	Route::get('/',['as'=>"frontend.customerbooking.create","uses"=>"Frontend\CustomerBookingController@create"]);

	Route::post('customerbooking/store',['as'=>"frontend.customerbooking.store","uses"=>"Frontend\CustomerBookingController@store"]);

	Route::post('customerbooking/getBookingDate',['as'=>"frontend.customerbooking.getBookingDate","uses"=>"Frontend\CustomerBookingController@getBookingDate"]);

});





Route::group(['prefix'=>"backend",'middleware'=>['auth']],
	function()
	{
		// resources
		Route::resource('roomtype','Backend\RoomTypesController');
		Route::resource('account','Backend\AccountsController');
		
		Route::post('roomtype/{id}/edit',['as'=>"backend.roomtype.update","uses"=>"Backend\RoomTypesController@update"]);

		// get
		Route::get('/',['as'=>'backend.index','uses'=>'HomeController@index']);
		Route::get('rolespermission',['as'=>"backend.rolespermission","uses"=>"Backend\RolePermissionController@index"]);

		
		Route::get('booking',['as'=>"backend.booking.index","uses"=>"Backend\BookingController@index"]);
		Route::get('booking/create',['as'=>"backend.booking.create","uses"=>"Backend\BookingController@create"]);
		
		//post
		Route::post('booking/store',['as'=>"backend.booking.store","uses"=>"Backend\BookingController@store"]);
		Route::post('booking/getBookingDate',['as'=>"backend.booking.getBookingDate","uses"=>"Backend\BookingController@getBookingDate"]);
		Route::post('booking/getAjax',['as'=>"backend.booking.getAjax","uses"=>"Backend\BookingController@getAjax"]);
		//put


		//delete
		Route::delete('booking/destroy',['as'=>"backend.booking.destroy","uses"=>"Backend\BookingController@destroy"]);
	});