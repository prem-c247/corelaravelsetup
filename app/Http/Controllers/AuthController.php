<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class AuthController extends Controller
{

    public function signup(Request $request){
        if(Auth::check()){
            return redirect()->intended('/dashboard');
        }
        return view('auth.signup');
    }

    public function login(Request $request){
        if(Auth::check()){
            return redirect()->intended('/dashboard');
        }
        return view('auth.login');
    }

    public function loginPost(LoginRequest $request){
        $validatedData = $request->validated();
        
        if (!Auth::attempt($request->only('email', 'password'))) {
            $data = array();
            $data['message'] = "Email or password are not correct.";
            return view('auth.login',['data'=>$data]);
            // Authentication passed
        }
        $userData = Auth::user();
        return redirect()->intended('/dashboard'); // Redirect to a protected page
        
    }

    
    
    public function dashboard(){
        return view('dashboard');
    }

    public function logout(){
        Auth::logout();
	    return redirect()->intended('/login');
    }
}
