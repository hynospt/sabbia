<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Home;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $home = Home::find($id);
        return view('admin.pages.home.index')->with('home', $home);
    }

    public function edit($id){
        $home = Home::find($id);
        return view('admin.pages.home.edit')->with('home', $home);
    }

    public function update(Request $request){
        $home = Home::find(1);

        $path = public_path('saved_images/home');
        $videoIcon = $request->file('videoIcon');
        $oldVideoIcon = $request->input('oldVideoIcon');

        if($videoIcon){
            $videoIconExtension = $videoIcon->getClientOriginalExtension();
            $videoIconFileName = 'vicon'.date('YmdHis').$videoIcon->getClientOriginalName();
            $videoIcon->move($path, $videoIconFileName);
            if($oldVideoIcon){
                $deleteVideoIconPath = $path.'/'.$oldVideoIcon;
                if(file_exists($deleteVideoIconPath)){
                    unlink($deleteVideoIconPath);
                }
            }
            $home->videoIcon = $videoIconFileName;
        }

        $bgImageRow1 = $request->file('bgImageRow1');
        $oldImgBgRow1 = $request->input('oldImgBgRow1');
        if($bgImageRow1){
            $bgImageRow1FileName = 'bg1'.date('YmdHis').$bgImageRow1->getClientOriginalName();
            $bgImageRow1->move($path, $bgImageRow1FileName);
            if($oldImgBgRow1){
                $deleteImgBgRow1Path = $path.'/'.$oldImgBgRow1;
                if(file_exists($deleteImgBgRow1Path)){
                    unlink($deleteImgBgRow1Path);
                }
            }
            $home->bgImageRow1 = $bgImageRow1FileName;
        }

        $bgImageRow2 = $request->file('bgImageRow2');
        $oldImgBgRow2 = $request->input('oldImgBgRow2');
        if($bgImageRow2){
            $bgImageRow2FileName = 'bg2'.date('YmdHis').$bgImageRow2->getClientOriginalName();
            $bgImageRow2->move($path, $bgImageRow2FileName);
            if($oldImgBgRow2){
                $deleteImgBgRow2Path = $path.'/'.$oldImgBgRow2;
                if(file_exists($deleteImgBgRow2Path)){
                    unlink($deleteImgBgRow2Path);
                }
            }
            $home->bgImageRow2 = $bgImageRow2FileName;
        }
        $home->headerRow1 = $request->input('headerRow1');
        $home->text1Row1 = $request->input('text1Row1');
        $home->text2Row1 = $request->input('text2Row1');
        $home->videoText = $request->input('videoText');
        $home->videoUrl = $request->input('videoUrl');
        $home->productPrice = $request->input('productPrice');
        $home->productName = $request->input('productName');
        $home->unitType = $request->input('unitType');
        $home->text1Row2 = $request->input('text1Row2');
        $home->text2Row2 = $request->input('text2Row2');
        $home->portfolioTag = $request->input('portfolioTag');
        $home->portfolioImage = $request->input('portfolioImage');
        $home->save();

        flash('Succesfully Updated', 'success');
        return redirect()->back();
    }
}
