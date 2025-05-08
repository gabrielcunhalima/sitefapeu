@extends('layout.header')
@section('title', ' Portal da Transparência')

@section('conteudo')
<style>
    .transparency-section {
        background-color: #f8f9fa;
    }

    .section-header {
        position: relative;
        margin-bottom: 40px;
        font-weight: 700;
        color: #333;
    }

    .section-header:after {
        content: '';
        position: absolute;
        bottom: -12px;
        left: 0;
        width: 60px;
        height: 4px;
        background-color: #06551A;
    }

    .info-card {
        background-color: #fff;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px;
    }

    .link-list {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 15px;
        margin-top: 20px;
    }

    .link-list a {
        display: block;
        padding: 12px 15px;
        border-radius: 6px;
        transition: all 0.3s ease;
        color: #333;
        font-weight: 500;
        text-decoration: none;
        border-bottom: 1px solid #e9ecef;
    }

    .link-list a:last-child {
        border-bottom: none;
    }

    .link-list a:hover {
        background-color: #e9ecef;
        color: #06551A;
        transform: translateX(5px);
    }

    .portal-card {
        background-color: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        height: 100%;
    }


    .portal-card-header {
        background-color: #06551A;
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    .portal-card-body {
        padding: 30px;
        text-align: center;
    }

    .portal-icon {
        font-size: 3rem;
        color: #06551A;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .transparency-section {
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

<section class="transparency-section">
    <div class="container">
        <div class="info-card">
            <h3 class="mb-4">Ressarcimentos UFSC</h3>
            <p class="lead">
                Os ressarcimentos relativos ao uso dos recursos não financeiros da UFSC (recursos humanos e materiais tais como: laboratórios, salas de aula, materiais de apoio e de escritório...) seguem os seguintes regramentos:
            </p>

            <div class="link-list">
                <a href="pdfs/Transparencia/Projetos/ResolucaoNormativa/resolucao_normativa_47_2014_pesquisa.pdf" target="_blank">
                    <i class="bi bi-file-earmark-pdf me-2"></i> Resolução Normativa 47/2014/CUn - Projetos de Pesquisa - 10%
                </a>
                <a href="pdfs/Transparencia/Projetos/ResolucaoNormativa/resolucao_normativa_88_2016_extensao.pdf" target="_blank">
                    <i class="bi bi-file-earmark-pdf me-2"></i> Resolução Normativa 88/2016/CUn - Projetos de Extensão - 7%
                </a>
                <a href="pdfs/Transparencia/Projetos/ResolucaoNormativa/resoluao_normativa_15_cun_2011_curso_especializacao.pdf" target="_blank">
                    <i class="bi bi-file-earmark-pdf me-2"></i> Resolução Normativa 15/2011/CUn - Projetos de Ensino Pós-graduação, latusensu - 15%
                </a>
                <a href="pdfs/Transparencia/Projetos/ResolucaoNormativa/resolução_13_cun_2011.pdf" target="_blank">
                    <i class="bi bi-file-earmark-pdf me-2"></i> Resolução Normativa 13/2011/CUn - Projetos de Ensino Graduação e Pós-Graduação stricto sensu - 1%
                </a>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="portal-card">
                    <div class="portal-card-header">
                        <h3 class="m-0">Institucional</h3>
                    </div>
                    <div class="portal-card-body">
                        <div class="portal-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <p>Acesse dados institucionais, demonstrações contábeis e relatórios de projetos vinculados a FAPEU.</p>
                        <a href="http://150.162.78.4:8080/transparencia/transparencia/transparenciainstitucional" target="_blank" class="fapeu-btn">
                            Acessar Portal
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="portal-card">
                    <div class="portal-card-header">
                        <h3 class="m-0">Projetos</h3>
                    </div>
                    <div class="portal-card-body">
                        <div class="portal-icon">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <p>Consulte informações sobre os projetos gerenciados pela FAPEU e suas respectivas execuções.</p>
                        <a href="http://150.162.78.4:8080/transparencia/transparencia" target="_blank" class="fapeu-btn">
                            Acessar Portal
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="portal-card">
                    <div class="portal-card-header">
                        <h3 class="m-0">Perguntas Frequentes</h3>
                    </div>
                    <div class="portal-card-body">
                        <div class="portal-icon">
                            <i class="bi bi-question-circle"></i>
                        </div>
                        <p>Encontre respostas para as dúvidas mais comuns sobre a FAPEU e seus processos.</p><br>
                        <a href="{{route('transparencia.faq')}}" class="fapeu-btn">
                            Consultar FAQ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection