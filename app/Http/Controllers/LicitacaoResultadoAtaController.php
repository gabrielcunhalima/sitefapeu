<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Licitacoes;
use App\Models\LicitacaoResultado;
use App\Models\LicitacaoAta;
use App\Models\LicitacaoAtaDocumento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\ItensCompra;

class LicitacaoResultadoAtaController extends Controller
{
    public function form($id)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $titulo = 'Resultado e Ata - Licitação';
        $licitacao = Licitacoes::findOrFail($id);
        

        $itensCompra = ItensCompra::where('id_licitacao', $id)->get();
        $resultados = LicitacaoResultado::where('id_licitacao', $id)->get();

        $camposNaoCopiar = ['id', 'id_licitacao', 'created_at', 'updated_at'];

        foreach ([$itensCompra->first(), $resultados->first()] as $modelo) {
            if ($modelo) {
                foreach ($modelo->toArray() as $key => $value) {
                    if (!in_array($key, $camposNaoCopiar)) {
                        $licitacao->$key = $value;
                    }
                }
            }
        }

        $resultado = $resultados->first();

        $atas = LicitacaoAta::where('id_licitacao', $id)
            ->orderBy('created_at', 'desc')
            ->paginate(5, ['*'], 'ata_page');

        $documentos = LicitacaoAtaDocumento::whereHas('ata', function($q) use ($id) {
            $q->where('id_licitacao', $id);
        })
        ->with('ata')
        ->orderBy('created_at', 'desc')
        ->paginate(5, ['*'], 'doc_page');

    return view('licitacoes.resultado-ata-form', compact('licitacao', 'titulo', 'itensCompra', 'resultados', 'resultado', 'atas', 'documentos'));
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



