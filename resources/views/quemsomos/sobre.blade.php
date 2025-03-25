@extends('layout.header')
@section('title','FAPEU | Sobre a FAPEU')

@section('conteudo')
<style>
    .card-big-shadow {
        max-width: 320px;
        position: relative;
    }

    .coloured-cards .card {
        margin-top: 30px;
    }

    .card[data-radius="none"] {
        border-radius: 0px;
    }

    .card {
        border-radius: 8px;
        box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
        background-color: #FFFFFF;
        color: #252422;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
    }


    .card[data-background="image"] .title,
    .card[data-background="image"] .stats,
    .card[data-background="image"] .category,
    .card[data-background="image"] .description,
    .card[data-background="image"] .content,
    .card[data-background="image"] .card-footer,
    .card[data-background="image"] small,
    .card[data-background="image"] .content a,
    .card[data-background="color"] .title,
    .card[data-background="color"] .stats,
    .card[data-background="color"] .category,
    .card[data-background="color"] .description,
    .card[data-background="color"] .content,
    .card[data-background="color"] .card-footer,
    .card[data-background="color"] small,
    .card[data-background="color"] .content a {
        color: #FFFFFF;
    }

    .card.card-just-text .content {
        padding: 50px 30px;
        text-align: center;
    }

    .card .content {
        padding: 20px 20px 10px 20px;
    }

    .card[data-color="blue"] .category {
        color: #7a9e9f;
    }

    .card .category,
    .card .label {
        font-size: 14px;
        margin-bottom: 0px;
    }

    .card-big-shadow:before {
        background-image: url("http://static.tumblr.com/i21wc39/coTmrkw40/shadow.png");
        background-position: center bottom;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        bottom: -12%;
        content: "";
        display: block;
        left: -12%;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 0;
    }

    h4,
    .h4 {
        font-size: 1.5em;
        font-weight: 600;
        line-height: 1.2em;
    }

    .card .description {
        font-size: 16px;
        color: #66615b;
    }

    .content-card {
        margin-top: 30px;
    }

    a:hover,
    a:focus {
        text-decoration: none;
    }

    /*======== COLORS ===========*/
    .card[data-color="blue"] {
        background: #b8d8d8;
    }

    .card[data-color="blue"] .description {
        color: #506568;
    }

    .card[data-color="blue"] .title {
        color:rgb(70, 89, 92);
    }

    .card[data-color="green"] {
        background: #d5e5a3;
    }

    .card[data-color="green"] .description {
        color: #60773d;
    }

    .card[data-color="green"] .title {
        color:rgb(119, 139, 70);
    }

    .card[data-color="yellow"] {
        background: #ffe28c;
    }

    .card[data-color="yellow"] .description {
        color: #b25825;
    }

    .card[data-color="yellow"] .title {
        color: #d88715;
    }

    .card[data-color="brown"] {
        background: #d6c1ab;
    }

    .card[data-color="brown"] .description {
        color: #75442e;
    }

    .card[data-color="brown"] .title {
        color: #a47e65;
    }

    .card[data-color="purple"] {
        background: #baa9ba;
    }

    .card[data-color="purple"] .description {
        color: #3a283d;
    }

    .card[data-color="purple"] .title {
        color: #5a283d;
    }

    .card[data-color="orange"] {
        background: #ff8f5e;
    }

    .card[data-color="orange"] .description {
        color: #772510;
    }

    .card[data-color="orange"] .title {
        color: #e95e37;
    }
