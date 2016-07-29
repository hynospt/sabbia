<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Board;

use App\Directors;
class AboutController extends Controller
{
    public function index($id){
    	$board = Board::find(1);

    	$directors = $board->directors;
    	// foreach ($directors as $director){
    	// 	var_dump($director->id);
    	// }

    	return view('admin.pages.about.board.index')->with(['directors' => $directors , 'board' => $board]);
    }

    public function edit($id){
    	$board = Board::find($id);
    	$directors = $board->directors;
    	return view('admin.pages.about.board.edit')->with(['directors' => $directors , 'board' => $board]);
    }

    public function update(Request $request){
    	$allRequest = $request->all();
    	$board = Board::find(1);
    	$board->type = 'Page';
    	$board->update($allRequest);

    	return redirect()->back();
    }
}