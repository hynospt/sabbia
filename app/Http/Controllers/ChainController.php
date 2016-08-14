<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Chain;

use Validator;

class ChainController extends Controller
{
    public function edit(){
    	$chain = Chain::find(1);
    	return view('admin.pages.about.chain.edit')->with('chain' , $chain);
    }

    public function update(Request $request){
    	$chain = Chain::find(1);
    	$path = public_path('saved_images/chain');
    	$image1 = $request->file('image1');
        $image2 = $request->file('image2');
        $image1_old = $request->input('image1_old');
        $image2_old = $request->input('image2_old');

        $rules = [
            'title1'         => 'required',
            'content1'     => 'required',
            'title2'     => 'required',
            'content2'     => 'required',
            'image1'        => 'mimes:png,jpg,jpeg',
            'image2'        => 'mimes:png,jpg,jpeg'
        ];

        $validator = Validator::make($request->all() , $rules);
        if($validator->fails()){
            flash('Oops, Something Went Wrong!', 'danger');
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        if($image1){
            $image1FileName = '1_img'.date('YmdHis').$image1->getClientOriginalName();
            $image1->move($path , $image1FileName);

            if($image1_old){
                $deletePath1 = $path.'/'.$image1_old;
                if(file_exists($deletePath1)){
                    unlink($deletePath1);
                }
            }

            $chain->image1 = $image1FileName;

        }

        if($image2){
            $image2FileName = '2_img'.date('YmdHis').$image2->getClientOriginalName();
            $image2->move($path, $image2FileName);
            if($image2_old){
                $deletePath2 = $path.'/'.$image2_old;
                if(file_exists($deletePath2)){
                    unlink($deletePath2);
                }   
            }
            $chain->image2 = $image2FileName;
        }

        $chain->title1 = $request->input('title1');
        $chain->title2 = $request->input('title2');
        $chain->content1 = $request->input('content1');
        $chain->content2 = $request->input('content2');
        $chain->save();

        flash('Sucessfully updated', 'success');
    	return redirect()->back();
    }
}
