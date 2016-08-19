<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Home;

use App\Board;

class FrontController extends Controller
{
    public function index_home(){
    	$home = Home::find(1);
    	return view('front.pages.home')->with('home' , $home);
    }

    public function index_about(){
    	$about = Board::find(1);
    	print_r($about);
    	exit;
    	return view('front.pages.about')->with('about', $about);
    }

}
