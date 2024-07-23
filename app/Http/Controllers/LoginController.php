<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view('forms/login');
    }

    public function loginPost(Request $request) {
        $credetials = [
            'cpf' => $request->cpf,
            'password' => $request->password,
            ];
        if (Auth::attempt($credetials)) {
            $request->session()->regenerate();
            return redirect('/admin');
        }
        
        return redirect()->route('login')->with('error','');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('index');
    }
}
