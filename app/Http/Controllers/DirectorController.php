<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Directors;
use App\Board;
class DirectorController extends Controller
{
    public function index(){
        $board = Board::find(1);
        $directors = $board->directors;
        foreach ($directors as $director){
            var_dump($director->id);
        }
        exit;
    }

    public function create(){
    	return view('admin.pages.about.board.director.create');
    }

    public function store(Request $request){
    	$director = new Directors();

    	$director->fullname = $request->input('fullname');
    	$director->role = $request->input('role');
    	$director->text = $request->input('text');
    	$director->boardId = 1;
    	$director->save();
    }

    public function edit($id){
        $director = Directors::find($id);

        return view('admin.pages.about.board.director.edit')->with('director' , $director);
    }

    public function update(Request $request){

        $director = Directors::find($request->input('id'));

        $director->update($request->all());

        return redirect()->back();
    }
}
