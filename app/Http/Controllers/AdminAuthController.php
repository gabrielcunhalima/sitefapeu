<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admins;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string',
            'password' => 'required|string',
        ]);
    
        if (Auth::guard('admins')->attempt([
            'usuario' => $request->usuario,
            'password' => $request->password
        ])) {
            return redirect()->route('admin.dashboard');
        } else {
            return back()->withErrors(['usuario' => 'Usuário ou senha inválidos.']);
        }
    }
    

    public function logout()
    {
        Auth::guard('admins')->logout();
        return redirect()->route('admin.login');
    }
}
