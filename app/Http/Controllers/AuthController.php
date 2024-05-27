<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->intended('successsignin');
        }
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'Geçersiz e-posta veya şifre.',
        ]);
    }
}