    // ========== RESULTADO ==========
    public function salvarResultado(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $validated = $request->validate([
            'id_licitacao' => 'required|exists:licitacoes,id',
            'numeroItem' => 'required|numeric',
            'quantidadeHomologada' => 'nullable|numeric',
            'valorUnitarioHomologado' => 'nullable|numeric',
            'valorTotalHomologado' => 'nullable|numeric',
            'percentualDesconto' => 'nullable|string',
            'tipoPessoaId' => 'nullable|string',
            'niFornecedor' => 'nullable|string',
            'nomeRazaoSocialFornecedor' => 'nullable|string',
            'porteFornecedorId' => 'nullable|numeric',
            'naturezaJuridicaId' => 'nullable|numeric',
            'codigoPais' => 'nullable|string',
            'indicadorSubcontratacao' => 'nullable|boolean',
            'ordemClassificacaoSrp' => 'nullable|numeric',
            'dataResultado' => 'nullable|date',
            'aplicacaoMargemPreferencia' => 'nullable|boolean',
            'amparoLegalMargemPreferenciaId' => 'nullable|string',
            'paisOrigemProdutoId' => 'nullable|string',
            'aplicacaoBeneficioMeEpp' => 'nullable|boolean',
            'aplicacaoCriterioDesempate' => 'nullable|boolean',
            'amparoLegalCriterioDesempateId' => 'nullable|numeric',
            'resultado' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
        ]);

        $licitacao = Licitacoes::findOrFail($validated['id_licitacao']);

        $varToAPI = [
            'quantidadeHomologada' => $validated['quantidadeHomologada'],
            'valorUnitarioHomologado' => $validated['valorUnitarioHomologado'],
            'valorTotalHomologado' => $validated['valorTotalHomologado'],
            'percentualDesconto' => $validated['percentualDesconto'],
            'tipoPessoaId' => $validated['tipoPessoaId'],
            'niFornecedor' => $validated['niFornecedor'],
            'nomeRazaoSocialFornecedor' => $validated['nomeRazaoSocialFornecedor'],
            'porteFornecedorId' => $validated['porteFornecedorId'],
            'naturezaJuridicaId' => $validated['naturezaJuridicaId'],
            'codigoPais' => $validated['codigoPais'],
            'indicadorSubcontratacao' => $request->input('indicadorSubcontratacao') === '1',
            'ordemClassificacaoSrp' => $validated['ordemClassificacaoSrp'],
            'dataResultado' => $validated['dataResultado'],
            'aplicacaoMargemPreferencia' => $request->input('aplicacaoMargemPreferencia') === '1',
            'amparoLegalMargemPreferenciaId' => $validated['amparoLegalMargemPreferenciaId'] ?? null,
            'paisOrigemProdutoId' => $validated['paisOrigemProdutoId'],
            'aplicacaoBeneficioMeEpp' => $request->input('aplicacaoBeneficioMeEpp') === '1',
            'aplicacaoCriterioDesempate' => $request->input('aplicacaoCriterioDesempate') === '1',
            'amparoLegalCriterioDesempateId' => $validated['amparoLegalCriterioDesempateId'] ?? null
        ];

     // ====== SALVA NO BANCO ========

        $dadosResultado = $request->only([
            'numeroItem', 'quantidadeHomologada', 'valorUnitarioHomologado', 
            'valorTotalHomologado', 'percentualDesconto', 'tipoPessoaId', 
            'niFornecedor', 'nomeRazaoSocialFornecedor', 'porteFornecedorId', 
            'naturezaJuridicaId', 'codigoPais', 'indicadorSubcontratacao',
            'ordemClassificacaoSrp', 'dataResultado', 'aplicacaoMargemPreferencia',
            'amparoLegalMargemPreferenciaId', 'paisOrigemProdutoId', 
            'aplicacaoBeneficioMeEpp', 'aplicacaoCriterioDesempate', 
            'amparoLegalCriterioDesempateId'
        ]);
        
        $dadosResultado['id_licitacao'] = $licitacao->id;
        
        LicitacaoResultado::updateOrCreate(['id_licitacao' => $licitacao->id,'numeroItem' => $validated['numeroItem']], 
        $dadosResultado
    );


        if ($request->hasFile('resultado')) {
            try {
                $arquivo = $request->file('resultado');
                $nomeFinal = $arquivo->hashName();
                $caminho = $arquivo->storeAs('licitacoes/resultados', $nomeFinal, 'public');
                
                if (!$caminho) {
                    throw new \Exception('Falha ao armazenar o arquivo de resultado');
                }
                
                $licitacao->resultado = $caminho;
                $licitacao->save();
            } catch (\Exception $e) {
                Log::error('Erro ao fazer upload do resultado', [
                    'error' => $e->getMessage(),
                    'licitacao_id' => $licitacao->id
                ]);
                
                return redirect()
                    ->back()
                    ->withErrors(['resultado' => 'Falha ao fazer upload do arquivo: ' . $e->getMessage()]);
            }
        }

        // ENVIAR P/ PNCP
        $mensagemSucesso = 'Resultado salvo com sucesso!';
        if ($licitacao->sequencial && $licitacao->ano && !$licitacao->somente_site) {
            try {
                $cnpj = str_replace(['-', '/', '.'], '', $licitacao->orgao);
                $token = $this->loginPncp();
                $url = env('PNCP_URL');
                $response = Http::withToken($token)
                    ->withHeaders(['cnpj' => $cnpj])
                    ->post("$url/orgaos/{$cnpj}/compras/{$licitacao->ano}/{$licitacao->sequencial}/itens/{$validated['numeroItem']}/resultados", $varToAPI);

                if (!$response->successful()) {
                    $status = $response->status();
                    $body = $response->json();

                    $mensagens = [
                        400 => 'Requisição inválida. Verifique os dados do resultado.',
                        401 => 'Não autorizado. Verifique suas credenciais de acesso.',
                        403 => 'Acesso negado. Você não tem permissão para essa ação.',
                        404 => 'Recurso não encontrado. Verifique o sequencial ou número do item.',
                        422 => 'Dados inválidos. Corrija os campos obrigatórios do resultado.',
                        500 => 'Erro interno no servidor. Tente novamente mais tarde.',
                    ];

                    $mensagemErro = $mensagens[$status] ?? 'Erro inesperado ao enviar resultado.';

                    if (is_array($body)) {
                        $detalhe = $body['mensagem'] ?? $body['erro'] ?? $body['message'] ?? null;
                        if ($detalhe) {
                            $mensagemErro .= ' Detalhe: ' . $detalhe;
                        }
                    }

                    Log::error('Erro ao enviar resultado para PNCP', [
                        'status' => $status,
                        'response' => $body,
                        'licitacao_id' => $licitacao->id
                    ]);

                    return redirect()
                        ->route('licitacoes.resultado-ata.form', $licitacao->id)
                        ->with('warning', 'Resultado salvo localmente, mas houve erro ao enviar para o PNCP: ' . $mensagemErro);
                }

                $mensagemSucesso .= ' Enviado para o PNCP com sucesso!';
                
            } catch (\Exception $e) {
                Log::error('Erro ao enviar resultado', [
                    'error' => $e->getMessage(),
                    'licitacao_id' => $licitacao->id
                ]);

                return redirect()
                    ->route('licitacoes.resultado-ata.form', $licitacao->id)
                    ->with('warning', 'Resultado salvo localmente, mas houve erro ao enviar para o PNCP: ' . $e->getMessage());
            }
        }

        return redirect()
            ->route('licitacoes.resultado-ata.form', $licitacao->id)
            ->with('success', $mensagemSucesso);
    }



