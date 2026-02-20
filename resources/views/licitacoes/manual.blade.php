@extends('layout.header')
@section('title', 'Manual do Sistema de Licitações')
@section('conteudo')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pncp.css') }}">
    <style>
        .manual-sidebar {
            position: sticky;
            top: 1.5rem;
            max-height: calc(100vh - 3rem);
            overflow-y: auto;
        }
        .manual-sidebar::-webkit-scrollbar { width: 4px; }
        .manual-sidebar::-webkit-scrollbar-track { background: transparent; }
        .manual-sidebar::-webkit-scrollbar-thumb { background: var(--slate-300); border-radius: 4px; }

        .sidebar-nav { list-style: none; padding: 0; margin: 0; }
        .sidebar-nav li { margin: 0; }
        .sidebar-nav a {
            display: block;
            padding: .45rem .875rem;
            font-size: .8rem;
            color: var(--slate-600);
            text-decoration: none;
            border-left: 2px solid transparent;
            transition: all .15s ease;
            font-weight: 500;
        }
        .sidebar-nav a:hover, .sidebar-nav a.active {
            color: var(--green-900);
            border-left-color: var(--green-900);
            background: var(--green-50);
        }
        .sidebar-nav .sidebar-section {
            font-size: .68rem;
            font-weight: 700;
            color: var(--slate-400);
            text-transform: uppercase;
            letter-spacing: .07em;
            padding: .875rem .875rem .3rem;
        }
        .sidebar-nav .sub-item a {
            padding-left: 1.5rem;
            font-weight: 400;
            font-size: .78rem;
        }

        .manual-section { margin-bottom: 2.5rem; scroll-margin-top: 1.5rem; }

        .step-list { list-style: none; padding: 0; margin: 0; counter-reset: steps; }
        .step-list li {
            counter-increment: steps;
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
            align-items: flex-start;
        }
        .step-list li::before {
            content: counter(steps);
            width: 26px; height: 26px;
            background: var(--green-900);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .75rem;
            font-weight: 700;
            flex-shrink: 0;
            margin-top: .1rem;
        }
        .step-list li .step-content { flex: 1; font-size: .875rem; color: var(--slate-700); line-height: 1.6; }
        .step-list li .step-content strong { color: var(--slate-900); }

        .tip-box {
            background: var(--green-50);
            border: 1px solid var(--green-100);
            border-left: 3px solid var(--green-900);
            border-radius: var(--radius-md);
            padding: .875rem 1.125rem;
            font-size: .83rem;
            color: #065f46;
            margin: .875rem 0;
            display: flex;
            gap: .625rem;
        }
        .tip-box i { flex-shrink: 0; margin-top: .1rem; color: var(--green-900); }

        .warn-box {
            background: #fffbeb;
            border: 1px solid #fde68a;
            border-left: 3px solid #f59e0b;
            border-radius: var(--radius-md);
            padding: .875rem 1.125rem;
            font-size: .83rem;
            color: #92400e;
            margin: .875rem 0;
            display: flex;
            gap: .625rem;
        }
        .warn-box i { flex-shrink: 0; margin-top: .1rem; }

        .info-box-manual {
            background: #eff6ff;
            border: 1px solid #bfdbfe;
            border-left: 3px solid #3b82f6;
            border-radius: var(--radius-md);
            padding: .875rem 1.125rem;
            font-size: .83rem;
            color: #1e40af;
            margin: .875rem 0;
            display: flex;
            gap: .625rem;
        }
        .info-box-manual i { flex-shrink: 0; margin-top: .1rem; }

        .flow-diagram {
            display: flex;
            align-items: center;
            gap: .5rem;
            flex-wrap: wrap;
            margin: 1rem 0;
        }
        .flow-step {
            display: flex;
            align-items: center;
            gap: .375rem;
            background: var(--white);
            border: 1.5px solid var(--slate-200);
            border-radius: var(--radius-lg);
            padding: .5rem .875rem;
            font-size: .8rem;
            font-weight: 600;
            color: var(--slate-700);
        }
        .flow-step i { color: var(--green-900); font-size: .9rem; }
        .flow-arrow { color: var(--slate-300); font-size: 1.1rem; }

        .badge-map {
            display: inline-flex;
            align-items: center;
            gap: .3rem;
            padding: .2rem .625rem;
            border-radius: 20px;
            font-size: .72rem;
            font-weight: 600;
        }
        .badge-map.sel { background: var(--green-50); color: var(--green-900); border: 1px solid var(--green-100); }
        .badge-map.dis { background: #fffbeb; color: #92400e; border: 1px solid #fde68a; }
        .badge-map.ine { background: #fef2f2; color: #991b1b; border: 1px solid #fecaca; }
        .badge-map.req { background: #fef2f2; color: #dc2626; border: 1px solid #fecaca; }
        .badge-map.opt { background: var(--slate-50); color: var(--slate-600); border: 1px solid var(--slate-200); }

        .manual-h3 {
            font-size: .95rem;
            font-weight: 700;
            color: var(--slate-800);
            margin: 1.25rem 0 .75rem;
            display: flex;
            align-items: center;
            gap: .5rem;
        }
        .manual-h3 i { color: var(--green-900); }

        .field-table { width: 100%; border-collapse: collapse; font-size: .83rem; margin-bottom: 1rem; }
        .field-table thead th {
            background: var(--slate-50);
            padding: .6rem .875rem;
            font-weight: 700;
            color: var(--slate-600);
            text-align: left;
            font-size: .72rem;
            text-transform: uppercase;
            letter-spacing: .04em;
            border-bottom: 1.5px solid var(--slate-200);
        }
        .field-table tbody td {
            padding: .625rem .875rem;
            border-bottom: 1px solid var(--slate-100);
            vertical-align: top;
            color: var(--slate-700);
        }
        .field-table tbody tr:last-child td { border-bottom: none; }
        .field-table tbody tr:hover { background: var(--slate-50); }
        .field-table .campo { font-weight: 600; color: var(--slate-800); white-space: nowrap; }

        .glossary-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: .75rem;
        }
        .glossary-item {
            background: var(--white);
            border: 1px solid var(--slate-200);
            border-radius: var(--radius-lg);
            padding: .875rem 1rem;
        }
        .glossary-item .term { font-weight: 700; color: var(--slate-800); font-size: .875rem; margin-bottom: .25rem; }
        .glossary-item .def { font-size: .8rem; color: var(--slate-600); line-height: 1.5; }

        @media (max-width: 768px) {
            .manual-sidebar { position: static; max-height: none; }
        }
    </style>
@endpush

<div class="form-page-wrapper">
    <div class="page-breadcrumb">
        <a href="{{ route('licitacoes.listar') }}">Licitações</a>
        <span class="separator"><i class="bi bi-chevron-right"></i></span>
        <span>Manual do Sistema</span>
    </div>

    <div class="page-title-bar">
        <h4>
            <span class="title-icon"><i class="bi bi-book"></i></span>
            Manual do Sistema de Licitações
        </h4>
        <span class="title-badge">FAPEU — PNCP</span>
    </div>

    <div class="clean-alert alert-info mb-4">
        <i class="bi bi-info-circle-fill me-2"></i>
        Este manual explica como utilizar o sistema de gestão de licitações integrado ao <strong>Portal Nacional de Contratações Públicas (PNCP)</strong>.
        Use o índice lateral para navegar entre as seções.
    </div>

    <div class="row g-4">

        <div class="col-lg-3">
            <div class="clean-card manual-sidebar">
                <div class="clean-card-header">
                    <span class="header-dot"></span>
                    <i class="bi bi-list-ul"></i>
                    <h5>Índice</h5>
                </div>
                <div class="clean-card-body" style="padding: .5rem 0;">
                    <ul class="sidebar-nav">
                        <li class="sidebar-section">Visão Geral</li>
                        <li><a href="#visao-geral"><i class="bi bi-house me-1"></i> O que é este sistema?</a></li>
                        <li><a href="#tipos"><i class="bi bi-tags me-1"></i> Tipos de Licitação</a></li>
                        <li><a href="#fluxo"><i class="bi bi-diagram-3 me-1"></i> Fluxo de Trabalho</a></li>

                        <li class="sidebar-section">Gerenciar Licitações</li>
                        <li><a href="#nova-licitacao"><i class="bi bi-plus-circle me-1"></i> Nova Licitação</a></li>
                        <li class="sub-item"><a href="#dados-basicos">Dados Básicos</a></li>
                        <li class="sub-item"><a href="#itens-compra">Itens de Compra</a></li>
                        <li class="sub-item"><a href="#documentos">Documentos</a></li>
                        <li><a href="#editar-site"><i class="bi bi-globe me-1"></i> Editar Dados do Site</a></li>

                        <li class="sidebar-section">Resultado e Ata</li>
                        <li><a href="#resultado"><i class="bi bi-trophy me-1"></i> Registrar Resultado</a></li>
                        <li><a href="#ata"><i class="bi bi-file-earmark-text me-1"></i> Ata de Registro</a></li>
                        <li><a href="#documento-ata"><i class="bi bi-cloud-upload me-1"></i> Documento da Ata</a></li>

                        <li class="sidebar-section">Referência</li>
                        <li><a href="#glossario"><i class="bi bi-journal-text me-1"></i> Glossário PNCP</a></li>
                        <li><a href="#erros"><i class="bi bi-bug me-1"></i> Erros Comuns</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="clean-card manual-section" id="visao-geral">
                <div class="clean-card-header">
                    <span class="header-dot"></span>
                    <i class="bi bi-house"></i>
                    <h5>O que é este sistema?</h5>
                </div>
                <div class="clean-card-body">
                    <p style="font-size: .875rem; color: var(--slate-700); line-height: 1.7;">
                        Este sistema permite à FAPEU cadastrar e publicar contratações diretamente no <strong>Portal Nacional de Contratações Públicas (PNCP)</strong>,
                        em conformidade com a <strong>Lei 14.133/2021</strong> (Nova Lei de Licitações). Ele automatiza o envio de dados para a API do PNCP e
                        mantém o site público da fundação atualizado com as informações de cada licitação.
                    </p>
                    <div class="row g-3 mt-1">
                        <div class="col-md-4">
                            <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 1rem; text-align: center;">
                                <i class="bi bi-cloud-upload" style="font-size: 1.5rem; color: var(--green-900);"></i>
                                <div style="font-size: .8rem; font-weight: 700; color: var(--slate-800); margin-top: .5rem;">Envio automático ao PNCP</div>
                                <div style="font-size: .75rem; color: var(--slate-500);">Dados enviados via API em tempo real</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 1rem; text-align: center;">
                                <i class="bi bi-globe" style="font-size: 1.5rem; color: var(--green-900);"></i>
                                <div style="font-size: .8rem; font-weight: 700; color: var(--slate-800); margin-top: .5rem;">Site sempre atualizado</div>
                                <div style="font-size: .75rem; color: var(--slate-500);">Publicação automática para fornecedores</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 1rem; text-align: center;">
                                <i class="bi bi-shield-check" style="font-size: 1.5rem; color: var(--green-900);"></i>
                                <div style="font-size: .8rem; font-weight: 700; color: var(--slate-800); margin-top: .5rem;">Conformidade legal</div>
                                <div style="font-size: .75rem; color: var(--slate-500);">Atende à Lei 14.133/2021</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clean-card manual-section" id="tipos">
                <div class="clean-card-header">
                    <span class="header-dot"></span>
                    <i class="bi bi-tags"></i>
                    <h5>Tipos de Licitação</h5>
                </div>
                <div class="clean-card-body">
                    <p style="font-size: .875rem; color: var(--slate-600); margin-bottom: 1.25rem;">
                        O sistema suporta três modalidades. Escolha a correta antes de começar — ela não pode ser alterada depois do cadastro.
                    </p>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div style="border: 1.5px solid var(--green-100); border-radius: var(--radius-lg); padding: 1.125rem; background: var(--green-50);">
                                <div style="margin-bottom: .625rem;"><span class="badge-map sel"><i class="bi bi-check-circle-fill"></i> Seleção Pública</span></div>
                                <p style="font-size: .8rem; color: #065f46; margin: 0; line-height: 1.6;">Processo competitivo aberto (pregão, concorrência etc.). Exige cadastro de itens de compra, upload do edital e integração completa ao PNCP com sequencial.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="border: 1.5px solid #fde68a; border-radius: var(--radius-lg); padding: 1.125rem; background: #fffbeb;">
                                <div style="margin-bottom: .625rem;"><span class="badge-map dis"><i class="bi bi-exclamation-triangle-fill"></i> Dispensa</span></div>
                                <p style="font-size: .8rem; color: #92400e; margin: 0; line-height: 1.6;">Contratação direta (Art. 75 da Lei 14.133/2021). Modalidade, modo de disputa e amparo legal são preenchidos automaticamente pelo sistema.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="border: 1.5px solid #fecaca; border-radius: var(--radius-lg); padding: 1.125rem; background: #fef2f2;">
                                <div style="margin-bottom: .625rem;"><span class="badge-map ine"><i class="bi bi-x-circle-fill"></i> Inexigibilidade</span></div>
                                <p style="font-size: .8rem; color: #991b1b; margin: 0; line-height: 1.6;">Quando a competição é inviável — fornecedor exclusivo ou serviço técnico singular (Art. 74).</p>
                            </div>
                        </div>
                    </div>
                    <div class="warn-box mt-3">
                        <i class="bi bi-exclamation-triangle-fill"></i>
                        <div>Para <strong>Dispensa</strong> e <strong>Inexigibilidade</strong>, os campos de modalidade, modo de disputa, amparo legal, instrumento convocatório e unidade compradora são <strong>definidos automaticamente</strong>. Não é necessário — nem possível — alterá-los.</div>
                    </div>
                </div>
            </div>

            <div class="clean-card manual-section" id="fluxo">
                <div class="clean-card-header">
                    <span class="header-dot"></span>
                    <i class="bi bi-diagram-3"></i>
                    <h5>Fluxo de Trabalho</h5>
                </div>
                <div class="clean-card-body">
                    <p style="font-size: .875rem; color: var(--slate-600); margin-bottom: 1rem;">Para <strong>Seleção Pública</strong> com Registro de Preço, o fluxo completo é:</p>
                    <div class="flow-diagram">
                        <div class="flow-step"><i class="bi bi-plus-circle"></i> Cadastrar Licitação</div>
                        <div class="flow-arrow"><i class="bi bi-chevron-right"></i></div>
                        <div class="flow-step"><i class="bi bi-cloud-check"></i> PNCP → Sequencial</div>
                        <div class="flow-arrow"><i class="bi bi-chevron-right"></i></div>
                        <div class="flow-step"><i class="bi bi-trophy"></i> Registrar Resultado</div>
                        <div class="flow-arrow"><i class="bi bi-chevron-right"></i></div>
                        <div class="flow-step"><i class="bi bi-file-earmark-text"></i> Criar Ata</div>
                        <div class="flow-arrow"><i class="bi bi-chevron-right"></i></div>
                        <div class="flow-step"><i class="bi bi-paperclip"></i> Enviar Doc. da Ata</div>
                    </div>
                    <div class="tip-box">
                        <i class="bi bi-lightbulb-fill"></i>
                        <div>Para <strong>Dispensa e Inexigibilidade</strong>, o fluxo é simplificado: basta <strong>cadastrar a licitação</strong> e depois usar <strong>Editar Dados do Site</strong> para atualizar documentos e informações públicas conforme o processo avança.</div>
                    </div>

                    <div class="manual-h3"><i class="bi bi-pencil-square"></i> Editar Dados do Site</div>
                    <table class="field-table">
                        <thead><tr><th>Ação</th><th>Quando usar</th><th>Envia ao PNCP?</th></tr></thead>
                        <tbody>
                            <tr>
                                <td class="campo">Editar Dados do Site <i class="bi bi-globe" style="color:var(--green-900);"></i></td>
                                <td>Atualizar texto do objeto, documentos PDF e campos exibidos ao público</td>
                                <td><span class="info-badge badge-danger">NÃO</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="clean-card manual-section" id="nova-licitacao">
                <div class="clean-card-header">
                    <span class="header-dot"></span>
                    <i class="bi bi-plus-circle"></i>
                    <h5>Nova Licitação — Passo a Passo</h5>
                </div>
                <div class="clean-card-body">
                    <ul class="step-list">
                        <li><div class="step-content">Acesse <strong>Painel Administrativo → Nova Licitação</strong> no menu administrativo.</div></li>
                        <li><div class="step-content">Selecione o <strong>tipo de licitação</strong>. Isso define quais campos e abas serão exibidos.</div></li>
                        <li><div class="step-content">Preencha a aba <strong>Dados Básicos</strong> completamente e clique em "Próximo".</div></li>
                        <li><div class="step-content"><em>(Somente Seleção Pública)</em> Adicione os <strong>Itens de Compra</strong>. Cada item deve ser confirmado com o botão <strong>"Adicionar Item"</strong> para aparecer na tabela antes de avançar.</div></li>
                        <li><div class="step-content">Na aba <strong>Documentos</strong>, faça o upload do arquivo principal (edital/documento) e preencha título, tipo e data de publicação.</div></li>
                        <li><div class="step-content">Clique em <strong>Salvar</strong>. O sistema enviará os dados ao PNCP e retornará o número sequencial, que ficará visível na coluna "PNCP" da lista.</div></li>
                    </ul>
                </div>
            </div>

            <div class="clean-card manual-section" id="dados-basicos">
                <div class="clean-card-header">
                    <span class="header-dot"></span>
                    <i class="bi bi-file-text"></i>
                    <h5>Aba Dados Básicos — Campos</h5>
                </div>
                <div class="clean-card-body">

                    <div class="manual-h3"><i class="bi bi-card-list"></i> Identificação</div>
                    <table class="field-table">
                        <thead><tr><th>Campo</th><th>Tipo</th><th>Descrição</th></tr></thead>
                        <tbody>
                            <tr>
                                <td class="campo">Número do Processo</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Número interno no formato <strong>SEQUENCIAL/ANO</strong> — ex: <code>001/2024</code>. O sistema extrai o ano e o código sequencial deste campo automaticamente para enviar ao PNCP.</td>
                            </tr>
                            <tr>
                                <td class="campo">Ano da Contratação</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Ano de realização da contratação (4 dígitos). Junto com o sequencial, identifica a compra no PNCP.</td>
                            </tr>
                            <tr>
                                <td class="campo">Número do Contrato</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Número do contrato ou convênio firmado (<code>numeroCompra</code> na API). Exibido publicamente no site.</td>
                            </tr>
                            <tr>
                                <td class="campo">Projeto</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Código ou nome do projeto interno da FAPEU vinculado à contratação.</td>
                            </tr>
                            <tr>
                                <td class="campo">Ordem</td>
                                <td><span class="badge-map opt">Disp./Inexig.</span></td>
                                <td>Para Inexigibilidade: número do processo de inexigibilidade. Para Dispensa: ordem interna. Aparece apenas nessas modalidades.</td>
                            </tr>
                            <tr>
                                <td class="campo">Órgão (Site)</td>
                                <td><span class="badge-map opt">Opcional</span></td>
                                <td>Nome do órgão para exibição pública — pode ser diferente da razão social registrada no CNPJ.</td>
                            </tr>
                            <tr>
                                <td class="campo">Objeto da Contratação</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Descrição resumida do objeto (<code>objetoCompra</code> na API — máx. 5.120 caracteres). É o texto exibido publicamente no PNCP e no site da FAPEU. Deve ser claro e suficiente para identificar o que está sendo contratado.</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="manual-h3"><i class="bi bi-vector-pen"></i> Amparo Legal e Modalidade <span style="font-size:.75rem; font-weight:400; color:var(--slate-500);">(Seleção Pública)</span></div>
                    <table class="field-table">
                        <thead><tr><th>Campo</th><th>Tipo</th><th>Descrição</th></tr></thead>
                        <tbody>
                            <tr>
                                <td class="campo">Instrumento Convocatório</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Documento que convoca os fornecedores. <em>Edital</em> para pregão/concorrência; <em>Aviso de Contratação Direta</em> para dispensa com disputa; <em>Ato que autoriza a Contratação Direta</em> para dispensas e inexigibilidades.</td>
                            </tr>
                            <tr>
                                <td class="campo">Amparo Legal</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Base legal da contratação na Lei 14.133/2021. <strong>Art. 28</strong>: licitação obrigatória (modalidades I a V). <strong>Art. 74</strong>: inexigibilidade. <strong>Art. 75</strong>: dispensa. Dispensa e Inexig. usam automaticamente <em>Art. 75, I</em> (id 18).</td>
                            </tr>
                            <tr>
                                <td class="campo">Modalidade</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Tipo de procedimento licitatório. <em>Pregão Eletrônico</em> (id 6) é o mais comum para bens e serviços. <em>Concorrência Eletrônica</em> (id 4) para obras. Dispensa e Inexig. são definidas automaticamente (ids 8 e 9).</td>
                            </tr>
                            <tr>
                                <td class="campo">Modo de Disputa</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td><em>Aberto</em>: lances em tempo real visíveis. <em>Fechado</em>: proposta única sigilosa. <em>Aberto-Fechado</em>: combinação dos dois. <em>Não se aplica</em> (id 5): para contratações sem disputa, definido automaticamente para Dispensa/Inexig.</td>
                            </tr>
                            <tr>
                                <td class="campo">Registro de Preço (SRP)</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Se <em>Sim</em>, a licitação gerará uma Ata de Registro de Preços após o resultado. O fluxo exige o cadastro da ata na seção "Resultado e Ata".</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="manual-h3"><i class="bi bi-calendar-event"></i> Datas</div>
                    <table class="field-table">
                        <thead><tr><th>Campo</th><th>Tipo</th><th>Descrição</th></tr></thead>
                        <tbody>
                            <tr>
                                <td class="campo">Data de Início de Recebimento</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Data em que o PNCP começa a aceitar propostas / data de abertura da sessão (<code>dataAberturaProposta</code> na API do PNCP).</td>
                            </tr>
                            <tr>
                                <td class="campo">Data de Fim de Recebimento</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Prazo final para envio de propostas pelos fornecedores (<code>dataEncerramentoProposta</code>). Deve ser igual ou posterior à data de início.</td>
                            </tr>
                            <tr>
                                <td class="campo">Data de Publicação</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Data em que o edital/documento foi publicado no PNCP ou no site da FAPEU. Informada na aba Documentos.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="clean-card manual-section" id="itens-compra">
                <div class="clean-card-header">
                    <span class="header-dot"></span>
                    <i class="bi bi-cart-check"></i>
                    <h5>Aba Itens de Compra (Seleção Pública)</h5>
                </div>
                <div class="clean-card-body">
                    <div class="warn-box">
                        <i class="bi bi-exclamation-triangle-fill"></i>
                        <div>Esta aba aparece <strong>somente para Seleção Pública</strong>. É obrigatório adicionar ao menos um item. Após salvar e enviar ao PNCP, os itens não podem ser editados por aqui — é necessário editar a licitação completa.</div>
                    </div>
                    <div class="tip-box">
                        <i class="bi bi-lightbulb-fill"></i>
                        <div>Preencha os campos de um item e clique em <strong>"Adicionar Item"</strong>. O item aparecerá na tabela abaixo. Repita para cada item. Os dados ficam salvos temporariamente no navegador enquanto você preenche, sem risco de perda ao trocar de aba.</div>
                    </div>

                    <div class="manual-h3"><i class="bi bi-list-check"></i> Campos dos Itens</div>
                    <table class="field-table">
                        <thead><tr><th>Campo</th><th>Tipo</th><th>Descrição</th></tr></thead>
                        <tbody>
                            <tr>
                                <td class="campo">Número do Item</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Sequencial do item (1, 2, 3…). Deve ser único dentro da mesma licitação. Usado para vincular o resultado ao item correto.</td>
                            </tr>
                            <tr>
                                <td class="campo">Material ou Serviço</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td><em>M</em> = Material (bem físico). <em>S</em> = Serviço. Impacta cálculos e classificações no PNCP.</td>
                            </tr>
                            <tr>
                                <td class="campo">Critério de Julgamento</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Como as propostas serão avaliadas: <em>Menor Preço</em> (1) é o mais comum; <em>Maior Desconto</em> (2) para tabelas de preço fixo; <em>Técnica e Preço</em> (4) para serviços especializados; <em>Maior Lance</em> (5) para leilão; <em>Não se aplica</em> (7) para itens sem disputa.</td>
                            </tr>
                            <tr>
                                <td class="campo">Tipo de Benefício</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Tratamento diferenciado para ME/EPP: <em>Participação Exclusiva</em> (1), <em>Subcontratação</em> (2), <em>Cota Reservada</em> (3). Use <em>Sem Benefício</em> (4) ou <em>Não se aplica</em> (5) na maioria dos casos.</td>
                            </tr>
                            <tr>
                                <td class="campo">Incentivo Produtivo Básico</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Indica se o item possui incentivo à produção nacional (Zona Franca de Manaus etc.). Na maioria dos casos: <em>Não</em>.</td>
                            </tr>
                            <tr>
                                <td class="campo">Exigência de Conteúdo Nacional</td>
                                <td><span class="badge-map opt">Opcional</span></td>
                                <td>Se o produto deve ter percentual mínimo de componentes fabricados no Brasil (Decreto 7.174 etc.). Enviar <em>false</em> quando não se aplicar. Campo opcional na API PNCP (<code>inConteudoNacional</code>).</td>
                            </tr>
                            <tr>
                                <td class="campo">Quantidade</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Quantidade total a ser adquirida. Aceita decimais com até 4 casas (ex: 1.5000 para 1,5 kg).</td>
                            </tr>
                            <tr>
                                <td class="campo">Descrição</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Descrição completa e objetiva do bem ou serviço. Quanto mais detalhada, melhor para a transparência e para os fornecedores.</td>
                            </tr>
                            <tr>
                                <td class="campo">Unidade de Medida</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Sigla da unidade. Exemplos: <em>UN</em> (unidade), <em>KG</em>, <em>M²</em>, <em>L</em> (litro), <em>H</em> (hora), <em>MÊS</em>.</td>
                            </tr>
                            <tr>
                                <td class="campo">Orçamento Sigiloso</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Se <em>Sim</em>, os valores estimados são ocultados dos fornecedores durante a disputa (Art. 24, §3º, Lei 14.133/2021). Exige justificativa no processo.</td>
                            </tr>
                            <tr>
                                <td class="campo">Valor Unitário Estimado</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Valor de referência por unidade, obtido de pesquisa de mercado. Base para análise de exequibilidade e publicação no PNCP.</td>
                            </tr>
                            <tr>
                                <td class="campo">Valor Total</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Resultado de: <strong>quantidade × valor unitário estimado</strong>. Pode ser calculado e informado manualmente.</td>
                            </tr>
                            <tr>
                                <td class="campo">Margem de Preferência Normal</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Margem adicional ao preço de produtos importados para favorecer nacionais (Decreto 7.546). Se <em>Não</em>, o campo de percentual deve ser enviado como <strong>nulo</strong> (não zero). Habilita o campo de percentual ao selecionar <em>Sim</em>. Valor entre 0 e menor que 100 (<code>percentualMargemPreferenciaNormal</code>).</td>
                            </tr>
                            <tr>
                                <td class="campo">Margem de Preferência Adicional</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Margem extra para ME/EPP com produtos nacionais (cumulativa com a normal). Se <em>Não</em>, enviar percentual como <strong>nulo</strong>. Valor entre 0 e menor que 100 (<code>percentualMargemPreferenciaAdicional</code>).</td>
                            </tr>
                            <tr>
                                <td class="campo">Justificativa Presencial</td>
                                <td><span class="badge-map opt">Condicional</span></td>
                                <td>Obrigatório quando a modalidade exige sessão presencial (Pregão Presencial id 7, Concorrência Presencial id 5). Explica por que não foi adotado o formato eletrônico.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="clean-card manual-section" id="documentos">
                <div class="clean-card-header">
                    <span class="header-dot"></span>
                    <i class="bi bi-file-pdf"></i>
                    <h5>Aba Documentos</h5>
                </div>
                <div class="clean-card-body">
                    <div class="manual-h3"><i class="bi bi-file-earmark-check"></i> Campos — Seleção Pública</div>
                    <table class="field-table">
                        <thead><tr><th>Campo</th><th>Tipo</th><th>Descrição</th></tr></thead>
                        <tbody>
                            <tr>
                                <td class="campo">Título do Edital</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Nome do documento exibido no PNCP. Ex: <em>Edital Pregão Eletrônico 001/2024</em>. Enviado no header <code>Titulo-Documento</code> da API.</td>
                            </tr>
                            <tr>
                                <td class="campo">Tipo de Documento</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Categoria do arquivo no PNCP: <em>Edital</em> (2) para o instrumento convocatório principal, <em>Termo de Referência</em> (4) para especificações técnicas, <em>Minuta do Contrato</em> (3), etc. Enviado no header <code>Tipo-Documento-Id</code>.</td>
                            </tr>
                            <tr>
                                <td class="campo">Data de Publicação</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Data em que o edital foi publicado no Diário Oficial ou no site da FAPEU. Referenciada como <code>dataPublicacaoPncp</code> na API.</td>
                            </tr>
                            <tr>
                                <td class="campo">Arquivo Edital (PDF/DOC)</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Arquivo do edital enviado ao PNCP junto com os dados da licitação via multipart/form-data. Formatos aceitos: PDF, DOC, DOCX. Tamanho máximo: 10MB.</td>
                            </tr>
                            <tr>
                                <td class="campo">Contrato/Convênio</td>
                                <td><span class="badge-map opt">Opcional</span></td>
                                <td>Arquivo do contrato firmado. Salvo apenas localmente no servidor — visível no site público mas não enviado ao PNCP neste campo.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="info-box-manual">
                        <i class="bi bi-info-circle-fill"></i>
                        <div>Para <strong>Dispensa e Inexigibilidade</strong>, o título é preenchido automaticamente ("Documento de Dispensa" / "Documento de Inexigibilidade") e o tipo é fixado em 20 (Ato que autoriza a Contratação Direta). Você precisa apenas do <strong>arquivo e da data de publicação</strong>.</div>
                    </div>
                </div>
            </div>

            <div class="clean-card manual-section" id="editar-site">
                <div class="clean-card-header">
                    <span class="header-dot"></span>
                    <i class="bi bi-globe"></i>
                    <h5>Editar Dados do Site</h5>
                </div>
                <div class="clean-card-body">
                    <p style="font-size: .875rem; color: var(--slate-600);">
                        Acessado pelo ícone <span style="border:1.5px solid #bfdbfe;border-radius:6px;padding:.2rem .4rem;background:#eff6ff;font-size:.8rem;"><i class="bi bi-pencil" style="color:#3b82f6;"></i></span> na lista. Permite atualizar informações exibidas ao público <strong>sem reenviar ao PNCP</strong>.
                    </p>
                    <div class="row g-3 mt-1">
                        <div class="col-md-6">
                            <div style="background: var(--green-50); border: 1px solid var(--green-100); border-radius: var(--radius-lg); padding: 1rem;">
                                <div style="font-size:.8rem; font-weight:700; color:var(--green-900); margin-bottom:.5rem;">
                                    <i class="bi bi-pencil-fill me-1"></i> Campos Editáveis
                                    <span style="background:var(--green-900);color:white;padding:.15rem .4rem;border-radius:4px;font-size:.65rem;font-weight:600;margin-left:.25rem;">EDITÁVEL</span>
                                </div>
                                <ul style="font-size: .8rem; color: #065f46; margin: 0; padding-left: 1.25rem; line-height: 1.8;">
                                    <li>Número do processo / edital</li>
                                    <li>Órgão (nome para o site)</li>
                                    <li>Projeto e Ano da Contratação</li>
                                    <li>Datas de publicação e abertura</li>
                                    <li>Objeto (descrição pública)</li>
                                    <li>Todos os arquivos PDF (edital, ata, contrato, resultado)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 1rem;">
                                <div style="font-size:.8rem; font-weight:700; color:var(--slate-600); margin-bottom:.5rem;">
                                    <i class="bi bi-lock-fill me-1"></i> Somente Leitura
                                    <span style="background:var(--slate-500);color:white;padding:.15rem .4rem;border-radius:4px;font-size:.65rem;font-weight:600;margin-left:.25rem;">PNCP</span>
                                </div>
                                <ul style="font-size: .8rem; color: var(--slate-500); margin: 0; padding-left: 1.25rem; line-height: 1.8;">
                                    <li>CNPJ (sempre FAPEU)</li>
                                    <li>Unidade Compradora (42)</li>
                                    <li>Instrumento Convocatório</li>
                                    <li>Amparo Legal</li>
                                    <li>Modalidade e Modo de Disputa</li>
                                    <li>SRP e data de encerramento</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clean-card manual-section" id="resultado">
                <div class="clean-card-header">
                    <span class="header-dot"></span>
                    <i class="bi bi-trophy"></i>
                    <h5>Registrar Resultado</h5>
                </div>
                <div class="clean-card-body">
                    <p style="font-size:.875rem; color:var(--slate-600);">
                        Acessado pelo ícone <span style="border:1.5px solid var(--green-100);border-radius:6px;padding:.2rem .4rem;background:var(--green-50);font-size:.8rem;"><i class="bi bi-plus-circle" style="color:var(--green-900);"></i></span> na lista. Registra o vencedor de cada item e envia ao PNCP.
                    </p>
                    <div class="info-box-manual">
                        <i class="bi bi-info-circle-fill"></i>
                        <div>A licitação deve ter um <strong>sequencial PNCP</strong> (coluna "PNCP" na lista com valor diferente de "Pendente") para que o resultado seja enviado ao portal. Sem ele, o resultado é salvo apenas localmente.</div>
                    </div>

                    <div class="manual-h3"><i class="bi bi-clipboard-data"></i> Dados do Resultado — por item</div>
                    <table class="field-table">
                        <thead><tr><th>Campo</th><th>Tipo</th><th>Descrição</th></tr></thead>
                        <tbody>
                            <tr>
                                <td class="campo">Item (seletor)</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Selecione o item para preencher o resultado. Se o item já tiver resultado, os campos são carregados automaticamente para edição. Itens marcados com ✓ já foram cadastrados.</td>
                            </tr>
                            <tr>
                                <td class="campo">Quantidade Homologada</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Quantidade efetivamente adjudicada ao vencedor após a homologação. Pode ser inferior à quantidade licitada. Precisão de 4 casas decimais (ex: <code>1.0000</code>).</td>
                            </tr>
                            <tr>
                                <td class="campo">Valor Unitário Homologado</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Preço final por unidade após a disputa. Deve ser maior ou igual a 0. Precisão de 4 casas decimais (ex: <code>100.0000</code>).</td>
                            </tr>
                            <tr>
                                <td class="campo">Valor Total Homologado</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Valor unitário homologado × quantidade homologada. Maior ou igual a 0. Precisão de 4 casas decimais.</td>
                            </tr>
                            <tr>
                                <td class="campo">Percentual de Desconto</td>
                                <td><span class="badge-map opt">Opcional</span></td>
                                <td>Usado quando o critério é "Maior Desconto". Ex: <em>15.5000</em> para 15,5% de desconto sobre a tabela de preços. Precisão de 4 casas decimais.</td>
                            </tr>
                            <tr>
                                <td class="campo">Tipo de Pessoa</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td><em>PJ</em> = Pessoa Jurídica; <em>PF</em> = Pessoa Física; <em>PE</em> = Pessoa Estrangeira.</td>
                            </tr>
                            <tr>
                                <td class="campo">CNPJ/CPF (niFornecedor)</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Número do CNPJ (14 dígitos), CPF (11 dígitos) ou identificador de empresa estrangeira, <strong>somente dígitos</strong>, sem pontos, traços ou barras. Aceita até 30 caracteres.</td>
                            </tr>
                            <tr>
                                <td class="campo">Razão Social</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Nome completo da empresa ou pessoa física vencedora conforme cadastro na Receita Federal. Máximo 100 caracteres.</td>
                            </tr>
                            <tr>
                                <td class="campo">Porte do Fornecedor</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td><em>1</em> = ME (Microempresa); <em>2</em> = EPP (Empresa de Pequeno Porte); <em>3</em> = Demais; <em>4</em> = Não se aplica (pessoa física); <em>5</em> = Não informado.</td>
                            </tr>
                            <tr>
                                <td class="campo">Natureza Jurídica</td>
                                <td><span class="badge-map opt">Opcional</span></td>
                                <td>Código IBGE da natureza jurídica. Exemplos comuns: <em>2062</em> = Sociedade Limitada (LTDA), <em>2135</em> = Empresário Individual, <em>2046</em> = Sociedade Anônima Aberta (S/A).</td>
                            </tr>
                            <tr>
                                <td class="campo">Código ISO País (codigoPais)</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>País sede do fornecedor em formato ISO alpha-3. Fornecedores brasileiros = <em>BRA</em>.</td>
                            </tr>
                            <tr>
                                <td class="campo">País Origem Produto</td>
                                <td><span class="badge-map opt">Condicional</span></td>
                                <td>País onde o bem foi fabricado, no padrão ISO alpha-3. <strong>Obrigatório quando "Aplicação Margem de Preferência" = Sim.</strong> Para produção nacional: <em>BRA</em>.</td>
                            </tr>
                            <tr>
                                <td class="campo">Indicador de Subcontratação</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Informa se o fornecedor vencedor contratará terceiros para execução parcial do objeto. Para leilão informar <em>false</em>.</td>
                            </tr>
                            <tr>
                                <td class="campo">Ordem Classificação SRP</td>
                                <td><span class="badge-map opt">Opcional</span></td>
                                <td>Posição do fornecedor no cadastro reserva da Ata de Registro de Preços. Use apenas quando SRP = Sim. <em>1</em> = primeiro colocado (contratado), <em>2</em> = segundo colocado (reserva), etc. O PNCP rejeita registro duplicado da combinação tipoPessoa + niFornecedor + ordemClassificacao.</td>
                            </tr>
                            <tr>
                                <td class="campo">Data do Resultado</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Data da homologação do resultado do item (formato <code>AAAA-MM-DD</code>).</td>
                            </tr>
                            <tr>
                                <td class="campo">Aplicação Margem de Preferência</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Se <em>Sim</em>, o campo "Código Amparo Legal" (id 143) é habilitado e obrigatório. Também exige o preenchimento do <strong>País de Origem do Produto</strong>. Confirme apenas se a margem foi de fato aplicada.</td>
                            </tr>
                            <tr>
                                <td class="campo">Aplicação Benefício ME/EPP</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Se o fornecedor se beneficiou do tratamento diferenciado (empate ficto, prazo de regularização fiscal etc.) por ser ME ou EPP.</td>
                            </tr>
                            <tr>
                                <td class="campo">Critério de Desempate</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Se houve empate e foi necessário aplicar critério legal (Art. 60, Lei 14.133/2021). Se <em>Sim</em>, o código 146 é habilitado e obrigatório.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="clean-card manual-section" id="ata">
                <div class="clean-card-header">
                    <span class="header-dot"></span>
                    <i class="bi bi-file-earmark-text"></i>
                    <h5>Ata de Registro de Preço</h5>
                </div>
                <div class="clean-card-body">
                    <div class="warn-box">
                        <i class="bi bi-exclamation-triangle-fill"></i>
                        <div>Disponível somente para licitações com <strong>SRP = Sim</strong>. Ao salvar, o sistema envia automaticamente ao PNCP e retorna o <strong>sequencial da ata</strong> — necessário para enviar documentos na próxima etapa.</div>
                    </div>

                    <table class="field-table">
                        <thead><tr><th>Campo</th><th>Tipo</th><th>Descrição</th></tr></thead>
                        <tbody>
                            <tr>
                                <td class="campo">Número da Ata</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Número de identificação da ata no sistema interno. Ex: <em>001/2024</em>. Identificará a ata no PNCP como <code>numeroAtaRegistroPreco</code>.</td>
                            </tr>
                            <tr>
                                <td class="campo">Ano</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Ano de criação da ata (4 dígitos). Preenchido automaticamente com o ano corrente.</td>
                            </tr>
                            <tr>
                                <td class="campo">Data Assinatura</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Data em que a ata foi assinada pelas partes (órgão contratante e fornecedor).</td>
                            </tr>
                            <tr>
                                <td class="campo">Vigência Início</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Data de início da validade da ata. Normalmente coincide com a data de assinatura.</td>
                            </tr>
                            <tr>
                                <td class="campo">Vigência Fim</td>
                                <td><span class="badge-map req">Obrigatório</span></td>
                                <td>Data de expiração da ata. O prazo máximo é 1 ano, podendo ser prorrogado por igual período (Art. 84, Lei 14.133/2021).</td>
                            </tr>
                            <tr>
                                <td class="campo">Arquivo (PDF)</td>
                                <td><span class="badge-map opt">Opcional</span></td>
                                <td>Cópia da ata assinada, salva localmente no servidor. Para enviar ao PNCP, use a aba "Documento da Ata" após obter o sequencial.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="clean-card manual-section" id="documento-ata">
                <div class="clean-card-header">
                    <span class="header-dot"></span>
                    <i class="bi bi-cloud-upload"></i>
                    <h5>Documento da Ata</h5>
                </div>
                <div class="clean-card-body">
                    <p style="font-size:.875rem; color:var(--slate-600);">
                        Envia arquivos PDF ao PNCP vinculados a uma ata existente. A ata <strong>deve ter um sequencial PNCP</strong> para aparecer no seletor desta aba.
                    </p>

                    <ul class="step-list">
                        <li><div class="step-content">Certifique-se de que a ata foi enviada ao PNCP com sucesso e possui um sequencial visível na tabela de atas.</div></li>
                        <li><div class="step-content">Selecione a ata desejada no campo "Selecione a Ata".</div></li>
                        <li><div class="step-content">Escolha o <strong>Tipo de Documento</strong> que melhor descreve o arquivo.</div></li>
                        <li><div class="step-content">Informe um <strong>título</strong> com até 50 caracteres.</div></li>
                        <li><div class="step-content">Faça upload do PDF (máximo 10MB) e clique em "Enviar Documento para PNCP".</div></li>
                    </ul>

                    <div class="manual-h3"><i class="bi bi-file-earmark-text"></i> Tipos de Documento mais utilizados</div>
                    <table class="field-table">
                        <thead><tr><th>Descrição</th><th>ID</th><th>Quando usar</th></tr></thead>
                        <tbody>
                            <tr><td>Ata de Registro de Preços</td><td>11</td><td>Documento principal da ata assinada — o mais comum nesta seção</td></tr>
                            <tr><td>Minuta do Contrato</td><td>3</td><td>Modelo de contrato que integra o edital</td></tr>
                            <tr><td>Termo Aditivo</td><td>14</td><td>Aditamento de prazo, valor ou objeto</td></tr>
                            <tr><td>Termo de Apostilamento</td><td>15</td><td>Reajuste de valores por indexador</td></tr>
                            <tr><td>Nota de Empenho</td><td>17</td><td>Documento de empenho orçamentário</td></tr>
                            <tr><td>Relatório Final</td><td>18</td><td>Encerramento do contrato/ata</td></tr>
                            <tr><td>Outros</td><td>16</td><td>Documentos que não se enquadram nas categorias acima</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="clean-card manual-section" id="glossario">
                <div class="clean-card-header">
                    <span class="header-dot"></span>
                    <i class="bi bi-journal-text"></i>
                    <h5>Glossário PNCP</h5>
                </div>
                <div class="clean-card-body">
                    <div class="glossary-grid">
                        <div class="glossary-item">
                            <div class="term">PNCP</div>
                            <div class="def">Portal Nacional de Contratações Públicas. Plataforma federal onde todas as licitações regidas pela Lei 14.133/2021 devem ser publicadas para transparência.</div>
                        </div>
                        <div class="glossary-item">
                            <div class="term">Sequencial PNCP</div>
                            <div class="def">Número único gerado pelo PNCP ao cadastrar uma compra. Identifica a licitação no portal e é obrigatório para enviar resultados, atas e documentos.</div>
                        </div>
                        <div class="glossary-item">
                            <div class="term">SRP</div>
                            <div class="def">Sistema de Registro de Preços. O fornecedor não é contratado imediatamente, mas tem seu preço registrado em ata para futuras contratações durante o prazo de vigência.</div>
                        </div>
                        <div class="glossary-item">
                            <div class="term">Amparo Legal</div>
                            <div class="def">Artigo da Lei 14.133/2021 que fundamenta a modalidade. Art. 28 = licitação obrigatória. Art. 74 = inexigibilidade. Art. 75 = dispensa por valor ou outras hipóteses.</div>
                        </div>
                        <div class="glossary-item">
                            <div class="term">niFornecedor</div>
                            <div class="def">Número de Identificação do Fornecedor. CNPJ para PJ (14 dígitos) ou CPF para PF (11 dígitos). Enviar apenas números, sem formatação.</div>
                        </div>
                        <div class="glossary-item">
                            <div class="term">Homologação</div>
                            <div class="def">Ato da autoridade competente que confirma o resultado da licitação. Os campos "Homologado" referem-se ao valor/quantidade após este ato formal.</div>
                        </div>
                        <div class="glossary-item">
                            <div class="term">Margem de Preferência</div>
                            <div class="def">Percentual adicionado ao preço de produtos importados para favorecer produtos nacionais na comparação de propostas (Decreto 7.546).</div>
                        </div>
                        <div class="glossary-item">
                            <div class="term">ME / EPP</div>
                            <div class="def">Microempresa (receita bruta ≤ R$ 360 mil/ano) e Empresa de Pequeno Porte (≤ R$ 4,8 milhões/ano). Possuem tratamento diferenciado pela LC 123/2006.</div>
                        </div>
                        <div class="glossary-item">
                            <div class="term">CNPJ da FAPEU</div>
                            <div class="def">83.476.911/0001-17. Fixo em todo o sistema. O campo é read-only e o sistema remove a formatação antes de enviar à API.</div>
                        </div>
                        <div class="glossary-item">
                            <div class="term">Unidade Compradora (42)</div>
                            <div class="def">Código interno da unidade da FAPEU responsável pela contratação. Sempre 42. Preenchido automaticamente pelo sistema.</div>
                        </div>
                        <div class="glossary-item">
                            <div class="term">compraUri / ataUri</div>
                            <div class="def">URL retornada pelo PNCP após cadastro bem-sucedido. O sistema extrai o número sequencial desta URL para salvar no banco de dados.</div>
                        </div>
                        <div class="glossary-item">
                            <div class="term">Incentivo Produtivo Básico</div>
                            <div class="def">Benefício fiscal vinculado à produção na Zona Franca de Manaus ou outros polos industriais. Aplica-se a produtos específicos definidos em decreto.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clean-card manual-section" id="erros">
                <div class="clean-card-header">
                    <span class="header-dot"></span>
                    <i class="bi bi-bug"></i>
                    <h5>Erros Comuns e Soluções</h5>
                </div>
                <div class="clean-card-body">
                    <table class="field-table">
                        <thead><tr><th>Erro</th><th>Causa</th><th>Solução</th></tr></thead>
                        <tbody>
                            <tr>
                                <td class="campo">400 — BadRequest</td>
                                <td>Campo obrigatório ausente ou em branco; CNPJ com formatação (pontos/barras); data fora do formato <code>AAAA-MM-DDTHH:MM:SS</code>; ou <strong>violação de conformidade</strong> entre Instrumento Convocatório, Modalidade e Amparo Legal.</td>
                                <td>Revise os campos obrigatórios. Confirme que a combinação Instrumento × Modalidade × Amparo Legal é válida. Consulte <code> setor do Ti</code> para ver o detalhe exato rejeitado.</td>
                            </tr>
                            <tr>
                                <td class="campo">422 — Unprocessable Entity</td>
                                <td>ID de domínio inválido (modalidade, amparo legal, critério, porte inexistente); percentual de margem ≥ 100; percentual enviado quando indicador é <em>false</em> (deveria ser nulo); combinação de tipo instrumento × modo de disputa incompatível.</td>
                                <td>Verificar se os IDs dos campos correspondem às tabelas em <a href="https://pncp.gov.br/app/entidades-dominio" target="_blank">pncp.gov.br/app/entidades-dominio</a>. A mensagem de detalhe no log indica o campo exato com problema.</td>
                            </tr>
                            <tr>
                                <td class="campo">500 — Internal Server Error</td>
                                <td>Erro interno no servidor do PNCP. Pode ocorrer por instabilidade da API ou arquivo PDF corrompido/inválido.</td>
                                <td>Aguardar alguns minutos e tentar novamente. Se persistir, verificar o log completo da requisição e entrar em contato com o suporte do PNCP.</td>
                            </tr>
                            <tr>
                                <td class="campo">Adicione pelo menos um item</td>
                                <td>Tentou salvar Seleção Pública sem nenhum item na tabela de itens de compra.</td>
                                <td>Preencher os campos do item e clicar no botão "Adicionar Item" antes de avançar para a aba Documentos.</td>
                            </tr>
                            <tr>
                                <td class="campo">Resultado salvo, erro no PNCP</td>
                                <td>A licitação não tem sequencial PNCP ou o número do item não corresponde a um item cadastrado no PNCP.</td>
                                <td>O resultado foi salvo localmente. Verificar se o sequencial existe na coluna "PNCP" da lista e se o número do item está correto.</td>
                            </tr>
                            <tr>
                                <td class="campo">Resultado duplicado (422)</td>
                                <td>O PNCP rejeita novo resultado se já existir registro ativo com a mesma combinação de <code>tipoPessoaId</code> + <code>niFornecedor</code> + <code>ordemClassificacaoSrp</code> para o mesmo item.</td>
                                <td>Usar a função de <strong>retificação</strong> do resultado existente ao invés de criar um novo. Verifique se o fornecedor já foi cadastrado para o item com a mesma ordem.</td>
                            </tr>
                            <tr>
                                <td class="campo">Contratação sem documento ativo</td>
                                <td>Tentativa de inserir itens ou resultado em contratação que não possui arquivo ativo vinculado no PNCP.</td>
                                <td>Verificar se o upload do arquivo (edital/documento) foi bem-sucedido na aba Documentos. Reenviar o documento antes de cadastrar itens ou resultados.</td>
                            </tr>
                            <tr>
                                <td class="campo">Sem atas no seletor (Documento da Ata)</td>
                                <td>A ata não possui sequencial PNCP ainda (não foi enviada com sucesso).</td>
                                <td>Verificar na aba "Ata de Abertura" se a ata possui sequencial na tabela. Reenviar se necessário.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="tip-box mt-3">
                        <i class="bi bi-lightbulb-fill"></i>
                        <div>Em caso de erros persistentes, procurar<code>o setor de TI </code>. Cada falha de envio é registrada com uma mensagem de status.</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('.manual-section');
    const navLinks = document.querySelectorAll('.sidebar-nav a[href^="#"]');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + entry.target.id) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }, { rootMargin: '-10% 0px -75% 0px' });

    sections.forEach(s => observer.observe(s));

    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
});
</script>

@endsection