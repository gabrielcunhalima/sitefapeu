@extends('layout.header')
@section('title', 'Dispensa de Licitação')
@section('conteudo')

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

    <!-- <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-success bg-opacity-25 border-0">
                    <h5 class="mb-0 text-dark">
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
                            <button type="button" class="btn btn-success" onclick="aplicarFiltros()">
                                <i class="bi bi-search me-1"></i>Filtrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-header bg-principal text-dark border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-light text-dark">
                            <span id="totalRegistros">{{ $licitacoes->where('tipo_licitacao', 2)->count() }}</span> registros
                        </span>
                    </div>
                </div>
                <div class="card-body p-0">
                    @if($licitacoes->where('tipo_licitacao', 2)->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="tabelaLicitacoes">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="px-4 py-3 text-center" style="width: 80px;">
                                            <i class="bi bi-hash text-muted"></i> Ordem
                                        </th>
                                        <th class="px-4 py-3">
                                            <i class="bi bi-file-text text-muted"></i> Processo
                                        </th>
                                        <th class="px-4 py-3">
                                            <i class="bi bi-building text-muted"></i> Órgão
                                        </th>
                                        <th class="px-4 py-3 text-center" style="width: 100px;">
                                            <i class="bi bi-folder text-muted"></i> Projeto
                                        </th>
                                        <th class="px-4 py-3 text-center" style="width: 130px;">
                                            <i class="bi bi-calendar text-muted"></i> Data Abertura
                                        </th>
                                        <th class="px-4 py-3">
                                            <i class="bi bi-clipboard-data text-muted"></i> Objeto
                                        </th>
                                        <th class="px-4 py-3 text-center" style="width: 130px;">
                                            <i class="bi bi-calendar-check text-muted"></i> Data Publicação
                                        </th>
                                        <th class="px-4 py-3 text-center" style="width: 300px;">
                                            <i class="bi bi-download text-muted"></i> Documentos
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($licitacoes->where('tipo_licitacao', 2) as $licitacao)
                                        <tr class="border-bottom">
                                            <td class="px-4 py-3 text-center">
                                                <span class="badge bg-warning text-dark rounded-pill">
                                                    {{ $licitacao->ordem ?? '-' }}
                                                </span>
                                            </td>
                                            <td class="px-4 py-3">
                                                <span class="fw-semibold text-dark">
                                                    {{ $licitacao->processo ?? '-' }}
                                                </span>
                                            </td>
                                            <td class="px-4 py-3">
                                                <span class="text-dark">{{ $licitacao->orgao }}</span>
                                            </td>
                                            <td class="px-4 py-3 text-center">
                                                {{ $licitacao->projeto ?? '-' }}
                                            </td>
                                            <td class="px-4 py-3 text-center">
                                                @if($licitacao->dataabertura)
                                                    <span class="badge bg-info text-dark">
                                                        {{ \Carbon\Carbon::parse($licitacao->dataabertura)->format('d/m/Y') }}
                                                    </span>
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
                                                    <span class="badge bg-success">
                                                        {{ \Carbon\Carbon::parse($licitacao->datapublicacao)->format('d/m/Y') }}
                                                    </span>
                                                @else
                                                    <span class="text-muted">-</span>
                                                @endif
                                            </td>
                                            <td class="px-4 py-3">
                                                <div class="d-flex gap-1 justify-content-center flex-wrap">
                                                    @if($licitacao->licitacao)
                                                        <a href="{{ asset($licitacao->licitacao) }}" target="_blank" 
                                                           class="btn btn-outline-primary btn-sm" title="Termo de Dispensa">
                                                            <i class="bi bi-file-earmark-pdf"></i>
                                                        </a>
                                                    @endif
                                                    @if($licitacao->ataabertura)
                                                        <a href="{{ asset($licitacao->ataabertura) }}" target="_blank" 
                                                           class="btn btn-outline-success btn-sm" title="Ata de Abertura">
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
                        <div class="col-md-3 mb-2">
                            <span class="btn btn-outline-success btn-sm me-2"><i class="bi bi-file-earmark-text"></i></span>
                            <small>Ata de Abertura</small>
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
    
    document.getElementById('totalRegistros').textContent = {{ $licitacoes->where('tipo_licitacao', 2)->count() }};
}

// Aplicar filtros em tempo real
document.getElementById('filtroProcesso').addEventListener('keyup', aplicarFiltros);
document.getElementById('filtroOrgao').addEventListener('keyup', aplicarFiltros);
document.getElementById('filtroAno').addEventListener('change', aplicarFiltros);
</script>

@endsection