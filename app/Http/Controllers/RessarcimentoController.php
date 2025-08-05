<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SolicitacaoRessarcimento;
use App\Models\Instituicao;
use Illuminate\Support\Facades\Mail;
use App\Mail\SolicitacaoRessarcimentoEmail;

class RessarcimentoController extends Controller
{
    public function index()
    {
        $instituicoes = Instituicao::all();
        return view('projetos.calculoressarcimento', compact('instituicoes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome_projeto' => 'required|string|max:255',
            'nome_coordenador' => 'required|string|max:255',
            'vigencia_meses' => 'required|integer|min:1',
            'nome_financiador' => 'required|string|max:255',
            'num_parcelas' => 'required|integer|min:1',
            'planilha_orcamentaria' => 'required|file|max:20480',
            'nome_solicitante' => 'required|string|max:255',
            'contato' => 'required|string|max:255',
            'instituicao_id' => 'required|exists:instituicoes,id',
        ]);

        if ($request->hasFile('planilha_orcamentaria')) {
            $file = $request->file('planilha_orcamentaria');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('planilhas_orcamentarias', $fileName, 'public');
            $validated['planilha_orcamentaria'] = $filePath;
        }

        $solicitacao = SolicitacaoRessarcimento::create($validated);

        try {
            $email = 'captacao.projetos@fapeu.org.br';
            Mail::to($email)->send(new SolicitacaoRessarcimentoEmail($solicitacao));
        } catch (\Exception $e) {
            \Log::error('Erro ao enviar e-mail: ' . $e->getMessage());
        }

        return redirect()->route('projetos.calculoressarcimento')
            ->with('success', 'Sua solicitação de cálculo foi enviada com sucesso. Nossa equipe entrará em contato em breve.');
    }
}