    // ========== ATA ==========
    public function salvarAta(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $validated = $request->validate([
            'id_licitacao' => 'required|exists:licitacoes,id',
            'numeroAtaRegistroPreco' => 'required|string',
            'anoAta' => 'required|string',
            'dataAssinatura' => 'required|date',
            'dataVigenciaInicio' => 'required|date',
            'dataVigenciaFim' => 'required|date',
            'ataabertura' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
        ]);

        $licitacao = Licitacoes::findOrFail($validated['id_licitacao']);

        $varToAPI = [
            'numeroAtaRegistroPreco' => $validated['numeroAtaRegistroPreco'],
            'anoAta' => (int) $validated['anoAta'],
            'dataAssinatura' => $validated['dataAssinatura'],
            'dataVigenciaInicio' => $validated['dataVigenciaInicio'],
            'dataVigenciaFim' => $validated['dataVigenciaFim']
        ];

   
        $dadosAta = $request->only([
            'numeroAtaRegistroPreco', 'anoAta', 'dataAssinatura',
            'dataVigenciaInicio', 'dataVigenciaFim'
        ]);
        $dadosAta['id_licitacao'] = $licitacao->id;

        $ata = LicitacaoAta::create($dadosAta);

        if ($request->hasFile('ataabertura')) {
            try {
                $arquivo = $request->file('ataabertura');
                
                if (!$arquivo->isValid()) {
                    throw new \Exception('Arquivo inválido ou corrompido');
                }
                
                $nomeFinal = $arquivo->hashName();
                $caminho = $arquivo->storeAs('licitacoes/atas', $nomeFinal, 'public');
                
                if (!$caminho) {
                    throw new \Exception('Falha ao armazenar o arquivo da ata');
                }
                
                if (!Storage::disk('public')->exists($caminho)) {
                    throw new \Exception('Arquivo não foi salvo corretamente no armazenamento');
                }
                
                $licitacao->ataabertura = $caminho;
                $licitacao->save();
                
            } catch (\Exception $e) {
                Log::error('Erro ao fazer upload da ata', [
                    'error' => $e->getMessage(),
                    'licitacao_id' => $licitacao->id,
                    'file_size' => $arquivo->getSize() ?? 'unknown',
                    'file_mime' => $arquivo->getMimeType() ?? 'unknown'
                ]);
                
                $ata->delete();
                
                return redirect()
                    ->back()
                    ->withErrors(['ataabertura' => 'Falha ao fazer upload do arquivo: ' . $e->getMessage()])
                    ->withInput();
            }
        }

        // ENVIA P/ PNCP
        $mensagemSucesso = 'Ata criada com sucesso!';
        $sequencialAta = null;

        if ($licitacao->sequencial && $licitacao->ano && !$licitacao->somente_site) {
            try {
                $cnpj = str_replace(['-', '/', '.'], '', $licitacao->orgao);
                $token = $this->loginPncp();
                $url = env('PNCP_URL');

                $response = Http::withToken($token)
                ->withHeaders(['cnpj' => $cnpj])
                ->post("$url/orgaos/{$cnpj}/compras/{$licitacao->AnoCompra}/{$licitacao->sequencial}/atas", $varToAPI);

                if (!$response->successful()) {
                    $status = $response->status();
                    $body = $response->json();

                    $mensagens = [
                        400 => 'Requisição inválida. Verifique os dados da ata.',
                        401 => 'Não autorizado. Verifique suas credenciais de acesso.',
                        403 => 'Acesso negado. Você não tem permissão para essa ação.',
                        404 => 'Recurso não encontrado. Verifique o ano e sequencial da licitação.',
                        422 => 'Dados inválidos. Corrija os campos obrigatórios da ata.',
                        500 => 'Erro interno no servidor. Tente novamente mais tarde.',
                    ];

                    $mensagemErro = $mensagens[$status] ?? 'Erro inesperado ao enviar ata.';

                    if (is_array($body)) {
                        $detalhe = $body['mensagem'] ?? $body['erro'] ?? $body['message'] ?? null;
                        if ($detalhe) {
                            $mensagemErro .= ' Detalhe: ' . $detalhe;
                        }
                    }

                    Log::error('Erro ao enviar ata para PNCP', [
                        'status' => $status,
                        'response' => $body,
                        'licitacao_id' => $licitacao->id
                    ]);

                    return redirect()
                        ->route('licitacoes.resultado-ata.form', $licitacao->id)
                        ->with('warning', 'Ata salva localmente, mas houve erro ao enviar para o PNCP: ' . $mensagemErro);
                }

                $responseData = $response->json();
                
                if (isset($responseData['ataUri'])) {
                    $auxParts = explode('/', $responseData['ataUri']);
                    $sequencialAta = end($auxParts);
                }
                
                if (!$sequencialAta) {
                    $location = $response->header('Location');
                    if ($location) {
                        $locationParts = explode('/', $location); 
                        $sequencialAta = end($locationParts);
                    }
                }
                
                Log::info('Resposta da API ao enviar Ata', [
                    'status' => $response->status(),
                    'location' => $response->header('Location'),
                    'response_body' => $responseData,
                    'sequencialAta_extraido' => $sequencialAta
                ]);

                if ($sequencialAta) {
                    $ata->sequencialAta = $sequencialAta;
                    $ata->save();
                    $mensagemSucesso .= " Enviada para o PNCP! Sequencial: {$sequencialAta}";
                    session()->flash('ata_enviada', true);
                }
                
            } catch (\Exception $e) {
                Log::error('Erro ao enviar ata', [
                    'error' => $e->getMessage(),
                    'licitacao_id' => $licitacao->id
                ]);

                return redirect()
                    ->route('licitacoes.resultado-ata.form', $licitacao->id)
                    ->with('warning', 'Ata salva localmente, mas houve erro ao enviar para o PNCP: ' . $e->getMessage());
            }
        }

        return redirect()
            ->route('licitacoes.resultado-ata.form', $licitacao->id)
            ->with('success', $mensagemSucesso);
    }



