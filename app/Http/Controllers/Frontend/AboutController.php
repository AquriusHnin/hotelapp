<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class AboutController extends Controller
{
	// public function index()
	// {
	// 	dd('hello');
	// }

	public function create()

	{	

		return view('frontend.contact');
	}

	// public function store(ContactFormRequest $request)
	// {

	// 	return redirect()->route('contact')->with('message', 'Thanks for contacting us!');

	// }
}
