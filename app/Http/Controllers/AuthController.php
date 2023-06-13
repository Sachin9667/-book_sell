<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function register(){
        return view('auth/register');
    }


    public function registerSave(Request $request){

        Validator::make($request->all(),[
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required|confirmed',
        ])->validate();

        // return view('auth/register');
    }
}
