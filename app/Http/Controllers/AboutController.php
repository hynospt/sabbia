<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Board;

use App\Directors;

use Validator;

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
        $board = Board::find(1);
        $board->type = 'Page';

        $path = public_path('saved_images/about');

        $background = $request->file('mainBgImage');
        $oldBg = $request->input('mainBgImage_old');
        $logo = $request->file('mainLogo');
        $logo_old = $request->file('mainLogo_old');
        $philosopy = $request->file('philosophyImg');
        $philosopy_old = $request->file('philosophyImg_old');

        $rules = [
            'mainTag' => 'required',
            'mainBgImage' => 'mimes:jpg,png,jpeg',
            'mainLogo' => 'mimes:jpg,png,jpeg',
            'titleRow2' => 'required',
            'titleRow3' => 'required',
            'contentRow3' => 'required',
            'videoUrl1' => 'required',
            'videoUrl2' => 'required',
            'videoCaption1' => 'required',
            'videoCaption2' => 'required',
            'text2Row2' => 'required',
            'philosophyImg' => 'mimes:jpg,png,jpeg',
            'philosophyTitle' => 'required',
            'philosophyContent' => 'required',
        ]; 

        $validator = Validator::make($request->all() , $rules);
        if($validator->fails()){
            flash('Oops, Something Went Wrong!', 'danger');
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }


        if($background){
            $backgroundFilename = 'bg'.date('YmdHis').$background->getClientOriginalName();
            $background->move($path , $backgroundFilename);

            if($oldBg){
                $deleteBg = $path.'/'.$oldBg;
                if(file_exists($deleteBg)){
                    unlink($deleteBg);
                }
            }

            $board->mainBgImage = $backgroundFilename;
        }

        if($logo){
            $logoFilename = 'logo'.date('YmdHis').$logo->getClientOriginalName();
            $logo->move($path , $logoFilename);

            if($logo_old){
                $logoDelete = $path.'/'.$logo_old;
                if(file_exists($logoDelete)){
                    unlink($logoDelete);
                }
            }

            $board->mainLogo = $logoFilename;
        }

        if($philosopy){
            $philosopyFilename = 'philosopy'.date('YmdHis').$philosopy->getClientOriginalName();
            $philosopy->move($path , $philosopyFilename);

            if($philosopy_old){
                $philosopyDelete = $path.'/'.$philosopy_old;
                if(file_exists($philosopyDelete)){
                    unlink($philosopyDelete);
                }
            }

            $board->philosophyImg = $philosopyFilename;
        }

        $board->mainTag = $request->input('mainTag');
        $board->titleRow2 = $request->input('titleRow2');
        $board->titleRow3 = $request->input('titleRow3');
        $board->contentRow3 = $request->input('contentRow3');
        $board->videoUrl1 = $request->input('videoUrl1');
        $board->videoUrl2 = $request->input('videoUrl2');
        $board->videoCaption1 = $request->input('videoCaption1');
        $board->videoCaption2 = $request->input('videoCaption2');
        $board->text2Row2 = $request->input('text2Row2');
        $board->philosophyTitle = $request->input('philosophyTitle');
        $board->philosophyContent = $request->input('philosophyContent');
        $board->save();
        flash('Sucessfully Updated', 'success');
    	return redirect()->back();
    }
}