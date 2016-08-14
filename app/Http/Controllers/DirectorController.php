<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\MessageBag;
use App\Directors;
use App\Board;
use Validator;
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
        $path = public_path('saved_images/directors');
        $image1 = $request->file('photo');

        $rules = [
            'photo'         => 'required|mimes:png,jpg,jpeg',
            'fullname'     => 'required',
            'role'     => 'required',
            'text'     => 'required',
        ];

        $validator = Validator::make($request->all() , $rules);
        if($validator->fails()){
            // print_r($validator->messages());
            // exit;
            flash('Oops, Something Went Wrong!', 'danger');
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        if($image1){
            $image1FileName = 'photo'.date('YmdHis').$image1->getClientOriginalName();
            $image1->move($path , $image1FileName);

            $director->photo = $image1FileName;
        }

        $director->fullname = $request->input('fullname');
        $director->role = $request->input('role');
        $director->text = $request->input('text');
        $director->board_id = 1;
        $director->save();
        flash('Successfully Updated', 'success');
        return redirect()->back();
    }

    public function edit($id){
        $director = Directors::find($id);

        return view('admin.pages.about.board.director.edit')->with('director' , $director);
    }

    public function update(Request $request){
        $director = Directors::find($request->input('id'));

        $path = public_path('saved_images/directors');
        $image1 = $request->file('photo');
        $image1_old = $request->input('photo_old');

        $rules = [
            'photo'         => 'mimes:png,jpg,jpeg',
            'fullname'     => 'required',
            'role'     => 'required',
            'text'     => 'required',
        ];

        $validator = Validator::make($request->all() , $rules);
        if($validator->fails()){
            flash('Oops, Something Went Wrong!', 'danger');
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        if($image1){
            $image1FileName = 'photo'.date('YmdHis').$image1->getClientOriginalName();
            $image1->move($path , $image1FileName);
            if($image1_old){
                $deletePath1 = $path.'/'.$image1_old;
                if(file_exists($deletePath1)){
                    unlink($deletePath1);
                }
            }

            $director->photo = $image1FileName;
        }

        $director->fullname = $request->input('fullname');
        $director->role = $request->input('role');
        $director->text = $request->input('text');
        $director->board_id = 1;
        $director->save();

        // $update = $director->update($request->all());
        flash('Successfully Updated', 'success');
        return redirect()->back();
                
        // if ($update instanceOf MessageBag) {
        //     flash('Oops, Something Went Wrong!', 'danger');
        //     return redirect()->back()->withInput()->withErrors($update);
        // }

    }

    public function delete($id){
        $director = Directors::find($id);
        $path = public_path('saved_images/directors');
        $image = $director->photo;
        if($image){
            $deletePath = $path.'/'.$image;
            if(file_exists($deletePath)){
                unlink($deletePath);
            }    
        }
        
        $directorDlt = Directors::destroy($id);
        flash('Successfully Deleted' , 'success');
        return redirect()->back();
    }
}
