@extends('layout.header')
@section('title', 'Dispensa de Licitação')
@section('conteudo')

<style>
    .bg-cinza {
        background-color: rgb(221, 221, 221) !important;
    }
</style>

<div class="container py-4">
    <div class="row mb-4">
        <div class="col-12">
            <div class="alert alert-warning border-0 shadow-sm" role="alert">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="bi bi-book-fill fs-4"></i>
                    </div>
                    <div>
                        <h5 class="alert-heading mb-2">Base Legal</h5>
                        <p class="mb-1">As dispensas de licitação são fundamentadas na Lei nº 8.666/93 e suas alterações, bem como na Lei nº 14.133/21 (Nova Lei de Licitações).</p>
                        <p class="mb-0">Principais hipóteses: valores até o limite legal, situações de emergência, contratação de pessoa jurídica de direito público interno, entre outras previstas em lei.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-header bg-principal text-white border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-light text-dark">
                            <span id="totalRegistros">{{ $licitacoes->where('tipo_licitacao', 2)->count() }}</span> registros
                        </span>
                    </div>
                </div>
                <div class="card-body p-0">
                    @if($licitacoes->where('tipo_licitacao', 2)->count() > 0)
                        <div class="table-responsive">
                            <table class="table mb-0" id="tabelaLicitacoes">
                                <thead class="bg-cinza">
                                    <tr>
                                        <th class="px-4 py-3 text-center" style="width: 80px;">Ordem</th>
                                        <th class="px-4 py-3">Contrato/Convênio</th>
                                        <th class="px-4 py-3">Órgão</th>
                                        <th class="px-4 py-3 text-center" style="width: 100px;">Projeto</th>
                                        <th class="px-4 py-3 text-center" style="width: 130px;">Data Abertura</th>
                                        <th class="px-4 py-3 text-center" style="width: 130px;">Data Publicação</th>
                                        <th class="px-4 py-3 text-center" style="width: 300px;">Documentos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($licitacoes->where('tipo_licitacao', 2) as $licitacao)
                                        <tr class="border-white">
                                            <td class="px-4 text-center align-middle">
                                                <span class="text-dark fs-6">
                                                    {{ $licitacao->ordem ?? '-' }}
                                                </span>
                                            </td>
                                            <td class="px-4 align-middle">
                                                <span class="text-dark">{{ $licitacao->processo ?? '-' }}</span>
                                            </td>
                                            <td class="px-4 align-middle">
                                                <span class="text-dark">{{ $licitacao->orgao }}</span>
                                            </td>
                                            <td class="px-4 text-center align-middle">
                                                {{ $licitacao->projeto ?? '-' }}
                                            </td>
                                            <td class="px-4 text-center align-middle">
                                                @if($licitacao->dataabertura)
                                                    <span class="text-dark">
                                                        {{ \Carbon\Carbon::parse($licitacao->dataabertura)->format('d/m/Y') }}
                                                    </span>
                                                @else
                                                    <span class="text-muted">-</span>
                                                @endif
                                            </td>
                                            <td class="px-4 text-center align-middle">
                                                @if($licitacao->datapublicacao)
                                                    <span class="text-dark">
                                                        {{ \Carbon\Carbon::parse($licitacao->datapublicacao)->format('d/m/Y') }}
                                                    </span>
                                                @else
                                                    <span class="text-muted">-</span>
                                                @endif
                                            </td>
                                            <td class="px-4 align-middle">
                                                <div class="d-flex gap-1 justify-content-center flex-wrap">
                                                    @if($licitacao->licitacao)
                                                        <a href="{{ asset('storage/' . $licitacao->licitacao) }}" target="_blank" class="btn btn-outline-primary btn-sm" title="Termo de Dispensa">
                                                            <i class="bi bi-file-earmark-pdf"></i>
                                                        </a>
                                                    @endif
                                                    @if($licitacao->ataabertura)
                                                        <a href="{{ asset('storage/' . $licitacao->ataabertura) }}" target="_blank" class="btn btn-outline-success btn-sm" title="Ata de Abertura e Julgamento">
                                                            <i class="bi bi-file-earmark-text"></i>
                                                        </a>
                                                    @endif
                                                    @if($licitacao->contratoconvenio)
                                                        <a href="{{ asset('storage/' . $licitacao->contratoconvenio) }}" target="_blank" class="btn btn-outline-warning btn-sm" title="Contrato/Convênio">
                                                            <i class="bi bi-file-earmark-bar-graph"></i>
                                                        </a>
                                                    @endif
                                                    @if($licitacao->resultado)
                                                        <a href="{{ asset('storage/' . $licitacao->resultado) }}" target="_blank" class="btn btn-outline-danger btn-sm" title="Resultado">
                                                            <i class="bi bi-file-earmark-check"></i>
                                                        </a>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="px-4 pt-1" style="padding-bottom:40px;">
                                                <strong><i class="bi bi-arrow-return-right me-2"></i></strong>
                                                {{ $licitacao->objeto }}
                                            </td>
                                            <td colspan="1"></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="bi bi-inbox display-1 text-muted mb-3"></i>
                            <h4 class="text-muted">Nenhuma dispensa de licitação encontrada</h4>
                            <p class="text-muted mb-0">Não há registros de dispensa de licitação no momento.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card border-0 bg-light">
                <div class="card-body">
                    <h6 class="fw-bold mb-3">Legenda dos Documentos:</h6>
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <span class="btn btn-outline-primary btn-sm me-2"><i class="bi bi-file-earmark-pdf"></i></span>
                            <small>Termo de Dispensa</small>
                        </div>
                        <!-- <div class="col-md-3 mb-2">
                            <span class="btn btn-outline-success btn-sm me-2"><i class="bi bi-file-earmark-text"></i></span>
                            <small>Ata de Abertura e Julgamento</small>
                        </div>
                        <div class="col-md-3 mb-2">
                            <span class="btn btn-outline-warning btn-sm me-2"><i class="bi bi-file-earmark-bar-graph"></i></span>
                            <small>Contrato/Convênio</small>
                        </div>
                        <div class="col-md-3 mb-2">
                            <span class="btn btn-outline-danger btn-sm me-2"><i class="bi bi-file-earmark-check"></i></span>
                            <small>Resultado</small>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection