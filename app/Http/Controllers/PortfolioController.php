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
        $path = public_path('saved_images/portfolio');

        $bgimg = $request->file('bgImage');
        $bgimgold = $request->input('bgImage_old');

        $logo = $request->file('logo');
        $logoold = $request->input('logo_old');
 
        $rules = [
            'title' => 'required',
            'partners' => 'required',
            'bgImage' => 'mimes:png,jpg,jpeg,gif',
            'logo' => 'mimes:png,jpg,jpeg,gif',
            'lastRowTitle' => 'required'
        ];

        $validator = Validator::make($request->all() , $rules);
        if($validator->fails()){
            flash('Oops, Something Went Wrong!', 'danger');
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        if($bgimg){
            $bgimgFilename = 'bg'.date('YmdHis').$bgimg->getClientOriginalName();
            $bgimg->move($path,$bgimgFilename);
            if($bgimgold){
                $oldPath1 = $path.'/'.$bgimgold;
                if(file_exists($oldPath1)){
                    unlink($oldPath1);
                }
            }
            $portfolio->bgImage = $bgimgFilename;
        }

        if($logo){
            $logoFilename = 'logo'.date('YmdHis').$logo->getClientOriginalName();
            $logo->move($path, $logoFilename);
            if($logoold){
                $oldPath2 = $path.'/'.$logoold;
                if(file_exists($oldPath2)){
                    unlink($oldPath2);
                }
            }
            $portfolio->logo = $logoFilename;
        }

        $portfolio->partners = $request->input('partners');
        $portfolio->lastRowTitle = $request->input('lastRowTitle');
        $portfolio->title = $request->input('title');
        $portfolio->save();
        flash('Successfully Updated', 'success');
    	return redirect()->back();
    }

    public function item_edit($id){
    	$item = Item::find($id);
    	return view('admin.pages.portfolio.item.edit')->with('item' , $item);
    }

    public function item_update(Request $request){
    	$item = Item::find($request->input('id'));
        $path = public_path('saved_images/portfolio/item');

        $bgimg = $request->file('partnerBackgroundImage');
        $logo = $request->file('partnerLogo');
        $oldBg = $request->input('partnerBackgroundImage_old');
        $rules = [
            'partnerBackgroundImage' => 'mimes:png,jpg,jpeg,gif',
            'partnerLogo' => 'mimes:png,jpg,jpeg,gif',
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
        flash('Successfully Updated', 'success');

    	return redirect()->back();
    }

    public function item_create(){
    	return view('admin.pages.portfolio.item.create');
    }

    public function item_store(Request $request){
    	$item = new Item();
        $path = public_path('saved_images/portfolio/item');

        $bgimg = $request->file('partnerBackgroundImage');
        $logo = $request->file('partnerLogo');

        $rules = [
            'partnerBackgroundImage' => 'required|mimes:png,jpg,jpeg,gif',
            'partnerLogo' => 'required|mimes:png,jpg,jpeg,gif',
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

        flash('Successfully Created', 'success');

    	return redirect()->back();
    }

    public function item_delete($id){
        $item = Item::find($id);
        $logo = $item->logo;
        $bg = $item->bgImage;
        $path = public_path('saved_images/portfolio/item');

        if($logo){
            $delPath = $path.'/'.$logo;
            if(file_exists($delPath)){
                unlink($delPath);
            }
        }

        if($bg){
            $delPath = $path.'/'.$bg;
            if(file_exists($delPath)){
                unlink($delPath);
            }
        }

        $item = Item::destroy($id);
        flash('Successfully Deleted', 'success');
        return redirect()->back();
    }

    public function item_index(){
        $items = Item::all();
        $index = 1;
        return view('admin.pages.portfolio.item.index')->with(['items' => $items, 'index' => $index]);
    }
}
