<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    
    public function handleLogin(Request $request)
    {
        $this->validate($request, User::$login_validation_rules);
        $data = $request->only('email','password');
        if(\Auth::attempt($data)){
           
            return redirect()->intended('home');
        }
        return back()->withInput()->withErrors(['email' => 'Username or Password is invalid!']);
        
    }
    
    public function logout()
    {
        \Auth::logout();
        return redirect() -> route('login');
    }
}
