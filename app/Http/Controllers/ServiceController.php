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
    	return view('admin.pages.service.icon.index')->with(['icons' => $serviceIcon , 'index'=>1]);
    }

    public function icon_update(Request $request){
    	$serviceIcon = Icon::find($request->input('id'));

        $path = public_path('saved_images/services');
        $bgImage = $request->file('bgImage');
        $coverImage = $request->file('coverImage');
        $bgImage_old = $request->input('bgImage_old');
        $coverImage_old = $request->input('coverImage_old');

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
            $bgImageFileName = 'bg'.date('YmdHis').$bgImage->getClientOriginalName();
            $bgImage->move($path, $bgImageFileName);

            if($bgImage_old){
                $deleteBgImage_old = $path.'/'.$bgImage_old;
                if(file_exists($deleteBgImage_old)){
                    unlink($deleteBgImage_old);
                }
            }

            $serviceIcon->bgImage = $bgImageFileName;
        }


        if($coverImage){
            $coverImageFileName = 'cover'.date('YmdHis').$coverImage->getClientOriginalName();
            $coverImage->move($path, $coverImageFileName);
            if($coverImage_old){
                $deleteCoverImagePath = $path.'/'.$coverImage_old;
                if(file_exists($deleteCoverImagePath)){
                    unlink($deleteCoverImagePath);
                }
            }
            $serviceIcon->coverImage = $coverImageFileName;
        }
        $serviceIcon->tag = $request->input('tag');
    	$serviceIcon->save();
    	return redirect()->back();
    }
}
