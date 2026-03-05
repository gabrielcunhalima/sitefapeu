<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Licitacoes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\ItensCompra;
use App\Models\LicitacaoResultado;
use App\Models\LicitacaoAta;

class LicitacaoController extends Controller
{
    public function form(Request $request, $id = null)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        
            $titulo = $id ? 'Editar Licitação' : 'Nova Licitação';
            $dados = $id ? Licitacoes::findOrFail($id) : new Licitacoes();
            $itensCompra = [];

            if ($id) {
                $itensCompra = ItensCompra::where('id_licitacao', $id)->get()->toArray();

                $camposNaoCopiar = ['id', 'id_licitacao', 'created_at', 'updated_at'];

                foreach ([
                    LicitacaoResultado::where('id_licitacao', $id)->first(),
                    LicitacaoAta::where('id_licitacao', $id)->first(),
                ] as $modelo) {
                    if ($modelo) {
                        foreach ($modelo->toArray() as $key => $value) {
                            if (!in_array($key, $camposNaoCopiar)) {
                                $dados->$key = $value;
                            }
                        }
                    }
                }
            }

            return view('licitacoes.form', compact('dados', 'itensCompra', 'titulo'));
        }

    private function loginPncp()
    {
        $url = env('PNCP_URL');
        
        $loginResponse = Http::post($url . '/usuarios/login', [
            "login" => env('PNCP_LOGIN'),
            "senha" => env('PNCP_SENHA'),
        ]);

        $authHeader = $loginResponse->header('Authorization');
        return str_replace('Bearer ', '', $authHeader);
    }

    public function save(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $validated = $request->validate([
            'id_licitacao' => 'nullable|string',
            'numeroProcesso' => 'nullable|string',
            'orgao' => 'nullable|string',
            'orgao_site' => 'nullable|string|max:255',
            'ordem' => 'nullable|string',
            'projeto' => 'nullable|string',
            'licitacao' => 'nullable|file|mimes:pdf,doc,docx',
            'dataabertura' => 'nullable|date',
            'objetoCompra' => 'nullable|string',
            'ataabertura' => 'nullable|file|mimes:pdf,doc,docx',
            'resultado' => 'nullable|file|mimes:pdf,doc,docx',
            'datapublicacao' => 'nullable|date',

            'titulo_documento' => 'nullable|string',
            'ano' => 'nullable|string',
            'sequencial' => 'nullable|string',
            'tipo_documento_id' => 'nullable|string',
            'tipo_licitacao' => 'required|integer|in:1,2,3',
            'codigoUnidadeCompradora' => 'nullable|string',
            'modalidadeId' => 'nullable|string',
            'tipoInstrumentoConvocatorioId' => 'nullable|string',
            'modoDisputaId' => 'nullable|string',
            'numeroCompra' => 'nullable|string',
            'AnoCompra' => 'nullable|string',
            'srp' => 'nullable|boolean',
            'dataAberturaProposta' => 'nullable|date',
            'dataEncerramentoProposta' => 'nullable|date',
            'amparoLegalId' => 'nullable|string',

            // Itens Compra
            'itensCompra' => 'nullable|string', 
            'numeroItem' => 'nullable|numeric',
            'materialOuServico' => 'nullable|string|in:M,S',
            'inConteudoNacional' => 'nullable|boolean',
            'criterioJulgamentoId' => 'nullable|integer',
            'tipoBeneficioId' => 'nullable|integer',
            'incentivoProdutivoBasico' => 'nullable|boolean',
            'quantidade' => 'nullable|numeric',
            'descricao' => 'nullable|string',
            'unidadeMedida' => 'nullable|string',
            'orcamentoSigiloso' => 'nullable|boolean',
            'valorUnitarioEstimado' => 'nullable|numeric',
            'valorTotal' => 'nullable|numeric',
            'aplicabilidadeMargemPreferenciaNormal' => 'nullable|boolean',
            'aplicabilidadeMargemPreferenciaAdicional' => 'nullable|boolean',
            'percentualMargemPreferenciaNormal' => 'nullable|numeric|min:0|max:99.9999',
            'percentualMargemPreferenciaAdicional' => 'nullable|numeric|min:0|max:99.9999',
            'justificativaPresencial' => 'nullable|string',
        ]);

        $somenteSite = $request->boolean('somente_site');

        if ($validated['tipo_licitacao'] == 2) {
        
            $request->merge([
                'modoDisputaId' => '5',
                'modalidadeId' => '8',
                'srp' => '0',
                'tipoInstrumentoConvocatorioId' => '3',
                'amparoLegalId' => '18',
                'codigoUnidadeCompradora' => '42',
                'titulo_documento' => 'Documento de Dispensa',
                'tipo_documento_id' => '20',
            ]);
        }

        if ($validated['tipo_licitacao'] == 1 && $somenteSite) {

            $request->merge([
                'modoDisputaId' => '5',
                'modalidadeId' => '9',
                'srp' => '0',
                'tipoInstrumentoConvocatorioId' => '3',
                'amparoLegalId' => '18',
                'codigoUnidadeCompradora' => '42',
                'titulo_documento' => 'Documento de Inexigibilidade',
                'tipo_documento_id' => '20',
                'AnoCompra' => date('Y'),
                'numeroCompra' => $validated['ordem'] ?? '',
                'dataEncerramentoProposta' => $request->input('dataAberturaProposta'),
            ]);
        }
        $somenteSite = $request->boolean('somente_site');
        $itensCompraJson = json_decode($request->input('itensCompra'), true);

        if ($validated['tipo_licitacao'] == 1 && !$somenteSite) {
        if (empty($itensCompraJson) || !is_array($itensCompraJson)) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['itensCompra' => 'Adicione pelo menos um item à licitação.']);
        }
    }
        $explode = explode('/', $validated['numeroProcesso']);
        $ano = $explode[1];
        $sequencialcodigo = $explode[0];

        $arrayItens = [];
        foreach ($itensCompraJson ?? [] as $item) {
            $arrayItens[] = [
                'numeroItem' => $item['numeroItem'],
                'materialOuServico' => $item['materialOuServico'],
                'inConteudoNacional' => ($item['inConteudoNacional'] ?? '0') === '1',
                'criterioJulgamentoId' => (int)$item['criterioJulgamentoId'],
                'tipoBeneficioId' => (int)$item['tipoBeneficioId'],
                'incentivoProdutivoBasico' => $item['incentivoProdutivoBasico'] === '1',
                'quantidade' => (float)$item['quantidade'],
                'descricao' => $item['descricao'],
                'unidadeMedida' => $item['unidadeMedida'],
                'orcamentoSigiloso' => $item['orcamentoSigiloso'] === '1',
                'valorUnitarioEstimado' => (float)$item['valorUnitarioEstimado'],
                'valorTotal' => (float)$item['valorTotal'],
                'aplicabilidadeMargemPreferenciaNormal' => $item['aplicabilidadeMargemPreferenciaNormal'] === '1',
                'aplicabilidadeMargemPreferenciaAdicional' => $item['aplicabilidadeMargemPreferenciaAdicional'] === '1',
                'percentualMargemPreferenciaNormal' => $item['aplicabilidadeMargemPreferenciaNormal'] === '1' ? (float)$item['percentualMargemPreferenciaNormal'] : null,
                'percentualMargemPreferenciaAdicional' => $item['aplicabilidadeMargemPreferenciaAdicional'] === '1' ? (float)$item['percentualMargemPreferenciaAdicional'] : null,
                'justificativaPresencial' => $item['justificativaPresencial']
            ];
        }

        // PARA API
        $varToAPI = [
            'numeroProcesso' => $validated['numeroProcesso'],
            'cnpj' => str_replace(['-', '/', '.'], '', $validated['orgao']),
            'objetoCompra' => $validated['objetoCompra'],
            'dataPublicacaoPncp' => $validated['datapublicacao'],
            'Titulo-Documento' => $validated['titulo_documento'],
            'Tipo-Documento-Id' => $validated['tipo_documento_id'],
            'tipo_licitacao' => $validated['tipo_licitacao'],
            'codigoUnidadeCompradora' => '42',
            'modalidadeId' => $validated['modalidadeId'],
            'modoDisputaId' => $validated['modoDisputaId'],
            'numeroCompra' => $validated['numeroCompra'],
            'anoCompra' => $validated['AnoCompra'],
            'srp' => $request->input('srp') === '1' ? true : false,
            'tipoInstrumentoConvocatorioId' => $validated['tipoInstrumentoConvocatorioId'],
            'dataAberturaProposta' => $validated['dataAberturaProposta'] . 'T08:00:00',
            'dataEncerramentoProposta' => $validated['dataEncerramentoProposta'] . 'T08:00:00',
            'amparoLegalId' => $validated['amparoLegalId'],
            'itensCompra' => $arrayItens,
        ];

        $url = env('PNCP_URL');
        $token = $this->loginPncp();
        $varToAPIJson = json_encode($varToAPI);
        $sequencial = null;
        $mensagemPncp = '';


            if ($validated['tipo_licitacao'] == 1 && !$somenteSite && $request->hasFile('licitacao')) {
            $arquivo = $request->file('licitacao');
            
            $response = Http::withToken($token)
                ->withHeaders([
                    'cnpj' => $varToAPI['cnpj'],
                    'Titulo-Documento' => $validated['titulo_documento'],
                    'Tipo-Documento-Id' => $validated['tipo_documento_id'],
                ])
                ->attach('compra', $varToAPIJson, 'compra.json')
                ->attach('documento', file_get_contents($arquivo->getRealPath()), $arquivo->getClientOriginalName())
                ->post($url . "/orgaos/" . env('PNCP_CNPJ') . "/compras");

            if (!$response->successful()) {
                $status = $response->status();
                $body = $response->json();

                $mensagens = [
                    400 => 'Requisição inválida. Verifique os dados enviados.',
                    401 => 'Não autorizado. Verifique suas credenciais de acesso.',
                    403 => 'Acesso negado. Você não tem permissão para essa ação.',
                    404 => 'Recurso não encontrado. Verifique o número do processo.',
                    422 => 'Dados inválidos. Corrija os campos obrigatórios antes de salvar.',
                    500 => 'Erro interno no servidor. Tente novamente mais tarde.',
                ];

                $mensagemUsuario = $mensagens[$status] ?? 'Erro inesperado ao salvar a licitação.';

                if (is_array($body)) {
                    $detalhe = $body['mensagem'] ?? $body['erro'] ?? $body['message'] ?? null;
                    if ($detalhe) {
                        $mensagemUsuario .= ' Detalhe: ' . $detalhe;
                    }
                }

                Log::error('Erro ao enviar para PNCP', [
                    'status' => $status,
                    'response' => $body
                ]);

                return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors(['api' => $mensagemUsuario]);
            }
            $auxParts = $response->json();
            $auxParts = explode('/',$auxParts['compraUri']);
            $sequencial = $auxParts[9];
        }

        //SALVA NO BANCO
        $licitacao = Licitacoes::findOrCreate($request->id);

        $licitacao->fill($request->except([
            '_token',
            'id',
            'licitacao',
            'ataabertura',
            'contratoconvenio',
            'resultado',
            'itensCompra',
            'fontes_orcamentarias',
            'quantidadeHomologada',
            'valorUnitarioHomologado',
            'valorTotalHomologado',
            'percentualDesconto',
            'tipoPessoaId',
            'niFornecedor',
            'nomeRazaoSocialFornecedor',
            'porteFornecedorId',
            'naturezaJuridicaId',
            'codigoPais',
            'indicadorSubcontratacao',
            'ordemClassificacaoSrp',
            'dataResultado',
            'aplicacaoMargemPreferencia',
            'amparoLegalMargemPreferenciaId',
            'paisOrigemProdutoId',
            'aplicacaoBeneficioMeEpp',
            'aplicacaoCriterioDesempate',
            'amparoLegalCriterioDesempateId',
            'numeroAtaRegistroPreco',
            'anoAta',
            'dataAssinatura',
            'dataVigenciaInicio',
            'dataVigenciaFim',
        ]));

        foreach (['licitacao', 'ataabertura', 'contratoconvenio', 'resultado'] as $campo) {
            if ($request->hasFile($campo)) {
                $arquivo = $request->file($campo);
                $nomeFinal = $arquivo->hashName();
                $caminho = $arquivo->storeAs('licitacoes', $nomeFinal, 'public');
                $licitacao->$campo = $caminho;
            }
        }

        $licitacao->ano = $validated['AnoCompra'];
        $licitacao->numeroProcesso = $validated['numeroProcesso'];
        $licitacao->sequencial = $sequencial;
        
        $licitacao->save();


        if ($validated['tipo_licitacao'] == 1 && !$somenteSite) {
        if ($request->id) {
        ItensCompra::where('id_licitacao', $licitacao->id)->delete();
        }

        foreach ($itensCompraJson as $item) {
            ItensCompra::create([
                'id_licitacao' => $licitacao->id,
                'numeroItem' => $item['numeroItem'],
                'materialOuServico' => $item['materialOuServico'],
                'inConteudoNacional' => $item['inConteudoNacional'] === '1',
                'criterioJulgamentoId' => $item['criterioJulgamentoId'],
                'tipoBeneficioId' => $item['tipoBeneficioId'],
                'incentivoProdutivoBasico' => $item['incentivoProdutivoBasico'] === '1',
                'quantidade' => $item['quantidade'],
                'descricao' => $item['descricao'],
                'unidadeMedida' => $item['unidadeMedida'],
                'orcamentoSigiloso' => $item['orcamentoSigiloso'] === '1',
                'valorUnitarioEstimado' => $item['valorUnitarioEstimado'],
                'valorTotal' => $item['valorTotal'],
                'aplicabilidadeMargemPreferenciaNormal' => $item['aplicabilidadeMargemPreferenciaNormal'] === '1',
                'aplicabilidadeMargemPreferenciaAdicional' => $item['aplicabilidadeMargemPreferenciaAdicional'] === '1',
                'percentualMargemPreferenciaNormal' => $item['aplicabilidadeMargemPreferenciaNormal'] === '1' && $item['percentualMargemPreferenciaNormal'] > 0? (float)$item['percentualMargemPreferenciaNormal']: 0,
                'percentualMargemPreferenciaAdicional' => $item['aplicabilidadeMargemPreferenciaAdicional'] === '1' && $item['percentualMargemPreferenciaAdicional'] > 0 ? (float)$item['percentualMargemPreferenciaAdicional']: 0,
                'justificativaPresencial' => $item['justificativaPresencial']
            ]);
        }
    }

        $mensagemSucesso = 'Licitação salva com sucesso!';
        if ($sequencial) {
            $mensagemSucesso .= " Sequencial PNCP: {$sequencial}";
        }
        if ($mensagemPncp) {
            $mensagemSucesso .= " {$mensagemPncp}";
        }

        if ($request->filled('quantidadeHomologada') || $request->filled('niFornecedor')) {
            $dadosResultado = $request->only([
                'quantidadeHomologada', 'valorUnitarioHomologado', 'valorTotalHomologado',
                'percentualDesconto', 'tipoPessoaId', 'niFornecedor', 'nomeRazaoSocialFornecedor',
                'porteFornecedorId', 'naturezaJuridicaId', 'codigoPais', 'indicadorSubcontratacao',
                'ordemClassificacaoSrp', 'dataResultado', 'aplicacaoMargemPreferencia',
                'amparoLegalMargemPreferenciaId', 'paisOrigemProdutoId', 'aplicacaoBeneficioMeEpp',
                'aplicacaoCriterioDesempate', 'amparoLegalCriterioDesempateId'
            ]);
            
            $dadosResultado['id_licitacao'] = $licitacao->id;
            LicitacaoResultado::updateOrCreate(['id_licitacao' => $licitacao->id], $dadosResultado);
        }

        if ($request->filled('numeroAtaRegistroPreco') || $request->filled('dataAssinatura')) {
            $dadosAta = $request->only([
                'numeroAtaRegistroPreco', 'anoAta', 'dataAssinatura',
                'dataVigenciaInicio', 'dataVigenciaFim'
            ]);
            
            $dadosAta['id_licitacao'] = $licitacao->id;
            LicitacaoAta::updateOrCreate(['id_licitacao' => $licitacao->id], $dadosAta);
        }

        return redirect()->route('licitacoes.listar')->with('success', $mensagemSucesso);
    }

    public function listar(Request $request)
    {
        $query = Licitacoes::query();

        if ($request->filled('tipo_licitacao')) {
            $query->where('tipo_licitacao', $request->tipo_licitacao);
        }

        if ($request->filled('busca')) {
            $busca = $request->busca;
            $query->where(function ($q) use ($busca) {
                $q->where('numeroProcesso', 'like', "%{$busca}%")
                ->orWhere('numeroCompra', 'like', "%{$busca}%")
                ->orWhere('objetoCompra', 'like', "%{$busca}%")
                ->orWhere('projeto', 'like', "%{$busca}%")
                ->orWhere('orgao_site', 'like', "%{$busca}%");
            });
        }

        if ($request->filled('data_de')) {
            $query->where('datapublicacao', '>=', $request->data_de);
        }
        if ($request->filled('data_ate')) {
            $query->where('datapublicacao', '<=', $request->data_ate);
        }

        $licitacoes = $query->orderBy('dataabertura', 'desc')->paginate(15)->withQueryString();

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

    public function formEditarSite($id)
    {
        $dados = Licitacoes::findOrFail($id);
        $itensCompra = ItensCompra::where('id_licitacao', $id)->get();
        $titulo = 'Editar dados do site';
        
        return view('licitacoes.editar-site', compact('dados', 'itensCompra', 'titulo'));
    }

    public function salvarSite(Request $request)
    {
        $licitacao = Licitacoes::findOrFail($request->id);

        $licitacao->fill($request->only([
            'numeroProcesso', 'numeroCompra', 'orgao_site', 'projeto', 'ordem',
            'dataAberturaProposta', 'datapublicacao', 'objetoCompra', 'AnoCompra'
        ]));

        foreach (['licitacao', 'ataabertura', 'contratoconvenio', 'resultado'] as $campo) {
            if ($request->hasFile($campo)) {
                if ($licitacao->$campo) {
                    Storage::disk('public')->delete($licitacao->$campo);
                }
                $licitacao->$campo = $request->file($campo)->store('licitacoes', 'public');
            }
        }

        $licitacao->save();

        return redirect()
            ->route('licitacoes.editar-site', $licitacao->id)
            ->with('success', 'Dados atualizados com sucesso!');
    }

    public function manual()
    {
        $titulo = 'Manual do Sistema';
        return view('licitacoes.manual', compact('titulo'));
    }

    public function manualTecnico()
    {
        $titulo = 'Manual Técnico – Integração PNCP';
        return view('licitacoes.manual-tecnico', compact('titulo'));
    }
}