<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Home;

class FrontController extends Controller
{
    public function index_home(){
    	$home = Home::find(1);
    	return view('front.pages.home')->with('home' , $home);
    }
}
