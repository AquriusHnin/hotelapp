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


Route::group(['prefix'=>"backend",'middleware'=>['auth']],
function()
{
		// resources
		Route::resource('roomtype','Backend\RoomTypesController');
		Route::resource('account','Backend\AccountsController');
		

		// get
		Route::get('/',['as'=>'backend.index','uses'=>'HomeController@index']);
		Route::get('rolespermission',['as'=>"backend.rolespermission","uses"=>"Backend\RolePermissionController@index"]);

		//post


		//put
});