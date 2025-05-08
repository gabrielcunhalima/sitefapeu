@extends('layout.header')
@section('title',' Formulários')

@section('conteudo')
<div class="container" style="font-size:16px;">
    <h4 class="rounded bg-success-subtle text-center text-verde3 mb-5 p-2"><b>Clique no título para iniciar o download do arquivo.</b></h4>
    <table class="shadow table-striped table">
        <thead class="table-dark">
            <tr>
                <th scope="col">1- RH</th>
                <th scope="col">Publicado em</th>
            </tr>
        </thead>
        <tbody>
            <tr onclick="window.location.href='pdfs/Projetos/1.2_Cancelamento_de_bolsa_ junho 2024.doc'" style="cursor: pointer;">
                <td>1.2 Cancelamento de Bolsa ou Estágio </td>
                <td>18/04/2024</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/1.3_formulario_dados_empregado_20_04_2018.doc'" style="cursor: pointer;">
                <td>1.3 Documentos necessários para Contratação CLT / Opção Auxílio Alimentação (enviar com autorização da FAPEU)</td>
                <td>20/04/2018</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/1.5_processo_seletivo.doc'" style="cursor: pointer;">
                <td>1.5 Solicitação de Processo Seletivo Colaborador</td>
                <td>30/09/2013</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/1.10_alteracao_contrato_trabalho.doc'" style="cursor: pointer;">
                <td>1.10 Rescisão / Alteração de Contrato de Trabalho</td>
                <td>16/08/2013</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/1.14 TCEPAE- Pós GraduaçãoGraduação UFSC.docx'" style="cursor: pointer;">
                <td>1.14 TCE/PAE- Pós Graduação/Graduação UFSC</td>
                <td>15/08/2023</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/1.16_atestado_de_f_rias-rescis_o_estagio.doc'" style="cursor: pointer;">
                <td>1.16 Atestado de férias-Rescisão Estágio</td>
                <td>01/10/2018</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/1.18_modelo_termo_aditivo_TCE.doc'" style="cursor: pointer;">
                <td>1.18 Modelo de Termo Aditivo - TCE</td>
                <td>21/11/2011</td>
            </tr>
            <tr onclick="window.location.href='#'" style="cursor: pointer;">
                <td>1.19 Termo de Rescisão de Estágio - Graduação (Emitir via SIARE)</td>
                <td>16/07/2013</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/1.20_RH_termo_rescisao_estagio_pos.docx'" style="cursor: pointer;">
                <td>1.20 Termo de Rescisão de Estágio - Pós</td>
                <td>08/04/2024</td>
            </tr>
            <tr onclick="window.location.href='#'" style="cursor: pointer;">
                <td>1.21 Termo de Rescisão de Estágio - Outros</td>
                <td>08/04/2024</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/1.30_formulario_alteracao_aux_alimentacao.doc'" style="cursor: pointer;">
                <td>1.30 Alteração de Vale Alimentação</td>
                <td>16/08/2013</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/1.31_aditivo_ao_contrato_de_prestacao_servicos.docx'" style="cursor: pointer;">
                <td>1.31 Aditivo ao contrato de prestação de serviços</td>
                <td>10/07/2014</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/1.32_rescisao_de_contrato_de_prestacao_servicos.docx'" style="cursor: pointer;">
                <td>1.32 Termo de rescisão ao contrato de prestação de serviços</td>
                <td>10/07/2014</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered shadow">
        <thead class="table-dark">
            <tr>
                <th scope="col">2- FINANCEIRO - PRESTAÇÃO DE CONTAS</th>
            </tr>
        </thead>
        <tbody>
            <tr onclick="window.location.href='#'" style="cursor: pointer;">
                <td>2.1 Declaração de Diárias para Prestação de Contas - FAPESC</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/2.2_pagamento_juridico.doc'" style="cursor: pointer;">
                <td>2.2 Pagamento de Pessoa Jurídica</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/2.3_Regras_Reembolso.pdf'" style="cursor: pointer;">
                <td>2.3 Procedimentos para Solicitação de Reembolsos</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/2.5_relatorio_viagem_fapesc.doc'" style="cursor: pointer;">
                <td>2.5 Relatório de Viagem/Combustível - FAPESC</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/2.6_solicitacao_de_fatura.doc'" style="cursor: pointer;">
                <td>2.6 Solicitação de Emissão de Notas</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/2.7_pagamento_juridico_fapeu.docx'" style="cursor: pointer;">
                <td>2.7 Pagamento de Pessoa Jurídica(uso da FAPEU)</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered shadow">
        <thead class="table-dark">
            <tr>
                <th>3- MATERIAS - COMPRAS</th>
            </tr>
        </thead>
        <tbody>
            <tr onclick="window.location.href='pdfs/Projetos/3.1_cadastro_fapeu_2015.docx'" style="cursor: pointer;">
                <td>3.1 Cadastro de Fornecedores</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered shadow">
        <thead class="table-dark">
            <tr>
                <th scope="col">4- IMPORTAÇÃO</th>
                <th scope="col" style="width:150px;">Publicado em</th>
            </tr>
        </thead>
        <tbody>
            <tr onclick="window.location.href='pdfs/Projetos/4.1_c10_importacao_bens_servicos.doc'" style="cursor: pointer;">
                <td>4.1 Importação de bens e serviços</td>
                <td>30/08/2016</td>
            </tr>
            <tr>
                <td>4.2 Modelos para Proformas Invoice</td>
                <td>20/04/2018</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/4.2.1_proforma_invoice_servicos.docx'" style="cursor: pointer;">
                <td>4.2.1 Proforma Invoice Solicitação de SERVIÇOS</td>
                <td>30/08/2016</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/4.2.2_proforma_invoice_softwares.docx'" style="cursor: pointer;">
                <td>4.2.2 Proforma Invoice Solicitação de SOFTWARES</td>
                <td>30/08/2016</td>
            </tr>
            <tr onclick="window.location.href='pdfs/Projetos/4.2.3proforma_invoice_materiais.docx'" style="cursor: pointer;">
                <td>4.2.3 Proforma Invoice Solicitação de MATERIAIS</td>
                <td>30/08/2016</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered shadow">
        <thead class="table-dark">
            <tr>
                <th scope="col">9- RECURSOS ADICIONAIS</th>
                <th scope="col">Publicado em</th>
            </tr>
        </thead>
        <tbody>
            <!-- 9.1 https://fap6.fapeu.org.br/scripts/fapeufap.pl/swfwfap174.p' -->
            <tr onclick="window.location.href='https://eventos.fapeu.com.br/calculo/public'" style="cursor: pointer;">
                <td>9.1 Calculo Encargos Sobre Prestação Serviços Autonomos</td>
                <td>08/04/2024</td>
            </tr>
            <tr onclick="window.location.href='https://fap6.fapeu.org.br/scripts/fapeufap.pl/swfwfap175.p'" style="cursor: pointer;">
                <td>9.2 Simulador para Custos Salariais CLT</td>
                <td>08/04/2024</td>
            </tr>
            <!-- 9.3 'https://fap6.fapeu.org.br/scripts/fapeufap.pl/swfwfap178.p' -->
            <tr onclick="window.location.href='https://eventos.fapeu.com.br/calculo/public'" style="cursor: pointer;">
                <td>9.3 Cálculo para Prestação de Serviços/Autônomo informando o Líquido</td>
                <td>08/04/2024</td>
            </tr>
            <!-- 9.4 'https://fap6.fapeu.org.br/scripts/fapeufap.pl/swfwfap181.p' -->
            <tr onclick="window.location.href='https://eventos.fapeu.com.br/calculo/public'" style="cursor: pointer;">
                <td>9.4 Cálculo para Prestação de Serviços informando o custo para o Projeto</td>
                <td>08/04/2024</td>
            </tr>
            <tr onclick="window.location.href='https://fap6.fapeu.org.br/scripts/fapeufap.pl/swfwfap299'" style="cursor: pointer;">
                <td>9.5 Boletos para Pagamento da Submissão/Publicação de Artigos da Revista Texto & Contexto em Enfermagem</td>
                <td>08/04/2024</td>
            </tr>
        </tbody>
    </table>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("tr[onclick]").forEach(tr => {
        tr.addEventListener("mouseover", function () {
            this.classList.add("bg-success-subtle");
        });
        tr.addEventListener("mouseout", function () {
            this.classList.remove("bg-success-subtle");
        });
    });
});
</script>
@endsection