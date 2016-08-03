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
        $path = public_path('saved_images/services');

        $create = $icon->create($request->all());

        $bgImage = $request->file('bgImage');
        $coverImage = $request->file('coverImage');
        if($bgImage){
            $bgImageFileName = 'bg'.date('YmdHis').$bgImage->getClientOriginalName();
            $bgImage->move($path,$bgImageFileName);

            $icon->bgImage = $bgImageFileName;
        }

        if($coverImage){
            $coverImageFileName = 'cover'.date('YmdHis').$coverImage->getClientOriginalName();
            $coverImage->move($path,$coverImageFileName);

            $icon->coverImage = $coverImageFileName;
        }
        ### MASIH KE UPLOAD ! IMG
        $icon->services_id = $request->input('services_id');
        $icon->tag = $request->input('tag');
        $icon->save();

        if (!$create instanceOf Directors) {
            flash('Oops, Something Went Wrong!', 'danger');
            // dd($create->toArray());
            return redirect()->back()->withInput()->withErrors($create);
        }

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
