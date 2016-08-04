<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Services;

use App\ServiceIcons as Icon;

use Validator;

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
        $path = public_path('saved_images/services');
        $bgImage = $request->file('bgImage');
        $coverImage = $request->file('coverImage');


        $rules = [
            'bgImage' => 'required|mimes:png,jpg,jpeg',
            'coverImage' => 'required|mimes:png,jpg,jpeg',
            'tag' => 'required',
        ];

        $validator = Validator::make($request->all() , $rules);
        if($validator->fails()){
            flash('Oops, Something Went Wrong!', 'danger');
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        if($bgImage){
            $bgImageExtension = $bgImage->getClientOriginalExtension();
            $bgImageFileName = 'bg'.date('YmdHis').$bgImage->getClientOriginalName();
            $bgImage->move($path,$bgImageFileName);

            $icon->bgImage = $bgImageFileName;
        }

        if($coverImage){
            $coverImageExtension = $coverImage->getClientOriginalExtension();
            $coverImageFileName = 'cover'.date('YmdHis').$coverImage->getClientOriginalName();
            $coverImage->move($path,$coverImageFileName);

            $icon->coverImage = $coverImageFileName;
        }

        $icon->services_id = 1;

        $icon->tag = $request->input('tag');

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

    public function icon_index(){
    	$serviceIcon = Icon::all();
    	return view('admin.pages.service.icon.index')->with('icon' , $serviceIcon);
    }

    public function icon_update(Request $request){
    	$serviceIcon = Icon::find($request->input('id'));
    	$serviceIcon->update($request->all());
    	return redirect()->back();
    }
}
