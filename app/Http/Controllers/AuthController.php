<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Admins;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'usuario' => 'required|string',
            'senha' => 'required|string'
        ]);

        $admin = DB::table('admins')
            ->where('usuario', $credentials['usuario'])
            ->first();

        if ($admin && hash('sha256', $credentials['senha']) === $admin->senha) {
            // Login válido
            Session::put('admin_id', $admin->id);
            Session::put('admin_usuario', $admin->usuario);
            Session::put('is_logged_in', true);

            return redirect()->route('admin.menu');
        }

        return redirect()->route('admin.login')
            ->withErrors(['login' => 'Credenciais inválidas.'])
            ->withInput($request->only('usuario'));
    }

    public function logout(Request $request)
    {
        Session::forget('admin_id');
        Session::forget('admin_usuario');
        Session::forget('is_logged_in');
        
        return redirect()->route('homepage.home');
    }

    public function createAdmin(Request $request)
    {
        if (!Session::get('is_logged_in')) {
            return redirect()->route('admin.login');
        }

        if ($request->isMethod('POST')) {
            $validated = $request->validate([
                'usuario' => 'required|string|max:100',
                'senha' => 'required|string|min:8|max:100',
                'imagem' => 'nullable|string|max:255'
            ]);

            DB::table('admins')->insert([
                'usuario' => $validated['usuario'],
                'senha' => hash('sha256', $validated['senha']),
                'imagem' => $validated['imagem'] ?? null
            ]);

            return redirect()->route('admin.menu')->with('success', 'Administrador criado com sucesso!');
        }

        return view('admin.adicionaradmin');
    }
}