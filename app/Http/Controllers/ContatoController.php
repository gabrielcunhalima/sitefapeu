<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContatoEmail;
use App\Mail\ReuniaoEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Contato;
use App\Models\Reuniao;
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

        Mail::to($setor->email)->send(new ContatoEmail($contato->nome, $contato->assunto, $contato->mensagem, $contato->email, $setor->setor));  
        
        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
    
    public function agendarReuniao(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'nullable|string|max:20',
            'cargo_instituicao' => 'required|string|max:255',
            'assunto' => 'required|string|max:255',
            'descricao' => 'required|string',
            'data_reuniao' => 'required|date|after_or_equal:today',
            'horario_reuniao' => 'required|string',
            'preferencia_contato' => 'required|in:email,telefone',
        ]);

        $reuniao = Reuniao::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'cargo_instituicao' => $request->input('cargo_instituicao'),
            'assunto' => $request->input('assunto'),
            'descricao' => $request->input('descricao'),
            'data_reuniao' => $request->input('data_reuniao'),
            'horario_reuniao' => $request->input('horario_reuniao'),
            'preferencia_contato' => $request->input('preferencia_contato'),
            'status' => 'pendente',
        ]);

        Mail::to('gabriel.lima@fapeu.org.br')->send(new ReuniaoEmail($reuniao));
        
        Mail::to($reuniao->email)->send(new ReuniaoEmail($reuniao, true));
        
        return redirect()->back()->with('success', 'Solicitação de reunião enviada com sucesso! Em breve entraremos em contato para confirmar o agendamento.');
    }
}