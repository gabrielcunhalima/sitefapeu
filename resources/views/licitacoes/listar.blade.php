@extends('layout.header')
@section('title', 'Gerenciar Licitações')
@section('conteudo')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap');

    :root {
        --green-900: #034201;
        --green-800: #065f46;
        --green-700: #047857;
        --green-600: #059669;
        --green-100: #d1fae5;
        --green-50: #ecfdf5;
        --slate-900: #0f172a;
        --slate-800: #1e293b;
        --slate-700: #334155;
        --slate-600: #475569;
        --slate-500: #64748b;
        --slate-400: #94a3b8;
        --slate-300: #cbd5e1;
        --slate-200: #e2e8f0;
        --slate-100: #f1f5f9;
        --slate-50: #f8fafc;
        --white: #ffffff;
        --radius-sm: 6px;
        --radius-md: 8px;
        --radius-lg: 10px;
        --radius-xl: 12px;
        --shadow-xs: 0 1px 2px rgba(0,0,0,0.05);
        --shadow-sm: 0 1px 3px rgba(0,0,0,0.06), 0 1px 2px rgba(0,0,0,0.04);
        --shadow-md: 0 4px 6px -1px rgba(0,0,0,0.07), 0 2px 4px -2px rgba(0,0,0,0.05);
    }

    .list-page-wrapper {
        font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        background: var(--slate-50);
        min-height: 100vh;
        padding: 1.5rem;
        max-width: 1650px;
        margin: 0 auto;
    }

    .page-breadcrumb {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.8rem;
        color: var(--slate-500);
        margin-bottom: 1.25rem;
    }
    .page-breadcrumb a {
        color: var(--green-900);
        text-decoration: none;
        font-weight: 500;
    }
    .page-breadcrumb a:hover { text-decoration: underline; }
    .page-breadcrumb .separator { color: var(--slate-300); }

    .page-title-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.5rem;
    }
    .page-title-bar h4 {
        font-size: 1.35rem;
        font-weight: 700;
        color: var(--slate-900);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    .page-title-bar h4 .title-icon {
        width: 38px;
        height: 38px;
        background: var(--green-900);
        border-radius: var(--radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white);
        font-size: 1.1rem;
    }

    .title-bar-right {
        display: flex;
        align-items: center;
        gap: 1.25rem;
    }
    .action-legend {
        display: flex;
        align-items: center;
        gap: 0.875rem;
        padding: 0.5rem 1rem;
        background: var(--slate-50);
        border: 1px solid var(--slate-200);
        border-radius: var(--radius-lg);
    }
    .legend-item {
        display: flex;
        align-items: center;
        gap: 0.375rem;
        font-size: 0.75rem;
        color: var(--slate-500);
        white-space: nowrap;
    }
    .legend-item.highlight {
        color: var(--green-900);
        font-weight: 600;
    }
    .legend-icon {
        width: 26px;
        height: 26px;
        border-radius: var(--radius-sm);
        border: 1.5px solid var(--slate-200);
        background: var(--white);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 0.75rem;
        color: var(--slate-400);
    }
    .legend-icon.edit { color: #3b82f6; border-color: #bfdbfe; background: #eff6ff; }
    .legend-icon.add { color: var(--green-900); border-color: var(--green-100); background: var(--green-50); }
    .legend-icon.delete { color: #ef4444; border-color: #fecaca; background: #fef2f2; }

    .clean-card {
        background: var(--white);
        border: 1px solid var(--slate-200);
        border-radius: var(--radius-xl);
        box-shadow: var(--shadow-xs);
        overflow: hidden;
        margin-bottom: 1.25rem;
    }
    .clean-card-header {
        padding: 1rem 1.5rem;
        border-bottom: 1px solid var(--slate-100);
        display: flex;
        align-items: center;
        gap: 0.625rem;
        background: var(--white);
    }
    .clean-card-header .header-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--green-900);
        flex-shrink: 0;
    }
    .clean-card-header h5 {
        font-size: 0.925rem;
        font-weight: 700;
        color: var(--slate-800);
        margin: 0;
    }
    .clean-card-header i {
        color: var(--green-900);
        font-size: 1rem;
    }
    .clean-card-body { padding: 1.5rem; }

    .clean-alert {
        border: none;
        border-left: 3px solid;
        border-radius: var(--radius-md);
        padding: 0.875rem 1.125rem;
        font-size: 0.875rem;
        font-family: 'Plus Jakarta Sans', sans-serif;
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }
    .clean-alert .btn-close {
        font-size: 0.65rem;
        margin-left: auto;
        align-self: center;
    }
    .clean-alert.alert-success {
        background: var(--green-50);
        border-color: var(--green-900);
        color: #065f46;
    }

    .highlight-banner {
        background: linear-gradient(135deg, var(--green-900) 0%, #065f46 100%);
        border-radius: var(--radius-xl);
        padding: 1.125rem 1.5rem;
        margin-bottom: 1.25rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        box-shadow: var(--shadow-sm);
        color: var(--white);
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .highlight-banner .banner-icon {
        width: 40px;
        height: 40px;
        background: rgba(255,255,255,0.15);
        border-radius: var(--radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 1.15rem;
    }
    .highlight-banner .banner-text {
        flex: 1;
        font-size: 0.85rem;
        font-weight: 500;
        line-height: 1.5;
    }
    .highlight-banner .icon-inline {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 22px;
        height: 22px;
        background: rgba(255,255,255,0.2);
        border-radius: 50%;
        font-size: 0.75rem;
        vertical-align: middle;
        margin: 0 0.2rem;
    }
    .highlight-banner .btn-close {
        filter: brightness(0) invert(1);
        opacity: 0.7;
        font-size: 0.6rem;
        align-self: center;
    }
    .highlight-banner .btn-close:hover { opacity: 1; }

   
    .filter-inline {
        display: flex;
        align-items: center;
        gap: 0.625rem;
        flex-wrap: wrap;
        margin-bottom: 1.125rem;
    }
    .filter-inline input,
    .filter-inline select {
        padding: 0.5rem 0.75rem;
        border: 1.5px solid var(--slate-200);
        border-radius: var(--radius-md);
        font-size: 0.825rem;
        font-family: inherit;
        color: var(--slate-700);
        background: var(--white);
        transition: all 0.2s ease;
        height: 36px;
    }
    .filter-inline input:focus,
    .filter-inline select:focus {
        border-color: var(--green-900);
        box-shadow: 0 0 0 3px rgba(3, 66, 1, 0.08);
        outline: none;
    }
    .filter-inline input::placeholder { color: var(--slate-400); }
    .filter-inline .filter-search { flex: 1; min-width: 200px; }
    .filter-inline .filter-select { min-width: 155px; }
    .filter-inline .btn-filter {
        height: 36px;
        padding: 0 1rem;
        border-radius: var(--radius-md);
        font-weight: 600;
        font-size: 0.8rem;
        font-family: inherit;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        transition: all 0.2s ease;
        border: none;
        background: var(--green-900);
        color: var(--white);
    }
    .filter-inline .btn-filter:hover {
        background: var(--green-800);
    }
    .filter-inline .btn-clear {
        height: 36px;
        padding: 0 0.75rem;
        border-radius: var(--radius-md);
        font-size: 0.8rem;
        font-family: inherit;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        background: transparent;
        border: none;
        color: var(--slate-500);
        text-decoration: none;
        font-weight: 500;
    }
    .filter-inline .btn-clear:hover {
        color: var(--slate-700);
        text-decoration: none;
    }

    .btn-primary-green {
        padding: 0.6rem 1.5rem;
        border: none;
        border-radius: var(--radius-md);
        font-weight: 600;
        font-size: 0.85rem;
        font-family: inherit;
        transition: all 0.2s ease;
        background: var(--green-900);
        color: var(--white);
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
    }
    .btn-primary-green:hover {
        background: var(--green-800);
        color: var(--white);
        box-shadow: var(--shadow-md);
        text-decoration: none;
    }

    .clean-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border: 1px solid var(--slate-200);
        border-radius: var(--radius-lg);
        overflow: hidden;
        font-size: 0.85rem;
    }
    .clean-table thead {
        background: var(--slate-50);
    }
    .clean-table thead th {
        padding: 0.75rem 1rem;
        font-weight: 600;
        color: var(--slate-600);
        text-transform: uppercase;
        font-size: 0.7rem;
        letter-spacing: 0.05em;
        border-bottom: 1px solid var(--slate-200);
        white-space: nowrap;
    }
    .clean-table tbody td {
        padding: 0.75rem 1rem;
        color: var(--slate-700);
        border-bottom: 1px solid var(--slate-100);
        vertical-align: middle;
    }
    .clean-table tbody tr:last-child td { border-bottom: none; }
    .clean-table tbody tr:hover { background: var(--slate-50); }

    .badge-tipo {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        padding: 0.35rem 0.75rem;
        border-radius: 20px;
        font-size: 0.72rem;
        font-weight: 600;
        white-space: nowrap;
        letter-spacing: 0.01em;
    }
    .badge-tipo i { font-size: 0.7rem; }
    .badge-tipo.selecao {
        background: var(--green-50);
        color: var(--green-900);
    }
    .badge-tipo.dispensa {
        background: #fffbeb;
        color: #92400e;
    }
    .badge-tipo.inexigibilidade {
        background: #fef2f2;
        color: #991b1b;
    }

    .objeto-cell {
        max-width: 220px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-size: 0.825rem;
        color: var(--slate-600);
    }

    .badge-pncp {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        padding: 0.3rem 0.65rem;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 600;
        white-space: nowrap;
    }
    .badge-pncp i { font-size: 0.7rem; }
    .badge-pncp.enviado {
        background: #eff6ff;
        color: #1d4ed8;
    }
    .badge-pncp.pendente {
        background: var(--slate-100);
        color: var(--slate-400);
    }
    .badge-pncp.na {
        background: transparent;
        color: var(--slate-300);
        font-weight: 500;
    }

    .action-btn-group {
        display: flex;
        align-items: center;
        gap: 0.375rem;
        justify-content: center;
    }
    .action-btn {
        width: 32px;
        height: 32px;
        border-radius: var(--radius-md);
        border: 1.5px solid var(--slate-200);
        background: var(--white);
        color: var(--slate-500);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.15s ease;
        font-size: 0.85rem;
        text-decoration: none;
    }
    .action-btn:hover {
        border-color: var(--slate-300);
        background: var(--slate-50);
        color: var(--slate-700);
        text-decoration: none;
    }
    .action-btn.edit:hover {
        border-color: #3b82f6;
        background: #eff6ff;
        color: #2563eb;
    }
    .action-btn.add:hover {
        border-color: var(--green-700);
        background: var(--green-50);
        color: var(--green-900);
    }
    .action-btn.delete:hover {
        border-color: #ef4444;
        background: #fef2f2;
        color: #dc2626;
    }

   
    .pagination-simple {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 1rem;
        font-size: 0.8rem;
        color: var(--slate-500);
    }
    .pagination-simple strong {
        color: var(--slate-700);
    }
    .pagination-simple .pagination-links {
        display: flex;
        gap: 0.375rem;
    }
    .pagination-simple .pagination-links a,
    .pagination-simple .pagination-links span {
        display: inline-flex;
        align-items: center;
        padding: 0.375rem 0.75rem;
        border-radius: var(--radius-md);
        font-size: 0.8rem;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.15s ease;
    }
    .pagination-simple .pagination-links a {
        color: var(--slate-600);
        border: 1px solid var(--slate-200);
        background: var(--white);
    }
    .pagination-simple .pagination-links a:hover {
        background: var(--slate-50);
        border-color: var(--slate-300);
    }
    .pagination-simple .pagination-links .disabled {
        color: var(--slate-300);
        pointer-events: none;
    }

    .empty-state {
        text-align: center;
        padding: 3.5rem 1.5rem;
    }
    .empty-state-icon {
        width: 64px;
        height: 64px;
        background: var(--slate-100);
        border-radius: var(--radius-xl);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.25rem;
    }
    .empty-state-icon i {
        font-size: 1.75rem;
        color: var(--slate-400);
    }
    .empty-state h5 {
        font-size: 1rem;
        font-weight: 600;
        color: var(--slate-700);
        margin-bottom: 0.375rem;
    }
    .empty-state p {
        font-size: 0.85rem;
        color: var(--slate-500);
        margin-bottom: 0;
    }
    

    @media (max-width: 768px) {
        .list-page-wrapper { padding: 1rem; }
        .page-title-bar { flex-direction: column; align-items: flex-start; gap: 0.75rem; }
        .title-bar-right { flex-direction: column; align-items: flex-start; gap: 0.75rem; width: 100%; }
        .action-legend { flex-wrap: wrap; width: 100%; }
        .btn-primary-green { width: 100%; justify-content: center; }
        .clean-card-body { padding: 1rem; }
        .highlight-banner { flex-direction: column; text-align: center; gap: 0.75rem; }
        .filter-inline { flex-direction: column; align-items: stretch; }
        .filter-inline .filter-search { min-width: 100%; }
        .pagination-simple { flex-direction: column; gap: 0.5rem; text-align: center; }
    }
        .legend-item a .legend-icon {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .legend-item a:hover .legend-icon {
        transform: rotate(-8deg) scale(1.15);
        box-shadow: 0 2px 8px rgba(124, 58, 237, 0.25);
    }
    
</style>

            <div class="list-page-wrapper">
                <div class="page-breadcrumb">
                    <a href="{{ route('licitacoes.listar') }}">Licitações</a>
                    <span class="separator"><i class="bi bi-chevron-right"></i></span>
                    <span>Gerenciar</span>
                </div>

                <div class="page-title-bar">
                    <h4>
                        <span class="title-icon"><i class="bi bi-list-ul"></i></span>
                        Gerenciar Licitações
                    </h4>
                    <div class="title-bar-right">
                        <div class="action-legend">
                            <div class="legend-item">
                                <span class="legend-icon edit" title="Editar os dados do site"><i class="bi bi-pencil"></i></span>
                                <span>Editar</span>
                            </div>
                            <div class="legend-item highlight">
                                <span class="legend-icon add" title="Adicionar o resultado de uma licitação" ><i class="bi bi-plus-circle"></i></span>
                                <span>Adicionar Resultado</span>
                            </div>
                            <div class="legend-item">
                                <span class="legend-icon delete" title="Excluir licitação"><i class="bi bi-trash"></i></span>
                                <span>Excluir</span>
                            </div>
                           <div class="legend-item">
                            <a href="{{ route('licitacoes.manual') }}" style="display:flex; align-items:center; gap:0.375rem; text-decoration:none; color:inherit;">
                                <span class="legend-icon" title="Manual de uso do sistema de licitação" style="color: #7c3aed; border-color: #ddd6fe; background: #f5f3ff;">
                                    <i class="bi bi-book"></i>
                                </span>
                                <span>Manual</span>
                            </a>
                        </div>
                        </div>
                        <a href="{{ route('licitacoes.form') }}" class="btn-primary-green">
                            <i class="bi bi-plus-circle"></i> Nova Licitação
                        </a>
                    </div>
                </div>

                @if(session('success'))
                <div class="clean-alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>{{ session('success') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif

                <div class="highlight-banner alert-dismissible fade show" role="alert">
                    <div class="banner-icon">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                    <div class="banner-text">
                        Para adicionar o resultado de uma licitação, clique no ícone
                        <span class="icon-inline"><i class="bi bi-plus-circle"></i></span>
                        ao lado da licitação escolhida.
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>

                <div class="clean-card">
                    <div class="clean-card-header">
                        <span class="header-dot"></span>
                        <i class="bi bi-table"></i>
                        <h5>Licitações Cadastradas</h5>
                    </div>
                    <div class="clean-card-body">

        
                <form action="{{ route('licitacoes.listar') }}" method="GET">
                    <div class="filter-inline">
                        <input type="text" name="busca" class="filter-search"
                            placeholder="Buscar por processo, contrato, objeto..."
                            value="{{ request('busca') }}">
                        <select name="tipo_licitacao" class="filter-select">
                            <option value="">Todos os tipos</option>
                            <option value="1" {{ request('tipo_licitacao') == '1' ? 'selected' : '' }}>Seleção Pública</option>
                            <option value="2" {{ request('tipo_licitacao') == '2' ? 'selected' : '' }}>Dispensa</option>
                            <option value="3" {{ request('tipo_licitacao') == '3' ? 'selected' : '' }}>Inexigibilidade</option>
                        </select>
                        <button type="submit" class="btn-filter">
                            <i class="bi bi-search"></i> Filtrar
                        </button>
                        @if(request()->hasAny(['busca', 'tipo_licitacao']))
                        <a href="{{ route('licitacoes.listar') }}" class="btn-clear">
                            <i class="bi bi-x-lg"></i> Limpar
                        </a>
                        @endif
                    </div>
                </form>

                @if($licitacoes->count() > 0)
                <div class="table-responsive">
                    <table class="clean-table">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Seleção/Edital</th>
                                <th>Contrato/Convênio</th>
                                <th>Órgão</th>
                                <th>Projeto</th>
                                <th>Data Publicação</th>
                                <th>Data Abertura</th>
                                <th>Objeto</th>
                                <th style="text-align: center;">PNCP</th>
                                <th style="text-align: center;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($licitacoes as $licitacao)
                            <tr>
                            <td>
                                @switch($licitacao->tipo_licitacao)
                                @case(1)
                                <span class="badge-tipo selecao">
                                    <i class="bi bi-check-circle-fill"></i> Seleção Pública
                                </span>
                                @break
                                @case(2)
                                <span class="badge-tipo dispensa">
                                    <i class="bi bi-exclamation-triangle-fill"></i> Dispensa
                                </span>
                                @break
                                @case(3)
                                <span class="badge-tipo inexigibilidade">
                                    <i class="bi bi-x-circle-fill"></i> Inexigibilidade
                                </span>
                                @break
                                @endswitch
                            </td>
                            <td>{{ $licitacao->numeroProcesso ?? $licitacao->ordem ?? '-' }}</td>
                            <td>{{ $licitacao->numeroCompra ?? $licitacao->processo ?? '-' }}</td>
                            <td>{{ $licitacao->orgao_site ?? $licitacao->orgao ?? '-' }}</td>
                            <td>{{ $licitacao->projeto ?? '-' }}</td>
                            <td>
                                @if($licitacao->datapublicacao)
                                {{ \Carbon\Carbon::parse($licitacao->datapublicacao)->format('d/m/Y') }}
                                @else
                                -
                                @endif
                            </td>
                            <td>
                                 @if($licitacao->dataabertura ?? $licitacao->dataAberturaProposta)
                                {{ \Carbon\Carbon::parse($licitacao->dataabertura ?? $licitacao->dataAberturaProposta)->format('d/m/Y') }}
                                @else
                                -
                                @endif
                            </td>
                            <td>
                                <div class="objeto-cell" title="{{ $licitacao->objetoCompra ?? $licitacao->objeto }}">
                                    {{ $licitacao->objetoCompra ?? $licitacao->objeto ?? '-' }}
                                </div>
                            </td>
                            <td style="text-align: center;">
                                @if($licitacao->tipo_licitacao == 1)
                                    @if($licitacao->sequencial)
                                    <span class="badge-pncp enviado" title="Sequencial: {{ $licitacao->sequencial }}">
                                        <i class="bi bi-cloud-check-fill"></i> {{ $licitacao->sequencial }}
                                    </span>
                                    @else
                                    <span class="badge-pncp pendente">
                                        <i class="bi bi-cloud-slash"></i> Pendente
                                    </span>
                                    @endif
                                @else
                                <span class="badge-pncp na">N/A</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-btn-group">
                                    <a href="{{ route('licitacoes.editar-site', $licitacao->id) }}"
                                        class="action-btn edit" title="Editar Dados do Site">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="{{ route('licitacoes.resultado-ata.form', $licitacao->id) }}"
                                        class="action-btn add" title="Adicionar Resultado">
                                        <i class="bi bi-plus-circle"></i>
                                    </a>
                                    <button type="button" class="action-btn delete"
                                        onclick="confirmarExclusao({{ $licitacao->id }})" title="Excluir">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            @if($licitacoes->hasPages())
            <div class="pagination-simple">
                <span>
                    Exibindo <strong>{{ $licitacoes->firstItem() }}</strong>–<strong>{{ $licitacoes->lastItem() }}</strong> de <strong>{{ $licitacoes->total() }}</strong>
                </span>
                <div class="pagination-links">
                    @if($licitacoes->onFirstPage())
                        <span class="disabled"><i class="bi bi-chevron-left"></i> Anterior</span>
                    @else
                        <a href="{{ $licitacoes->previousPageUrl() }}"><i class="bi bi-chevron-left"></i> Anterior</a>
                    @endif

                    @if($licitacoes->hasMorePages())
                        <a href="{{ $licitacoes->nextPageUrl() }}">Próximo <i class="bi bi-chevron-right"></i></a>
                    @else
                        <span class="disabled">Próximo <i class="bi bi-chevron-right"></i></span>
                    @endif
                </div>
            </div>
            @endif

            @else
            <div class="empty-state">
                <div class="empty-state-icon">
                    <i class="bi bi-inbox"></i>
                </div>
                @if(request()->hasAny(['busca', 'tipo_licitacao']))
                <h5>Nenhum resultado encontrado</h5>
                <p>Tente ajustar os filtros ou <a href="{{ route('licitacoes.listar') }}" style="color: var(--green-900); font-weight: 600;">limpar a busca</a>.</p>
                @else
                <h5>Nenhuma licitação cadastrada</h5>
                <p>Clique no botão "Nova Licitação" para começar.</p>
                @endif
            </div>
            @endif
        </div>
    </div>
</div>

<form id="formExcluir" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

<script>
    function confirmarExclusao(id) {
        if (confirm('Tem certeza que deseja excluir esta licitação? Esta ação não pode ser desfeita.')) {
            const form = document.getElementById('formExcluir');
            form.action = `/licitacoes/excluir/${id}`;
            form.submit();
        }
    }
</script>

@endsection