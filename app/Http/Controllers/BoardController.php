<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Board;
use App\Directors;
class BoardController extends Controller
{
    public function index($id){
    	$board = Board::find(1);
    	$directors = $board->directors;
    	foreach ($directors as $director){
    		var_dump($director->id);
    	}
    	exit;
    }
}
