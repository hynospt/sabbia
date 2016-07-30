<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Services;

use App\ServiceIcons as Icon;

class ServiceController extends Controller
{
    public function index(){
    	$service = Services::find(1);
    	$icons = $service->serviceIcons;
    	
    	return view('admin.pages.service.index')->with(['service' => $service , 'icons' => $icons]);
    }

    public function edit(){
    	$service = Services::find(1);

    	return view('admin.pages.service.edit')->with('service',$service);
    }

    public function update(Request $request){
    	$service = Services::find(1);
    	$service->update($request->all());
    	return redirect()->back();
    }

    public function store(Request $request){
    	$icon = new Icon();
    	$icon->serviceId = 1;
    	$icon->bgImage = $request->input('bgImage');
    	$icon->coverImage = $request->input('coverImage');
    	$icon->save();

    	return redirect()->back();
    }

    public function create(){
    	return view('admin.pages.service.icon.create');
    }

    public function icon_edit($id){
    	$serviceIcon = Icon::find($id);
    	return view('admin.pages.service.icon.edit')->with('icon' , $serviceIcon);
    }

    public function icon_index($id){
    	$serviceIcon = Icon::find($id);
    	return view('admin.pages.service.icon.index')->with('icon' , $serviceIcon);
    }

    public function icon_update(Request $request){
    	$serviceIcon = Icon::find($request->input('id'));
    	$serviceIcon->update($request->all());
    	return redirect()->back();
    }
}
