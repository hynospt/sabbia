<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class CustomAuthController extends Controller
{	
	public function index(){
		return view('login1');
	}
    public function login(Request $request){
    	$username = $request->input('username');
    	$password = $request->input('password');

    	if (Auth::attempt(['username' => $username, 'password' => $password]))
    	{	
    		$loggedIn = $request->session()->put('key', 'value');
    		dd($loggedIn);
    		return redirect()->intended('dashboard');
    	}else{
    		$message = "gagal login";
    		return redirect('auth')->with('errMsg', $message);
    	}
    }

    public function logout(){
    	Auth::logout();
    	return redirect('auth');
    }

    public function check(){
    	dd(Auth::check());
    }
}
