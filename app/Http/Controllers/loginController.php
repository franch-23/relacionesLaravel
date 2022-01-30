<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email'=>['required'],
            'password'=> ['required'],
            ]);

        if (Auth::check()){
            return 'ya estas loguedado';
        }
        if(Auth::attempt($credentials)){

            return Auth::user()->toJson();
        }
        return 'algo falla ';
    }

}
