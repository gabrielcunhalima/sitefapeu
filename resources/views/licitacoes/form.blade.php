@extends('layout.header')
@section('title', $dados->id ? 'Editar Licitação' : 'Nova Licitação')
@section('conteudo')

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-principal text-white">
                    <h4 class="mb-0">
                        <i class="bi bi-file-earmark-plus"></i>
                        {{ $dados->id ? 'Editar Licitação' : 'Nova Licitação' }}
                    </h4>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('licitacoes.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $dados->id }}">
                        
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <div class="card border-success">
                                    <div class="card-header bg-principal text-white">
                                        <h6 class="mb-0">Tipo de Licitação</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="tipo_licitacao" id="selecao" value="1" 
                                                           {{ old('tipo_licitacao', $dados->tipo_licitacao) == 1 ? 'checked' : '' }} required>
                                                    <label class="form-check-label fw-bold" for="selecao">
                                                        Seleção Pública
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="tipo_licitacao" id="dispensa" value="2" 
                                                           {{ old('tipo_licitacao', $dados->tipo_licitacao) == 2 ? 'checked' : '' }} required>
                                                    <label class="form-check-label fw-bold" for="dispensa">
                                                        Dispensa de Licitação
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="tipo_licitacao" id="inexigibilidade" value="3" 
                                                           {{ old('tipo_licitacao', $dados->tipo_licitacao) == 3 ? 'checked' : '' }} required>
                                                    <label class="form-check-label fw-bold" for="inexigibilidade">
                                                        Inexigibilidade
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="card border-success">
                                    <div class="card-header bg-principal text-white">
                                        <h6 class="mb-0">Dados Básicos</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="ordem" class="form-label fw-bold">Ordem</label>
                                                <input type="number" class="form-control" id="ordem" name="ordem" 
                                                       value="{{ old('ordem', $dados->ordem) }}" min="1">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="processo" class="form-label fw-bold">Processo</label>
                                                <input type="text" class="form-control" id="processo" name="processo" 
                                                       value="{{ old('processo', $dados->processo) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="projeto" class="form-label fw-bold">Projeto</label>
                                                <input type="text" class="form-control" id="projeto" name="projeto" 
                                                       value="{{ old('projeto', $dados->projeto) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="orgao" class="form-label fw-bold">Órgão <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="orgao" name="orgao" 
                                                       value="{{ old('orgao', $dados->orgao) }}" required>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <label for="objeto" class="form-label fw-bold">Objeto</label>
                                                <textarea class="form-control" id="objeto" name="objeto" rows="3">{{ old('objeto', $dados->objeto) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="card border-success">
                                    <div class="card-header bg-principal text-white">
                                        <h6 class="mb-0">Datas</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="datapublicacao" class="form-label fw-bold">Data de Publicação</label>
                                                <input type="date" class="form-control" id="datapublicacao" name="datapublicacao" 
                                                       value="{{ old('datapublicacao', $dados->datapublicacao) }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="dataabertura" class="form-label fw-bold">Data de Abertura</label>
                                                <input type="date" class="form-control" id="dataabertura" name="dataabertura" 
                                                       value="{{ old('dataabertura', $dados->dataabertura) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="card border-success">
                                    <div class="card-header bg-principal text-white">
                                        <h6 class="mb-0">Documentos (PDF, DOC, DOCX)</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="licitacao" class="form-label fw-bold">
                                                    <i class="bi bi-file-earmark-pdf"></i> Licitação
                                                </label>
                                                <input type="file" class="form-control" id="licitacao" name="licitacao" 
                                                       accept=".pdf,.doc,.docx">
                                                @if($dados->licitacao)
                                                    <small class="text-success">
                                                        <i class="bi bi-check-circle"></i> Arquivo atual: 
                                                        <a href="{{ asset($dados->licitacao) }}" target="_blank">Visualizar</a>
                                                    </small>
                                                @endif
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="ataabertura" class="form-label fw-bold">
                                                    <i class="bi bi-file-earmark-text"></i> Ata de Abertura
                                                </label>
                                                <input type="file" class="form-control" id="ataabertura" name="ataabertura" 
                                                       accept=".pdf,.doc,.docx">
                                                @if($dados->ataabertura)
                                                    <small class="text-success">
                                                        <i class="bi bi-check-circle"></i> Arquivo atual: 
                                                        <a href="{{ asset($dados->ataabertura) }}" target="_blank">Visualizar</a>
                                                    </small>
                                                @endif
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="contratoconvenio" class="form-label fw-bold">
                                                    <i class="bi bi-file-earmark-bar-graph"></i> Contrato/Convênio
                                                </label>
                                                <input type="file" class="form-control" id="contratoconvenio" name="contratoconvenio" 
                                                       accept=".pdf,.doc,.docx">
                                                @if($dados->contratoconvenio)
                                                    <small class="text-success">
                                                        <i class="bi bi-check-circle"></i> Arquivo atual: 
                                                        <a href="{{ asset($dados->contratoconvenio) }}" target="_blank">Visualizar</a>
                                                    </small>
                                                @endif
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="resultado" class="form-label fw-bold">
                                                    <i class="bi bi-file-earmark-check"></i> Resultado
                                                </label>
                                                <input type="file" class="form-control" id="resultado" name="resultado" 
                                                       accept=".pdf,.doc,.docx">
                                                @if($dados->resultado)
                                                    <small class="text-success">
                                                        <i class="bi bi-check-circle"></i> Arquivo atual: 
                                                        <a href="{{ asset($dados->resultado) }}" target="_blank">Visualizar</a>
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success btn-lg me-3">
                                    <i class="bi bi-check-lg"></i> {{ $dados->id ? 'Atualizar' : 'Salvar' }}
                                </button>
                                <a href="{{ route('licitacoes.listar') }}" class="btn btn-secondary btn-lg">
                                    <i class="bi bi-arrow-left"></i> Cancelar
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection