<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Connect;

class ConnectController extends Controller
{
    public function index(){
    	$connect = Connect::find(1);
    	return view('admin.pages.connect.index')->with('connect', $connect);
    }

    public function edit(){
    	$connect = Connect::find(1);
    	return view('admin.pages.connect.edit')->with('connect', $connect);
    }

    public function update(Request $request){
    	$connect = Connect::find(1);

    	$connect->update($request->all());
    	return redirect()->back();
    }
}
