<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Connect;

use Validator;

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
        $path = public_path('saved_images/connect');

        $bgimg = $request->file('bgImage');
        $bgimgold = $request->file('bgImg_old');
        $rules = [
            'bgImage' => 'required|mimes:png,jpg,jpeg',
            'content' => 'required',
            'title' => 'required',
        ];

        $validator = Validator::make($request->all() , $rules);
        if($validator->fails()){
            flash('Oops, Something Went Wrong!', 'danger');
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        if($bgimg){
            $bgimgFileName = 'bg'.date('YmdHis').$bgimg->getClientOriginalName();
            $bgimg->move($path, $bgimgFileName);

            if($bgimgold){
                $deleteBgImage_old = $path.'/'.$bgimgold;
                if(file_exists($deleteBgImage_old)){
                    unlink($deleteBgImage_old);
                }
            }

            $connect->bgImage = $bgimgFileName;
        }

        $connect->content = $request->input('content');
        $connect->title = $request->input('title');
        $connect->save();
    	return redirect()->back();
    }
}
