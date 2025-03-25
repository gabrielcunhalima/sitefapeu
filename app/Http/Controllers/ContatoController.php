<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContatoEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Contato;
use App\Models\Setor;

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

        $contato = Contato::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'assunto' => $request->input('assunto'),
            'id_setor' => $request->input('id_setor'),
            'mensagem' => $request->input('mensagem'),
        ]);

        $setor = Setor::find($request->input('id_setor'));

        Mail::to($setor->email)->send(new ContatoEmail($contato->nome, $contato->assunto, $contato->mensagem, $contato->email,  $setor->setor));  
        
        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
