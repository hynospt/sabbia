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
        // foreach ($directors as $director){
        //     echo "<pre/>";
        //     print_r($director);
        // }
        $index = 1;
        return view('admin.pages.about.board.director.index')->with(['directors' => $directors , 'index' => $index]);
    }

    public function create(){
    	return view('admin.pages.about.board.director.create');
    }

    public function store(Request $request){
    	$director = new Directors();
        $create = $director->create($request->all());
        if (!$create instanceOf Directors) {
            flash('Oops, Something Went Wrong!', 'danger');
            // dd($create->toArray());
            return redirect()->back()->withInput()->withErrors($create->toArray());
        }
        dd($create);
        return \Redirect::to('/dashboard');        
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

    public function delete($id){
        $director = Directors::destroy($id);
        return redirect()->back();
    }
}
