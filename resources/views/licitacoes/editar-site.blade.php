@extends('layout.header')
@section('title', 'Editar Dados do Site')
@section('conteudo')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pncp.css') }}">
@endpush

            @php
                $isSelecaoPublica = $dados->tipo_licitacao == 1;
                $isDispensa = $dados->tipo_licitacao == 2;
                $isInexigibilidade = $dados->tipo_licitacao == 3;
                $isDispensaOuInexigibilidade = $isDispensa || $isInexigibilidade;
                
                $tipoNome = match($dados->tipo_licitacao) {
                    1 => 'Seleção Pública',
                    2 => 'Dispensa de Licitação',
                    3 => 'Inexigibilidade',
                    default => 'Licitação'
                };
                
                $tipoBadgeClass = match($dados->tipo_licitacao) {
                    1 => 'selecao-publica',
                    2 => 'dispensa',
                    3 => 'inexigibilidade',
                    default => ''
                };
                
                $docPrincipalTitulo = match($dados->tipo_licitacao) {
                    1 => 'Edital/Seleção',
                    2 => 'Documento da Dispensa',
                    3 => 'Documento da Inexigibilidade',
                    default => 'Documento Principal'
                };
                
                $docPrincipalSubtitulo = match($dados->tipo_licitacao) {
                    1 => 'Documento principal da licitação',
                    2 => 'Arquivo principal da dispensa de licitação',
                    3 => 'Arquivo principal da inexigibilidade',
                    default => 'Documento da contratação'
                };
            @endphp

            <div class="form-page-wrapper">
                <div class="page-breadcrumb">
                    <a href="{{ route('licitacoes.listar') }}">Licitações</a>
                    <span class="separator"><i class="bi bi-chevron-right"></i></span>
                    <span>Editar Dados do Site</span>
                </div>

                <a href="{{ route('licitacoes.listar') }}" class="btn btn-link text-success fw-semibold text-decoration-none mb-3">
                <i class="bi bi-arrow-left"></i> Voltar a Lista
                </a>

                <div class="page-title-bar mt-3">
                    <h4>
                        <span class="title-icon"><i class="bi bi-globe"></i></span>
                        Editar Dados do Site
                    </h4>
                    <div class="d-flex align-items-center gap-2">
                        <span class="tipo-badge {{ $tipoBadgeClass }}">
                            <i class="bi bi-tag-fill"></i>
                            {{ $tipoNome }}
                        </span>
                        <span class="title-badge">Licitação #{{ $dados->id }}</span>
                    </div>
                </div>

                @if($errors->any())
                <div class="clean-alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><i class="bi bi-exclamation-circle-fill me-1"></i> Erros encontrados:</strong>
                    <ul class="mb-0 mt-2" style="padding-left: 1.25rem;">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" style="font-size: 0.7rem;"></button>
                </div>
                @endif

                @if(session('success'))
                <div class="clean-alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle-fill me-1"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" style="font-size: 0.7rem;"></button>
                </div>
                @endif

                <form action="{{ route('licitacoes.salvar-site') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $dados->id }}">
                    <input type="hidden" name="tipo_licitacao" value="{{ $dados->tipo_licitacao }}">

                    <ul class="nav modern-tab" id="editarSiteTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="dados-site-tab" data-bs-toggle="tab" 
                                data-bs-target="#dados-site" type="button" role="tab">
                                <i class="bi bi-file-text"></i> Dados do Site
                            </button>
                        </li>
                        @if($isSelecaoPublica)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="itens-site-tab" data-bs-toggle="tab" 
                                data-bs-target="#itens-site" type="button" role="tab">
                                <i class="bi bi-cart-check"></i> Itens de Compra
                            </button>
                        </li>
                        @endif
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="documentos-site-tab" data-bs-toggle="tab" 
                                data-bs-target="#documentos-site" type="button" role="tab">
                                <i class="bi bi-file-pdf"></i> Documentos
                            </button>
                        </li>
                    </ul>

            <div class="tab-content">
                
                {{-- ABA 1: DADOS DO SITE --}}
                <div class="tab-pane fade show active" id="dados-site" role="tabpanel">
                    <div class="clean-card">
                    <div class="clean-card-header">
                        <span class="header-dot"></span>
                        <i class="bi bi-file-text"></i>
                        <h5>Dados Básicos da Licitação</h5>
                    </div>
                    <div class="clean-card-body">
                        @if($isSelecaoPublica)
                        <div class="clean-alert alert-info mb-4">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-info-circle" style="font-size: 1.1rem;"></i>
                                <div>
                                    <strong>Legenda dos campos:</strong>
                                    <div class="mt-2">
                                        <span class="badge-editavel">EDITÁVEL</span> Campos que podem ser alterados para o site
                                        <span class="ms-3 badge-readonly">SOMENTE LEITURA</span> Campos enviados ao PNCP (apenas visualização)
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="section-label">
                            <i class="bi bi-card-list"></i>
                            Identificação
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="numeroProcesso" class="label-editavel">
                                        @if($isSelecaoPublica) Nº Seleção Pública
                                        @elseif($isDispensa) Nº Dispensa
                                        @else Nº Inexigibilidade @endif
                                    </label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-hash"></i>
                                        <input type="text" class="form-control campo-editavel" id="numeroProcesso" name="numeroProcesso"
                                            value="{{ old('numeroProcesso', $dados->numeroProcesso) }}" 
                                            placeholder="Ex: 001/2024">
                                    </div>
                                </div>
                            </div>
                            
                            @if($isDispensaOuInexigibilidade)
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="ordem" class="label-editavel">{{ $isInexigibilidade ? 'Nº Inexigibilidade' : 'Ordem' }}</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-sort-numeric-down"></i>
                                        <input type="text" class="form-control campo-editavel" id="ordem" name="ordem"
                                            value="{{ old('ordem', $dados->ordem) }}" placeholder="Ex: 001">
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if(!$isInexigibilidade)
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="numeroCompra" class="label-editavel">Contrato/Convênio</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-file-earmark-text"></i>
                                        <input type="text" class="form-control campo-editavel" id="numeroCompra" name="numeroCompra"
                                            value="{{ old('numeroCompra', $dados->numeroCompra) }}" placeholder="Ex: CT-001/2024">
                                    </div>
                                </div>
                            </div>
                            @endif

                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="orgao_site" class="label-editavel">Órgão (Site)</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-building"></i>
                                        <input type="text" class="form-control campo-editavel" id="orgao_site" name="orgao_site"
                                            value="{{ old('orgao_site', $dados->orgao_site) }}" placeholder="Nome do órgão">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="projeto" class="label-editavel">Projeto</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-folder"></i>
                                        <input type="text" class="form-control campo-editavel" id="projeto" name="projeto"
                                            value="{{ old('projeto', $dados->projeto) }}" placeholder="Código do projeto">
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if($isSelecaoPublica)
                        <div class="row">
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="cnpj">CNPJ</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-person-rolodex"></i>
                                        <input type="text" class="form-control campo-readonly" id="cnpj" 
                                            value="83.476.911/0001-17" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="codigoUnidadeCompradora">Unidade Compradora</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-map"></i>
                                        <input type="text" class="form-control campo-readonly" id="codigoUnidadeCompradora" 
                                            value="42" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="modern-input-group">
                                    <label for="tipoInstrumentoConvocatorioId">Instrumento Convocatório</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-file-medical"></i>
                                        <select class="form-select campo-readonly" id="tipoInstrumentoConvocatorioId" disabled>
                                            <option value="1"{{ $dados->tipoInstrumentoConvocatorioId=='1' ? 'selected' : '' }}>Edital</option>
                                            <option value="2"{{ $dados->tipoInstrumentoConvocatorioId=='2' ? 'selected' : '' }}>Aviso de Contratação Direta</option>
                                            <option value="3"{{ $dados->tipoInstrumentoConvocatorioId=='3' ? 'selected' : '' }}>Ato que autoriza a Contratação Direta</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label for="AnoCompra" class="label-editavel">Ano da Contratação</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-calendar-date"></i>
                                        <input type="text" class="form-control campo-editavel" id="AnoCompra" name="AnoCompra"
                                            value="{{ old('AnoCompra', $dados->AnoCompra) }}" placeholder="Ex: 2024">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-divider"></div>

                        <div class="section-label">
                            <i class="bi bi-vector-pen"></i>
                            Amparo Legal e Modalidade
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="modern-input-group">
                                    <label for="amparoLegalId">Amparo Legal</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-vector-pen"></i>
                                        <select class="form-select campo-readonly" id="amparoLegalId" disabled>
                                            <option value="1"{{ $dados->amparoLegalId=='1' ? 'selected' : '' }}>Lei 14.133/2021, Art. 28, I</option>
                                            <option value="2"{{ $dados->amparoLegalId=='2' ? 'selected' : '' }}>Lei 14.133/2021, Art. 28, II</option>
                                            <option value="3"{{ $dados->amparoLegalId=='3' ? 'selected' : '' }}>Lei 14.133/2021, Art. 28, III</option>
                                            <option value="4"{{ $dados->amparoLegalId=='4' ? 'selected' : '' }}>Lei 14.133/2021, Art. 28, IV</option>
                                            <option value="5"{{ $dados->amparoLegalId=='5' ? 'selected' : '' }}>Lei 14.133/2021, Art. 28, V</option>
                                            <option value="6"{{ $dados->amparoLegalId=='6' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, I</option>
                                            <option value="7"{{ $dados->amparoLegalId=='7' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, II</option>
                                            <option value="8"{{ $dados->amparoLegalId=='8' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, III, a</option>
                                            <option value="9"{{ $dados->amparoLegalId=='9' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, III, b</option>
                                            <option value="10"{{ $dados->amparoLegalId=='10' ? 'selected' : '' }}>Lei 14.133/2021, Art. 74, III, c</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="modalidadeId">Modalidade</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-briefcase"></i>
                                        <select class="form-select campo-readonly" id="modalidadeId" disabled>
                                            <option value="1"{{ $dados->modalidadeId=='1' ? 'selected' : '' }}>Leilão - Eletrônico</option>
                                            <option value="6"{{ $dados->modalidadeId=='6' ? 'selected' : '' }}>Pregão - Eletrônico</option>
                                            <option value="4"{{ $dados->modalidadeId=='4' ? 'selected' : '' }}>Concorrência - Eletrônica</option>
                                            <option value="8"{{ $dados->modalidadeId=='8' ? 'selected' : '' }}>Dispensa de Licitação</option>
                                            <option value="9"{{ $dados->modalidadeId=='9' ? 'selected' : '' }}>Inexigibilidade</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="modoDisputaId">Modo de Disputa</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-crosshair2"></i>
                                        <select class="form-select campo-readonly" id="modoDisputaId" disabled>
                                            <option value="1"{{ $dados->modoDisputaId=='1' ? 'selected' : '' }}>Aberto</option>
                                            <option value="2"{{ $dados->modoDisputaId=='2' ? 'selected' : '' }}>Fechado</option>
                                            <option value="3"{{ $dados->modoDisputaId=='3' ? 'selected' : '' }}>Aberto-Fechado</option>
                                            <option value="5"{{ $dados->modoDisputaId=='5' ? 'selected' : '' }}>Não se aplica</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-divider"></div>
                        @endif

                        <div class="section-label">
                            <i class="bi bi-calendar-event"></i>
                            Datas
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="datapublicacao" class="label-editavel">Data de Publicação</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-calendar-check"></i>
                                        <input type="date" class="form-control campo-editavel" id="datapublicacao" name="datapublicacao"
                                            value="{{ old('datapublicacao', $dados->datapublicacao) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="dataAberturaProposta" class="label-editavel">Data de Abertura</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-calendar-event"></i>
                                        <input type="date" class="form-control campo-editavel" id="dataAberturaProposta" name="dataAberturaProposta"
                                            value="{{ old('dataAberturaProposta', $dados->dataAberturaProposta) }}">
                                    </div>
                                </div>
                            </div>
                            @if($isSelecaoPublica)
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="dataEncerramentoProposta">Data de Encerramento</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-calendar-week-fill"></i>
                                        <input type="date" class="form-control campo-readonly" id="dataEncerramentoProposta"
                                            value="{{ $dados->dataEncerramentoProposta }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="modern-input-group">
                                    <label for="srp">Registro de Preço</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-coin"></i>
                                        <select class="form-select campo-readonly" id="srp" disabled>
                                            <option value="1"{{ $dados->srp ? 'selected' : '' }}>Sim</option>
                                            <option value="0"{{ !$dados->srp ? 'selected' : '' }}>Não</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>

                        <div class="section-divider"></div>
                        <div class="section-label">
                            <i class="bi bi-card-text"></i>
                            Objeto
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="modern-input-group">
                                    <label for="objetoCompra" class="label-editavel">Objeto da Licitação</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-card-text" style="top: 1rem;"></i>
                                        <textarea class="form-control campo-editavel" id="objetoCompra" name="objetoCompra" 
                                            rows="4" placeholder="Descrição detalhada do objeto">{{ old('objetoCompra', $dados->objetoCompra) }}</textarea>
                                    </div>
                                    <small style="color: var(--slate-500); font-size: 0.75rem;"><i class="bi bi-info-circle me-1"></i>Este texto aparece na linha expandida de cada licitação no site</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ABA 2: ITENS DE COMPRA (somente seleção pública) --}}
            @if($isSelecaoPublica)
            <div class="tab-pane fade" id="itens-site" role="tabpanel">
                <div class="clean-card">
                    <div class="clean-card-header">
                        <span class="header-dot"></span>
                        <i class="bi bi-cart-check"></i>
                        <h5>Itens de Compra (Somente Visualização)</h5>
                    </div>
                    <div class="clean-card-body">
                        @if(isset($itensCompra) && count($itensCompra) > 0)
                        <div class="table-responsive">
                            <table class="clean-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Descrição</th>
                                        <th>Material/Serviço</th>
                                        <th>Quantidade</th>
                                        <th>Unidade</th>
                                        <th>Valor Unitário</th>
                                        <th>Valor Total</th>
                                        <th>Critério Julgamento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($itensCompra as $item)
                                    <tr>
                                        <td><strong>{{ $item->numeroItem ?? '-' }}</strong></td>
                                        <td>{{ $item->descricao ?? '-' }}</td>
                                        <td>
                                            @if($item->materialOuServico == 'M')
                                            <span class="info-badge badge-info">Material</span>
                                            @else
                                            <span class="info-badge badge-success">Serviço</span>
                                            @endif
                                        </td>
                                        <td>{{ number_format($item->quantidade ?? 0, 2, ',', '.') }}</td>
                                        <td>{{ $item->unidadeMedida ?? '-' }}</td>
                                        <td>R$ {{ number_format($item->valorUnitarioEstimado ?? 0, 2, ',', '.') }}</td>
                                        <td>R$ {{ number_format($item->valorTotal ?? 0, 2, ',', '.') }}</td>
                                        <td>
                                            @php
                                                $criterios = [
                                                    1 => 'Menor Preço',
                                                    2 => 'Maior Desconto',
                                                    4 => 'Técnica e Preço',
                                                    5 => 'Maior Lance',
                                                    6 => 'Maior Retorno Econômico',
                                                    7 => 'Não se aplica'
                                                ];
                                            @endphp
                                            {{ $criterios[$item->criterioJulgamentoId] ?? '-' }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr style="background: var(--slate-50);">
                                        <td colspan="6" class="text-end"><strong>TOTAL GERAL:</strong></td>
                                        <td colspan="2"><strong>R$ {{ number_format(collect($itensCompra)->sum('valorTotal'), 2, ',', '.') }}</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        
                        <div class="clean-alert alert-info mt-4">
                            <i class="bi bi-info-circle me-1"></i>
                            <strong>Informação:</strong> Os itens de compra foram enviados ao PNCP e não podem ser editados aqui. Para alterações, é necessário editar a licitação completa.
                        </div>
                        @else
                        <div class="clean-alert alert-warning">
                            <i class="bi bi-exclamation-triangle me-1"></i>
                            <strong>Atenção:</strong> Nenhum item de compra cadastrado para esta licitação.
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endif

            {{-- ABA 3: DOCUMENTOS --}}
            <div class="tab-pane fade" id="documentos-site" role="tabpanel">
                <div class="clean-card">
                    <div class="clean-card-header">
                        <span class="header-dot"></span>
                        <i class="bi bi-folder2-open"></i>
                        <h5>Documentos do Site</h5>
                    </div>
                    <div class="clean-card-body">
                        <div class="doc-accordion">
                            
                            <div class="doc-accordion-item doc-primary">
                                <div class="doc-accordion-header" onclick="toggleAccordion(this)">
                                    <div class="doc-accordion-icon"><i class="bi bi-file-earmark-pdf-fill"></i></div>
                                    <div class="doc-accordion-info">
                                        <h6>{{ $docPrincipalTitulo }}</h6>
                                        <small>{{ $docPrincipalSubtitulo }}</small>
                                    </div>
                                    <span class="doc-accordion-status {{ $dados->licitacao ? 'has-file' : 'no-file' }}">
                                        <i class="bi bi-{{ $dados->licitacao ? 'check-circle-fill' : 'clock' }}"></i> 
                                        {{ $dados->licitacao ? 'Enviado' : 'Pendente' }}
                                    </span>
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
                                            <input type="file" name="licitacao" accept=".pdf,.doc,.docx" onchange="showFileName(this, 'licitacao-name')">
                                        </div>
                                        <div class="doc-file-selected" id="licitacao-name"><i class="bi bi-file-earmark"></i><span></span></div>
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
                                    <span class="doc-accordion-status {{ $dados->ataabertura ? 'has-file' : 'no-file' }}">
                                        <i class="bi bi-{{ $dados->ataabertura ? 'check-circle-fill' : 'clock' }}"></i> 
                                        {{ $dados->ataabertura ? 'Enviado' : 'Pendente' }}
                                    </span>
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
                                            <input type="file" name="ataabertura" accept=".pdf,.doc,.docx" onchange="showFileName(this, 'ataabertura-name')">
                                        </div>
                                        <div class="doc-file-selected" id="ataabertura-name"><i class="bi bi-file-earmark"></i><span></span></div>
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
                                    <span class="doc-accordion-status {{ $dados->contratoconvenio ? 'has-file' : 'no-file' }}">
                                        <i class="bi bi-{{ $dados->contratoconvenio ? 'check-circle-fill' : 'clock' }}"></i> 
                                        {{ $dados->contratoconvenio ? 'Enviado' : 'Pendente' }}
                                    </span>
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
                                            <input type="file" name="contratoconvenio" accept=".pdf,.doc,.docx" onchange="showFileName(this, 'contrato-name')">
                                        </div>
                                        <div class="doc-file-selected" id="contrato-name"><i class="bi bi-file-earmark"></i><span></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="doc-accordion-item doc-danger">
                                <div class="doc-accordion-header" onclick="toggleAccordion(this)">
                                    <div class="doc-accordion-icon"><i class="bi bi-file-earmark-check-fill"></i></div>
                                    <div class="doc-accordion-info">
                                        <h6>Resultado</h6>
                                        <small>Resultado final da licitação</small>
                                    </div>
                                    <span class="doc-accordion-status {{ $dados->resultado ? 'has-file' : 'no-file' }}">
                                        <i class="bi bi-{{ $dados->resultado ? 'check-circle-fill' : 'clock' }}"></i> 
                                        {{ $dados->resultado ? 'Enviado' : 'Pendente' }}
                                    </span>
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
                                            <input type="file" name="resultado" accept=".pdf,.doc,.docx" onchange="showFileName(this, 'resultado-name')">
                                        </div>
                                        <div class="doc-file-selected" id="resultado-name"><i class="bi bi-file-earmark"></i><span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center gap-3 mb-4">
            <button type="submit" class="btn-primary-green">
                <i class="bi bi-check-lg"></i> Salvar Alterações
            </button>
            <a href="{{ route('licitacoes.listar') }}" class="btn-outline-green">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>
    </form>
</div>

<script>
function toggleAccordion(header) {
    const item = header.closest('.doc-accordion-item');
    item.classList.toggle('active');
}

function showFileName(input, targetId) {
    const fileNameDiv = document.getElementById(targetId);
    const span = fileNameDiv.querySelector('span');
    if (input.files && input.files[0]) {
        span.textContent = input.files[0].name;
        fileNameDiv.classList.add('show');
    } else {
        span.textContent = '';
        fileNameDiv.classList.remove('show');
    }
}
</script>

@endsection