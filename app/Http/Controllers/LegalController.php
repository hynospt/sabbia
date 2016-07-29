<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Legal;
class LegalController extends Controller
{
    public function index(){
    	$legal = Legal::find(1);

    	return view('admin.pages.about.legal.index');
    }

    public function edit(){
    	$legal = Legal::find(1);
    	return view('admin.pages.about.legal.edit')->with('legal', $legal);
    }

    public function update(Request $request){
    	$legal = Legal::find(1);

    	$allRequest = $request->all();

    	$legal->update($allRequest);

    	return redirect()->back();
    }
}
