@extends('layout.header')
@section('title', 'Inexigibilidade')
@section('conteudo')

    <style>
        .bg-cinza {
            background-color: rgb(221, 221, 221) !important;
        }
    </style>

    <div class="container py-4">
        <div class="row mb-4">
            <div class="col-12">
                <div class="alert alert-primary border-0 shadow-sm" role="alert">
                    <div class="d-flex">
                        <div class="me-3">
                            <i class="bi bi-shield-exclamation fs-4"></i>
                        </div>
                        <div>
                            <h5 class="alert-heading mb-2">Fundamentação Legal</h5>
                            <p class="mb-1">A inexigibilidade de licitação ocorre quando há impossibilidade jurídica de
                                competição, conforme Art. 25 da Lei nº 8.666/93.</p>
                            <p class="mb-0">Principais casos: fornecedor exclusivo, serviços técnicos especializados de
                                natureza singular, contratação de profissional de notória especialização.</p>
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
                                <span id="totalRegistros">{{ $licitacoes->where('tipo_licitacao', 3)->count() }}</span>
                                registros
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        @if($licitacoes->where('tipo_licitacao', 3)->count() > 0)
                            <div class="table-responsive">
                                <table class="table mb-0" id="tabelaLicitacoes">
                                    <thead class="bg-cinza">
                                        <tr>
                                            <th class="px-4 py-3 text-center" style="width: 80px;">Inexigibilidade</th>
                                            <th class="px-4 py-3">Contrato/Convênio</th>
                                            <th class="px-4 py-3">Órgão</th>
                                            <th class="px-4 py-3 text-center" style="width: 100px;">Projeto</th>
                                            <th class="px-4 py-3 text-center" style="width: 130px;">Data Abertura</th>
                                            <th class="px-4 py-3 text-center" style="width: 130px;">Data Publicação</th>
                                            <th class="px-4 py-3 text-center" style="width: 300px;">Documentos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($licitacoes->where('tipo_licitacao', 3) as $licitacao)
                                            <tr class="border-white">
                                                <td class="px-4 align-middle">
                                                    <span class="text-dark">
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
                                                            <a href="{{ asset('storage/' . $licitacao->licitacao) }}" target="_blank"
                                                                class="btn btn-outline-primary btn-sm" title="Termo de Inexigibilidade">
                                                                <i class="bi bi-file-earmark-pdf"></i>
                                                            </a>
                                                        @endif
                                                        @if($licitacao->ataabertura)
                                                            <a href="{{ asset('storage/' . $licitacao->ataabertura) }}" target="_blank"
                                                                class="btn btn-outline-success btn-sm"
                                                                title="Ata de Abertura e Julgamento">
                                                                <i class="bi bi-file-earmark-text"></i>
                                                            </a>
                                                        @endif
                                                        @if($licitacao->contratoconvenio)
                                                            <a href="{{ asset('storage/' . $licitacao->contratoconvenio) }}" target="_blank"
                                                                class="btn btn-outline-warning btn-sm" title="Contrato/Convênio">
                                                                <i class="bi bi-file-earmark-bar-graph"></i>
                                                            </a>
                                                        @endif
                                                        @if($licitacao->resultado)
                                                            <a href="{{ asset('storage/' . $licitacao->resultado) }}" target="_blank"
                                                                class="btn btn-outline-danger btn-sm" title="Resultado">
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
                                <h4 class="text-muted">Nenhuma inexigibilidade encontrada</h4>
                                <p class="text-muted mb-0">Não há registros de inexigibilidade de licitação no momento.</p>
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
                                <span class="btn btn-outline-primary btn-sm me-2"><i
                                        class="bi bi-file-earmark-pdf"></i></span>
                                <small>Termo de Inexigibilidade</small>
                            </div>
                            <!-- <div class="col-md-3 mb-2">
                                <span class="btn btn-outline-success btn-sm me-2"><i
                                        class="bi bi-file-earmark-text"></i></span>
                                <small>Ata de Abertura e Julgamento</small>
                            </div>
                            <div class="col-md-3 mb-2">
                                <span class="btn btn-outline-warning btn-sm me-2"><i
                                        class="bi bi-file-earmark-bar-graph"></i></span>
                                <small>Contrato/Convênio</small>
                            </div>
                            <div class="col-md-3 mb-2">
                                <span class="btn btn-outline-danger btn-sm me-2"><i
                                        class="bi bi-file-earmark-check"></i></span>
                                <small>Resultado</small>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection