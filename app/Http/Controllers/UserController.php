<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userLogin(Request $request) {

        $name = $request->input('username');
        $pass = $request->input('password');
                                                                  
        

        return view('login');
       
    }

    public function registerUser(Request $request) {

        $name = $request->input('username');
        $pass = $request->input('password');
                                                                  
        

        return view('register');
       
    }
}
