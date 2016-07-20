<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Form;

// use App\Http\Controllers\AuthController;

class LoginController extends Controller
{
    public function index(){
    	return view('login');
    }
}
