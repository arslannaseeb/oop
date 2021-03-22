<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function register(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $user = User::create($validatedData);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response(['user'=> $user, 'access_token'=> $accessToken ]);

    }

    public function login(){
        $login   = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if(!auth()->attempt($login)){
            return response(['message'=>'invalid enteries']);
        }

        $accessToken = $user->createToken('authToken')->accessToken;

        return response(['user'=> Auth()->user(), 'access_token'=> $accessToken ]);



    }

}
