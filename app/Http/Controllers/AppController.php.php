<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AppController.php extends Controller
{
    public function __construct()
    {
        $user=Auth::User();
        View::share('user_name', $user->name);
       

    }
}
