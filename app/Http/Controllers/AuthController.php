<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $r) {
        if (Auth::attempt($r->only(['email', 'password']))) {
            return response([
                'message' => 'Authenticated Successfully!',
                'token' => Auth::user()->createToken('token')->plainTextToken
            ], 200);
        } else {
            return response([
                'message' => 'Login Failed!'
            ], 400);
        }
    }
}
