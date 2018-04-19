<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin()
    {
    	return view('login');
    }

    public function postLogin(Request $request)
    {
    	if (Auth::attempt(['email'=> $request->email, 'password' => $request->password])) {
    		return redirect()->route('welcome');
    	}

    	
    }
}
