<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PortfolioPage as Portfolio;
use App\Portfolios as Item;

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
    	$item->update($request->all());
    	return redirect()->back();
    }

    public function item_create(){
    	return view('admin.pages.portfolio.item.create');
    }

    public function item_store(Request $request){
    	$item = new Item();
    	$item->pageId = 1;
    	$item->partnerLogo = $request->input('partnerLogo');
    	$item->partnerCompanyName = $request->input('partnerCompanyName');
    	$item->partnerContent = $request->input('partnerContent');
    	$item->partnerBackgroundImage = $request->input('partnerBackgroundImage');

    	$item->save();

    	return redirect()->back();
    }
}
