<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class LoginController extends Controller
{
    private function renderView($view, $imagem, $titulo, $dados = [])
    {
        return view($view, compact('imagem', 'titulo', 'dados',));
    }

    public function login() {
       return $this->renderView('admin.loginadm', 'loginadm.png', 'Painel Administrativo');
    }

    public function loginPost(Request $request) {
        
        $request->validate([
            'usuario' => 'required|string',
            'senha' => 'required|string',
            'cf-turnstile-response' => ['required', Rule::turnstile()],
        ], [
            'cf-turnstile-response.required' => 'Por favor, complete a verificação de segurança.',
            'cf-turnstile-response.turnstile' => 'Falha na verificação de segurança. Tente novamente.',
        ]);
     
        $credentials = [
            'name' => $request->usuario,
            'password' => $request->senha,
        ];
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.menu');
        }
        
        return redirect()->route('admin.login')->with('error','Usuário não autenticado!');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function createUsuario()
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }
        return $this->renderView('admin.adicionarusuario', 'loginadm.png', 'Criar Usuário');
    }

    public function storeUsuario(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'cf-turnstile-response' => ['required', Rule::turnstile()],
        ], [
            'email.unique' => 'Esse email já está cadastrado!',
            'name.required' => 'Preencha o nome!',
            'password.min' => 'Digite uma senha de 8 caracteres',
            'cf-turnstile-response.required' => 'Por favor, complete a verificação de segurança.',
            'cf-turnstile-response.turnstile' => 'Falha na verificação de segurança. Tente novamente.',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('admin.createusuario')->with('success', 'Usuário criado com sucesso!');
    }
}