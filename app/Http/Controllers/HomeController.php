<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Home;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $home = Home::find($id);
        return view('admin.pages.home.index')->with('home', $home);
    }

    public function edit($id){
        $home = Home::find($id);
        return view('admin.pages.home.edit')->with('home', $home);
    }

    public function update(Request $request){
        
    }
}
