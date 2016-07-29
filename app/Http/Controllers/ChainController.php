<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Chain;

class ChainController extends Controller
{
    public function edit(){
    	$chain = Chain::find(1);
    	return view('admin.pages.about.chain.edit')->with('chain' , $chain);
    }

    public function update(Request $request){
    	$chain = Chain::find(1);
    	$chain->update($request->all());

    	return redirect()->back();
    }
}
