<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function staff_login(){
    	return view('auth.login');
    }

    public function login_check(Request $request){
    	$this->validate($request, [
    		'username' => 'required|min:3|max:12',
    		'password' => 'required|min:3|max:12'
    	]);

    	if(Auth::attempt(['username'=> $request['username'], 'password'=> $request['password']])){
    		return redirect()->route('staff');
    	}else{
    		return redirect()->back()->with('invalid', 'Wrong Username/Password Combination');
    	}

    }

    public function register(){
        return view('auth.register');
    }

    public function checkRegister(Request $request){
        return $request;
    }
}
