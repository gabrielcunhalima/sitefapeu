@extends('layout.header')
@section('title', 'Resultado e Ata')
@section('conteudo')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pncp.css') }}">
@endpush

<div class="form-page-wrapper">
    <div class="page-breadcrumb">
        <a href="{{ route('licitacoes.listar') }}">Licitações</a>
        <span class="separator"><i class="bi bi-chevron-right"></i></span>
        <span>Resultado e Ata</span>
    </div>

    <a href="{{ route('licitacoes.listar') }}" class="btn btn-link text-success fw-semibold text-decoration-none mb-3">
    <i class="bi bi-arrow-left"></i> Voltar a Lista
    </a>

    <div class="page-title-bar">
        <h4>
            <span class="title-icon"><i class="bi bi-file-earmark-check"></i></span>
            Resultado e Ata de Abertura
        </h4>
        <span class="title-badge">Processo {{ $licitacao->numeroProcesso }}</span>
    </div>

    @if(session('success'))
    <div class="clean-alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle-fill me-1"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" style="font-size: 0.7rem;"></button>
    </div>
    @endif

    @if(session('warning'))
    <div class="clean-alert alert-warning alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-1"></i> {{ session('warning') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" style="font-size: 0.7rem;"></button>
    </div>
    @endif

    @if($errors->any())
    <div class="clean-alert alert-danger">
        <strong><i class="bi bi-exclamation-circle me-1"></i> Erros encontrados:</strong>
        <ul class="mb-0 mt-2" style="padding-left: 1.25rem;">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="info-box">
        <div class="row g-3 align-items-center">
            <div class="col-md-3 col-lg-2">
                <div class="info-label">Processo</div>
                <div class="info-value">{{ $licitacao->numeroProcesso }}</div>
            </div>
            <div class="col-md-3 col-lg-2">
                <div class="info-label">Sequencial PNCP</div>
                <div><span class="info-badge badge-primary">{{ $licitacao->sequencial ?? 'Não enviado' }}</span></div>
            </div>
            <div class="col-md-3 col-lg-2">
                <div class="info-label">Modalidade</div>
                <div><span class="info-badge badge-info">{{ $licitacao->modalidadeId }}</span></div>
            </div>
            <div class="col-md-3 col-lg-6">
                <div class="info-label">Objeto</div>
                <div class="info-value" style="font-weight: 500;">{{ Str::limit($licitacao->objetoCompra, 80) }}</div>
            </div>
        </div>
    </div>

    <ul class="nav modern-tab" id="documentosTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="resultado-tab" data-bs-toggle="tab" 
                data-bs-target="#resultado" type="button" role="tab">
                <i class="bi bi-file-earmark-check"></i> Resultado
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="ata-tab" data-bs-toggle="tab" 
                data-bs-target="#ata" type="button" role="tab">
                <i class="bi bi-file-earmark-text"></i> Ata de Abertura
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="documento-ata-tab" data-bs-toggle="tab" 
                data-bs-target="#documento-ata" type="button" role="tab">
                <i class="bi bi-file-pdf"></i> Documento da Ata
            </button>
        </li>
    </ul>

    <div class="tab-content">
        {{-- ABA 1: RESULTADO --}}
        <div class="tab-pane fade show active" id="resultado" role="tabpanel">
            <form action="{{ route('licitacoes.resultado.salvar') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_licitacao" value="{{ $licitacao->id }}">
                
                <div class="clean-card">
                    <div class="clean-card-header">
                        <span class="header-dot"></span>
                        <i class="bi bi-trophy"></i>
                        <h5>Resultado da Licitação</h5>
                    </div>
                    <div class="clean-card-body">
                        <div class="clean-alert alert-info">
                            <i class="bi bi-info-circle me-1"></i>
                            <strong>Importante:</strong> Selecione o item da licitação para adicionar ou editar o resultado.
                        </div>

                        <div class="modern-input-group">
                            <label>Selecione o Item *</label>
                            <div class="input-wrapper">
                                <i class="input-icon bi bi-list-ul"></i>
                                <select class="form-select" id="selectItem" name="numeroItem" required>
                                    <option value="">Escolha um item...</option>
                                    @foreach($itensCompra as $item)
                                    @php
                                        $resultadoItem = $resultados->where('numeroItem', $item->numeroItem)->first();
                                    @endphp
                                    <option value="{{ $item->numeroItem }}" 
                                        data-item="{{ json_encode($item) }}"
                                        data-resultado="{{ $resultadoItem ? json_encode($resultadoItem) : '{}' }}">
                                        Item {{ $item->numeroItem }} - {{ $item->descricao }} 
                                        ({{ $item->materialOuServico == 'M' ? 'Material' : 'Serviço' }})
                                        @if($resultadoItem)
                                            ✓ Cadastrado
                                        @else
                                            ⚠ Pendente
                                        @endif
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <small style="color: var(--slate-500); font-size: 0.75rem;">Itens descritos como "Pendente" ainda não possuem resultado.</small>
                        </div>
                        
                        <div id="infoItemSelecionado" style="display: none;" class="item-info-panel">
                            <h6><i class="bi bi-info-circle"></i> Informações do Item Selecionado</h6>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="info-label">Descrição</div>
                                    <div style="font-size: 0.85rem; color: var(--slate-700);"><span id="itemDescricao"></span></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="info-label">Quantidade</div>
                                    <div style="font-size: 0.85rem; color: var(--slate-700);"><span id="itemQuantidade"></span> <span id="itemUnidade"></span></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="info-label">Valor Estimado</div>
                                    <div style="font-size: 0.85rem; color: var(--slate-700);">R$ <span id="itemValorTotal"></span></div>
                                </div>
                            </div>
                        </div>

                        <div id="camposResultado" style="display: none;">
                            <div class="section-divider"></div>
                            
                            <div class="section-label">
                                <i class="bi bi-clipboard-data"></i>
                                Dados do Resultado
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="modern-input-group">
                                        <label>Quantidade Homologada</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-cart-plus"></i>
                                            <input type="number" step="0.01" id="quantidadeHomologada" name="quantidadeHomologada">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="modern-input-group">
                                        <label>Valor Unitário Homologado</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-currency-dollar"></i>
                                            <input type="number" step="0.01" id="valorUnitarioHomologado" name="valorUnitarioHomologado">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="modern-input-group">
                                        <label>Valor Total Homologado</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-cash-coin"></i>
                                            <input type="number" step="0.01" id="valorTotalHomologado" name="valorTotalHomologado">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="modern-input-group">
                                        <label>Percentual de Desconto</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-percent"></i>
                                            <input type="number" step="0.01" id="percentualDesconto" name="percentualDesconto">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="modern-input-group">
                                        <label>Data do Resultado</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-calendar-check"></i>
                                            <input type="date" id="dataResultado" name="dataResultado">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section-divider"></div>

                            <div class="section-label">
                                <i class="bi bi-building"></i>
                                Dados do Fornecedor
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="modern-input-group">
                                        <label>
                                            Tipo de Pessoa
                                            <i class="bi bi-question-circle-fill tooltip-icon ms-1" data-bs-toggle="tooltip" 
                                                title="PF para Pessoa Física ou PJ para Pessoa Jurídica"></i>
                                        </label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-person"></i>
                                            <input type="text" id="tipoPessoaId" name="tipoPessoaId" maxlength="2">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="modern-input-group">
                                        <label>CNPJ/CPF do Fornecedor</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-person-vcard"></i>
                                            <input type="number" id="niFornecedor" name="niFornecedor">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="modern-input-group">
                                        <label>Razão Social do Fornecedor</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-building"></i>
                                            <input type="text" id="nomeRazaoSocialFornecedor" name="nomeRazaoSocialFornecedor">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="modern-input-group">
                                        <label>Porte do Fornecedor</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-bar-chart"></i>
                                            <select id="porteFornecedorId" name="porteFornecedorId">
                                                <option value="">Selecione...</option>
                                                <option value="1">ME - Microempresa </option>
                                                <option value="2">EPP - Empresa de pequeno porte </option>
                                                <option value="3">Demais - Demais empresas </option>
                                                <option value="4">Não se aplica - Quando o fornecedor/arrematante for pessoa física</option>
                                                <option value="5">Não informado - Quando não possuir o porte da empresa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="modern-input-group">
                                        <label>Natureza Jurídica</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-file-text"></i>
                                            <select id="naturezaJuridicaId" name="naturezaJuridicaId">
                                                <option value="">Selecione...</option>
                                                <option value="1015">1015 - Órgão Público do Poder Executivo Federal</option>
                                                <option value="1023">1023 - Órgão Público do Poder Executivo Estadual ou do Distrito Federal</option>
                                                <option value="1031">1031 - Órgão Público do Poder Executivo Municipal</option>
                                                <option value="1040">1040 - Órgão Público do Poder Legislativo Federal</option>
                                                <option value="1058">1058 - Órgão Público do Poder Legislativo Estadual ou do Distrito Federal</option>
                                                <option value="1066">1066 - Órgão Público do Poder Legislativo Municipal</option>
                                                <option value="1074">1074 - Órgão Público do Poder Judiciário Federal</option>
                                                <option value="1082">1082 - Órgão Público do Poder Judiciário Estadual</option>
                                                <option value="1104">1104 - Autarquia Federal</option>
                                                <option value="1112">1112 - Autarquia Estadual ou do Distrito Federal</option>
                                                <option value="1120">1120 - Autarquia Municipal</option>
                                                <option value="1139">1139 - Fundação Pública de Direito Público Federal</option>
                                                <option value="1147">1147 - Fundação Pública de Direito Público Estadual ou do Distrito Federal</option>
                                                <option value="1155">1155 - Fundação Pública de Direito Público Municipal</option>
                                                <option value="2011">2011 - Empresa Pública</option>
                                                <option value="2038">2038 - Sociedade de Economia Mista</option>
                                                <option value="2046">2046 - Sociedade Anônima Aberta</option>
                                                <option value="2054">2054 - Sociedade Anônima Fechada</option>
                                                <option value="2062">2062 - Sociedade Empresária Limitada</option>
                                                <option value="2070">2070 - Sociedade Empresária em Nome Coletivo</option>
                                                <option value="2089">2089 - Sociedade Empresária em Comandita Simples</option>
                                                <option value="2097">2097 - Sociedade Empresária em Comandita por Ações</option>
                                                <option value="2135">2135 - Empresário (Individual)</option>
                                                <option value="2143">2143 - Cooperativa</option>
                                                <option value="2151">2151 - Consórcio de Sociedades</option>
                                                <option value="2216">2216 - Sociedade Simples Pura</option>
                                                <option value="2224">2224 - Sociedade Simples Limitada</option>
                                                <option value="2232">2232 - Sociedade Simples em Nome Coletivo</option>
                                                <option value="2240">2240 - Sociedade Simples em Comandita Simples</option>
                                                <option value="2305">2305 - Empresa Individual de Responsabilidade Limitada</option>
                                                <option value="3034">3034 - Serviço Social Autônomo</option>
                                                <option value="3069">3069 - Fundação Privada</option>
                                                <option value="3107">3107 - Serviço Notarial e Registral</option>
                                                <option value="3204">3204 - Fundação Pública de Direito Privado Federal</option>
                                                <option value="3212">3212 - Fundação Pública de Direito Privado Estadual ou do Distrito Federal</option>
                                                <option value="3220">3220 - Fundação Pública de Direito Privado Municipal</option>
                                                <option value="3999">3999 - Associação Privada</option>
                                                <option value="4014">4014 - Empresa Individual Imobiliária</option>
                                                <option value="5010">5010 - Organização Internacional</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section-divider"></div>

                            <div class="section-label">
                                <i class="bi bi-globe"></i>
                                Dados Complementares
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="modern-input-group">
                                        <label>
                                            Código ISO País
                                            <i class="bi bi-question-circle-fill tooltip-icon ms-1" data-bs-toggle="tooltip" 
                                                title="ISO Alpha-3. Ex: BRA para Brasil"></i>
                                        </label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-globe"></i>
                                            <input type="text" id="codigoPais" name="codigoPais" maxlength="3">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="modern-input-group">
                                        <label>País Origem Produto</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-box"></i>
                                            <input type="text" id="paisOrigemProdutoId" name="paisOrigemProdutoId" maxlength="3">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="modern-input-group">
                                        <label>Ordem Classificação SRP</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-sort-numeric-down"></i>
                                            <input type="number" id="ordemClassificacaoSrp" name="ordemClassificacaoSrp">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="modern-input-group">
                                        <label>
                                            Indicador de Subcontratação
                                            <i class="bi bi-question-circle-fill tooltip-icon ms-1" data-bs-toggle="tooltip" 
                                                title="Haverá subcontratação de fornecedor?"></i>
                                        </label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-toggle-on"></i>
                                            <select id="indicadorSubcontratacao" name="indicadorSubcontratacao">
                                                <option value="">Selecione...</option>
                                                <option value="1">Sim</option>
                                                <option value="0">Não</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section-divider"></div>

                            <div class="section-label">
                                <i class="bi bi-award"></i>
                                Preferências e Benefícios
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="modern-input-group">
                                        <label>Aplicação de Margem de Preferência</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-award"></i>
                                            <select id="aplicacaoMargemPreferencia" name="aplicacaoMargemPreferencia">
                                                <option value="">Selecione...</option>
                                                <option value="1">Sim</option>
                                                <option value="0">Não</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="modern-input-group">
                                        <label>Código de Amparo Legal</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-shield-check"></i>
                                            <select id="amparoLegalMargemPreferenciaId" name="amparoLegalMargemPreferenciaId" disabled>
                                                <option value="">Selecione...</option>
                                                <option value="143">143 - Margem de preferência</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="modern-input-group">
                                        <label>Aplicação Benefício ME/EPP</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-shop"></i>
                                            <select id="aplicacaoBeneficioMeEpp" name="aplicacaoBeneficioMeEpp">
                                                <option value="">Selecione...</option>
                                                <option value="1">Sim</option>
                                                <option value="0">Não</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="modern-input-group">
                                        <label>Indicador da aplicação de critério de desempate</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-code"></i>
                                            <select id="aplicacaoCriterioDesempate" name="aplicacaoCriterioDesempate">
                                                <option value="">Selecione...</option>
                                                <option value="1">Sim</option>
                                                <option value="0">Não</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="modern-input-group">
                                        <label>Código da fundamentação legal do Critério de Desempate</label>
                                        <div class="input-wrapper">
                                            <i class="input-icon bi bi-code"></i>
                                            <select id="amparoLegalCriterioDesempateId" name="amparoLegalCriterioDesempateId" disabled>
                                                <option value="">Selecione...</option>
                                                <option value="146">3 - Critério de desempate</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="modern-input-group">
                                        <label>Arquivo do Resultado</label>
                                        <div class="input-wrapper">
                                           <i class="input-icon bi bi-paperclip"></i>
                                            <input type="file" class="form-control" id="resultado" name="resultado" accept=".pdf,.doc,.docx">
                                        </div>
                                        @if($licitacao->resultado)
                                        <small style="color: var(--green-800); font-size: 0.78rem;">
                                            <i class="bi bi-check-circle me-1"></i> Arquivo atual:
                                            <a href="{{ asset('storage/' . $licitacao->resultado) }}" target="_blank" style="color: var(--green-900);">Visualizar</a>
                                        </small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center gap-3" id="btnSalvar" style="display: none;">
                    <button type="submit" class="btn-primary-green">
                        <i class="bi bi-check-lg"></i> Salvar Resultado
                    </button>
                    <a href="{{ route('licitacoes.listar') }}" class="btn-outline-green">
                        <i class="bi bi-arrow-left"></i> Voltar para Lista
                    </a>
                </div>
            </form>
        </div>

        {{-- ABA 2: ATA DE ABERTURA --}}
        <div class="tab-pane fade" id="ata" role="tabpanel">
            <form action="{{ route('licitacoes.ata.salvar') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_licitacao" value="{{ $licitacao->id }}">
                
                <div class="clean-card">
                    <div class="clean-card-header">
                        <span class="header-dot"></span>
                        <i class="bi bi-file-earmark-ruled"></i>
                        <h5>Nova Ata de Registro de Preço</h5>
                    </div>
                    <div class="clean-card-body">
                        <div class="clean-alert alert-info">
                            <i class="bi bi-info-circle me-1"></i>
                            <strong>Importante:</strong> Ao salvar, esta ata será enviada para o PNCP e receberá um sequencial automaticamente.
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="modern-input-group">
                                    <label>Número da Ata *</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-hash"></i>
                                        <input type="text" name="numeroAtaRegistroPreco" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="modern-input-group">
                                    <label>Ano *</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-calendar3"></i>
                                        <input type="text" name="anoAta" maxlength="4" value="{{ date('Y') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modern-input-group">
                                    <label>Arquivo Local (Opcional)</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-paperclip"></i>
                                        <input type="file" class="form-control" name="ataabertura" accept=".pdf">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="modern-input-group">
                                    <label>Data Assinatura *</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-pen"></i>
                                        <input type="date" name="dataAssinatura" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="modern-input-group">
                                    <label>Vigência Início *</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-calendar-check"></i>
                                        <input type="date" name="dataVigenciaInicio" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="modern-input-group">
                                    <label>Vigência Fim *</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-calendar-x"></i>
                                        <input type="date" name="dataVigenciaFim" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center gap-3">
                    <button type="submit" class="btn-accent">
                        <i class="bi bi-check-lg"></i> Criar e Enviar Ata para PNCP
                    </button>
                    <a href="{{ route('licitacoes.listar') }}" class="btn-outline-green">
                        <i class="bi bi-arrow-left"></i> Voltar para Lista
                    </a>
                </div>
            </form>

            @if($atas->count() > 0)
            <div class="clean-card mt-4">
                <div class="clean-card-header">
                    <span class="header-dot"></span>
                    <i class="bi bi-list-ul"></i>
                    <h5>Atas Cadastradas</h5>
                </div>
                <div class="filter-row">
                    <input type="text" id="filtroNumeroAta" placeholder="Filtrar por número da ata..." style="flex: 2;">
                    <select id="filtroAnoAta" style="flex: 1;">
                        <option value="">Todos os anos</option>
                        @foreach($atas->unique('anoAta')->pluck('anoAta') as $ano)
                            <option value="{{ $ano }}">{{ $ano }}</option>
                        @endforeach
                    </select>
                    <select id="filtroStatusAta" style="flex: 1;">
                        <option value="">Todos os status</option>
                        <option value="enviado">Enviado ao PNCP</option>
                        <option value="pendente">Não enviado</option>
                    </select>
                </div>
                <div class="table-responsive">
                    <table class="clean-table" id="tabelaAtas">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Número da Ata</th>
                                <th>Ano</th>
                                <th>Data Assinatura</th>
                                <th>Vigência</th>
                                <th>Sequencial PNCP</th>
                                <th>Documentos</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($atas as $ata)
                            <tr>
                                <td>{{ $ata->id }}</td>
                                <td><strong>{{ $ata->numeroAtaRegistroPreco }}</strong></td>
                                <td>{{ $ata->anoAta }}</td>
                                <td>{{ $ata->dataAssinatura ? $ata->dataAssinatura->format('d/m/Y') : '-' }}</td>
                                <td>
                                    @if($ata->dataVigenciaInicio && $ata->dataVigenciaFim)
                                        {{ $ata->dataVigenciaInicio->format('d/m/Y') }} até 
                                        {{ $ata->dataVigenciaFim->format('d/m/Y') }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @if($ata->sequencialAta)
                                        <span class="info-badge badge-success">{{ $ata->sequencialAta }}</span>
                                    @else
                                        <span class="info-badge badge-warning">Não enviado</span>
                                    @endif
                                </td>
                                <td>
                                    <span class="info-badge badge-info">{{ $ata->documentos->count() }} doc(s)</span>
                                </td>
                                <td>
                                    <form action="{{ route('licitacoes.ata.excluir', $ata->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="justificativa" value="Exclusão via sistema">
                                        <button type="submit" class="btn-outline-danger" 
                                            onclick="return confirm('Tem certeza que deseja excluir a ata {{ $ata->numeroAtaRegistroPreco }}/{{ $ata->anoAta }}?\n\nEsta ação é irreversível!');">
                                            <i class="bi bi-trash"></i> Excluir
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if($atas->hasPages())
                <div class="pagination-simple">
                    <span>
                        Exibindo <strong>{{ $atas->firstItem() }}</strong>–<strong>{{ $atas->lastItem() }}</strong> de <strong>{{ $atas->total() }}</strong>
                    </span>
                    <div class="pagination-links">
                        @if($atas->onFirstPage())
                            <span class="disabled"><i class="bi bi-chevron-left"></i> Anterior</span>
                        @else
                            <a href="{{ $atas->previousPageUrl() }}"><i class="bi bi-chevron-left"></i> Anterior</a>
                        @endif

                        @if($atas->hasMorePages())
                            <a href="{{ $atas->nextPageUrl() }}">Próximo <i class="bi bi-chevron-right"></i></a>
                        @else
                            <span class="disabled">Próximo <i class="bi bi-chevron-right"></i></span>
                        @endif
                    </div>
                </div>
                @endif
            </div>
            @endif
        </div>

        {{-- ABA 3: DOCUMENTO DA ATA --}}
        <div class="tab-pane fade" id="documento-ata" role="tabpanel">
            @if($atas->where('sequencialAta', '!=', null)->count() > 0)
            <form action="{{ route('licitacoes.resultado-ata.enviar-documento') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="clean-card">
                    <div class="clean-card-header">
                        <span class="header-dot"></span>
                        <i class="bi bi-cloud-upload"></i>
                        <h5>Enviar Documento para Ata</h5>
                    </div>
                    <div class="clean-card-body">
                        <div class="item-info-panel mb-4">
                            <h6><i class="bi bi-check-circle-fill"></i> Dados da Licitação</h6>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="info-label">CNPJ</div>
                                    <div style="font-size: 0.85rem; color: var(--slate-700);">{{ $licitacao->orgao }}</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="info-label">Ano</div>
                                    <div style="font-size: 0.85rem; color: var(--slate-700);">{{ $licitacao->ano }}</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="info-label">Sequencial</div>
                                    <div><span class="info-badge badge-primary">{{ $licitacao->sequencial }}</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="modern-input-group">
                                    <label>Selecione a Ata *</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-file-earmark"></i>
                                        <select name="id_licitacao_ata" required>
                                            <option value="">Escolha uma ata...</option>
                                            @foreach($atas->where('sequencialAta', '!=', null) as $ata)
                                            <option value="{{ $ata->id }}">
                                                Ata {{ $ata->numeroAtaRegistroPreco }}/{{ $ata->anoAta }} 
                                                (Sequencial: {{ $ata->sequencialAta }})
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small style="color: var(--slate-500); font-size: 0.75rem;">Apenas atas com sequencial PNCP aparecem aqui</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="modern-input-group">
                                    <label>Tipo de Documento *</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-file-text"></i>
                                        <select name="tipoDocumentoId" required>
                                            <option value="">Selecione...</option>
                                            <option value="1">Aviso de Contratação Direta</option>
                                            <option value="2">Edital</option>
                                            <option value="3">Minuta do Contrato</option>
                                            <option value="4">Termo de Referência</option>
                                            <option value="5">Anteprojeto</option>
                                            <option value="6">Projeto Básico</option>
                                            <option value="7">Estudo Técnico Preliminar</option>
                                            <option value="8">Projeto Executivo</option>
                                            <option value="9">Mapa de Riscos</option>
                                            <option value="10">DFD</option>
                                            <option value="11" selected>Ata de Registro de Preços</option>
                                            <option value="13">Termo de Rescisão</option>
                                            <option value="14">Termo Aditivo</option>
                                            <option value="15">Termo de Apostilamento</option>
                                            <option value="17">Nota de Empenho</option>
                                            <option value="18">Relatório Final de Contrato</option>
                                            <option value="16">Outros</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="modern-input-group">
                                    <label>Título do Documento *</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-card-heading"></i>
                                        <input type="text" name="tituloDocumento" maxlength="50" 
                                            placeholder="Ex: Ata de Registro de Preço 001/2024" required>
                                    </div>
                                    <small style="color: var(--slate-500); font-size: 0.75rem;">Máximo 50 caracteres</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="modern-input-group">
                                    <label>Arquivo PDF *</label>
                                    <div class="input-wrapper">
                                        <i class="input-icon bi bi-paperclip"></i>
                                        <input type="file" class="form-control" name="documento_ata" accept=".pdf" required>
                                    </div>
                                    <small style="color: var(--slate-500); font-size: 0.75rem;">Apenas PDF, máximo 10MB</small>
                                </div>
                            </div>
                        </div>

                        <div class="clean-alert alert-warning">
                            <i class="bi bi-exclamation-triangle-fill me-1"></i>
                            <strong>Importante:</strong>
                            <ul class="mb-0 mt-2" style="padding-left: 1.25rem; font-size: 0.83rem;">
                                <li>O arquivo deve estar em formato PDF</li>
                                <li>Tamanho máximo: 10MB</li>
                                <li>O arquivo será codificado em Base64 automaticamente</li>
                                <li>Após o envio, o documento ficará disponível no PNCP</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn-accent">
                        <i class="bi bi-cloud-upload"></i> Enviar Documento para PNCP
                    </button>
                </div>
            </form>

                @if($documentos->count() > 0)
                <div class="clean-card mt-4">
                    <div class="clean-card-header">
                        <span class="header-dot" style="background: #1d4ed8;"></span>
                        <i class="bi bi-folder2-open" style="color: #1d4ed8;"></i>
                        <h5>Documentos Enviados</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="clean-table">
                            <thead>
                                <tr>
                                    <th>Ata</th>
                                    <th>Título</th>
                                    <th>Tipo</th>
                                    <th>Arquivo Local</th>
                                    <th>Status PNCP</th>
                                    <th>Data Envio</th>
                                    <th>Sequencial</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($documentos as $doc)
                                <tr>
                                    <td><strong>{{ $doc->ata->numeroAtaRegistroPreco }}/{{ $doc->ata->anoAta }}</strong></td>
                                    <td><strong>{{ $doc->tituloDocumento }}</strong></td>
                                    <td><span class="info-badge badge-info">{{ $doc->tipoDocumentoId }}</span></td>
                                    <td>
                                        @if($doc->arquivo_local)
                                        <a href="{{ asset('storage/' . $doc->arquivo_local) }}" target="_blank" 
                                            style="color: var(--green-900); font-weight: 500; font-size: 0.8rem; text-decoration: none;">
                                            <i class="bi bi-download me-1"></i>Ver
                                        </a>
                                        @else - @endif
                                    </td>
                                    <td>
                                        @if($doc->enviado_pncp)
                                        <span class="info-badge badge-success"><i class="bi bi-check-circle"></i> Enviado</span>
                                        @else
                                        <span class="info-badge badge-warning"><i class="bi bi-clock"></i> Pendente</span>
                                        @endif
                                    </td>
                                    <td style="font-size: 0.8rem;">{{ $doc->data_envio_pncp ? $doc->data_envio_pncp->format('d/m/Y H:i') : '-' }}</td>
                                    <td>{{ $doc->sequencialDocumento ?? '-' }}</td>
                                    <td>
                                        <form action="{{ route('licitacoes.documento.excluir', $doc->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="justificativa" value="Exclusão via sistema">
                                            <button type="submit" class="btn-outline-danger" 
                                                onclick="return confirm('Tem certeza que deseja excluir este documento?');">
                                                <i class="bi bi-trash"></i> Excluir
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if($documentos->hasPages())
                    <div class="pagination-simple">
                        <span>
                            Exibindo <strong>{{ $documentos->firstItem() }}</strong>–<strong>{{ $documentos->lastItem() }}</strong> de <strong>{{ $documentos->total() }}</strong>
                        </span>
                        <div class="pagination-links">
                            @if($documentos->onFirstPage())
                                <span class="disabled"><i class="bi bi-chevron-left"></i> Anterior</span>
                            @else
                                <a href="{{ $documentos->previousPageUrl() }}"><i class="bi bi-chevron-left"></i> Anterior</a>
                            @endif
                            @if($documentos->hasMorePages())
                                <a href="{{ $documentos->nextPageUrl() }}">Próximo <i class="bi bi-chevron-right"></i></a>
                            @else
                                <span class="disabled">Próximo <i class="bi bi-chevron-right"></i></span>
                            @endif
                        </div>
                    </div>
                    @endif
                </div>
                @endif

            @else
            <div class="clean-card">
                <div class="clean-card-body">
                    <div class="clean-alert alert-warning mb-0">
                        <i class="bi bi-exclamation-triangle-fill me-1"></i>
                        <strong>Atenção!</strong>
                        <p class="mb-2 mt-2" style="font-size: 0.85rem;">
                            Para enviar documentos, é necessário que você tenha pelo menos uma ata cadastrada com sequencial PNCP.
                        </p>
                        <hr style="border-color: #fde68a;">
                        <h6 style="font-size: 0.85rem; font-weight: 700;">Como obter o sequencial da ata:</h6>
                        <ol class="mb-0" style="padding-left: 1.25rem; font-size: 0.83rem;">
                            <li>Vá para a aba <strong>"Ata de Abertura"</strong></li>
                            <li>Preencha e envie os dados da ata</li>
                            <li>O PNCP retornará automaticamente o sequencial</li>
                            <li>Após isso, você poderá enviar documentos para esta ata</li>
                        </ol>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

                {{-- modal após envio da ata --}}
                @if(session('ata_enviada'))
                <div class="modal fade" id="modalAtaEnviada" tabindex="-1" aria-labelledby="modalAtaEnviadaLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content" style="border: none; border-radius: var(--radius-xl); overflow: hidden;">
                            <div class="modal-header" style="background: #fffbeb; border-bottom: 1px solid #fde68a; padding: 1rem 1.25rem;">
                                <h5 class="modal-title" id="modalAtaEnviadaLabel" style="font-size: 0.95rem; font-weight: 700; color: #92400e; display: flex; align-items: center; gap: 0.5rem;">
                                    <i class="bi bi-exclamation-triangle-fill"></i> Atenção
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar" style="font-size: 0.65rem;"></button>
                            </div>
                            <div class="modal-body" style="padding: 1.5rem 1.25rem; font-size: 0.875rem; color: var(--slate-700);">
                                <p style="margin-bottom: 0.75rem;">
                                    <strong>É necessário enviar o documento da Ata.</strong>
                                </p>
                                <p style="margin-bottom: 0;">
                                    Navegue até a aba <strong>"Documento da Ata"</strong> e selecione a Ata enviada para anexar o documento correspondente.
                                </p>
                            </div>
                            <div class="modal-footer" style="border-top: 1px solid var(--slate-100); padding: 0.75rem 1.25rem;">
                                <button type="button" class="btn-primary-green" data-bs-dismiss="modal" onclick="document.getElementById('documento-ata-tab').click();">
                                    <i class="bi bi-file-pdf"></i> Ir para Documento da Ata
                                </button>
                                <button type="button" class="btn-outline-green" data-bs-dismiss="modal">
                                    Fechar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endif


<script>
document.addEventListener('DOMContentLoaded', function() {

    var modalAtaEnviada = document.getElementById('modalAtaEnviada');
    if (modalAtaEnviada) {
        new bootstrap.Modal(modalAtaEnviada).show();
    }

    [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).forEach(function(el) {
        new bootstrap.Tooltip(el);
    });

    const params = new URLSearchParams(window.location.search);
    if (params.get('doc_page')) {
        new bootstrap.Tab(document.getElementById('documento-ata-tab')).show();
    } else if (params.get('ata_page')) {
        new bootstrap.Tab(document.getElementById('ata-tab')).show();
    }

    function habilitarCampoAmparo(selectId, amparoId, valorPadrao) {
        var select = document.getElementById(selectId);
        var amparo = document.getElementById(amparoId);
        if (!select || !amparo) return;

        if (select.value === "1") {
            amparo.disabled = false;
            amparo.value = valorPadrao;
        } else {
            amparo.disabled = true;
            amparo.value = '';
        }
    }

    function atualizarAmparos() {
        habilitarCampoAmparo('aplicacaoMargemPreferencia', 'amparoLegalMargemPreferenciaId', '143');
        habilitarCampoAmparo('aplicacaoCriterioDesempate', 'amparoLegalCriterioDesempateId', '146');
    }

    document.getElementById('aplicacaoMargemPreferencia')?.addEventListener('change', atualizarAmparos);
    document.getElementById('aplicacaoCriterioDesempate')?.addEventListener('change', atualizarAmparos);
    atualizarAmparos();

 
    const camposResultado = [
        'quantidadeHomologada', 'valorUnitarioHomologado', 'valorTotalHomologado',
        'percentualDesconto', 'dataResultado', 'tipoPessoaId', 'niFornecedor',
        'nomeRazaoSocialFornecedor', 'porteFornecedorId', 'naturezaJuridicaId',
        'codigoPais', 'paisOrigemProdutoId', 'ordemClassificacaoSrp'
    ];

    const camposNullCheck = [
        'indicadorSubcontratacao', 'aplicacaoMargemPreferencia',
        'aplicacaoBeneficioMeEpp', 'aplicacaoCriterioDesempate'
    ];

    const camposAmparoLegal = [
        'amparoLegalMargemPreferenciaId', 'amparoLegalCriterioDesempateId'
    ];

    function preencherResultado(resultado) {
        camposResultado.forEach(function(campo) {
            var el = document.getElementById(campo);
            if (el) el.value = resultado[campo] || '';
        });
        camposNullCheck.forEach(function(campo) {
            var el = document.getElementById(campo);
            if (el) el.value = resultado[campo] !== null && resultado[campo] !== undefined ? resultado[campo] : '';
        });
        camposAmparoLegal.forEach(function(campo) {
            var el = document.getElementById(campo);
            if (el) el.value = resultado[campo] || '';
        });
    }

    function limparCamposResultado() {
        document.querySelectorAll('#camposResultado input, #camposResultado select').forEach(function(input) {
            if (input.type !== 'file') input.value = '';
        });
    }

            const selectItem = document.getElementById('selectItem');
            if (selectItem) {
                selectItem.addEventListener('change', function() {
            const option = this.options[this.selectedIndex];

            if (this.value) {
                const item = JSON.parse(option.getAttribute('data-item'));
                const resultado = JSON.parse(option.getAttribute('data-resultado'));

                document.getElementById('infoItemSelecionado').style.display = 'block';
                document.getElementById('itemDescricao').textContent = item.descricao;
                document.getElementById('itemQuantidade').textContent = parseFloat(item.quantidade).toFixed(2);
                document.getElementById('itemUnidade').textContent = item.unidadeMedida;
                document.getElementById('itemValorTotal').textContent = parseFloat(item.valorTotal).toLocaleString('pt-BR', {minimumFractionDigits: 2});
                document.getElementById('camposResultado').style.display = 'block';
                document.getElementById('btnSalvar').style.display = 'block';

                if (resultado && resultado.id) {
                    preencherResultado(resultado);
                } else {
                    limparCamposResultado();
                }
                atualizarAmparos();
            } else {
                document.getElementById('infoItemSelecionado').style.display = 'none';
                document.getElementById('camposResultado').style.display = 'none';
                document.getElementById('btnSalvar').style.display = 'none';
            }
        });
    }

    // filtro
        document.getElementById('filtroNumeroAta')?.addEventListener('input', filtrarAtas);
        document.getElementById('filtroAnoAta')?.addEventListener('change', filtrarAtas);
        document.getElementById('filtroStatusAta')?.addEventListener('change', filtrarAtas);

    function filtrarAtas() {
        const numero = document.getElementById('filtroNumeroAta').value.toLowerCase();
        const ano = document.getElementById('filtroAnoAta').value;
        const status = document.getElementById('filtroStatusAta').value;

        document.querySelectorAll('#tabelaAtas tbody tr').forEach(function(linha) {
            const matchNumero = linha.cells[1].textContent.toLowerCase().includes(numero);
            const matchAno = !ano || linha.cells[2].textContent === ano;
            const temSequencial = linha.cells[5].textContent.includes('Não enviado') ? 'pendente' : 'enviado';
            const matchStatus = !status || temSequencial === status;

            linha.style.display = (matchNumero && matchAno && matchStatus) ? '' : 'none';
        });
    }
});

</script>

@endsection