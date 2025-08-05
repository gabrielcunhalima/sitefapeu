<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CaptacaoEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Captacao;
use App\Models\Setor;

class CaptacaoController extends Controller
{
    public function salvarCaptacao(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'OrgaoDeOrigem' => 'required|string|max:555',
            'FuncaoQueOcupa' => 'required|string|max:555',
            'CPF' => 'nullable|string|max:255',
            'CentroAcademico' => 'required|string|max:255',
            'DepartamentoLaboratorio' => 'required|string|max:255',
            'Telefone' => 'required|string|max:255',
            'AreaInteresse' => 'required|string|max:555',
        ]);

        // $captacao = Captacao::create([
        //     'nome' => $request->nome,
        //     'Email' => $request->Email,
        //     'OrgaoDeOrigem' => $request->OrgaoDeOrigem,
        //     'FuncaoQueOcupa' => $request->FuncaoQueOcupa,
        //     'CPF' => $request->CPF,
        //     'CentroAcademico' => $request->CentroAcademico,
        //     'DepartamentoLaboratorio' => $request->DepartamentoLaboratorio,
        //     'Telefone' => $request->Telefone,
        //     'AreaInteresse' => $request->AreaInteresse,
        // ]);

        $setorEmail = 'captacao.projetos@fapeu.org.br';

        Mail::to($setorEmail)->send(new CaptacaoEmail(
            $request->nome,
            $request->Email,
            $request->OrgaoDeOrigem,
            $request->FuncaoQueOcupa,
            $request->CPF,
            $request->CentroAcademico,
            $request->DepartamentoLaboratorio,
            $request->Telefone,
            $request->AreaInteresse
        ));

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
