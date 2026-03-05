@extends('layout.header')
@section('title', $dados->id ? 'Editar Licitação' : 'Nova Licitação')
@section('conteudo')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pncp.css') }}">
@endpush

        <div class="form-page-wrapper">
            <div class="page-breadcrumb">
                <a href="{{ route('licitacoes.listar') }}">Licitações</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <span>{{ $dados->id ? 'Editar' : 'Nova' }}</span>
            </div>

           <a href="{{ route('licitacoes.listar') }}" class="btn btn-link text-success fw-semibold text-decoration-none mb-3">
                <i class="bi bi-arrow-left"></i> Voltar a Lista
            </a>

            <div class="page-title-bar">
                <h4>
                    <span class="title-icon"><i class="bi bi-file-earmark-check"></i></span>
                    Nova Licitação
                </h4>
            </div>

            @if($errors->any())
            <div class="clean-alert alert-danger alert-dismissible fade show mb-3" role="alert">
                <strong><i class="bi bi-exclamation-circle me-1"></i> Erros encontrados:</strong>
                <ul class="mb-0 mt-2" style="padding-left: 1.25rem;">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" style="font-size: 0.7rem;"></button>
            </div>
            @endif

            <form action="{{ route('licitacoes.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $dados->id }}">

                <div class="clean-card">
                    <div class="clean-card-body">
                        <div class="tipo-section-label">
                            <i class="bi bi-bookmark-check-fill"></i>
                            Selecione o tipo de licitação
                        </div>
                        <div class="tipo-licitacao-container">
                            <div class="tipo-licitacao-option">
                                <input type="radio" id="selecao" name="tipo_licitacao" value="1"
                                    {{ old('tipo_licitacao', $dados->tipo_licitacao) == 1 ? 'checked' : '' }} required>
                                <label for="selecao" class="tipo-licitacao-label">
                                    <div class="radio-circle"></div>
                                    <div class="tipo-licitacao-text">
                                        <span class="label-main">Seleção Pública</span>
                                        <span class="label-sub">Processo licitatório aberto</span>
                                    </div>
                                </label>
                            </div>
                            <div class="tipo-licitacao-option">
                                <input type="radio" id="dispensa" name="tipo_licitacao" value="2"
                                    {{ old('tipo_licitacao', $dados->tipo_licitacao) == 2 ? 'checked' : '' }}>
                                <label for="dispensa" class="tipo-licitacao-label">
                                    <div class="radio-circle"></div>
                                    <div class="tipo-licitacao-text">
                                        <span class="label-main">Dispensa de Licitação</span>
                                        <span class="label-sub">Contratação direta</span>
                                    </div>
                                </label>
                            </div>
                            <div class="tipo-licitacao-option">
                                <input type="radio" id="inexigibilidade" name="tipo_licitacao" value="3"
                                    {{ old('tipo_licitacao', $dados->tipo_licitacao) == 3 ? 'checked' : '' }}>
                                <label for="inexigibilidade" class="tipo-licitacao-label">
                                    <div class="radio-circle"></div>
                                    <div class="tipo-licitacao-text">
                                        <span class="label-main">Inexigibilidade</span>
                                        <span class="label-sub">Contração sem competição</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                        @error('tipo_licitacao')
                        <div class="text-danger" style="font-size: 0.8rem;">
                            <i class="bi bi-exclamation-triangle-fill me-1"></i>{{ $message }}
                        </div>
                        @enderror
                        <div id="campo-somente-site" style="display:none;" class="mt-3 ms-1">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="somenteSite" name="somente_site" value="1"
                                {{ old('somente_site', $dados->somente_site) ? 'checked' : '' }}>
                            <label class="form-check-label fw-semibold text-secondary" for="somenteSite">
                                <i class="bi bi-globe me-1"></i> Postar somente no site?
                            </label>
                        </div>
                    </div>
                    </div>
                </div>

                <ul class="nav modern-tab" id="licitacaoTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="dados-basicos-tab" type="button" role="tab" data-bs-toggle="tab" data-bs-target="#dados-basicos">
                            <i class="bi bi-file-text"></i> Dados Básicos
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link disabled" id="itens-compra-tab" type="button" role="tab" data-bs-toggle="tab" data-bs-target="#itens-compra">
                            <i class="bi bi-cart-check"></i> Itens de Compra
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link disabled" id="documentos-tab" type="button" role="tab"  data-bs-toggle="tab" data-bs-target="#documentos">
                            <i class="bi bi-file-pdf"></i> Documentos
                        </button>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="dados-basicos" role="tabpanel">
                        <div class="clean-card">
                            <div class="clean-card-header">
                                <span class="header-dot"></span>
                                <i class="bi bi-file-text"></i>
                                <h5>Dados Básicos</h5>
                            </div>
                            <div class="clean-card-body">
                            <div class="row">
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="numeroProcesso">Número do Processo</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-border-width"></i>
                                        <input type="text" class="form-control" id="numeroProcesso" name="numeroProcesso"
                                            value="{{ old('numeroProcesso', $dados->numeroProcesso) }}" placeholder="N° com barra. Ex: 26/2026" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2" id="campoOrdem" style="display: none;">
                                <div class="modern-input-group">
                                    <label for="ordem" id="labelOrdem">Ordem</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-sort-numeric-down"></i>
                                        <input type="text" class="form-control" id="ordem" name="ordem"
                                            value="{{ old('ordem', $dados->ordem) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="AnoCompra">Ano da Contratação</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-calendar-date"></i>
                                        <input type="text" class="form-control" id="AnoCompra" name="AnoCompra"
                                            value="{{ old('AnoCompra', $dados->AnoCompra) }}" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="numeroCompra">Número do Contrato</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-123"></i>
                                        <input type="text" class="form-control" id="numeroCompra" name="numeroCompra"
                                            value="{{ old('numeroCompra', $dados->numeroCompra) }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="projeto">Projeto</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-file-earmark-person-fill"></i>
                                        <input type="text" class="form-control" id="projeto" name="projeto"
                                            value="{{ old('projeto', $dados->projeto) }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="tipoInstrumentoConvocatorioId">Instrumento Convocatório</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-file-medical"></i>
                                        <select class="form-select" id="tipoInstrumentoConvocatorioId" name="tipoInstrumentoConvocatorioId" required>
                                            <option value="">Selecione...</option>
                                            <option value="1"{{ old('tipoInstrumentoConvocatorioId', $dados->tipoInstrumentoConvocatorioId)=='1' ? 'selected' : '' }}>Edital</option>
                                            <option value="2"{{ old('tipoInstrumentoConvocatorioId', $dados->tipoInstrumentoConvocatorioId)=='2' ? 'selected' : '' }}>Aviso de Contratação Direta</option>
                                            <option value="3"{{ old('tipoInstrumentoConvocatorioId', $dados->tipoInstrumentoConvocatorioId)=='3' ? 'selected' : '' }}>Ato que autoriza a Contratação Direta</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-divider"></div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="cnpj">CNPJ</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-person-rolodex"></i>
                                        <input type="text" class="form-control" id="orgao" name="orgao" value="83.476.911/0001-17" readonly required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="orgao_site">Órgão Site</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-building"></i>
                                        <input type="text" class="form-control" id="orgao_site" name="orgao_site"
                                            value="{{ old('orgao_site', $dados->orgao_site) }}" placeholder="Nome do órgão para exibição no site">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="codigoUnidadeCompradora">Unidade Compradora</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-map"></i>
                                        <input type="text" class="form-control" id="codigoUnidadeCompradora" name="codigoUnidadeCompradora" value="42" readonly required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="amparoLegalId">Amparo Legal</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-vector-pen"></i>
                                        <select class="form-select" id="amparoLegalId" name="amparoLegalId" required>
                                            <option value="">Selecione...</option>
                                            <option value="1"{{ old('amparoLegalId', $dados->amparoLegalId ??'1') == '1' ? 'selected' : '' }}>Lei 14.133/2021, Art. 28, I</option>
                                            <option value="2"{{ old('amparoLegalId', $dados->amparoLegalId)=='2' ? 'selected' : '' }}>Lei 14.133/2021, Art. 28, II</option>
                                            <option value="3"{{ old('amparoLegalId', $dados->amparoLegalId)=='3' ? 'selected' : '' }}>Lei 14.133/2021, Art. 28, III</option>
                                            <option value="4"{{ old('amparoLegalId', $dados->amparoLegalId)=='4' ? 'selected' : '' }}>Lei 14.133/2021, Art. 28, IV</option>
                                            <option value="5"{{ old('amparoLegalId', $dados->amparoLegalId)=='5' ? 'selected' : '' }}>Lei 14.133/2021, Art. 28, V</option>
                                            <option value="6"{{ old('amparoLegalId', $dados->amparoLegalId)=='6' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, I</option>
                                            <option value="7"{{ old('amparoLegalId', $dados->amparoLegalId)=='7' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, II</option>
                                            <option value="8"{{ old('amparoLegalId', $dados->amparoLegalId)=='8' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, III, a</option>
                                            <option value="9"{{ old('amparoLegalId', $dados->amparoLegalId)=='9' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, III, b</option>
                                            <option value="10"{{ old('amparoLegalId', $dados->amparoLegalId)=='10' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, III, c</option>
                                            <option value="11"{{ old('amparoLegalId', $dados->amparoLegalId)=='11' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, III, d</option>
                                            <option value="12"{{ old('amparoLegalId', $dados->amparoLegalId)=='12' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, III, e</option>
                                            <option value="13"{{ old('amparoLegalId', $dados->amparoLegalId)=='13' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, III, f</option>
                                            <option value="14"{{ old('amparoLegalId', $dados->amparoLegalId)=='14' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, III, g</option>
                                            <option value="15"{{ old('amparoLegalId', $dados->amparoLegalId)=='15' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, III, h</option>
                                            <option value="16"{{ old('amparoLegalId', $dados->amparoLegalId)=='16' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, IV</option>
                                            <option value="17"{{ old('amparoLegalId', $dados->amparoLegalId)=='17' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, V</option>
                                            <option value="18"{{ old('amparoLegalId', $dados->amparoLegalId)=='18' ? 'selected' : '' }}>Lei 14.133/2021, Art. 75, I</option>
                                            <option value="19"{{ old('amparoLegalId', $dados->amparoLegalId)=='19' ? 'selected' : '' }}>Lei 14.133/2021, Art. 75, II</option>
                                            <option value="20"{{ old('amparoLegalId', $dados->amparoLegalId)=='20' ? 'selected' : '' }}>Lei 14.133/2021, Art. 75, III, a</option>
                                            <option value="21"{{ old('amparoLegalId', $dados->amparoLegalId)=='21' ? 'selected' : '' }}>Lei 14.133/2021, Art. 75, III, b</option>
                                            <option value="22"{{ old('amparoLegalId', $dados->amparoLegalId)=='22' ? 'selected' : '' }}>Lei 14.133/2021, Art. 75, IV, a</option>
                                            <option value="23"{{ old('amparoLegalId', $dados->amparoLegalId)=='23' ? 'selected' : '' }}>Lei 14.133/2021, Art. 75, IV, b</option>
                                            <option value="24"{{ old('amparoLegalId', $dados->amparoLegalId)=='24' ? 'selected' : '' }}>Lei 14.133/2021, Art. 75, IV, c</option>
                                            <option value="25"{{ old('amparoLegalId', $dados->amparoLegalId)=='25' ? 'selected' : '' }}>Lei 14.133/2021, Art. 75, IV, d</option>
                                            <option value="26"{{ old('amparoLegalId', $dados->amparoLegalId)=='26' ? 'selected' : '' }}>Lei 14.133/2021, Art. 75, IV, e</option>
                                            <option value="27"{{ old('amparoLegalId', $dados->amparoLegalId)=='27' ? 'selected' : '' }}>Lei 14.133/2021, Art. 75, IV, f</option>
                                            <option value="28"{{ old('amparoLegalId', $dados->amparoLegalId)=='28' ? 'selected' : '' }}>Lei 14.133/2021, Art. 75, IV, g</option>
                                            <option value="29"{{ old('amparoLegalId', $dados->amparoLegalId)=='29' ? 'selected' : '' }}>Lei 14.133/2021, Art. 75, IV, h</option>
                                            <option value="30"{{ old('amparoLegalId', $dados->amparoLegalId)=='30' ? 'selected' : '' }}>Lei 14.133/2021, Art. 75, IV, i</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="modalidadeId">Modalidade da Contratação</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-briefcase"></i>
                                        <select class="form-select" id="modalidadeId" name="modalidadeId" required>
                                            <option value="">Selecione...</option>
                                            <option value="1"{{ old('modalidadeId', $dados->modalidadeId)== '1' ? 'selected' : '' }}>Leilão - Eletrônico</option>
                                            <option value="2"{{ old('modalidadeId', $dados->modalidadeId)== '2' ? 'selected' : '' }}>Diálogo Competitivo</option>
                                            <option value="3"{{ old('modalidadeId', $dados->modalidadeId)== '3' ? 'selected' : '' }}>Concurso</option>
                                            <option value="4"{{ old('modalidadeId', $dados->modalidadeId)== '4' ? 'selected' : '' }}>Concorrência - Eletrônica</option>
                                            <option value="5"{{ old('modalidadeId', $dados->modalidadeId)== '5' ? 'selected' : '' }}>Concorrência - Presencial</option>
                                            <option value="6"{{ old('modalidadeId', $dados->modalidadeId ?? '6') =='6' ? 'selected' : '' }}>Pregão - Eletrônico</option>
                                            <option value="7"{{ old('modalidadeId', $dados->modalidadeId)== '7' ? 'selected' : '' }}>Pregão - Presencial</option>
                                            <option value="8"{{ old('modalidadeId', $dados->modalidadeId)== '8' ? 'selected' : '' }}>Dispensa de Licitação</option>
                                            <option value="9"{{ old('modalidadeId', $dados->modalidadeId)== '9' ? 'selected' : '' }}>Inexigibilidade</option>
                                            <option value="10"{{ old('modalidadeId', $dados->modalidadeId)== '10' ? 'selected' : '' }}>Manifestação de Interesse</option>
                                            <option value="11"{{ old('modalidadeId', $dados->modalidadeId)== '11' ? 'selected' : '' }}>Pré-qualificação</option>
                                            <option value="12"{{ old('modalidadeId', $dados->modalidadeId)== '12' ? 'selected' : '' }}>Credenciamento</option>
                                            <option value="13"{{ old('modalidadeId', $dados->modalidadeId)== '13' ? 'selected' : '' }}>Leilão - Presencial</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="modoDisputaId">Modo de Disputa</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-crosshair2"></i>
                                        <select class="form-select" id="modoDisputaId" name="modoDisputaId" required>
                                            <option value="">Selecione...</option>
                                            <option value="1" {{ old('modoDisputaId', $dados->modoDisputaId)=='1' ? 'selected' : '' }}>Aberto</option>
                                            <option value="2" {{ old('modoDisputaId', $dados->modoDisputaId)=='2' ? 'selected' : '' }}>Fechado</option>
                                            <option value="3" {{ old('modoDisputaId', $dados->modoDisputaId)=='3' ? 'selected' : '' }}>Aberto-Fechado</option>
                                            <option value="4" {{ old('modoDisputaId', $dados->modoDisputaId)=='4' ? 'selected' : '' }}>Dispensa Com Disputa</option>
                                            <option value="5" {{ old('modoDisputaId', $dados->modoDisputaId)=='5' ? 'selected' : '' }}>Não se aplica</option>
                                            <option value="6" {{ old('modoDisputaId', $dados->modoDisputaId)=='6' ? 'selected' : '' }}>Fechado-Aberto</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="srp">Registro de Preço</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-coin"></i>
                                        <select class="form-select" id="srp" name="srp" required>
                                            <option value="">Selecione...</option>
                                            <option value="1" {{ old('srp', $dados->srp) == '1' || old('srp', $dados->srp) === true ? 'selected' : '' }}>Sim</option>
                                            <option value="0" {{ old('srp', $dados->srp) == '0' || old('srp', $dados->srp) === false ? 'selected' : '' }}>Não</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="dataAberturaProposta">Data de Início de Recebimento</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-calendar-week"></i>
                                        <input type="date" class="form-control" id="dataAberturaProposta" name="dataAberturaProposta"
                                            value="{{ old('dataAberturaProposta', $dados->dataAberturaProposta) }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="dataEncerramentoProposta">Data de Fim de Recebimento</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-calendar-week-fill"></i>
                                        <input type="date" class="form-control" id="dataEncerramentoProposta" name="dataEncerramentoProposta"
                                            value="{{ old('dataEncerramentoProposta', $dados->dataEncerramentoProposta) }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="modern-input-group">
                                    <label for="objetoCompra">Objeto</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-blockquote-right"></i>
                                        <textarea class="form-control" id="objetoCompra" name="objetoCompra" rows="4" required>{{ old('objetoCompra', $dados->objetoCompra) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end mt-3">
                            <button type="button" class="btn-primary-green" onclick="irParaAba('itens-compra-tab')">
                                Próximo <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="itens-compra" role="tabpanel">
                <div class="clean-card">
                    <div class="clean-card-header">
                        <span class="header-dot"></span>
                        <i class="bi bi-cart-check"></i>
                        <h5>Itens de Compra</h5>
                    </div>
                    <div class="clean-card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="numeroItem">Número do Item</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-tags-fill"></i>
                                        <input type="number" class="form-control" id="numeroItem" name="numeroItem" value="{{ old('numeroItem', $dados->numeroItem) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="materialOuServico">Material ou Serviço?</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-wrench"></i>
                                        <select class="form-select" id="materialOuServico" name="materialOuServico">
                                            <option value="">Selecione...</option>
                                            <option value="M" {{ old('materialOuServico', $dados->materialOuServico) == 'M' ? 'selected' : '' }}>Material</option>
                                            <option value="S" {{ old('materialOuServico', $dados->materialOuServico) == 'S' ? 'selected' : '' }}>Serviço</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="criterioJulgamentoId">Critério de Julgamento</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-clipboard-check"></i>
                                        <select class="form-select" id="criterioJulgamentoId" name="criterioJulgamentoId">
                                            <option value="">Selecione...</option>
                                            <option value="1" {{ old('criterioJulgamentoId', $dados->criterioJulgamentoId) == '1' ? 'selected' : '' }}>Menor Preço</option>
                                            <option value="2" {{ old('criterioJulgamentoId', $dados->criterioJulgamentoId) == '2' ? 'selected' : '' }}>Maior Desconto</option>
                                            <option value="4" {{ old('criterioJulgamentoId', $dados->criterioJulgamentoId) == '4' ? 'selected' : '' }}>Técnica e Preço</option>
                                            <option value="5" {{ old('criterioJulgamentoId', $dados->criterioJulgamentoId) == '5' ? 'selected' : '' }}>Maior Lance</option>
                                            <option value="6" {{ old('criterioJulgamentoId', $dados->criterioJulgamentoId) == '6' ? 'selected' : '' }}>Maior Retorno Econômico</option>
                                            <option value="7" {{ old('criterioJulgamentoId', $dados->criterioJulgamentoId) == '7' ? 'selected' : '' }}>Não se aplica</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="tipoBeneficioId">Benefício</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-gift"></i>
                                        <select class="form-select" id="tipoBeneficioId" name="tipoBeneficioId">
                                            <option value="">Selecione...</option>
                                            <option value="1" {{ old('tipoBeneficioId', $dados->tipoBeneficioId) == '1' ? 'selected' : '' }}>Participação Exclusiva ME/EPP</option>
                                            <option value="2" {{ old('tipoBeneficioId', $dados->tipoBeneficioId) == '2' ? 'selected' : '' }}>Subcontratação para ME/EPP</option>
                                            <option value="3" {{ old('tipoBeneficioId', $dados->tipoBeneficioId) == '3' ? 'selected' : '' }}>Cota Reservada para ME/EPP</option>
                                            <option value="4" {{ old('tipoBeneficioId', $dados->tipoBeneficioId) == '4' ? 'selected' : '' }}>Sem Benefício</option>
                                            <option value="5" {{ old('tipoBeneficioId', $dados->tipoBeneficioId) == '5' ? 'selected' : '' }}>Não se aplica</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="incentivoProdutivoBasico">Incentivo Produtivo Básico?</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-building-gear"></i>
                                        <select class="form-select" id="incentivoProdutivoBasico" name="incentivoProdutivoBasico">
                                            <option value="">Selecione...</option>
                                            <option value="1" {{ old('incentivoProdutivoBasico', $dados->incentivoProdutivoBasico) === true ? 'selected' : '' }}>Sim</option>
                                            <option value="0" {{ old('incentivoProdutivoBasico', $dados->incentivoProdutivoBasico) === false ? 'selected' : '' }}>Não</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="inConteudoNacional">Exigência de Conteúdo Nacional?</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-airplane-engines"></i>
                                        <select class="form-select" id="inConteudoNacional" name="inConteudoNacional">
                                            <option value="">Selecione...</option>
                                            <option value="1" {{ old('inConteudoNacional', $dados->inConteudoNacional) === true ? 'selected' : '' }}>Sim</option>
                                            <option value="0" {{ old('inConteudoNacional', $dados->inConteudoNacional) === false ? 'selected' : '' }}>Não</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-divider"></div>
                        <div class="row">
                            <div class="col-md-1">
                                <div class="modern-input-group">
                                    <label for="quantidade">Quantidade</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-cart-plus"></i>
                                        <input type="number" step="0.01" class="form-control" id="quantidade" name="quantidade" value="{{ old('quantidade', $dados->quantidade) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="descricao">Descrição do Item</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-tags"></i>
                                        <input type="text" class="form-control" id="descricao" name="descricao" value="{{ old('descricao', $dados->descricao) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="unidadeMedida">Unidade de Medida</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-box-seam"></i>
                                        <input type="text" class="form-control" id="unidadeMedida" name="unidadeMedida" value="{{ old('unidadeMedida', $dados->unidadeMedida) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="orcamentoSigiloso">Orçamento Sigiloso?</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-shield-lock"></i>
                                        <select class="form-select" id="orcamentoSigiloso" name="orcamentoSigiloso">
                                            <option value="">Selecione...</option>
                                            <option value="1"{{ old('orcamentoSigiloso', $dados->orcamentoSigiloso) === true ? 'selected' : '' }}>Sim</option>
                                            <option value="0"{{ old('orcamentoSigiloso', $dados->orcamentoSigiloso) === false ? 'selected' : '' }}>Não</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="valorUnitarioEstimado">Valor Unitário Estimado</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-cash"></i>
                                        <input type="number" step="0.01" class="form-control" id="valorUnitarioEstimado" name="valorUnitarioEstimado" value="{{ old('valorUnitarioEstimado', $dados->valorUnitarioEstimado) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="valorTotal">Valor Total</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-cash-coin"></i>
                                        <input type="number" step="0.01" class="form-control" id="valorTotal" name="valorTotal" value="{{ old('valorTotal', $dados->valorTotal) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-divider"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="aplicabilidadeMargemPreferenciaNormal">Margem de Preferência Normal?</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-sort-up-alt"></i>
                                        <select class="form-select" id="aplicabilidadeMargemPreferenciaNormal" name="aplicabilidadeMargemPreferenciaNormal" onchange="habilitarCampo('aplicabilidadeMargemPreferenciaNormal', 'percentualMargemPreferenciaNormal')" required>
                                            <option value="">Selecione...</option>
                                            <option value="1" {{ old('aplicabilidadeMargemPreferenciaNormal', $dados->aplicabilidadeMargemPreferenciaNormal) === true ? 'selected' : '' }}>Sim</option>
                                            <option value="0"{{ old('aplicabilidadeMargemPreferenciaNormal', $dados->aplicabilidadeMargemPreferenciaNormal) === false ? 'selected' : '' }}>Não</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="aplicabilidadeMargemPreferenciaAdicional">Margem de Preferência Adicional?</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-sort-up"></i>
                                        <select class="form-select" id="aplicabilidadeMargemPreferenciaAdicional" name="aplicabilidadeMargemPreferenciaAdicional" onchange="habilitarCampo('aplicabilidadeMargemPreferenciaAdicional', 'percentualMargemPreferenciaAdicional')" required>
                                            <option value="">Selecione...</option>
                                            <option value="1"{{ old('aplicabilidadeMargemPreferenciaAdicional', $dados->aplicabilidadeMargemPreferenciaAdicional) === true ? 'selected' : '' }}>Sim</option>
                                            <option value="0"{{ old('aplicabilidadeMargemPreferenciaAdicional', $dados->aplicabilidadeMargemPreferenciaAdicional) === false ? 'selected' : '' }}>Não</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="percentualMargemPreferenciaNormal">Percentual Margem Normal</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-sort-numeric-up-alt"></i>
                                        <input type="number" step="0.01" class="form-control" id="percentualMargemPreferenciaNormal" name="percentualMargemPreferenciaNormal" value="{{ old('percentualMargemPreferenciaNormal', $dados->percentualMargemPreferenciaNormal) }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="percentualMargemPreferenciaAdicional">Percentual Margem Adicional</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-sort-numeric-up-alt"></i>
                                        <input type="number" step="0.01" class="form-control" id="percentualMargemPreferenciaAdicional" name="percentualMargemPreferenciaAdicional" value="{{ old('percentualMargemPreferenciaAdicional', $dados->percentualMargemPreferenciaAdicional) }}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="justificativaPresencialContainer">
                            <div class="col-md-12">
                                <div class="modern-input-group">
                                    <label for="justificativaPresencial">Justificativa Presencial</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-file-text"></i>
                                        <textarea rows="4" class="form-control" id="justificativaPresencial" name="justificativaPresencial">{{ old('justificativaPresencial', $dados->justificativaPresencial) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end mb-3">
                            <button type="button" class="btn-primary-green" id="addItem">
                                <i class="bi bi-plus-circle"></i> Adicionar Item
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="clean-table" id="tabelaItens">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Descrição</th>
                                        <th>Qtd</th>
                                        <th>Valor Unitário</th>
                                        <th>Valor Total</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <input type="hidden" name="itensCompra" id="itensCompra">
                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn-outline-green" onclick="irParaAba('dados-basicos-tab', true)">
                                <i class="bi bi-arrow-left"></i> Anterior
                            </button>
                            <button type="button" class="btn-primary-green" onclick="irParaAba('documentos-tab')">
                                Próximo <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="documentos" role="tabpanel">
                <div class="clean-card">
                    <div class="clean-card-header">
                        <span class="header-dot"></span>
                        <i class="bi bi-file-pdf"></i>
                        <h5>Documentos (PDF, DOC, DOCX)</h5>
                    </div>
                    <div class="clean-card-body">
                        <div id="documentos-selecao-publica">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="modern-input-group">
                                        <label for="Titulo-Documento">Título do Edital</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-card-text"></i>
                                            <input type="text" class="form-control" id="Titulo-Documento" name="titulo_documento" value="{{ old('titulo_documento', $dados->titulo_documento) }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="modern-input-group">
                                        <label for="tipo_documento_id">Tipo de Documento</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-clipboard"></i>
                                            <select class="form-select" id="tipo_documento_id" name="tipo_documento_id" required>
                                                <option value="">Selecione...</option>
                                                <option value="1" {{ old('tipo_documento_id', $dados->tipo_documento_id)=='1' ? 'selected' : '' }}>Aviso de Contratação Direta</option>
                                                <option value="2" {{ old('tipo_documento_id', $dados->tipo_documento_id)=='2' ? 'selected' : '' }}>Edital</option>
                                                <option value="3" {{ old('tipo_documento_id', $dados->tipo_documento_id)=='3' ? 'selected' : '' }}>Minuta do Contrato</option>
                                                <option value="4" {{ old('tipo_documento_id', $dados->tipo_documento_id)=='4' ? 'selected' : '' }}>Termo de Referência</option>
                                                <option value="5" {{ old('tipo_documento_id', $dados->tipo_documento_id)=='5' ? 'selected' : '' }}>Anteprojeto</option>
                                                <option value="6" {{ old('tipo_documento_id', $dados->tipo_documento_id)=='6' ? 'selected' : '' }}>Projeto Básico</option>
                                                <option value="7" {{ old('tipo_documento_id', $dados->tipo_documento_id)=='7' ? 'selected' : '' }}>Estudo Técnico Preliminar</option>
                                                <option value="8" {{ old('tipo_documento_id', $dados->tipo_documento_id)=='8' ? 'selected' : '' }}>Projeto Executivo</option>
                                                <option value="9" {{ old('tipo_documento_id', $dados->tipo_documento_id)=='9' ? 'selected' : '' }}>Mapa de Riscos</option>
                                                <option value="10" {{ old('tipo_documento_id', $dados->tipo_documento_id)=='10' ? 'selected' : '' }}>DFD</option>
                                                <option value="19" {{ old('tipo_documento_id', $dados->tipo_documento_id)=='19' ? 'selected' : '' }}>Minuta de Ata de Registro de Preços</option>
                                                <option value="20" {{ old('tipo_documento_id', $dados->tipo_documento_id)=='20' ? 'selected' : '' }}>Ato que autoriza a Contratação Direta</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="modern-input-group">
                                        <label for="datapublicacao">Data de Publicação</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-calendar-check"></i>
                                            <input type="date" class="form-control" id="datapublicacao" name="datapublicacao" value="{{ old('datapublicacao', $dados->datapublicacao) }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="modern-input-group">
                                        <label for="licitacao"><i class="bi bi-file-earmark-pdf me-1"></i>Arquivo Edital</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-paperclip"></i>
                                            <input type="file" class="form-control" id="licitacao" name="licitacao" accept=".pdf,.doc,.docx" required>
                                        </div>
                                        @if($dados->licitacao)
                                        <small class="d-block mt-1" style="color: var(--green-800); font-size: 0.78rem;">
                                            <i class="bi bi-check-circle me-1"></i>Arquivo atual:
                                            <a href="{{ asset($dados->licitacao) }}" target="_blank" style="color: var(--green-900);">Visualizar</a>
                                        </small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="doc-accordion mt-3">
                                <div class="doc-accordion-item doc-warning">
                                    <div class="doc-accordion-header" onclick="toggleAccordion(this)">
                                        <div class="doc-accordion-icon"><i class="bi bi-file-earmark-bar-graph-fill"></i></div>
                                        <div class="doc-accordion-info">
                                            <h6>Contrato/Convênio</h6>
                                            <small>Documento do contrato firmado</small>
                                        </div>
                                        <div class="doc-accordion-toggle"><i class="bi bi-chevron-down"></i></div>
                                    </div>
                                    <div class="doc-accordion-body">
                                        <div class="doc-accordion-content">
                                            @if($dados->contratoconvenio)
                                            <div class="doc-current-file">
                                                <div class="file-info"><i class="bi bi-file-earmark-check"></i><span>Arquivo atual disponível</span></div>
                                                <a href="{{ Storage::url($dados->contratoconvenio) }}" target="_blank" class="btn-view"><i class="bi bi-eye"></i> Visualizar</a>
                                            </div>
                                            @endif
                                            <div class="doc-drop-zone">
                                                <i class="bi bi-cloud-arrow-up"></i>
                                                <span>Clique para selecionar ou arraste o arquivo</span>
                                                <small>PDF, DOC, DOCX (máx. 10MB)</small>
                                                <input type="file" name="contratoconvenio" accept=".pdf,.doc,.docx" onchange="showFileName(this, 'contrato-selecao-name')">
                                            </div>
                                            <div class="doc-file-selected" id="contrato-selecao-name"><i class="bi bi-file-earmark"></i><span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="documentos-dispensa-inexigibilidade" style="display: none;">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <div class="modern-input-group">
                                        <label for="datapublicacao_accordion">Data de Publicação</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-calendar-check"></i>
                                            <input type="date" class="form-control" id="datapublicacao_accordion" value="{{ old('datapublicacao', $dados->datapublicacao) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="doc-accordion">
                                <div class="doc-accordion-item doc-primary">
                                    <div class="doc-accordion-header" onclick="toggleAccordion(this)">
                                        <div class="doc-accordion-icon"><i class="bi bi-file-earmark-pdf-fill"></i></div>
                                        <div class="doc-accordion-info">
                                            <h6 id="doc-principal-titulo">Documento Principal</h6>
                                            <small id="doc-principal-subtitulo">Documento da contratação direta</small>
                                        </div>
                                        @if($dados->licitacao)<span class="doc-accordion-status has-file"><i class="bi bi-check-circle-fill"></i> Enviado</span>@else<span class="doc-accordion-status no-file"><i class="bi bi-clock"></i> Pendente</span>@endif
                                        <div class="doc-accordion-toggle"><i class="bi bi-chevron-down"></i></div>
                                    </div>
                                    <div class="doc-accordion-body">
                                        <div class="doc-accordion-content">
                                            @if($dados->licitacao)
                                            <div class="doc-current-file">
                                                <div class="file-info"><i class="bi bi-file-earmark-check"></i><span>Arquivo atual disponível</span></div>
                                                <a href="{{ Storage::url($dados->licitacao) }}" target="_blank" class="btn-view"><i class="bi bi-eye"></i> Visualizar</a>
                                            </div>
                                            @endif
                                            <div class="doc-drop-zone">
                                                <i class="bi bi-cloud-arrow-up"></i>
                                                <span>Clique para selecionar ou arraste o arquivo</span>
                                                <small>PDF, DOC, DOCX (máx. 10MB)</small>
                                                <input type="file" name="licitacao_accordion" accept=".pdf,.doc,.docx" onchange="showFileName(this, 'licitacao-accordion-name')">
                                            </div>
                                            <div class="doc-file-selected" id="licitacao-accordion-name"><i class="bi bi-file-earmark"></i><span></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-accordion-item doc-success">
                                    <div class="doc-accordion-header" onclick="toggleAccordion(this)">
                                        <div class="doc-accordion-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
                                        <div class="doc-accordion-info">
                                            <h6>Ata de Abertura e Julgamento</h6>
                                            <small>Registro da sessão de abertura</small>
                                        </div>
                                        @if($dados->ataabertura)<span class="doc-accordion-status has-file"><i class="bi bi-check-circle-fill"></i> Enviado</span>@else<span class="doc-accordion-status no-file"><i class="bi bi-clock"></i> Pendente</span>@endif
                                        <div class="doc-accordion-toggle"><i class="bi bi-chevron-down"></i></div>
                                    </div>
                                    <div class="doc-accordion-body">
                                        <div class="doc-accordion-content">
                                            @if($dados->ataabertura)
                                            <div class="doc-current-file">
                                                <div class="file-info"><i class="bi bi-file-earmark-check"></i><span>Arquivo atual disponível</span></div>
                                                <a href="{{ Storage::url($dados->ataabertura) }}" target="_blank" class="btn-view"><i class="bi bi-eye"></i> Visualizar</a>
                                            </div>
                                            @endif
                                            <div class="doc-drop-zone">
                                                <i class="bi bi-cloud-arrow-up"></i>
                                                <span>Clique para selecionar ou arraste o arquivo</span>
                                                <small>PDF, DOC, DOCX (máx. 10MB)</small>
                                                <input type="file" name="ataabertura" accept=".pdf,.doc,.docx" onchange="showFileName(this, 'ataabertura-accordion-name')">
                                            </div>
                                            <div class="doc-file-selected" id="ataabertura-accordion-name"><i class="bi bi-file-earmark"></i><span></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-accordion-item doc-warning">
                                    <div class="doc-accordion-header" onclick="toggleAccordion(this)">
                                        <div class="doc-accordion-icon"><i class="bi bi-file-earmark-bar-graph-fill"></i></div>
                                        <div class="doc-accordion-info">
                                            <h6>Contrato/Convênio</h6>
                                            <small>Documento do contrato firmado</small>
                                        </div>
                                        @if($dados->contratoconvenio)<span class="doc-accordion-status has-file"><i class="bi bi-check-circle-fill"></i> Enviado</span>@else<span class="doc-accordion-status no-file"><i class="bi bi-clock"></i> Pendente</span>@endif
                                        <div class="doc-accordion-toggle"><i class="bi bi-chevron-down"></i></div>
                                    </div>
                                    <div class="doc-accordion-body">
                                        <div class="doc-accordion-content">
                                            @if($dados->contratoconvenio)
                                            <div class="doc-current-file">
                                                <div class="file-info"><i class="bi bi-file-earmark-check"></i><span>Arquivo atual disponível</span></div>
                                                <a href="{{ Storage::url($dados->contratoconvenio) }}" target="_blank" class="btn-view"><i class="bi bi-eye"></i> Visualizar</a>
                                            </div>
                                            @endif
                                            <div class="doc-drop-zone">
                                                <i class="bi bi-cloud-arrow-up"></i>
                                                <span>Clique para selecionar ou arraste o arquivo</span>
                                                <small>PDF, DOC, DOCX (máx. 10MB)</small>
                                                <input type="file" name="contratoconvenio" accept=".pdf,.doc,.docx" onchange="showFileName(this, 'contrato-accordion-name')">
                                            </div>
                                            <div class="doc-file-selected" id="contrato-accordion-name"><i class="bi bi-file-earmark"></i><span></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-accordion-item doc-danger">
                                    <div class="doc-accordion-header" onclick="toggleAccordion(this)">
                                        <div class="doc-accordion-icon"><i class="bi bi-file-earmark-check-fill"></i></div>
                                        <div class="doc-accordion-info">
                                            <h6>Resultado</h6>
                                            <small>Resultado final da contratação</small>
                                        </div>
                                        @if($dados->resultado)<span class="doc-accordion-status has-file"><i class="bi bi-check-circle-fill"></i> Enviado</span>@else<span class="doc-accordion-status no-file"><i class="bi bi-clock"></i> Pendente</span>@endif
                                        <div class="doc-accordion-toggle"><i class="bi bi-chevron-down"></i></div>
                                    </div>
                                    <div class="doc-accordion-body">
                                        <div class="doc-accordion-content">
                                            @if($dados->resultado)
                                            <div class="doc-current-file">
                                                <div class="file-info"><i class="bi bi-file-earmark-check"></i><span>Arquivo atual disponível</span></div>
                                                <a href="{{ Storage::url($dados->resultado) }}" target="_blank" class="btn-view"><i class="bi bi-eye"></i> Visualizar</a>
                                            </div>
                                            @endif
                                            <div class="doc-drop-zone">
                                                <i class="bi bi-cloud-arrow-up"></i>
                                                <span>Clique para selecionar ou arraste o arquivo</span>
                                                <small>PDF, DOC, DOCX (máx. 10MB)</small>
                                                <input type="file" name="resultado" accept=".pdf,.doc,.docx" onchange="showFileName(this, 'resultado-accordion-name')">
                                            </div>
                                            <div class="doc-file-selected" id="resultado-accordion-name"><i class="bi bi-file-earmark"></i><span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-divider"></div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <button type="button" class="btn-outline-green" onclick="voltarAbaAnterior()">
                                <i class="bi bi-arrow-left"></i> Anterior
                            </button>
                            <div class="d-flex gap-2">
                                <a href="{{ route('licitacoes.listar') }}" class="btn-outline-green">
                                    <i class="bi bi-x-lg"></i> Cancelar
                                </a>
                                <button type="submit" class="btn-primary-green">
                                    <i class="bi bi-check-lg"></i> {{ $dados->id ? 'Atualizar' : 'Salvar' }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
     function obterTipoLicitacao() {
    return document.querySelector('input[name="tipo_licitacao"]:checked')?.value;
}

function ehDispensaOuInexigibilidade(tipo) {
    tipo = tipo || obterTipoLicitacao();
    const somenteSite = document.getElementById('somenteSite')?.checked && tipo === '1';
    return tipo === '2' || tipo === '3' || somenteSite;
}

function toggleCampoRequired(id, ocultar) {
    const campo = document.getElementById(id);
    if (!campo) return;
    const container = campo.closest('.col-md-2, .col-md-3');
    if (container) { container.style.display = ocultar ? 'none' : 'block'; }
    if (ocultar) { campo.removeAttribute('required'); }
    else { campo.setAttribute('required', 'required'); }
}


function toggleAccordion(header) {
    header.closest('.doc-accordion-item').classList.toggle('active');
}

function showFileName(input, targetId) {
    const fileNameDiv = document.getElementById(targetId);
    const span = fileNameDiv.querySelector('span');
    if (input.files && input.files[0]) {
        span.textContent = input.files[0].name;
        fileNameDiv.classList.add('show');
    } 
    else {
        span.textContent = '';
        fileNameDiv.classList.remove('show');
    }
}

// navegação entre abas 

function irParaAba(tabId, skipValidation) {
    const abaAtiva = document.querySelector('.tab-pane.show.active');
    if (abaAtiva && !skipValidation) {
        let ok = true;

        if (abaAtiva.id === 'itens-compra') {
            if (listaItens.length === 0) {
                abaAtiva.querySelectorAll('input:not([type="hidden"]):not(:disabled), select:not(:disabled), textarea:not(:disabled)').forEach(c => {
                    if (!c.value.trim()) { c.classList.add('is-invalid'); ok = false; }
                    else c.classList.remove('is-invalid');
                });
            }
        } 
        else {
            abaAtiva.querySelectorAll('[required]').forEach(c => {
                if (!c.value.trim()) { c.classList.add('is-invalid'); ok = false; }
                else c.classList.remove('is-invalid');
            });
        }

        if (!ok) return;
    }

    if (ehDispensaOuInexigibilidade() && tabId === 'itens-compra-tab') tabId = 'documentos-tab';

    const tabEl = document.getElementById(tabId);
    tabEl.classList.remove('disabled');
    new bootstrap.Tab(tabEl).show();
    setTimeout(toggleCamposPorTipo, 100);
}

function voltarAbaAnterior() {
    irParaAba(ehDispensaOuInexigibilidade() ? 'dados-basicos-tab' : 'itens-compra-tab', true);
}

// verdinho ao digitar
    document.addEventListener('input', e => e.target.classList.remove('is-invalid'));


function habilitarCampo(selectId, inputId) {
    var select = document.getElementById(selectId);
    var input = document.getElementById(inputId);
    if (!select || !input) { console.error("Campo não encontrado:", selectId, inputId); return; }
    if (select.value === "1") { input.disabled = false; input.required = true; }
    else { input.disabled = true; input.required = false; input.value = "0"; }
}

$(function () { $('[data-toggle="tooltip"]').tooltip() });


    let itensExistentes = @json($itensCompra ?? []);
    let itensOld = @json(old('itensCompra') ? json_decode(old('itensCompra'), true) : []);
    const licitacaoId = '{{ $dados->id ?? "nova" }}';
    const storageKey = `itensCompra_${licitacaoId}`;
    const temErros = @json($errors->any());

    let listaItens;
    if (itensExistentes.length > 0) {
        listaItens = itensExistentes;
    } else if (itensOld && itensOld.length > 0) {
        listaItens = itensOld;
    } else if (licitacaoId === 'nova' && !temErros) {
        Object.keys(localStorage).forEach(key => {
            if (key.startsWith('itensCompra_nova')) { localStorage.removeItem(key); }
        });
        listaItens = [];
    } else {
        listaItens = JSON.parse(localStorage.getItem(storageKey)) || [];
    }

function renderizarTabela() {
    const tbody = document.querySelector('#tabelaItens tbody');
    tbody.innerHTML = '';
    listaItens.forEach((item, index) => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td>${item.numeroItem}</td>
            <td>${item.descricao}</td>
            <td>${item.quantidade}</td>
            <td>R$ ${parseFloat(item.valorUnitarioEstimado).toLocaleString('pt-BR', {minimumFractionDigits: 2})}</td>
            <td>R$ ${parseFloat(item.valorTotal).toLocaleString('pt-BR', {minimumFractionDigits: 2})}</td>
            <td><button type="button" class="btn btn-sm btn-danger" onclick="removerItem(${index})"><i class="bi bi-trash me-1"></i>Excluir</button></td>
        `;
        tbody.appendChild(tr);
    });
    document.getElementById('itensCompra').value = JSON.stringify(listaItens);
    localStorage.setItem(storageKey, JSON.stringify(listaItens));
}

    document.getElementById('addItem').addEventListener('click', function() {
    const campos = [
        'numeroItem','materialOuServico','inConteudoNacional','criterioJulgamentoId','tipoBeneficioId',
        'incentivoProdutivoBasico','quantidade','descricao','unidadeMedida','orcamentoSigiloso','valorUnitarioEstimado',
        'valorTotal','aplicabilidadeMargemPreferenciaNormal','aplicabilidadeMargemPreferenciaAdicional',
        'percentualMargemPreferenciaNormal','percentualMargemPreferenciaAdicional','justificativaPresencial'];

    const item = {};
    campos.forEach(id => item[id] = document.getElementById(id).value);
    listaItens.push(item);
    renderizarTabela();
    ['numeroItem', 'descricao', 'quantidade', 'valorUnitarioEstimado', 'valorTotal'].forEach(id => document.getElementById(id).value = '');
});

function removerItem(index) {
    listaItens.splice(index, 1);
    renderizarTabela();
}


    document.querySelector('form').addEventListener('submit', function(e) {
    const isDispInex = ehDispensaOuInexigibilidade();
    if (!isDispInex && listaItens.length == 0) {
        e.preventDefault();
        alert('Adicione pelo menos um item à licitação!');
        return false;
    }
    localStorage.removeItem(storageKey);
    if (isDispInex) {
        const dataAccordion = document.getElementById('datapublicacao_accordion');
        const dataOriginal = document.getElementById('datapublicacao');
        if (dataAccordion && dataOriginal) { dataOriginal.value = dataAccordion.value; }
        const arquivoAccordion = document.querySelector('input[name="licitacao_accordion"]');
        const arquivoOriginal = document.getElementById('licitacao');
        if (arquivoAccordion && arquivoAccordion.files.length > 0 && arquivoOriginal) {
            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(arquivoAccordion.files[0]);
            arquivoOriginal.files = dataTransfer.files;
        }
    }
});


function toggleJustificativaPresencial() {
    var modalidade = document.getElementById('modalidadeId').value;
    var container = document.getElementById('justificativaPresencialContainer');
    if (['5', '7', '13'].includes(modalidade)) {
        container.style.display = 'block';
    } else {
        container.style.display = 'none';
        document.getElementById('justificativaPresencial').value = '';
    }
}


function limparCamposAccordion() {
    ['licitacao_accordion', 'ataabertura', 'contrato_documento', 'resultado'].forEach(name => {
        const input = document.querySelector(`input[name="${name}"]`);
        if (input) { input.value = ''; }
    });
    document.querySelectorAll('.doc-file-selected').forEach(div => {
        div.classList.remove('show');
        const span = div.querySelector('span');
        if (span) span.textContent = '';
    });
    const dataAccordion = document.getElementById('datapublicacao_accordion');
    if (dataAccordion) { dataAccordion.value = ''; }
    document.querySelectorAll('.doc-accordion-item.active').forEach(item => { item.classList.remove('active'); });
}


function toggleCamposPorTipo() {
    const tipoLicitacao = obterTipoLicitacao();
    const isDispensa = tipoLicitacao === '2';
    const isInexigibilidade = tipoLicitacao === '3';
    const isSomenteSite = document.getElementById('somenteSite')?.checked && tipoLicitacao === '1';
    document.getElementById('campo-somente-site').style.display = tipoLicitacao === '1' ? 'block' : 'none';
    const isDispInex = isDispensa || isInexigibilidade || isSomenteSite;

    //ocultar quando somente_site
    ['tipoInstrumentoConvocatorioId','amparoLegalId','modoDisputaId','srp',
    'codigoUnidadeCompradora','modalidadeId','dataEncerramentoProposta']
        .forEach(id => toggleCampoRequired(id, isDispInex));

    ['AnoCompra','numeroCompra']
        .forEach(id => toggleCampoRequired(id, isInexigibilidade));

    document.getElementById('campoOrdem').style.display = (isDispensa || isInexigibilidade) ? 'block' : 'none';

    const labelOrdem = document.getElementById('labelOrdem');
    if (labelOrdem) {
        labelOrdem.textContent = isInexigibilidade ? 'Inexigibilidade' : 'Ordem';
    }

    document.querySelectorAll('#dados-basicos .row').forEach(row => {
        row.classList.toggle('campos-dispensa', isDispInex);
    });

    const abaItens = document.getElementById('itens-compra-tab');
    if (abaItens) { abaItens.style.display = isDispInex ? 'none' : 'block'; }

    const docSelecaoPublica = document.getElementById('documentos-selecao-publica');
    const docDispensaInexigibilidade = document.getElementById('documentos-dispensa-inexigibilidade');

    if (docSelecaoPublica && docDispensaInexigibilidade) {
        if (isDispInex) {
            docSelecaoPublica.style.display = 'none';
            docDispensaInexigibilidade.style.display = 'block';
            docSelecaoPublica.querySelectorAll('input, select').forEach(campo => campo.removeAttribute('required'));

            const docPrincipalTitulo = document.getElementById('doc-principal-titulo');
            const docPrincipalSubtitulo = document.getElementById('doc-principal-subtitulo');
                if (docPrincipalTitulo && docPrincipalSubtitulo) {
                    if (isSomenteSite) {
                        docPrincipalTitulo.textContent = 'Edital / Documento Principal';
                        docPrincipalSubtitulo.textContent = 'Arquivo principal da seleção pública';
                    } else {
                        const tipo = isInexigibilidade ? 'Inexigibilidade' : 'Dispensa';
                        docPrincipalTitulo.textContent = `Documento da ${tipo}`;
                        docPrincipalSubtitulo.textContent = isInexigibilidade
                            ? 'Arquivo principal da inexigibilidade'
                            : 'Arquivo principal da dispensa de licitação';
                    }
                }
        } else {
            docSelecaoPublica.style.display = 'block';
            docDispensaInexigibilidade.style.display = 'none';
            ['Titulo-Documento', 'tipo_documento_id', 'datapublicacao', 'licitacao']
                .forEach(id => document.getElementById(id)?.setAttribute('required', 'required'));
        }
    }

    ['Titulo-Documento', 'tipo_documento_id']
        .forEach(id => toggleCampoRequired(id, isDispInex));

    const labelArquivo = document.querySelector('label[for="licitacao"]');
    if (labelArquivo) {
        const texto = isInexigibilidade ? 'Arquivo da Inexigibilidade' : isDispensa ? 'Arquivo da Dispensa' : 'Arquivo Edital';
        labelArquivo.innerHTML = `<i class="bi bi-file-earmark-pdf me-1"></i>${texto}`;
    }

    ['aplicabilidadeMargemPreferenciaNormal','aplicabilidadeMargemPreferenciaAdicional'].forEach(id => {
        const campo = document.getElementById(id);
        if (campo) {
            if (isDispInex) { campo.removeAttribute('required'); }
            else { campo.setAttribute('required', 'required'); }
        }
    });
}


    document.addEventListener('DOMContentLoaded', function() {
    renderizarTabela();
    toggleCamposPorTipo();
    toggleJustificativaPresencial();

    document.getElementById('modalidadeId').addEventListener('change', toggleJustificativaPresencial);
    document.querySelectorAll('input[name="tipo_licitacao"]').forEach(radio => {
        radio.addEventListener('change', toggleCamposPorTipo);
    });
});

    document.getElementById('somenteSite')?.addEventListener('change', toggleCamposPorTipo);

</script>

@endsection