    // ========== DOCUMENTO DA ATA ==========
    public function enviarDocumento(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $validated = $request->validate([
            'id_licitacao_ata' => 'required|exists:licitacao_atas,id',
            'tipoDocumentoId' => 'required|string',
            'tituloDocumento' => 'required|string|max:50',
            'documento_ata' => 'required|file|mimes:pdf|max:10240',
        ]);

        $ata = LicitacaoAta::findOrFail($validated['id_licitacao_ata']);
        $licitacao = $ata->licitacao;

        if (!$licitacao->sequencial || !$licitacao->ano || !$ata->sequencialAta) {
            return redirect()
                ->back()
                ->withErrors(['api' => 'Dados incompletos. Certifique-se de que a ata possui sequencial.']);
        }

        try {
            $arquivo = $request->file('documento_ata');
            
            if (!$arquivo->isValid()) {
                throw new \Exception('Arquivo inválido ou corrompido');
            }
            
            $nomeFinal = $arquivo->hashName();
            $caminho = $arquivo->storeAs('licitacoes/atas/documentos', $nomeFinal, 'public');
            
            if (!$caminho) {
                throw new \Exception('Falha ao armazenar o arquivo do documento');
            }
            
            if (!Storage::disk('public')->exists($caminho)) {
                throw new \Exception('Arquivo não foi salvo corretamente no armazenamento');
            }

            $documento = LicitacaoAtaDocumento::create([
                'id_licitacao_ata' => $ata->id,
                'tipoDocumentoId' => $validated['tipoDocumentoId'],
                'tituloDocumento' => $validated['tituloDocumento'],
                'arquivo_local' => $caminho,
                'enviado_pncp' => false
            ]);

        
            $cnpj = str_replace(['-', '/', '.'], '', $licitacao->orgao);
            $token = $this->loginPncp();
            $url = env('PNCP_URL');

            $response = Http::withToken($token)
                ->withHeaders([
                    'cnpj' => $cnpj,
                    'Tipo-Documento' =>(int)$validated['tipoDocumentoId'],
                    'Titulo-Documento' => $validated['tituloDocumento'],
                ])
                ->attach('arquivo', file_get_contents($arquivo->getRealPath()), $arquivo->getClientOriginalName())
                ->post("$url/orgaos/{$cnpj}/compras/{$licitacao->ano}/{$licitacao->sequencial}/atas/{$ata->sequencialAta}/arquivos");

            if (!$response->successful()) {
                $status = $response->status();
                $body = $response->json();

                $mensagens = [
                    400 => 'Requisição inválida. Verifique os dados enviados.',
                    401 => 'Não autorizado. Verifique suas credenciais de acesso.',
                    403 => 'Acesso negado. Você não tem permissão para essa ação.',
                    404 => 'Recurso não encontrado. Verifique o sequencial da ata.',
                    422 => 'Dados inválidos. Verifique o tipo de documento e título.',
                    500 => 'Erro interno no servidor. Tente novamente mais tarde.',
                ];

                $mensagemErro = $mensagens[$status] ?? 'Erro inesperado ao enviar documento da ata.';

                if (is_array($body)) {
                    $detalhe = $body['mensagem'] ?? $body['erro'] ?? $body['message'] ?? null;
                    if ($detalhe) {
                        $mensagemErro .= ' Detalhe: ' . $detalhe;
                    }
                }

                Log::error('Erro ao enviar documento da ata para PNCP', [
                    'status' => $status,
                    'response' => $body,
                    'licitacao_id' => $licitacao->id
                ]);

                return redirect()
                    ->back()
                    ->withErrors(['api' => $mensagemErro]);
            }

           
            $documento->enviado_pncp = true;
            $documento->data_envio_pncp = now();
            
            $responseData = $response->json();
            if (isset($responseData['sequencialDocumento'])) {
                $documento->sequencialDocumento = $responseData['sequencialDocumento'];
            }
            
            $documento->save();

            return redirect()
                ->route('licitacoes.resultado-ata.form', $licitacao->id)
                ->with('success', 'Documento da ata enviado para o PNCP com sucesso!');

        } catch (\Exception $e) {
            Log::error('Erro ao enviar documento da ata', [
                'error' => $e->getMessage(),
                'licitacao_id' => $licitacao->id ?? null
            ]);

            return redirect()
                ->back()
                ->withErrors(['api' => 'Erro ao enviar documento: ' . $e->getMessage()])
                ->withInput();
        }
    }
    

