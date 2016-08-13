<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Legal;

use Validator;
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
        $path = public_path('saved_images/legal');

        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
        $image1_old = $request->input('image1_old');
        $image2_old = $request->input('image2_old');

        $rules = [
            'title'         => 'required',
            'mainTitle'     => 'required',
            'subTitle1'     => 'required',
            'subTitle2'     => 'required',
            'subContent1'   => 'required',
            'subContent2'   => 'required',
            'image1'        => 'mimes:png,jpg,jpeg',
            'image2'        => 'mimes:png,jpg,jpeg'
        ];

        $validator = Validator::make($request->all() , $rules);
        if($validator->fails()){
            // print_r($validator->messages());
            // exit;
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

            $legal->image1 = $image1FileName;

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
            $legal->image2 = $image2FileName;
        }

        $legal->title = $request->input('title');
        $legal->mainTitle = $request->input('mainTitle');
        $legal->subTitle1 = $request->input('subTitle1');
        $legal->subTitle2 = $request->input('subTitle2');
        $legal->subContent1 = $request->input('subContent1');
        $legal->subContent2 = $request->input('subContent2');
        $legal->save();

        flash('Successfully Update', 'success');

    	return redirect()->back();
    }
}
