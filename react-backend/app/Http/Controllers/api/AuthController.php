<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Hash as HashAlias;

class AuthController extends Controller
{
    public function register(Request $request){
       $request->validate([
           'name' => 'required',
           'email' => 'required|email',
           'password' => 'required|confirmed',
       ]);

       $user = User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => HashAlias::make($request->password),
       ]);

       $token = $user->createToken('myToken')->plainTextToken;

       return response([
          'user' => $user,
           'token' => $token

       ], 201);
    }
}
