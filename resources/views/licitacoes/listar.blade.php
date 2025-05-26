@extends('layout.header')
@section('title', 'Gerenciar Licitações')
@section('conteudo')

<div class="container-fluid mt-4">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-header bg-principal text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">
                <i class="bi bi-list-ul"></i> Gerenciar Licitações
            </h4>
            <a href="{{ route('licitacoes.form') }}" class="btn btn-light">
                <i class="bi bi-plus-circle"></i> Nova Licitação
            </a>
        </div>
        <div class="card-body">
            @if($licitacoes->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Tipo</th>
                            <th>Seleção/Edital</th>
                            <th>Contrato/Convênio</th>
                            <th>Órgão</th>
                            <th>Projeto</th>
                            <th>Data Publicação</th>
                            <th>Data Abertura</th>
                            <th>Objeto</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($licitacoes as $licitacao)
                        <tr>
                            <td>
                                @switch($licitacao->tipo_licitacao)
                                @case(1)
                                <span class="badge bg-success">
                                    <i class="bi bi-check-circle"></i> Seleção Pública
                                </span>
                                @break
                                @case(2)
                                <span class="badge bg-warning text-dark">
                                    <i class="bi bi-exclamation-triangle"></i> Dispensa
                                </span>
                                @break
                                @case(3)
                                <span class="badge bg-danger">
                                    <i class="bi bi-x-circle"></i> Inexigibilidade
                                </span>
                                @break
                                @endswitch
                            </td>
                            <td>{{ $licitacao->ordem ?? '-' }}</td>
                            <td>{{ $licitacao->processo ?? '-' }}</td>
                            <td>{{ $licitacao->orgao }}</td>
                            <td>{{ $licitacao->projeto ?? '-' }}</td>
                            <td>
                                @if($licitacao->datapublicacao)
                                {{ \Carbon\Carbon::parse($licitacao->datapublicacao)->format('d/m/Y') }}
                                @else
                                -
                                @endif
                            </td>
                            <td>
                                @if($licitacao->dataabertura)
                                {{ \Carbon\Carbon::parse($licitacao->dataabertura)->format('d/m/Y') }}
                                @else
                                -
                                @endif
                            </td>
                            <td>
                                <div style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"
                                    title="{{ $licitacao->objeto }}">
                                    {{ $licitacao->objeto ?? '-' }}
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('licitacoes.form', $licitacao->id) }}"
                                        class="btn btn-sm btn-outline-primary" title="Editar">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger"
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
            @else
            <div class="text-center py-5">
                <i class="bi bi-inbox display-1 text-muted"></i>
                <h5 class="mt-3 text-muted">Nenhuma licitação cadastrada</h5>
                <p class="text-muted">Clique no botão "Nova Licitação" para começar.</p>
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