<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function salvarContato(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'assunto' => 'required|string|max:255',
            'id_setor' => 'required|int',
            'mensagem' => 'required|string',
        ]);

        Contato::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'assunto' => $request->input('assunto'),
            'id_setor' => $request->input('id_setor'),
            'mensagem' => $request->input('mensagem'),
        ]);
        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
