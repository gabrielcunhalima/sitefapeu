@extends('layout.header')
@section('title', 'Seleções Públicas')
@section('conteudo')

    <style>
        .bg-cinza {
            background-color: rgb(221, 221, 221) !important;
        }
    </style>

    <div class="container py-4">
        <div class="row mb-4">
            <div class="col-12">
                <div class="alert alert-info border-0 shadow-sm" role="alert">
                    <div class="d-flex">
                        <div class="me-3">
                            <i class="bi bi-info-circle-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="alert-heading mb-2">Informações Importantes</h5>
                            <p class="mb-1">As seleções públicas são processos competitivos realizados pela FAPEU em
                                conformidade com a legislação vigente.</p>
                            <p class="mb-0">Todos os documentos estão disponíveis para consulta pública. Para dúvidas, entre
                                em contato através do telefone <strong>(48) 3331-7472</strong>.</p>
                        </div>
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
                                <small>Edital/Seleção</small>
                            </div>
                            <div class="col-md-3 mb-2">
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
                            </div>
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
                                <span id="totalRegistros">{{ $licitacoes->where('tipo_licitacao', 1)->count() }}</span>
                                registros
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        @if($licitacoes->where('tipo_licitacao', 1)->count() > 0)
                            <div class="table-responsive">
                                <table class="table mb-0" id="tabelaLicitacoes">
                                    <thead class="bg-cinza">
                                        <tr>
                                            <th class="px-4 py-3 text-center" style="width: 80px;">
                                                Seleção pública
                                            </th>
                                            <th class="px-4 py-3">
                                                Contrato/Convênio
                                            </th>
                                            <th class="px-4 py-3">
                                                Órgão
                                            </th>
                                            <th class="px-4 py-3 text-center" style="width: 100px;">
                                                Projeto
                                            </th>
                                            <th class="px-4 py-3 text-center" style="width: 130px;">
                                                Data Abertura
                                            </th>
                                            <th class="px-4 py-3 text-center" style="width: 130px;">
                                                Data Publicação
                                            </th>
                                            <th class="px-4 py-3 text-center" style="width: 300px;">
                                                Documentos
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($licitacoes->where('tipo_licitacao', 1) as $licitacao)
                                            <tr class="border-white">
                                                <td class="px-4">
                                                    {{ $licitacao->ordem ?? '-' }}
                                                </td>
                                                <td class="px-4">
                                                    {{ $licitacao->processo ?? '-' }}
                                                </td>
                                                <td class="px-4">
                                                    <span class="text-dark">{{ $licitacao->orgao }}</span>
                                                </td>
                                                <td class="px-4 text-center">
                                                    {{ $licitacao->projeto ?? '-' }}
                                                </td>
                                                <td class="px-4 text-center">
                                                    @if($licitacao->dataabertura)
                                                        {{ \Carbon\Carbon::parse($licitacao->dataabertura)->format('d/m/Y') }}
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td>
                                                <td class="px-4 text-center">
                                                    @if($licitacao->datapublicacao)
                                                        {{ \Carbon\Carbon::parse($licitacao->datapublicacao)->format('d/m/Y') }}
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td>
                                                <td class="px-4">
                                                    <div class="d-flex gap-1 justify-content-center flex-wrap">
                                                        @if($licitacao->licitacao)
                                                            <a href="{{ Storage::url($licitacao->licitacao) }}" target="_blank"
                                                                class="btn btn-outline-primary btn-sm" title="Edital/Seleção">
                                                                <i class="bi bi-file-earmark-pdf"></i>
                                                            </a>
                                                        @endif
                                                        @if($licitacao->ataabertura)
                                                            <a href="{{ Storage::url($licitacao->ataabertura) }}" target="_blank"
                                                                class="btn btn-outline-success btn-sm"
                                                                title="Ata de Abertura e Julgamento">
                                                                <i class="bi bi-file-earmark-text"></i>
                                                            </a>
                                                        @endif
                                                        @if($licitacao->contratoconvenio)
                                                            <a href="{{ Storage::url($licitacao->contratoconvenio) }}" target="_blank"
                                                                class="btn btn-outline-warning btn-sm" title="Contrato/Convênio">
                                                                <i class="bi bi-file-earmark-bar-graph"></i>
                                                            </a>
                                                        @endif
                                                        @if($licitacao->resultado)
                                                            <a href="{{ Storage::url($licitacao->resultado) }}" target="_blank"
                                                                class="btn btn-outline-danger btn-sm" title="Resultado">
                                                                <i class="bi bi-file-earmark-check"></i>
                                                            </a>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="px-4 pt-1" style="padding-bottom:40px;">
                                                    <strong><i class="bi bi-arrow-return-right"></i></strong>
                                                    {{ $licitacao->objeto }}
                                                </td>
                                                <td colspan="1">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="text-center py-5">
                                <i class="bi bi-inbox display-1 text-muted mb-3"></i>
                                <h4 class="text-muted">Nenhuma seleção pública encontrada</h4>
                                <p class="text-muted mb-0">Não há registros disponíveis no momento.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection