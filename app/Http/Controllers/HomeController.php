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

        $home->headerRow1 = $request->input('headerRow1');
        $home->text1Row1 = $request->input('text1Row1');
        $home->text2Row1 = $request->input('text2Row1');
        $home->videoIcon = $request->input('videoIcon');
        $home->videoText = $request->input('videoText');
        $home->videoUrl = $request->input('videoUrl');
        $home->bgImageRow1 = $request->input('bgImageRow1');
        $home->productPrice = $request->input('productPrice');
        $home->productName = $request->input('productName');
        $home->unitType = $request->input('unitType');
        $home->text1Row2 = $request->input('text1Row2');
        $home->text2Row2 = $request->input('text2Row2');
        $home->bgImageRow2 = $request->input('bgImageRow2');
        $home->portfolioTag = $request->input('portfolioTag');
        $home->portfolioImage = $request->input('portfolioImage');
        $home->save();

        return redirect()->back();
    }
}
