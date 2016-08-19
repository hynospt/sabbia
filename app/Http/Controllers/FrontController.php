<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Home;

use App\Board;
use App\Directors;

use App\Legal;

use App\Chain;

use App\Connect;

use App\Services;
use App\ServiceIcons as Item;

use App\PortfolioPage;
use App\Portfolios;


class FrontController extends Controller
{
    public function index_home(){
    	$home = Home::find(1);
    	return view('front.pages.home')->with('home' , $home);
    }

    public function index_about(){
    	$about = Board::find(1);
        $directors = Directors::all()->where('board_id', 1);

    	return view('front.pages.about')->with(['about' => $about , 'directors' => $directors]);
    }

    public function index_legal(){
    	$legal = Legal::find(1);
    	return view('front.pages.legal')->with('legal' , $legal);
    }

    public function index_chain(){
    	$chain = Chain::find(1);
    	return view('front.pages.chain')->with('chain', $chain);
    }

    public function index_connect(){
    	$connect = Connect::find(1);
    	return view('front.pages.connect')->with('connect', $connect);
    }
    public function index_services(){
        $services = Services::find(1);
        $items = Item::all();

        return view('front.pages.service')->with(['services' => $services , 'items' => $items]);
    }

    public function index_portfolio(){
        $portfolio = PortfolioPage::find(1);
        $items = Portfolios::all();

        return view('front.pages.portfolio')->with(['portfolio' => $portfolio , 'items'=>$items]);
    }
}
