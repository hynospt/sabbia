<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PortfolioPage as Portfolio;
use App\Portfolios as Item;
use Validator;

class PortfolioController extends Controller
{
    public function index(){

    }

    public function edit(){
    	$portfolio = Portfolio::find(1);

    	return view('admin.pages.portfolio.edit')->with('portfolio' , $portfolio);
    }

    public function update(Request $request){
    	$portfolio = Portfolio::find(1);
    	$portfolio->update($request->all());
    	return redirect()->back();
    }

    public function item_edit($id){
    	$item = Item::find($id);
    	return view('admin.pages.portfolio.item.edit')->with('item' , $item);
    }

    public function item_update(Request $request){
    	$item = Item::find($request->input('id'));
        $path = public_path('saved_images/portfolios');

        $bgimg = $request->file('partnerBackgroundImage');
        $logo = $request->file('partnerLogo');
        $oldBg = $request->input('partnerBackgroundImage_old');
        $rules = [
            'partnerBackgroundImage' => 'required|mimes:png,jpg,jpeg',
            'partnerLogo' => 'required|mimes:png,jpg,jpeg',
            'partnerContent' => 'required',
            'partnerCompanyName' => 'required'
        ];

        $validator = Validator::make($request->all() , $rules);
        if($validator->fails()){
            flash('Oops, Something Went Wrong!', 'danger');
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        if($bgimg){
            $bgimgFilename = 'bg'.date('YmdHis').$bgimg->getClientOriginalName();
            $bgimg->move($path,$bgimgFilename);
            if($oldBg){
                $oldPath1 = $path.'/'.$oldBg;
                if(file_exists($oldPath1)){
                    unlink($oldPath1);
                }
            }
            $item->partnerBackgroundImage = $bgimgFilename;
        }

        if($logo){
            $logoFilename = 'logo'.date('YmdHis').$logo->getClientOriginalName();
            $logo->move($path, $logoFilename);
            if($request->input('partnerLogo_old')){
                $oldPath2 = $path.'/'.$request->input('partnerLogo_old');
                if(file_exists($oldPath2)){
                    unlink($oldPath2);
                }
            }
            $item->partnerLogo = $logoFilename;
        }
        $item->partnerContent = $request->input('partnerContent');
        $item->partnerCompanyName = $request->input('partnerCompanyName');

    	$item->save();
    	return redirect()->back();
    }

    public function item_create(){
    	return view('admin.pages.portfolio.item.create');
    }

    public function item_store(Request $request){
    	$item = new Item();
        $path = public_path('saved_images/portfolios');

        $bgimg = $request->file('partnerBackgroundImage');
        $logo = $request->file('partnerLogo');

        $rules = [
            'partnerBackgroundImage' => 'required|mimes:png,jpg,jpeg',
            'partnerLogo' => 'required|mimes:png,jpg,jpeg',
            'partnerContent' => 'required',
            'partnerCompanyName' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            flash('Oops, Something Went Wrong!', 'danger');
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        if($bgimg){
            $bgimgFilename = 'bg'.date('YmdHis').$bgimg->getClientOriginalName();
            $bgimg->move($path,$bgimgFilename);

            $item->partnerBackgroundImage = $bgimgFilename;
        }

        if($logo){
            $logoFilename = 'logo'.date('YmdHis').$logo->getClientOriginalName();
            $logo->move($path, $logoFilename);

            $item->partnerLogo = $logoFilename;
        }

    	$item->pageId = 1;
    	$item->partnerContent = $request->input('partnerContent');
    	$item->partnerCompanyName = $request->input('partnerCompanyName');

    	$item->save();

    	return redirect()->back();
    }

    public function item_delete($id){
        $item = Item::destroy($id);
        return redirect()->back();
    }

    public function item_index(){
        $items = Item::all();
        $index = 1;
        return view('admin.pages.portfolio.item.index')->with(['items' => $items, 'index' => $index]);
    }
}
