<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    //
    public function loginAdmin(){
        return view('login');
    }

    public function postloginAdmin(Request $request){
        $remember = $request->has('remember-me') ? true : false;
        if(auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $remember)){
            return view('home');
        }
    }
}
