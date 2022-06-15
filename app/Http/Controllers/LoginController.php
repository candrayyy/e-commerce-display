<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\User;
use Auth;

class LoginController extends Controller
{
    public function login()
    {
        if(Auth::check()){
            return redirect()->back();
        } else{
            return view('login');
        }
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('dashboard');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('admin/login');
    }
}
