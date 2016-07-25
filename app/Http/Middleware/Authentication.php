<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthController;

class Authentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */

    public function handle($request, Closure $next, $guard = null)
    {   

        // $user = Auth::user();
        // dd(Auth::guard($guard)->check());
        // dd($user);
        // dd(Auth::guard($guard)->check());
        
        $authController = new AuthController();
        

        dd($authController);

        if (Auth::guard($guard)->check()) {
            return redirect('/login');
        }

        return $next($request);
    }
}
