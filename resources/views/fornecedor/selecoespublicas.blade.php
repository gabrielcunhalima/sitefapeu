@extends('layout.header')
@section('title', 'Seleções Públicas')
@section('conteudo')

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
                        <p class="mb-1">As seleções públicas são processos competitivos realizados pela FAPEU em conformidade com a legislação vigente.</p>
                        <p class="mb-0">Todos os documentos estão disponíveis para consulta pública. Para dúvidas, entre em contato através do telefone <strong>(48) 3331-7472</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--<div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-success bg-opacity-25 border-0">
                    <h5 class="mb-0 text-principal">
                        <i class="bi bi-funnel me-2"></i>Filtros de Busca
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="filtroProcesso" class="form-label fw-bold">Processo</label>
                            <input type="text" class="form-control" id="filtroProcesso" placeholder="Digite o número do processo">
                        </div>
                        <div class="col-md-4">
                            <label for="filtroOrgao" class="form-label fw-bold">Órgão</label>
                            <input type="text" class="form-control" id="filtroOrgao" placeholder="Digite o nome do órgão">
                        </div>
                         <div class="col-md-4">
                            <label for="filtroAno" class="form-label fw-bold">Ano</label>
                            <select class="form-select" id="filtroAno">
                                <option value="">Todos os anos</option>
                                @for($ano = date('Y'); $ano >= 2020; $ano--)
                                    <option value="{{ $ano }}">{{ $ano }}</option>
                                @endfor
                            </select>
                        </div> 
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-outline-secondary me-2" onclick="limparFiltros()">
                                <i class="bi bi-arrow-clockwise me-1"></i>Limpar
                            </button>
                            <button type="button" class="btn btn-principal" onclick="aplicarFiltros()">
                                <i class="bi bi-search me-1"></i>Filtrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-header bg-principal text-white border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-light text-dark">
                            <span id="totalRegistros">{{ $licitacoes->where('tipo_licitacao', 1)->count() }}</span> registros
                        </span>
                    </div>
                </div>
                <div class="card-body p-0">
                    @if($licitacoes->where('tipo_licitacao', 1)->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover mb-0" id="tabelaLicitacoes">
                            <thead class="bg-light">
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
                                    <th class="px-4 py-3">
                                        Objeto
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
                                <tr class="border-bottom">
                                    <td class="px-4 py-3 text-center">
                                        {{ $licitacao->ordem ?? '-' }}
                                    </td>
                                    <td class="px-4 py-3">
                                        {{ $licitacao->processo ?? '-' }}
                                    </td>
                                    <td class="px-4 py-3">
                                        <span class="text-dark">{{ $licitacao->orgao }}</span>
                                    </td>
                                    <td class="px-4 py-3 text-center">
                                        {{ $licitacao->projeto ?? '-' }}
                                    </td>
                                    <td class="px-4 py-3 text-center">
                                        @if($licitacao->dataabertura)
                                            {{ \Carbon\Carbon::parse($licitacao->dataabertura)->format('d/m/Y') }}
                                        @else
                                        <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="text-truncate" style="max-width: 250px;" title="{{ $licitacao->objeto }}">
                                            {{ $licitacao->objeto ?? '-' }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-center">
                                        @if($licitacao->datapublicacao)
                                            {{ \Carbon\Carbon::parse($licitacao->datapublicacao)->format('d/m/Y') }}
                                        @else
                                        <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="d-flex gap-1 justify-content-center flex-wrap">
                                            @if($licitacao->licitacao)
                                            <a href="{{ asset($licitacao->licitacao) }}" target="_blank"
                                                class="btn btn-outline-primary btn-sm" title="Seleção Pública">
                                                <i class="bi bi-file-earmark-pdf"></i>
                                            </a>
                                            @endif
                                            @if($licitacao->ataabertura)
                                            <a href="{{ asset($licitacao->ataabertura) }}" target="_blank"
                                                class="btn btn-outline-success btn-sm" title="Ata de Abertura e Julgamento">
                                                <i class="bi bi-file-earmark-text"></i>
                                            </a>
                                            @endif
                                            @if($licitacao->contratoconvenio)
                                            <a href="{{ asset($licitacao->contratoconvenio) }}" target="_blank"
                                                class="btn btn-outline-warning btn-sm" title="Contrato/Convênio">
                                                <i class="bi bi-file-earmark-bar-graph"></i>
                                            </a>
                                            @endif
                                            @if($licitacao->resultado)
                                            <a href="{{ asset($licitacao->resultado) }}" target="_blank"
                                                class="btn btn-outline-danger btn-sm" title="Resultado">
                                                <i class="bi bi-file-earmark-check"></i>
                                            </a>
                                            @endif
                                        </div>
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

    <div class="row mt-4">
        <div class="col-12">
            <div class="card border-0 bg-light">
                <div class="card-body">
                    <h6 class="fw-bold mb-3">Legenda dos Documentos:</h6>
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <span class="btn btn-outline-primary btn-sm me-2"><i class="bi bi-file-earmark-pdf"></i></span>
                            <small>Edital/Seleção</small>
                        </div>
                        <div class="col-md-3 mb-2">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function aplicarFiltros() {
        const processo = document.getElementById('filtroProcesso').value.toLowerCase();
        const orgao = document.getElementById('filtroOrgao').value.toLowerCase();
        const ano = document.getElementById('filtroAno').value;

        const linhas = document.querySelectorAll('#tabelaLicitacoes tbody tr');
        let contador = 0;

        linhas.forEach(linha => {
            const textoLinha = linha.textContent.toLowerCase();
            const dataElement = linha.querySelector('td:nth-child(5) .badge, td:nth-child(7) .badge');
            let anoLinha = '';

            if (dataElement) {
                const data = dataElement.textContent.trim();
                if (data && data !== '-') {
                    anoLinha = data.split('/')[2];
                }
            }

            const mostrar = (
                (processo === '' || textoLinha.includes(processo)) &&
                (orgao === '' || textoLinha.includes(orgao)) &&
                (ano === '' || anoLinha === ano)
            );

            linha.style.display = mostrar ? '' : 'none';
            if (mostrar) contador++;
        });

        document.getElementById('totalRegistros').textContent = contador;
    }

    function limparFiltros() {
        document.getElementById('filtroProcesso').value = '';
        document.getElementById('filtroOrgao').value = '';
        document.getElementById('filtroAno').value = '';

        const linhas = document.querySelectorAll('#tabelaLicitacoes tbody tr');
        linhas.forEach(linha => {
            linha.style.display = '';
        });

        document.getElementById('totalRegistros').textContent = {
            {
                $licitacoes - > where('tipo_licitacao', 1) - > count()
            }
        };
    }

    document.getElementById('filtroProcesso').addEventListener('keyup', aplicarFiltros);
    document.getElementById('filtroOrgao').addEventListener('keyup', aplicarFiltros);
    document.getElementById('filtroAno').addEventListener('change', aplicarFiltros);
</script>

@endsection