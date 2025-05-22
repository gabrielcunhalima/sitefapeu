<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Licitacoes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LicitacaoController extends Controller
{
    public function form(Request $request, $id = null)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $dados = $id ? Licitacoes::findOrFail($id) : new Licitacoes();
        return view('licitacoes.form', compact('dados'));
    }

    public function save(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $validated = $request->validate([
            'ordem' => 'nullable|string',
            'processo' => 'nullable|string',
            'orgao' => 'required|string',
            'projeto' => 'nullable|string',
            'licitacao' => 'nullable|file|mimes:pdf,doc,docx',
            'dataabertura' => 'nullable|date',
            'objeto' => 'nullable|string',
            'ataabertura' => 'nullable|file|mimes:pdf,doc,docx',
            'contratoconvenio' => 'nullable|file|mimes:pdf,doc,docx',
            'resultado' => 'nullable|file|mimes:pdf,doc,docx',
            'datapublicacao' => 'nullable|date',
            'tipo_licitacao' => 'required|integer|in:1,2,3',
        ]);

        $licitacao = Licitacoes::findOrCreate($request->id);

        $licitacao->fill($request->except(['_token', 'id', 'licitacao', 'ataabertura', 'contratoconvenio', 'resultado']));

        foreach (['licitacao', 'ataabertura', 'contratoconvenio', 'resultado'] as $campo) {
            if ($request->hasFile($campo)) {
                $arquivo = $request->file($campo);
                $caminho = $arquivo->store('public/licitacoes');
                $licitacao->$campo = str_replace('public/', 'storage/', $caminho);
            }
        }

        $licitacao->save();

        return redirect()->route('licitacoes.listar')->with('success', 'Licitação salva com sucesso!');
    }

    public function listar()
    {
        $licitacoes = Licitacoes::orderBy('dataabertura', 'desc')->get();
        return view('licitacoes.listar', compact('licitacoes'));
    }

    public function excluir($id)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $licitacao = Licitacoes::findOrFail($id);
        $licitacao->delete();

        return redirect()->route('licitacoes.listar')->with('success', 'Licitação excluída com sucesso!');
    }

    public function listarDispensa()
    {
        $titulo = 'Dispensa de Licitação';
        $licitacoes = Licitacoes::where('tipo_licitacao', 2)
            ->orderBy('dataabertura', 'desc')
            ->get();
        return view('fornecedor.dispensa', compact('licitacoes', 'titulo'));
    }

    public function listarInexigibilidade()
    {
        $titulo = 'Inexigibilidade de Licitação';
        $licitacoes = Licitacoes::where('tipo_licitacao', 3)
            ->orderBy('dataabertura', 'desc')
            ->get();
        return view('fornecedor.inexigibilidade', compact('licitacoes', 'titulo'));
    }

    public function listarSelecaoPublica()
    {
        $titulo = 'Seleção Pública';
        $licitacoes = Licitacoes::where('tipo_licitacao', 1)
            ->orderBy('dataabertura', 'desc')
            ->get();
        return view('fornecedor.selecoespublicas', compact('licitacoes', 'titulo'));
    }
}
