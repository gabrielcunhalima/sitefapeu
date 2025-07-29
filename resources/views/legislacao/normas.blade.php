@extends('layout.header')
@section('title', ' Normas Internas FAPEU e Instituições Apoiadas')

@section('conteudo')
    <style>
        .institution-card {
            background-color: #fff;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }


        .institution-title {
            color: #06551a;
            font-size: 1.6rem;
            font-weight: 600;
            margin-bottom: 20px;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
        }

        .institution-subtitle {
            color: #555;
            font-size: 1.1rem;
            font-style: italic;
            margin-bottom: 25px;
        }

        .normas-list {
            list-style-type: none;
            padding-left: 0;
        }

        .normas-list li {
            margin-bottom: 15px;
            position: relative;
            padding-left: 25px;
        }

        .normas-list li:before {
            content: "\F132";
            font-family: "bootstrap-icons";
            position: absolute;
            left: 0;
            top: 2px;
            color: #06551a;
        }

        .normas-link {
            color: #333;
            text-decoration: none;
            transition: all 0.2s ease;
            font-weight: 600;
        }

        .normas-link:hover {
            color: #06551a;
            text-decoration: underline;
        }

        .normas-date {
            color: #6c757d;
            font-size: 0.9rem;
            display: block;
            margin-top: 4px;
        }

        .norm-description {
            color: #555;
            margin-top: 5px;
        }

        .divider {
            height: 1px;
            background-color: #e9ecef;
            margin: 30px 0;
        }

        @media (max-width: 768px) {
            .normas-section {
                padding: 30px 0;
            }

            .section-header {
                text-align: center;
            }

            .section-header:after {
                left: 50%;
                transform: translateX(-50%);
            }
        }
    </style>

    <section class="normas-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="institution-card">
                        <h3 class="institution-title">FAPEU</h3>
                        <p class="institution-subtitle">Fundação de Amparo à Pesquisa e Extensão Universitária</p>

                        <ul class="normas-list">

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/PORTARIA NORMATIVA N. 002 DE 2025 - COMITÊ DE IMPLEMENTAÇÃO LGPD_Altera a PN 002 2022 DE_ 27.01.2022_ Revoga a PN 004 2024 DE_25.04.2024.pdf"
                                    target="_blank" class="normas-link">
                                    PORTARIA NORMATIVA Nº 002/DE/2025, de 20 de fevereiro de 2025
                                </a>
                                <p class="norm-description">Altera a Portaria Normativa N. 002/DE/2022, no que tange à composição dos membros do Comitê de Implementação da Lei Geral de Proteção de Dados (CI-LGPD) no âmbito da Fundação de Amparo à Pesquisa e Extensão Universitária (FAPEU).</p>
                            </li>


                            <li>
                                <a href="pdfs/Legislacao/FAPEU/PORTARIA NORMATIVA N. 001 DE 2025 - Aprova as alterações no Código de Conduta da FAPEU.pdf"
                                    target="_blank" class="normas-link">
                                    PORTARIA NORMATIVA N. 001/DE/2025, de 20 de fevereiro de 2025
                                </a>
                                <p class="norm-description">Aprova as alterações no Código de Conduta da FAPEU.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/PORTARIA N. 002 DE 2024 - locação de auditório e sala de eventos revoga PORTARIA N. 003 DE 2013.pdf"
                                    target="_blank" class="normas-link">
                                    PORTARIA N. 002 DE 2024, de 11 de abril de 2024
                                </a>
                                <p class="norm-description">Dispõe sobre os valores para locação de auditório e salas de
                                    eventos e de limpeza e conservação, de que trata o art. 3º da Portaria nº. 003/DE/2013,
                                    de 11 de abril de 2013 e revoga a Portaria nº 008/DE/2019, de 10 de setembro de 2019.
                                </p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/PORTARIA N. 011 2023 DE - Designa membros do Comitê de Ética da FAPEU.pdf"
                                    target="_blank" class="normas-link">
                                    PORTARIA N. 011/2023/DE, de 14 de dezembro de 2023
                                </a>
                                <p class="norm-description">Designa membros do Comitê de Ética da FAPEU.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/PORTARIA_NORMATIVA____DE____ (3).pdf" target="_blank"
                                    class="normas-link">
                                    PORTARIA NORMATIVA N. 010/DE/2023, DE 31 de agosto de 2023
                                </a>
                                <p class="norm-description">Dispõe sobre a concessão de diárias para pessoas sem vínculo
                                    empregatício por conta de projetos sob a gestão administrativa e financeira da Fundação
                                    de Amparo à Pesquisa e Extensão Universitária - FAPEU, e dá outras providências.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/PORTARIA_NORMATIVA_N (5).pdf" target="_blank"
                                    class="normas-link">
                                    PORTARIA NORMATIVA N. 009/DE/2023, DE 31 de agosto de 2023
                                </a>
                                <p class="norm-description">Dispõe sobre a concessão de diárias no âmbito da Fundação de
                                    Amparo à Pesquisa e Extensão Universitária, e dá outras providências.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_normativa_n._011_de_2022_-_disp_e_sobre_a_concess_o_de_di_rias_para_pessoas_sem_v_nculo_empregat_cio.pdf"
                                    target="_blank" class="normas-link">
                                    PORTARIA NORMATIVA N. 011/2022/DE, DE 21 DE JULHO DE 2022
                                </a>
                                <p class="norm-description">Dispõe sobre a concessão de diárias para pessoas sem vínculo
                                    empregatício por conta de projetos sob a gestão administrativa e financeira da Fundação
                                    de Amparo à Pesquisa e Extensão Universitária, e dá outras providências. Fica revogada a
                                    Portaria N.003/DE/2012, de 7 de maio de 2012.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_normativa_n._010_de_2022_-_disp_e_sobre_a_concess_o_de_di_rias_no_mbito_da_fapeu.pdf"
                                    target="_blank" class="normas-link">
                                    PORTARIA NORMATIVA N. 010/2022/DE, DE 21 DE JULHO DE 2022
                                </a>
                                <p class="norm-description">Dispõe sobre a concessão de diárias no âmbito da Fundação de
                                    Amparo à Pesquisa e Extensão Universitária, e dá outras providências. Ficam revogadas as
                                    Portarias N. 002/DE/2022, de 26 de abril de 2012, e N. 007/DE/2016, de 15 de fevereiro
                                    de 2016.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_n._004_2022_de_-_encarregado_dados_pessoais_fapeu.pdf"
                                    target="_blank" class="normas-link">
                                    PORTARIA N. 004/2022/DE, de 02 de Abril de 2022
                                </a>
                                <p class="norm-description">Designa a Colabora Denise Medeiros Juliatto como Encarregada de
                                    Dados Pessoais da FAPEU.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_normativa_n._002_2022_de_-_comit_de_implementac_o_lgpd_revoga_a_portaria_normativa_n._018_2021_de.pdf"
                                    target="_blank" class="normas-link">
                                    PORTARIA NORMATIVA N. 002/2022/DE, de 27 de janeiro de 2022
                                </a>
                                <p class="norm-description">Institui o Comitê de Implementação da Lei Geral de Proteção de
                                    Dados (CI-LGPD) no âmbito da Fundação de Amparo à Pesquisa e Extensão Universitária
                                    (FAPEU). Fica revogada a PORTARIA NORMATIVA N. 018/2021/DE, de 22 de dezembro de 2021.
                                </p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_n._015_2021_de_-_designa_comit_de_gest_o_de_riscos.pdf"
                                    target="_blank" class="normas-link">
                                    PORTARIA N. 015/2021/DE de 9 de Novembro de 2021
                                </a>
                                <p class="norm-description">Designa Comitê de Gestão de Riscos</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_n._014_2021_de_-_designa_comit_de_tica_da_fapeu.pdf"
                                    target="_blank" class="normas-link">
                                    PORTARIA N. 014/2021/DE de 9 de Novembro de 2021
                                </a>
                                <p class="norm-description">Designa Comitê de Ética da FAPEU</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_n._013_2021_de_-_aprova_as_alterac_es_no_regimento_interno_do_comit_de_tica.pdf"
                                    target="_blank" class="normas-link">
                                    PORTARIA N. 013/2021/DE DE 25 DE OUTUBRO DE 2021
                                </a>
                                <p class="norm-description">Aprova alterações no Regimento Interno do Comitê de Ética da
                                    FAPEU.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_005_de_-_alterac_o_da_denominac_o_da_ger_ncia_financeira_e_extinc_o_a_ger_ncia_de_suprimentos.pdf"
                                    target="_blank" class="normas-link">
                                    Portaria Normativa nº 005/DE/2020, DE 11 DE FEVEREIRO DE 2020
                                </a>
                                <p class="norm-description">Altera a denominação de Gerência Financeira e extingue a
                                    Gerência de Serviços Gerais e o Departamento de Compras.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_008_de_2019_-_fixa_os_valores_para_locac_o_de_audit_rio_e_salas.pdf"
                                    target="_blank" class="normas-link">
                                    Portaria n. 008/DE/2019, DE 10 DE SETEMBRO DE 2019
                                </a>
                                <p class="norm-description">Fixa os valores para locação de auditório, salas e das taxas de
                                    condomínio e de limpeza e conservação, de que trata o art. 3º da Portaria nº.
                                    003/DE/2013, de 11 de abril de 2013.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_007_de_2019.pdf" target="_blank"
                                    class="normas-link">
                                    Portaria n. 007/DE/2019, DE 28 DE MARÇO DE 2019
                                </a>
                                <p class="norm-description">Aprova o Regimento Interno do Comitê de Ética da FAPEU.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_006_de_2019.pdf" target="_blank"
                                    class="normas-link">
                                    Portaria n. 006/DE/2019, DE 28 DE MARÇO DE 2019
                                </a>
                                <p class="norm-description">Aprova o Regimento Interno do Comitê de Gestão de Riscos da
                                    FAPEU.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_normativa_005_de_2019_-_disciplina_os_procedimentos_de_dilig_ncia_pr_via_de_terceiros.pdf"
                                    target="_blank" class="normas-link">
                                    Portaria Normativa n. 005/DE/2019, DE 28 DE MARÇO DE 2019
                                </a>
                                <p class="norm-description">Disciplina os procedimentos de diligência prévia de terceiros.
                                </p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_normativa_004_de_2019_-_disciplina_os_procedimentos_para_selec_o_e_contratac_o_de_pessoal.pdf"
                                    target="_blank" class="normas-link">
                                    Portaria Normativa n. 004/DE/2019, DE 28 DE FEVEREIRO DE 2019
                                </a>
                                <p class="norm-description">Disciplina os procedimentos para seleção de pessoal e
                                    contratação pela Consolidação das Leis do Trabalho - CLT.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_normativa_003_de_2019_-_cl_usulas_anticorrupc_o_em_contratos.pdf"
                                    target="_blank" class="normas-link">
                                    Portaria Normativa n. 003/DE/2019, DE 31 DE JANEIRO DE 2019
                                </a>
                                <p class="norm-description">Disciplina a exigência de cláusulas anticorrupção e social em
                                    contratos.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_normativa_002_de_2019_-_disciplina_procedimentos_comunicac_es_e_den_ncias.pdf"
                                    target="_blank" class="normas-link">
                                    Portaria Normativa n. 002/DE/2019, DE 29 DE JANEIRO DE 2019
                                </a>
                                <p class="norm-description">Disciplina e define procedimentos para o recebimento e
                                    encaminhamento das comunicações e denúncias, sua apuração e penas disciplinares, e dá
                                    outras providências sobre o Canal de Comunicações e Denúncias do Programa de
                                    Integridade.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_n_22_2018_de.pdf" target="_blank"
                                    class="normas-link">
                                    Portaria N 22/2018 DE de 27 de dezembro de 2018 - Comitê de Ética
                                </a>
                                <p class="norm-description">Designação dos membros do Comitê de Ética - 27 de Dezembro de
                                    2018</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_n_21_2018_de.pdf" target="_blank"
                                    class="normas-link">
                                    Portaria N 21/2018 DE - 27 de dezembro de 2018 - Comitê de Gestão de Risco
                                </a>
                                <p class="norm-description">Designação dos membros do Comitê de Risco - 27 de Dezembro de
                                    2018</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/resolucao_n_001_2018_cc.pdf" target="_blank"
                                    class="normas-link">
                                    Resolução N. 001 2018 CC de 28 de Novembro de 2018
                                </a>
                                <p class="norm-description">Aprova a Política Anticorrupção, o Programa de Integridade e o
                                    Código de Conduta da FAPEU.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_normativa_n._11_de_2018_-_estabelece_os_crit_rios_e_procedimetnos_para_a_concess_o_de_bolsas._revoga_a_portaria_n._017_de_2011.pdf" target="_blank"
                                    class="normas-link">
                                    Portaria Normativa n. 11/DE/2018, de 26 de julho de 2018
                                </a>
                                <p class="norm-description">Estabelece os critérios e procedimentos para a concessão de
                                    bolsas de Ensino, Pesquisa, Extensão, Estímulo à Inovação, e de Iniciação à Pesquisa
                                    para servidores e alunos das Instituições de Ensino Superior apoiadas e revoga a
                                    Portaria nº 017/DE/2011.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_normativa_n._008_de_2018_-_define_valores_de_bolsas_de_graduac_o_e_p_s-graduac_o.pdf"
                                    target="_blank" class="normas-link">
                                    Portaria Normativa n. 008/DE/2018, de 12 de julho de 2018
                                </a>
                                <p class="norm-description">Define os valores máximos permitidos para as bolsas de ensino,
                                    pesquisa, extensão, estímulo à Inovação e estágio para alunos de graduação e
                                    pós-graduação das instituições apoiadas e revoga a Portaria nº 001/DE/2013, de 14 de
                                    fevereiro de 2013.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_009_de_2017_-_delimitac_es_para_a_contratac_o_de_pj_com_recursos_p_blicos.pdf"
                                    target="_blank" class="normas-link">
                                    Portaria Normativa n. 09/DE/2017, de 21 de dezembro de 2017
                                </a>
                                <p class="norm-description">Delimitações para a contratação de Pessoa Jurídica com Recursos
                                    Públicos</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_normativa_n._006de2017.pdf" target="_blank"
                                    class="normas-link">
                                    Portaria Normativa n. 006/DE/2017, de 17 de Outubro de 2017
                                </a>
                                <p class="norm-description">Informa sobre não contratação de cônjuge, companheiro ou
                                    parentes na execução de contratos, convênios e acordos</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_007_de_2016_diarias_1_.pdf" target="_blank"
                                    class="normas-link">
                                    PORTARIA N°. 007/DE/2016, DE 15 DE FEVEREIRO DE 2016
                                </a>
                                <p class="norm-description">Altera a Tabela de Diárias constante da Portaria nº. 002/DE/2012
                                    da Diretoria Executiva da FAPEU, de 26 de abril de 2012, e reajusta os valores das
                                    diárias de viagem para o território nacional e para o exterior.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_normativa_001_de_2016_-reembolso.pdf"
                                    target="_blank" class="normas-link">
                                    Portaria Normativa n.01/DE/2016, de 21 de junho de 2016
                                </a>
                                <p class="norm-description">Dispõe sobre a concessão de reembolso de despesas pela Fundação
                                    de Amparo à Pesquisa e Extensão Universitária - FAPEU</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_013_de_2013.pdf" target="_blank"
                                    class="normas-link">
                                    Portaria n. 013/DE/2013, de 05 de setembro de 2013
                                </a>
                                <p class="norm-description">Disciplinar os procedimentos operacionais para concessão de
                                    Suprimento de Fundos.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_004_de_2013.pdf" target="_blank"
                                    class="normas-link">
                                    Portaria n. 004/DE/2013, de 11 de abril de 2013
                                </a>
                                <p class="norm-description">Fixa os valores do aluguel e das taxas de condomínio e de
                                    limpeza e conservação, de que trata o Art. 3º da Portaria n. 003/DE/2013, de 11 de abril
                                    de 2013.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_003_de_2013.pdf" target="_blank"
                                    class="normas-link">
                                    Portaria n. 003/DE/2013, de 11 de abril de 2013
                                </a>
                                <p class="norm-description">Estabelecer cobrança pela ocupação das instalações da FAPEU.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_007_de_2010.pdf" target="_blank"
                                    class="normas-link">
                                    Portaria n. 07/DE/2010, de 20 de setembro de 2010
                                </a>
                                <p class="norm-description">Determinar que a contratação de pessoal para exercício funcional
                                    nos projetos somente seja realizada mediante declaração escrita do respectivo
                                    coordenador.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_008_de_2011.pdf" target="_blank"
                                    class="normas-link">
                                    Portaria n. 008/DE/2011, de 02 de maio de 2011
                                </a>
                                <p class="norm-description">Disciplinar a implementação e o funcionamento de núcleos de
                                    competência, nos termos da alínea g, inciso XIX, do Art. 21 do Regimento Interno.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_007_de_2010.pdf" target="_blank"
                                    class="normas-link">
                                    Portaria n. 07/DE/2010, de 20 de setembro de 2010
                                </a>
                                <p class="norm-description">Determinar que a contratação de pessoal para exercício funcional
                                    nos projetos somente seja realizada mediante declaração escrita do respectivo
                                    coordenador.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/FAPEU/portaria_001_de_2009.pdf" target="_blank"
                                    class="normas-link">
                                    Portaria n. 01/DE/2009, de 26 de maio de 2009
                                </a>
                                <p class="norm-description">Assegurar os recursos financeiros necessários para o custeio de
                                    encargos e custas rescisórias com pessoal contratado em projetos/ contratos/ convênios.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="institution-card">
                        <h3 class="institution-title">UFSC</h3>
                        <p class="institution-subtitle">Universidade Federal de Santa Catarina</p>

                        <ul class="normas-list">
                            <li>
                                <a href="pdfs/Legislacao/UFSC/r_24.2019.cc-_prestac_o_de_contas.pdf" target="_blank"
                                    class="normas-link">
                                    RESOLUÇÃO NORMATIVA Nº 24/CC, DE 04 DE JULHO 2019
                                </a>
                                <p class="norm-description">Dispõe sobre normas para as prestações de contas dos contratos
                                    com as fundações de apoio, com base na Lei n' 8.958, de 20 de dezembro de 1994, e no
                                    Decreto n' 7.423, de 3 de dezembro de 2010.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/UFSC/portaria_normativa_n_1_proad_2018_-_disp_e_sobre_as_obrigac_es_a_serem_assumidas_pelos_coordenadores_de_projetos_nos_contratos_e_conv_nios_fundacionais.pdf"
                                    target="_blank" class="normas-link">
                                    PORTARIA NORMATIVA Nº 1/PROAD/2018, DE 25 DE MAIO DE 2018
                                </a>
                                <p class="norm-description">Dispõe sobre as obrigações a serem assumidas pelos Coordenadores
                                    de Projetos nos Contratos e Convênios envolvendo Fundações de Apoio.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/UFSC/resoluc_onormativa_88_2016_extens_o.pdf" target="_blank"
                                    class="normas-link">
                                    RESOLUÇÃO NORMATIVA Nº 88/2016/CUn, DE 25 DE OUTUBRO 2016
                                </a>
                                <p class="norm-description">Dispõe sobre as normas que regulamentam as ações de extensão na
                                    Universidade Federal de Santa Catarina.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/UFSC/resoluc_o_normativa_47-2.pdf" target="_blank"
                                    class="normas-link">
                                    RESOLUÇÃO NORMATIVA Nº 47/CUn, de 16 de Dezembro de 2014
                                </a>
                                <p class="norm-description">Dispõe sobre a atividade de pesquisa na Universidade Federal de
                                    Santa Catarina.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/UFSC/Resolução-Normativa-13.pdf" target="_blank"
                                    class="normas-link">
                                    RESOLUÇÃO NORMATIVA N.º 13/CUn/2011, DE 27 DE SETEMBRO DE 2011
                                </a>
                                <p class="norm-description">Dispõe sobre as normas que regulamentam as relações entre a
                                    Universidade Federal de Santa Catarina e as suas fundações de apoio.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="institution-card">
                        <h3 class="institution-title">UFFS</h3>
                        <p class="institution-subtitle">Universidade Federal da Fronteira Sul</p>

                        <ul class="normas-list">
                            <li>
                                <a href="#" target="_blank" class="normas-link">
                                    RESOLUÇÃO Nº 34/CONSUNI/UFFS/2020
                                </a>
                                <p class="norm-description">Aprova alterações na Resolução Nº 04/CONSUNI/2013 de 28/02/2013
                                </p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/UFFS/in_conjunta_3_-_prograd_propepg_proec_-_horas_volunt_rios.pdf"
                                    target="_blank" class="normas-link">
                                    INSTRUÇÃO NORMATIVA CONJUNTA Nº 3/PROEC-PROGRAD-PROPEPG/UFFS/2018
                                </a>
                                <p class="norm-description">Estabelece a carga horária semanal máxima para atividades em
                                    programas e projetos institucionalizados de Ensino, Pesquisa, Extensão e Cultura.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/UFFS/resolucao_15_2017___aprova_o_regulamento_de_pesquisa_da_uffs.pdf"
                                    target="_blank" class="normas-link">
                                    RESOLUÇÃO Nº 15/CONSUNI CPPGEC/UFFS/2017
                                </a>
                                <p class="norm-description">Aprova o Regulamento da Pesquisa da Universidade Federal da
                                    Fronteira Sul.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/UFFS/resoluc_o_n_004_2013_-_regulamenta_a_relac_o_da_uffs_com_as_fundac_es_de_apoio_-_alterada.pdf"
                                    target="_blank" class="normas-link">
                                    RESOLUÇÃO Nº 4/CONSUNI/UFFS/2013 (ALTERADA)
                                </a>
                                <p class="norm-description">Dispõe sobre as normas que regulamentam as relações entre a
                                    Universidade Federal da Fronteira Sul e as fundações de apoio.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/IFC/resoluc_o_22-2015-consuni_-_aprova_a_renovac_o_da_autorizac_o.pdf"
                                    target="_blank" class="normas-link">
                                    RESOLUÇÃO Nº 022 CONSUPER/2017
                                </a>
                                <p class="norm-description">Aprova a Prorrogação da autorização da Fundação de Amparo à
                                    Pesquisa e Extensão Universitária (FAPEU) para atuar como a fundação de apoio à UFFS.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="institution-card">
                        <h3 class="institution-title">IFC</h3>
                        <p class="institution-subtitle">Instituto Federal Catarinense</p>

                        <ul class="normas-list">
                            <li>
                                <a href="pdfs/Legislacao/IFC/resolucao_17_2021_alteracao_da_resolucao_n_22_2017_ifc.pdf"
                                    target="_blank" class="normas-link">
                                    IFC - RESOLUÇÃO 17/2021 - ALTERAÇÃO DA RESOLUÇÃO 22/2017
                                </a>
                                <p class="norm-description">Estabelece os procedimentos e normas do relacionamento das
                                    fundações de apoio com o Instituto Federal de Santa Catarina - IFC.</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/IFC/resoluc_o-009-2015-aprova-regulamento-curso-de-extens_o.pdf"
                                    target="_blank" class="normas-link">
                                    RESOLUÇÃO Nº 09/2015
                                </a>
                                <p class="norm-description">Aprova Regulamento Curso de Extensão</p>
                            </li>

                            <li>
                                <a href="pdfs/Legislacao/IFC/resoluc_o-011-2015-aprova-regulamento-de-atividades-docentes1_1_.pdf"
                                    target="_blank" class="normas-link">
                                    RESOLUÇÃO Nº 11/2015
                                </a>
                                <p class="norm-description">Aprova Regulamento de Atividades Docentes</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="institution-card">
                        <h3 class="institution-title">UDESC</h3>
                        <p class="institution-subtitle">Universidade do Estado de Santa Catarina</p>

                        <ul class="normas-list">
                            <li>
                                <a href="pdfs/Legislacao/UDESC/resoluc_o_consuni_087-2015_-_trata_da_relac_o_com_as_fundac_es_de_apoio.pdf"
                                    target="_blank" class="normas-link">
                                    RESOLUÇÃO Nº 087-2015 - CONSUNI
                                </a>
                                <p class="norm-description">Estabelece os procedimentos e normas do relacionamento das
                                    fundações de apoio com a Fundação Universidade do Estado de Santa Catarina – UDESC</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="institution-card">
                        <h3 class="institution-title">UNIPAMPA</h3>
                        <p class="institution-subtitle">Universidade Federal do Pampa</p>

                        <ul class="normas-list">
                            <li>
                                <a href="pdfs/Legislacao/UNIPAMPA/res-_323_2021-fundacoes-de-apoio.pdf" target="_blank"
                                    class="normas-link">
                                    RESOLUÇÃO CONSUNI/UNIPAMPA Nº 323, DE 30 DE SETEMBRO DE 2021
                                </a>
                                <p class="norm-description">Regulamenta o relacionamento entre a Universidade Federal do
                                    Pampa (UNIPAMPA) e as fundações de apoio autorizadas pelo Ministério da Educação (MEC) e
                                    pelo Ministério da Ciência, Tecnologia e Inovação (MCTI), à prestação de serviços que
                                    envolva contratação ou convênio com fundação de apoio e a concessão de bolsas em
                                    projetos e revoga as Resoluções CONSUNI/UNIPAMPA nº 122, de 26 de novembro de 2015 e nº
                                    130, de 17 de dezembro de 2015.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="institution-card">
                        <h3 class="institution-title">EBSERH HU UFSC</h3>
                        <p class="institution-subtitle">Hospital Universitário da Universidade Federal de Santa Catarina</p>

                        <ul class="normas-list">
                            <li>
                                <a href="https://www.gov.br/ebserh/pt-br/acesso-a-informacao/boletim-de-servico/sede/2022/anexos/norma_de_relacionamento_entre_a_ebserh_e_as_fundacoes_de_apoio_vf.pdf"
                                    target="_blank" class="normas-link">
                                    NORMA DE RELACIONAMENTO ENTRE A EBSERH E AS FUNDAÇÕES DE APOIO
                                </a>
                                <p class="norm-description">Estabelece as diretrizes e procedimentos para o relacionamento
                                    entre a EBSERH e as fundações de apoio.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection