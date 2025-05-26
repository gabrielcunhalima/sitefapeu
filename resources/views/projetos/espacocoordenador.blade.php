@extends('layout.header')
@section('title',' Espaço do Coordenador')

@section('conteudo')
<div class="container pb-5">
    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="card shadow-sm text-center border-0 hover-card position-relative overflow-hidden verdeclarofapeu">
                <div class="card-body p-4">
                    <div class="">
                        <i class="bi bi-laptop text-verde3" style="font-size: 2.5rem;"></i>
                    </div>
                    <h3 class="card-title mb-3">Portal do Coordenador</h3>
                    <p class="card-text">Realize pedidos e liberações, consulte relatórios financeiros e tenha uma visão completa do seu projeto.</p>
                        <a href="http://150.162.78.4:8080/manager/login/coordenador/" target="_blank" class="btn btn-success">
                            <i class="bi bi-box-arrow-up-right me-2"></i>Acessar Portal
                        </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm border-0 hover-card position-relative overflow-hidden verdeclarofapeu">
                <div class="card-body p-4">
                    <div class="text-center">
                        <i class="bi bi-people text-verde3" style="font-size: 2.5rem;"></i>
                    </div>
                    <h3 class="card-title text-center mb-3">Sistema DRHFlow</h3>
                    <p class="card-text text-center">Gerencie sua equipe, bolsistas e colaboradores com acesso direto ao sistema de Recursos Humanos.</p>
                    <div class="text-center">
                        <a href="http://150.162.78.45:8080/DRHFlow/" target="_blank" class="btn btn-success">
                            <i class="bi bi-box-arrow-up-right me-2"></i>Acessar DRHFlow
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card shadow-sm border-0 hover-card position-relative overflow-hidden verdeclarofapeu">
                <div class="card-body text-center">
                    <i class="bi bi-calculator-fill text-verde3 mb-3" style="font-size: 2.5rem;"></i>
                    <h4 class="card-title">Cálculo de Encargos de Prestação de Serviços</h4>
                    <p class="card-text">Ferramenta para simular encargos, impostos e valores líquidos sobre pagamentos de autônomos.</p>
                    <a href="https://eventos.fapeu.com.br/calculo/public" target="_blank" class="btn btn-success mt-2">
                        <i class="bi bi-box-arrow-up-right me-2"></i>Acessar Ferramenta
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h2 class="mb-4 text-verde3 fw-bold"><i class="bi bi-file-earmark-text me-2"></i>Formulários e Recursos</h2>
            <p class="lead text-muted mb-4">Acesse todos os formulários necessários para a gestão do seu projeto organizados por categoria.</p>

            <ul class="nav nav-tabs mb-4" id="formsTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="rh-tab" data-bs-toggle="tab" data-bs-target="#rh" type="button" role="tab" aria-controls="rh" aria-selected="true">
                        <i class="bi bi-person-badge me-1"></i>Recursos Humanos
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="financeiro-tab" data-bs-toggle="tab" data-bs-target="#financeiro" type="button" role="tab" aria-controls="financeiro" aria-selected="false">
                        <i class="bi bi-cash-coin me-1"></i>Financeiro | Prestação de Contas
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="materiais-tab" data-bs-toggle="tab" data-bs-target="#materiais" type="button" role="tab" aria-controls="materiais" aria-selected="false">
                        <i class="bi bi-box-seam me-1"></i>Materiais | Compras
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="importacao-tab" data-bs-toggle="tab" data-bs-target="#importacao" type="button" role="tab" aria-controls="importacao" aria-selected="false">
                        <i class="bi bi-airplane me-1"></i>Importação
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="simuladores-tab" data-bs-toggle="tab" data-bs-target="#simuladores" type="button" role="tab" aria-controls="simuladores" aria-selected="false">
                        <i class="bi bi-check-circle me-1"></i>Recursos Adicionais
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="manual-tab" data-bs-toggle="tab" data-bs-target="#manual" type="button" role="tab" aria-controls="manual" aria-selected="false">
                        <i class="bi bi-book me-1"></i>Manual de Compras
                    </button>
                </li>
            </ul>

            <div class="tab-content" id="formsTabsContent">
                <!-- Recursos Humanos -->
                <div class="tab-pane fade show active" id="rh" role="tabpanel" aria-labelledby="rh-tab">
                    <div class="table-responsive">
                        <table class="table table-hover shadow-sm border">
                            <thead class="table-success">
                                <tr>
                                    <th scope="col" style="width: 70%">Documento</th>
                                    <th scope="col" class="text-center">Data Atualização</th>
                                    <th scope="col" class="text-center">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.2 Cancelamento Alteração Declaração Bolsa ou Estágio</td>
                                    <td class="text-center">18/04/2024</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/1.2 Cancelamento Alteração de Bolsa ou Estágio.docx" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1.3 Documentos necessários para Contratação CLT / Opção Auxílio Alimentação</td>
                                    <td class="text-center">20/04/2018</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/1.3_formulario_dados_empregado_20_04_2018.doc" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1.5 Solicitação de Processo Seletivo Colaborador</td>
                                    <td class="text-center">30/09/2013</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/1.5_processo_seletivo.doc" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1.10 Rescisão / Alteração de Contrato de Trabalho</td>
                                    <td class="text-center">16/08/2013</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/1.10_alteracao_contrato_trabalho.doc" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1.14 TCE/PAE- Pós Graduação/Graduação UFSC</td>
                                    <td class="text-center">15/08/2023</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/1.14 TCEPAE- Pós GraduaçãoGraduação UFSC.docx" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1.16 Atestado de férias-Rescisão Estágio</td>
                                    <td class="text-center">01/10/2018</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/1.16_atestado_de_f_rias-rescis_o_estagio.doc" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1.18 Modelo de Termo Aditivo - TCE</td>
                                    <td class="text-center">21/11/2011</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/1.18_modelo_termo_aditivo_TCE.doc" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1.19 Termo de Rescisão de Estágio - Graduação (Emitir via SIARE)</td>
                                    <td class="text-center">16/07/2013</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/1.18_modelo_termo_aditivo_TCE.doc" class="btn btn-sm btn-outline-primary rounded-pill">
                                            <i class="bi bi-box-arrow-up-right"></i> Sistema SIARE
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1.20 Termo de Rescisão de Estágio - Pós</td>
                                    <td class="text-center">08/04/2024</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/1.20_RH_termo_rescisao_estagio_pos.docx" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1.30 Alteração de Vale Alimentação</td>
                                    <td class="text-center">16/08/2013</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/1.30_formulario_alteracao_aux_alimentacao.doc" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1.31 Aditivo ao contrato de prestação de serviços</td>
                                    <td class="text-center">10/07/2014</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/1.31_aditivo_ao_contrato_de_prestacao_servicos.docx" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1.32 Termo de rescisão ao contrato de prestação de serviços</td>
                                    <td class="text-center">10/07/2014</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/1.32_rescisao_de_contrato_de_prestacao_servicos.docx" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Financeiro -->
                <div class="tab-pane fade" id="financeiro" role="tabpanel" aria-labelledby="financeiro-tab">
                    <div class="table-responsive">
                        <table class="table table-hover shadow-sm border">
                            <thead class="table-success">
                                <tr>
                                    <th scope="col" style="width: 70%">Documento</th>
                                    <th scope="col" class="text-center">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2.1 Declaração de Diárias para Prestação de Contas - FAPESC</td>
                                    <td class="text-center">
                                        <span class="badge bg-secondary">Em atualização</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.2 Pagamento de Pessoa Jurídica</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/2.2_pagamento_juridico.doc" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.3 Procedimentos para Solicitação de Reembolsos</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/2.3_Regras_Reembolso.pdf" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.5 Relatório de Viagem/Combustível - FAPESC</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/2.5_relatorio_viagem_fapesc.doc" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.6 Solicitação de Emissão de Notas</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/2.6_solicitacao_de_fatura.doc" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.7 Pagamento de Pessoa Jurídica (uso da FAPEU)</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/2.7_pagamento_juridico_fapeu.docx" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Materiais -->
                <div class="tab-pane fade" id="materiais" role="tabpanel" aria-labelledby="materiais-tab">
                    <div class="table-responsive">
                        <table class="table table-hover shadow-sm border">
                            <thead class="table-success">
                                <tr>
                                    <th scope="col" style="width: 70%">Documento</th>
                                    <th scope="col" class="text-center">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3.1 Cadastro de Fornecedores</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/3.1_cadastro_fapeu_2015.docx" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Importação Tab -->
                <div class="tab-pane fade" id="importacao" role="tabpanel" aria-labelledby="importacao-tab">
                    <div class="table-responsive">
                        <table class="table table-hover shadow-sm border">
                            <thead class="table-success">
                                <tr>
                                    <th scope="col" style="width: 70%">Documento</th>
                                    <th scope="col" class="text-center">Data Atualização</th>
                                    <th scope="col" class="text-center">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>4.1 Importação de bens e serviços</td>
                                    <td class="text-center">30/08/2016</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/4.1_c10_importacao_bens_servicos.doc" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.2.1 Proforma Invoice Solicitação de SERVIÇOS</td>
                                    <td class="text-center">30/08/2016</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/4.2.1_proforma_invoice_servicos.docx" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.2.2 Proforma Invoice Solicitação de SOFTWARES</td>
                                    <td class="text-center">30/08/2016</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/4.2.2_proforma_invoice_softwares.docx" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.2.3 Proforma Invoice Solicitação de MATERIAIS</td>
                                    <td class="text-center">30/08/2016</td>
                                    <td class="text-center">
                                        <a href="pdfs/Projetos/4.2.3proforma_invoice_materiais.docx" class="btn btn-sm btn-outline-success rounded-pill">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- simuladores -->
                <div class="tab-pane fade" id="simuladores" role="tabpanel" aria-labelledby="simuladores-tab">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm border-0 hover-card position-relative overflow-hidden verdeclarofapeu">
                                <div class="card-body p-4 text-center">
                                    <i class="bi bi-people-fill text-verde3 mb-3" style="font-size: 2.5rem;"></i>
                                    <h4 class="card-title">Simulador de Custos Salariais CLT</h4>
                                    <p class="card-text">Calcule todos os encargos e custos totais para contratação de pessoal em regime CLT.</p><br>
                                    <a href="https://fap6.fapeu.org.br/scripts/fapeufap.pl/swfwfap175.p" target="_blank" class="btn btn-success mt-3">
                                        <i class="bi bi-box-arrow-up-right me-2"></i>Acessar Ferramenta
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm border-0 hover-card position-relative overflow-hidden verdeclarofapeu">
                                <div class="card-body p-4 text-center">
                                    <i class="bi bi-journal-text text-verde3 mb-3" style="font-size: 2.5rem;"></i>
                                    <h4 class="card-title">Pagamentos de Artigos Científicos</h4>
                                    <p class="card-text">Boletos para Pagamento da Submissão/Publicação de Artigos da Revista Texto & Contexto em Enfermagem.</p>
                                    <a href="https://fap6.fapeu.org.br/scripts/fapeufap.pl/swfwfap299" target="_blank" class="btn btn-success mt-3">
                                        <i class="bi bi-box-arrow-up-right me-2"></i>Acessar Ferramenta
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Manual -->
                <div class="tab-pane fade" id="manual" role="tabpanel" aria-labelledby="manual-tab">
                    <div class="row">
                        <div class="col-lg-8 mx-auto text-center">
                            <div class="card shadow-sm border-0">
                                <div class="card-body p-4">
                                    <i class="bi bi-book text-verde3 mb-3" style="font-size: 3rem;"></i>
                                    <h3 class="mb-3">Manual de Compras e Contratações</h3>
                                    <p class="text-muted mb-4">Documento orientativo com as normas e procedimentos para aquisições e contratações de serviços nos projetos gerenciados pela FAPEU.</p>
                                    <a href="{{ asset('pdfs/Projetos/Manual_de_Compras_e_Contratacoes.pdf') }}" class="btn btn-success btn-lg" download>
                                        <i class="bi bi-download me-2"></i>Baixar Manual
                                    </a>
                                </div>
                            </div>

                            <div class="pdf-viewer mt-4">
                                <object class="pdf w-100 shadow-lg" data="{{url('pdfs/Projetos/Manual_de_Compras_e_Contratacoes.pdf')}}" style="height: 600px;">
                                    <p>Seu navegador não suporta a visualização de PDF. Por favor, <a href="{{ asset('pdfs/Projetos/Manual_de_Compras_e_Contratacoes.pdf') }}">clique aqui para baixar o arquivo</a>.</p>
                                </object>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- precisa de ajuda -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card fapeu-card bg-cinzaverde border-0 shadow-sm">
                <div class="card-body p-4 fapeu-card">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center mb-3 mb-md-0">
                            <i class="bi bi-headset text-verde3" style="font-size: 4rem;"></i>
                        </div>
                        <div class="col-md-7 mb-3 mb-md-0">
                            <h4 class="mb-2">Precisa de ajuda?</h4>
                            <p class="mb-0">Nossa equipe está pronta para auxiliá-lo. Entre em contato para tirar dúvidas sobre procedimentos, formulários ou sistemas.</p>
                        </div>
                        <div class="col-md-3 text-md-end text-center">
                            <a href="{{ route('faleconosco.contato') }}" class="btn btn-success btn-lg rounded-pill">
                                <i class="bi bi-envelope me-2"></i>Contato
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .table-hover tbody tr:hover {
        background-color: rgba(13, 110, 253, 0.05);
    }

    .nav-tabs .nav-link {
        color: #555;
        border: none;
        padding: 0.75rem 1.25rem;
        border-bottom: 3px solid transparent;
        transition: all 0.2s ease;
    }

    .nav-tabs .nav-link:hover {
        border-bottom: 3px solid #dee2e6;
    }

    .nav-tabs .nav-link.active {
        color: #146551;
        font-weight: bold;
        border-bottom: 3px solid #146551;
    }

    .text-verde3 {
        color: #30755C;
    }

    .text-verde4 {
        color: #155c27;
    }

    .bg-verde3 {
        background-color: #30755C;
    }

    .bg-verde4 {
        background-color: #155c27;
    }

    .verdeclarofapeu {
        background-color: #E7EEE9;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Verificar se há um hash na URL para ativar a tab correspondente
        if (window.location.hash) {
            const tab = document.querySelector(`[data-bs-target="${window.location.hash}"]`);
            if (tab) {
                new bootstrap.Tab(tab).show();
            }
        }
    });
</script>
@endsection