</style>
<div class="container text-justify">
    <p>A Fundação de Amparo à Pesquisa e Extensão Universitária – FAPEU é uma instituição de direito privado, sem fins lucrativos, que tem como objetivo principal apoiar o desenvolvimento de projetos de ensino, pesquisa, extensão, desenvolvimento institucional, científico e tecnológico e estímulo à inovação universitária.</p>

    <p>A FAPEU foi instituída como fundação de apoio à Universidade Federal de Santa Catarina em 28 de setembro de 1977, com sede e foro na cidade de Florianópolis, Santa Catarina, Brasil.</p>

    <p>Atua, também, como Fundação de Apoio à Universidade Federal da Fronteira Sul - UFFS, ao Instituto Federal Catarinense – IFC, à Universidade Federal do Pampa – UNIPAMPA, ao Hospital Universitário da Universidade Federal de Juiz de Fora (HU-UFJF/EBSERH), ao Hospital Universitário da Universidade Federal de Santa Catarina (HU-UFSC/EBSERH), bem como, à Universidade do Estado de Santa Catarina - UDESC, podendo atuar em parceria com outras instituições de ensino superior e institutos de pesquisa de Santa Catarina e de outros estados.</p>

    <p>É instituição reconhecida de utilidade pública municipal e estadual, fiscalizada pelo Ministério Público de Santa Catarina, registrada e credenciada no Ministério da Educação e no Ministério da Ciência, Tecnologia e Inovação, nos termos da Lei Federal nº 8.958/94, Decreto nº 7.423/2010 e Portaria Interministerial nº 191/2012.</p>

    <p>Entre as principais atividades realizadas pela FAPEU estão o gerenciamento de projetos de ensino, pesquisa, extensão desenvolvimento institucional, científico e tecnológico e estímulo à inovação universitária, a gestão de recursos financeiros e administrativos, a prestação de serviços técnicos especializados, a organização de eventos acadêmicos e científicos, a promoção da inovação e do empreendedorismo.</p>

    <p>Com o objetivo de fomentar a pesquisa e a extensão universitária, contribuindo para a produção e difusão do conhecimento, bem como para o fortalecimento do relacionamento das instituições apoiadas com a sociedade regional, nacional e internacional, a FAPEU atua na captação de recursos junto a órgãos governamentais, empresas e outras fontes de financiamento.</p>

    <div class="row">
        <div class="col-md-6 col-sm-12">
            <p>A FAPEU possui um portfólio completo em soluções integradas para gerenciar os projetos, atendendo as necessidades dos pesquisadores, facilitando o desenvolvimento dos trabalhos, bem como adota um sistema de custos que possibilita a remuneração clara e justa dos serviços prestados.</p>
            <p>Nas instituições apoiadas, o foco está na promoção de ações voltadas a tornar os projetos mais eficientes e sustentáveis. Contando com uma equipe enxuta de empregados, a FAPEU atua de forma interativa e didática junto aos coordenadores e equipes de projetos, buscando oferecer o suporte necessário sobre os aspectos relacionados à gestão administrativa, incluindo as determinações legais e as exigências para a correta prestação de contas desses projetos.</p>
            <p>Dessa forma, o trabalho da FAPEU é reconhecido pela comunidade acadêmica e tem contribuído significativamente para o desenvolvimento científico e tecnológico do Brasil, em especial nos estados de Santa Catarina, Rio Grande do Sul e Paraná.</p>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="1097" height="703" src="https://www.youtube.com/embed/igI4tjoS-u0" title="Fapeu 40 anos - vídeo institucional  (com libras e legendas) - 2017" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <hr>

    <div class="bootstrap snippets bootdeys">
        <div class="row">
            <div class="col-md-4 col-sm-12 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none" style="border: solid rgba(0, 0, 0, 0) !important;">
                        <div class="content">
                            <h4 class="title">Missão</h4>
                            <p class="description">Contribuir para o desenvolvimento científico, tecnológico e social por meio de apoio a projetos de pesquisa e extensão.</p>
                        </div>
                    </div> 
                </div>
            </div>

            <div class="col-md-4 col-sm-12 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="green" data-radius="none" style="border: solid rgba(0, 0, 0, 0) !important;">
                        <div class="content">
                            <h4 class="title">Visão</h4>
                            <p class="description">Ser reconhecida como instituição socialmente responsável e referência na gestão de projetos culturais, científicos, tecnológicos e de inovação.</p>
                        </div>
                    </div> 
                </div>
            </div>

            <div class="col-md-4 col-sm-12 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="purple" data-radius="none" style="border: solid rgba(0, 0, 0, 0) !important;">
                        <div class="content">
                            <h4 class="title">Valores</h4>
                            <p class="description">Honestidade, Transparência, Conformidade, Equidade, Responsabilidade e Respeito à Vida, às Pessoas e ao Meio Ambiente</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>

        <h1 class="text-center mt-5"><i>Há 47 anos transformando ideias em ações!</i></h1>
    </div>
    @endsection