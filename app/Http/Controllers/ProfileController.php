<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use Validator;

class ProfileController extends Controller
{
    public function edit($id){
    	$user = Auth::user($id);
    	return view('admin.pages.profile.edit')->with('user', $user);
    }

    public function update(Request $request){

    	$user = Auth::user($request->input('id'));
    	$path = public_path('saved_images/user');

    	$photo = $request->file('photo');
    	$oldphoto = $request->input('old_photo');

    	$rules = [
            'name'         => 'required',
            'email'     => 'required',
            'photo'		=> 'mimes:jpg,jpeg,png'
        ];

        $validator = Validator::make($request->all() , $rules);
        if($validator->fails()){
            flash('Oops, Something Went Wrong!', 'danger');
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        if($photo){
        	$photoFilename = $user->username.date('YmdHis').$photo->getClientOriginalName();
        	$photo->move($path, $photoFilename);

        	if($oldphoto){
        		$deletePath1 = $path.'/'.$oldphoto;
                if(file_exists($deletePath1)){
                    unlink($deletePath1);
                }
        	}
        	$user->photo = $photoFilename;
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

    	flash('Successfully Updated' , 'success');
    	return redirect()->back();
    }

    public function update_password(Request $request){
    	$user = Auth::user($request->input('id'));
    	$rules = [
            'password'         => 'required'
        ];

        $validator = Validator::make($request->all() , $rules);
        if($validator->fails()){
            flash('Oops, Something Went Wrong!', 'danger');
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $user->password = bcrypt($request->input('password'));
        $user->save();
        flash('Successfully Updated', 'success');
        return redirect()->back();
    }
}