    public function excluirAta(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $validated = $request->validate([
            'justificativa' => 'required|string|max:255'
        ]);

        try {
            $ata = LicitacaoAta::findOrFail($id);
            
 
            if (!$ata->licitacao) {
                Log::error('Ata sem licitacao associada', ['ata_id' => $ata->id]);
                return redirect()
                    ->back()
                    ->withErrors(['api' => 'Erro: Esta ata não possui licitação associada.']);
            }

            $licitacao = $ata->licitacao;

           
            Log::info('Ata excluída localmente', [
                'ata_id' => $ata->id,
                'numeroAta' => $ata->numeroAtaRegistroPreco,
                'sequencialAta' => $ata->sequencialAta,
                'justificativa' => $validated['justificativa'],
                'usuario_id' => Auth::id()
            ]);

   
            $ata->delete();

            return redirect()
                ->route('licitacoes.resultado-ata.form', $licitacao->id)
                ->with('success', 'Ata excluída com sucesso do sistema local!');

        } catch (\Exception $e) {
            Log::error('Erro ao excluir ata localmente', [
                'error' => $e->getMessage(),
                'ata_id' => $id ?? null
            ]);

            return redirect()
                ->back()
                ->withErrors(['api' => 'Erro ao excluir ata: ' . $e->getMessage()]);
        }
    }

 
    public function excluirDocumento(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $validated = $request->validate([
            'justificativa' => 'required|string|max:255'
        ]);

        try {

            $documento = LicitacaoAtaDocumento::with('ata.licitacao')->findOrFail($id);
   
            if (!$documento->ata) {
                Log::error('Documento sem ata associada', ['documento_id' => $documento->id]);
                return redirect()
                    ->back()
                    ->withErrors(['api' => 'Erro: Este documento não possui ata associada.']);
            }

            $ata = $documento->ata;

            if (!$ata->licitacao) {
                Log::error('Ata sem licitacao associada', ['ata_id' => $ata->id]);
                return redirect()
                    ->back()
                    ->withErrors(['api' => 'Erro: A ata associada não possui licitação.']);
            }

            $licitacao = $ata->licitacao;

     
            Log::info('Documento excluído localmente', [
                'documento_id' => $documento->id,
                'tituloDocumento' => $documento->tituloDocumento,
                'sequencialDocumento' => $documento->sequencialDocumento,
                'ata_id' => $ata->id,
                'justificativa' => $validated['justificativa'],
                'usuario_id' => Auth::id()
            ]);
           
            $documento->delete();

            return redirect()
                ->route('licitacoes.resultado-ata.form', $licitacao->id)
                ->with('success', 'Documento excluído com sucesso do sistema local!');

        } catch (\Exception $e) {
            Log::error('Erro ao excluir documento localmente', [
                'error' => $e->getMessage(),
                'documento_id' => $id ?? null
            ]);

            return redirect()
                ->back()
                ->withErrors(['api' => 'Erro ao excluir documento: ' . $e->getMessage()]);
        }
    }
}