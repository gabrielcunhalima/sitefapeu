@extends('layout.header')
@section('title',' Sobre a FAPEU')

@section('conteudo')
<style>
    body {
        background-color: #f8f9fa;
    }

    .about-section {

        background-color: #f8f9fa;
    }

    .about-header {
        position: relative;
        margin-bottom: 40px;
        font-weight: 700;
        color: #333;
    }

    .about-header:after {
        content: '';
        position: absolute;
        bottom: -12px;
        left: 0;
        width: 60px;
        height: 4px;
        background-color: #06551A;
    }

    .about-content {
        color: #555;
        line-height: 1.8;
        text-align: justify;
    }

    .video-wrapper {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        margin-top: 15px;
    }

    .video-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 12px;
        border: none;
    }

    .value-card {
        border-radius: 12px;
        padding: 30px;
        height: 100%;
        transition: all 0.3s ease;
        margin-bottom: 20px;
    }

    .value-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .value-card .title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 15px;
        color: #fff;
    }

    .value-card .description {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #fff;
    }

    .card-blue {
        background: linear-gradient(135deg, #75c6ef 0%, #5fb4e5 100%);
    }

    .card-green {
        background: linear-gradient(135deg, #80c683 0%, #16a085 100%);
    }

    .card-purple {
        background: linear-gradient(135deg, #a98de0 0%, #837ae8 100%);
    }

    .vertical-divider {
        position: relative;
        min-height: 100%;
    }

    .vertical-divider::after {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        width: 2px;
        background-color: #06551A;
        transform: translateX(-50%);
    }
</style>

<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mt-2">
                <h2 class="about-header">Fundação de Amparo à Pesquisa e Extensão Universitária</h2>
                <div class="about-content">
                    <p>A <strong>Fundação de Amparo à Pesquisa e Extensão Universitária – FAPEU</strong> é uma instituição de direito privado, sem fins lucrativos, que tem como objetivo principal apoiar o desenvolvimento de projetos de ensino, pesquisa, extensão, desenvolvimento institucional, científico e tecnológico e estímulo à inovação universitária.</p>

                    <p>A FAPEU foi instituída como fundação de apoio à Universidade Federal de Santa Catarina em 28 de setembro de 1977, com sede e foro na cidade de Florianópolis, Santa Catarina, Brasil.</p>

                    <p>Atua, também, como Fundação de Apoio à Universidade Federal da Fronteira Sul - UFFS, ao Instituto Federal Catarinense – IFC, à Universidade Federal do Pampa – UNIPAMPA, ao Hospital Universitário da Universidade Federal de Santa Catarina (HU-UFSC/EBSERH), bem como, à Universidade do Estado de Santa Catarina - UDESC, podendo atuar em parceria com outras instituições de ensino superior e institutos de pesquisa de Santa Catarina e de outros estados.</p>

                    <p>É instituição reconhecida de utilidade pública municipal e estadual, fiscalizada pelo Ministério Público de Santa Catarina, registrada e credenciada no Ministério da Educação e no Ministério da Ciência, Tecnologia e Inovação, nos termos da Lei Federal nº 8.958/94, Decreto nº 7.423/2010 e Portaria Interministerial nº 191/2012.</p>

                    <p>Entre as principais atividades realizadas pela FAPEU estão o gerenciamento de projetos de ensino, pesquisa, extensão desenvolvimento institucional, científico e tecnológico e estímulo à inovação universitária, a gestão de recursos financeiros e administrativos, a prestação de serviços técnicos especializados, a organização de eventos acadêmicos e científicos, a promoção da inovação e do empreendedorismo.</p>

                    <p>Com o objetivo de fomentar a pesquisa e a extensão universitária, contribuindo para a produção e difusão do conhecimento, bem como para o fortalecimento do relacionamento das instituições apoiadas com a sociedade regional, nacional e internacional, a FAPEU atua na captação de recursos junto a órgãos governamentais, empresas e outras fontes de financiamento.</p>
                </div>
            </div>

            <div class="col-1 vertical-divider mb-5 mt-3"></div>

            <div class="col-lg-4">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/igI4tjoS-u0" title="Fapeu 40 anos - vídeo institucional (com libras e legendas) - 2017" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="about-content mt-4">
                    <p>A FAPEU possui um portfólio completo em soluções integradas para gerenciar os projetos, atendendo as necessidades dos pesquisadores, facilitando o desenvolvimento dos trabalhos, bem como adota um sistema de custos que possibilita a remuneração clara e justa dos serviços prestados.</p>

                    <p>Nas instituições apoiadas, o foco está na promoção de ações voltadas a tornar os projetos mais eficientes e sustentáveis. Contando com uma equipe enxuta de empregados, a FAPEU atua de forma interativa e didática junto aos coordenadores e equipes de projetos, buscando oferecer o suporte necessário sobre os aspectos relacionados à gestão administrativa, incluindo as determinações legais e as exigências para a correta prestação de contas desses projetos.</p>

                    <p>Dessa forma, o trabalho da FAPEU é reconhecido pela comunidade acadêmica e tem contribuído significativamente para o desenvolvimento científico e tecnológico do Brasil, em especial nos estados de Santa Catarina, Rio Grande do Sul e Paraná.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container mb-5">
    <div class="row">
        <div class="col-md-4 mb-2">
            <div class="value-card card-blue">
                <h4 class="title">Missão</h4>
                <p class="description">Contribuir para o desenvolvimento científico, tecnológico e social por meio de apoio a projetos de pesquisa e extensão.</p>
            </div>
        </div>

        <div class="col-md-4 mb-2">
            <div class="value-card card-green">
                <h4 class="title">Visão</h4>
                <p class="description">Ser reconhecida como instituição socialmente responsável e referência na gestão de projetos culturais, científicos, tecnológicos e de inovação.</p>
            </div>
        </div>

        <div class="col-md-4 mb-2">
            <div class="value-card card-purple">
                <h4 class="title">Valores</h4>
                <p class="description">Honestidade, Transparência, Conformidade, Equidade, Responsabilidade e Respeito à Vida, às Pessoas e ao Meio Ambiente.</p>
            </div>
        </div>
    </div>
</section>

@endsection