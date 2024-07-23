<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public function novo () {
        return view('admin.usuarios.novousuario');
    }

    public function cadastrar(UsuarioRequest $req) {

        $user = $req->all();

        $user['password'] = bcrypt($req->password);

        $user = User::firstOrcreate($user);

        return redirect()->route('admin.painel')->with('usuariook','');
    }
}
