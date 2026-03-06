@extends('layout.header')
@section('title','FAPEU')
@section('conteudo')

<style>
  /* ================================================
     VARIÁVEIS E RESET
  ================================================ */
  :root {
    --verde-primary: #06551A;
    --verde-dark: #044313;
    --verde-light: #e8f5ec;
    --verde-mid: #0d7a2a;
    --cinza-bg: #f4f6f8;
    --cinza-card: #ffffff;
    --text-dark: #1a1a2e;
    --text-muted: #6c757d;
    --radius-lg: 16px;
    --radius-md: 12px;
    --shadow-sm: 0 2px 12px rgba(0, 0, 0, 0.07);
    --shadow-md: 0 8px 28px rgba(0, 0, 0, 0.11);
    --shadow-lg: 0 16px 48px rgba(0, 0, 0, 0.14);
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  }


  .hero-section {
    position: relative;
    background: linear-gradient(135deg, #868686ff 0%, #d8d8d8ff 45%, #868686ff 100%);
    overflow: hidden;
    padding: 40px 0 50px;
  }

  .hero-title {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: clamp(1.4rem, 3vw, 2.2rem);
    color: #000000cc;
    text-align: center;
    letter-spacing: -0.02em;
    line-height: 1.3;
    margin-bottom: 10px;
  }

  .hero-subtitle {
    font-family: 'DM Sans', sans-serif;
    font-size: 1rem;
    color: rgba(255, 255, 255, 0.7);
    text-align: center;
    margin-bottom: 44px;
  }

  .quick-access-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
  }

  @media (max-width: 991px) {
    .quick-access-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 480px) {
    .quick-access-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 12px;
    }

    .hero-title {
      font-size: 1.25rem;
    }
  }

  .quick-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 28px 16px 24px;
    background: #006108ff;
    border: 1px solid rgba(255, 255, 255, 0.18);
    border-radius: var(--radius-lg);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    color: #ffffff;
    text-decoration: none;
    transition: var(--transition);
    position: relative;
    overflow: hidden;
  }

  .quick-btn::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(255, 255, 255, 0);
    transition: var(--transition);
    border-radius: var(--radius-lg);
  }

  .quick-btn:hover {
    background: #024d08ff;
    border-color: rgba(255, 255, 255, 0.40);
    box-shadow: 0 12px 32px rgba(0, 0, 0, 0.25);
    color: #ffffff;
    text-decoration: none;
  }

  .quick-btn:hover::before {
    background: rgba(255, 255, 255, 0.05);
  }

  .quick-btn .btn-icon {
    font-size: 2rem;
    line-height: 1;
    filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
  }

  .quick-btn .btn-label {
    font-family: 'Montserrat', sans-serif;
    font-size: 0.85rem;
    font-weight: 600;
    text-align: center;
    line-height: 1.35;
    letter-spacing: 0.01em;
  }

  /* ================================================
     SEÇÃO GENÉRICA (LAYOUT)
  ================================================ */
  .section-padded {
    padding: 70px 0;
  }

  .section-bg-light {
    background-color: var(--cinza-bg);
  }

  .section-bg-white {
    background-color: #ffffff;
  }

  .section-heading {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 1.65rem;
    color: var(--text-dark);
    text-align: center;
    margin-bottom: 8px;
    position: relative;
  }

  .section-heading::after {
    content: '';
    display: block;
    width: 48px;
    height: 4px;
    background: linear-gradient(90deg, var(--verde-primary), var(--verde-mid));
    border-radius: 4px;
    margin: 14px auto 0;
  }

  .section-subheading {
    font-size: 0.95rem;
    color: var(--text-muted);
    text-align: center;
    margin-top: 18px;
    margin-bottom: 48px;
  }

  /* ================================================
     CARDS DE NOTÍCIAS
  ================================================ */
  .news-card {
    border-radius: var(--radius-md);
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    background: var(--cinza-card);
    height: 100%;
    border: 1px solid rgba(0, 0, 0, 0.05);
  }

  .news-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
  }

  .news-img-container {
    height: 200px;
    overflow: hidden;
    position: relative;
    background: #e8ede9;
  }

  .news-img-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.55s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .news-card:hover .news-img-container img {
    transform: scale(1.01);
  }

  .news-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.7));
    opacity: 0;
    transition: opacity 0.5s ease;
  }

  .news-card:hover .news-overlay {
    opacity: 1;
  }

  .news-badge {
    position: absolute;
    bottom: 14px;
    right: 14px;
    background: var(--verde-primary);
    color: #fff;
    font-size: 0.72rem;
    font-weight: 700;
    padding: 4px 14px;
    border-radius: 20px;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    opacity: 0;
    transform: translateY(10px);
    transition: var(--transition);
  }

  .news-card:hover .news-badge {
    opacity: 1;
    transform: translateY(0);
  }

  .news-body {
    padding: 20px 22px 24px;
  }

  .news-date {
    font-size: 0.78rem;
    color: var(--verde-primary);
    font-weight: 600;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 5px;
  }

  .news-title-text {
    font-family: 'Montserrat', sans-serif;
    font-size: 1rem;
    font-weight: 700;
    line-height: 1.5;
    color: var(--text-dark);
    margin: 0;
    transition: color 0.25s ease;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  .news-card:hover .news-title-text {
    color: var(--verde-primary);
  }

  /* Slick overrides */
  .responsive {
    width: 100%;
  }

  .slick-prev,
  .slick-next {
    font-size: 0;
    line-height: 0;
    position: absolute;
    top: 50%;
    display: block;
    width: 40px;
    height: 40px;
    padding: 0;
    transform: translate(0, -50%);
    cursor: pointer;
    color: #06551A;
    border: none;
    outline: none;
    background: white;
    border-radius: 50%;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    z-index: 5;
  }

  .slick-prev {
    left: -50px;
  }

  .slick-next {
    right: -50px;
  }

  .slick-prev:before,
  .slick-next:before {
    font-family: 'bootstrap-icons';
    font-size: 24px;
    line-height: 1;
    color: #06551A;
    opacity: 0.75;
  }

  .slick-prev:before {
    content: "\F284";
  }

  .slick-next:before {
    content: "\F285";
  }

  .slick-dots {
    position: absolute;
    bottom: -30px;
    display: block;
    width: 100%;
    padding: 0;
    margin: 0;
    list-style: none;
    text-align: center;
  }

  .slick-dots {
    bottom: -32px;
  }

  .slick-dots li button:before {
    color: var(--verde-primary);
    font-size: 9px;
  }

  @media (max-width: 992px) {

    .slick-prev,
    .slick-next {
      display: none !important;
    }
  }

  /* ================================================
     SEÇÃO DE SERVIÇOS
  ================================================ */
  .servicos-section {
    padding: 70px 0;
    background: var(--cinza-bg);
  }

  .servico-card {
    display: block;
    background: #fff;
    border-radius: var(--radius-lg);
    padding: 32px 28px;
    height: 100%;
    border: 1px solid rgba(0, 0, 0, 0.05);
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    position: relative;
    overflow: hidden;
    color: inherit;
    text-decoration: none;
  }

  .servico-card:hover {
    color: inherit;
    text-decoration: none;
    box-shadow: var(--shadow-lg);
  }

  /* remove old :hover duplicado – agora definido acima */
  .servico-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 0;
    background: linear-gradient(180deg, var(--verde-primary), var(--verde-mid));
    border-radius: 4px 0 0 4px;
    transition: height 0.35s ease;
  }

  .servico-card:hover::before {
    height: 100%;
  }

  .servico-icon-wrap {
    width: 56px;
    height: 56px;
    background: var(--verde-light);
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    transition: var(--transition);
  }

  .servico-card:hover .servico-icon-wrap {
    background: var(--verde-primary);
  }

  .servico-icon-wrap i {
    font-size: 1.6rem;
    color: var(--verde-primary);
    transition: color 0.25s ease;
  }

  .servico-card:hover .servico-icon-wrap i {
    color: #fff;
  }

  .servico-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 10px;
  }

  .servico-desc {
    font-size: 0.9rem;
    color: var(--text-muted);
    line-height: 1.7;
    margin-bottom: 20px;
  }

  .servico-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: var(--verde-primary);
    font-weight: 700;
    font-size: 0.88rem;
    text-decoration: none;
    letter-spacing: 0.02em;
    transition: gap 0.25s ease;
  }

  .servico-link:hover {
    gap: 10px;
    color: var(--verde-dark);
  }

  /* Accordion mobile */
  .servicos-accordion {
    display: none;
  }

  .accordion-button:not(.collapsed) {
    background-color: var(--verde-light);
    color: var(--verde-primary);
    box-shadow: none;
  }

  .accordion-button:focus {
    box-shadow: 0 0 0 0.2rem rgba(6, 85, 26, 0.2);
  }

  .accordion-button::after {
    filter: none;
  }

  .accordion-item {
    border: 1px solid rgba(0, 0, 0, 0.07);
    border-radius: 10px !important;
    overflow: hidden;
    margin-bottom: 10px;
  }

  .accordion-button {
    border-radius: 10px !important;
    font-weight: 600;
    font-size: 0.95rem;
  }

  @media (max-width: 768px) {
    .servicos-desktop {
      display: none;
    }

    .servicos-accordion {
      display: block;
    }
  }

  /* ================================================
     SEÇÃO APOIADAS
  ================================================ */
  .apoiadas-section {
    padding: 60px 0 40px;
    background: #fff;
  }

  .apoiadas-logos {
    display: flex;
    flex-wrap: nowrap;
    justify-content: space-between;
    align-items: stretch;
    /* All items stretch to same height */
    gap: 20px;
    margin-top: 30px;
  }

  .apoiada-item {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 0;
    /* Allow shrinking below content size */
  }

  .apoiada-item a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 140px;
    /* Fixed height for all containers */
    padding: 12px 16px;
    border-radius: 12px;
    transition: var(--transition);
    background: #fafafa;
    text-align: center;
  }

  .apoiada-item a:hover {
    transform: translateY(-6px);
    box-shadow: var(--shadow-md);
    border-color: rgba(6, 85, 26, 0.15);
    background: #fff;
  }

  .apoiada-item img {
    max-height: 110px;
    width: auto;
    max-width: 100%;
    object-fit: contain;
    filter: grayscale(30%);
    transition: filter 0.3s ease;
  }

  .apoiada-item a:hover img {
    filter: grayscale(0%);
  }

  @media (max-width: 992px) {
    .apoiadas-logos {
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
    }

    .apoiada-item {
      flex: 0 0 calc(50% - 15px);
      min-width: auto;
    }

    .apoiada-item a {
      height: 100px;
      /* Slightly smaller height on mobile */
    }

    .apoiada-item img {
      max-height: 70px;
    }
  }

  /* ================================================
     SEÇÃO AFILIAÇÃO
  ================================================ */
  .afiliacao-section {
    padding: 40px 0 60px;
    background: #fff;
  }

  .afiliacao-divider {
    width: 100%;
    border: none;
    border-top: 2px solid rgba(0, 0, 0, 0.17);
    margin: 0 auto 48px;
  }

  .afiliacao-logo {
    display: block;
    max-width: 180px;
    margin: 0 auto;
    padding: 16px 24px;
    border-radius: 12px;
    background: #fafafa;
    transition: var(--transition);
  }

  .afiliacao-logo:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-md);
  }

  .afiliacao-logo img {
    width: 100%;
    height: auto;
    filter: grayscale(20%);
    transition: filter 0.3s ease;
  }

  .afiliacao-logo:hover img {
    filter: none;
  }

  /* ================================================
     UTILITÁRIOS
  ================================================ */
  a {
    text-decoration: none;
  }

  @media (max-width: 768px) {
    .section-padded {
      padding: 50px 0;
    }

    .section-heading {
      font-size: 1.4rem;
    }

    .news-img-container {
      height: 170px;
    }

    .quick-btn .btn-label {
      font-size: 0.78rem;
    }

    .servico-card {
      margin-bottom: 16px;
    }
  }

  /* ================================================
     BOTÃO DE INFORME DE RENDIMENTOS
  ================================================ */
  .informe-wrapper {
    text-align: center;
    margin-bottom: 20px;
    /* Espaço entre o botão e o título H1 */
  }

  .btn-informe {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background-color: #d10000ff;
    color: #fff;
    padding: 10px 24px;
    border-radius: 50px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 1rem;
    text-decoration: none;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: var(--transition);
    border: 1px solid rgba(255, 255, 255, 0.5);
    animation: fadeInDown 0.8s ease-out;
  }

  .btn-informe:hover {
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    color: #fff;
    background-color: #960000ff;
  }

  .btn-informe i {
    font-size: 1.1rem;
  }

  @keyframes fadeInDown {
    from {
      opacity: 0;
      transform: translateY(-10px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

{{-- =============================================
     HERO – CABEÇALHO + BOTÕES DE ACESSO RÁPIDO
============================================== --}}
<section class="hero-section">
  <div class="container position-relative" style="z-index:1;">

    <div class="informe-wrapper">
      {{-- ATENÇÃO: Substitua 'nome.da.rota.informe' pelo nome da sua rota no web.php --}}
      <a href="{{ route('colaborador.informerendimentos') }}" class="btn-informe">
        <i class="bi bi-file-earmark-person-fill"></i>
        <span>Informe de Rendimentos 2025 Disponível</span>
      </a>
    </div>
    <h1 class="hero-title">Fundação de Amparo à Pesquisa e Extensão Universitária</h1>
    <!-- <p class="hero-subtitle">Transformando ideias em ações há mais de 48 anos</p> -->

    <div class="quick-access-grid">
      <a href="{{ route('projetos.captacao') }}" class="quick-btn">
        <i class="bi bi-journal-bookmark-fill btn-icon"></i>
        <span class="btn-label">Captação e Implantação de Projetos</span>
      </a>
      <a href="{{ route('transparencia.projetostransparencia') }}" class="quick-btn">
        <i class="bi bi-file-earmark-check btn-icon"></i>
        <span class="btn-label">Transparência</span>
      </a>
      <a href="{{ route('projetos.espacocoordenador') }}" class="quick-btn">
        <i class="bi bi-person-workspace btn-icon"></i>
        <span class="btn-label">Espaço do Coordenador</span>
      </a>
      <a href="{{ route('fornecedor.espacofornecedor') }}" class="quick-btn">
        <i class="bi bi-check-circle btn-icon"></i>
        <span class="btn-label">Portal do Fornecedor</span>
      </a>
    </div>
  </div>
</section>

{{-- =============================================
     NOTÍCIAS RECENTES
============================================== --}}
<section class="section-padded section-bg-light">
  <div class="container">
    <h2 class="section-heading">Notícias Recentes</h2>
    <p class="section-subheading">Confira o que aconteceu na FAPEU em nosso portal de notícias</p>

    <div class="responsive" style="padding: 0 10px;">
      @foreach ($news as $post)
      <div class="px-2 pb-2">
        <a href="{{ route('noticias.noticiasleitura', ['link' => $post->link]) }}" class="text-decoration-none d-block h-100">
          <div class="news-card">
            <div class="news-img-container">
              @if($post->imagem)
              <img src="{{ asset($post->imagem) }}" alt="Imagem da notícia {{ $post->titulo }}">
              @endif
              <div class="news-overlay"></div>
              <div class="news-badge">Leia mais</div>
            </div>
            <div class="news-body">
              <div class="news-date">
                <!-- <i class="bi bi-calendar3" style="font-size:.75rem;"></i> -->
                {{ $post->created_at->format('d/m/Y') }}
              </div>
              <h3 class="news-title-text">{{ $post->titulo }}</h3>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>

    <div class="text-center mt-5">
      <a href="{{ route('noticias.noticiasrecentes') }}" class="fapeu-btn fapeu-btn-lg">
        Ver mais notícias
      </a>
    </div>
  </div>
</section>

{{-- =============================================
     NOSSOS SERVIÇOS
============================================== --}}
<section class="servicos-section">
  <div class="container">
    <h2 class="section-heading">Nossos Serviços</h2>
    <p class="section-subheading">Soluções completas para a gestão de projetos de ensino, pesquisa e extensão</p>

    {{-- Desktop --}}
    <div class="row servicos-desktop g-4">
      <div class="col-lg-4 col-md-6">
        <a href="{{ route('projetos.menuprojetos') }}" class="servico-card">
          <div class="servico-icon-wrap">
            <i class="bi bi-journal-text"></i>
          </div>
          <h3 class="servico-title">Gestão de Projetos</h3>
          <p class="servico-desc">Gestão administrativa e financeira eficiente para projetos de ensino, pesquisa e extensão. Contamos com uma equipe técnica especializada que proporciona suporte completo.</p>
          <span class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></span>
        </a>
      </div>
      <div class="col-lg-4 col-md-6">
        <a href="https://reservas.fapeu.org.br" class="servico-card" target="_blank">
          <div class="servico-icon-wrap">
            <i class="bi bi-calendar-event"></i>
          </div>
          <h3 class="servico-title">Reservas de Salas</h3>
          <p class="servico-desc">Agendamento de espaços físicos para reuniões e eventos com capacidade para até 80 pessoas.</p>
          <span class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></span>
        </a>
      </div>
      <div class="col-lg-4 col-md-6">
        <a href="https://eventos.fapeu.com.br/eventos/public" class="servico-card" target="_blank">
          <div class="servico-icon-wrap">
            <i class="bi bi-mortarboard"></i>
          </div>
          <h3 class="servico-title">Cursos e Eventos</h3>
          <p class="servico-desc">Crie e gerencie seu evento através da nossa plataforma completa, prática e intuitiva.</p>
          <span class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></span>
        </a>
      </div>
      <div class="col-md-6">
        <a href="{{ route('homepage.importacao') }}" class="servico-card">
          <div class="servico-icon-wrap">
            <i class="bi bi-box-seam"></i>
          </div>
          <h3 class="servico-title">Importação de Bens e Insumos</h3>
          <p class="servico-desc">Realizamos a importação de equipamentos e insumos para pesquisa com isenção fiscal, conforme a Lei nº 8.010/1990.</p>
          <span class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></span>
        </a>
      </div>
      <div class="col-md-6">
        <a href="{{ route('homepage.nagefi') }}" class="servico-card">
          <div class="servico-icon-wrap">
            <i class="bi bi-graph-up"></i>
          </div>
          <h3 class="servico-title">NAGEFI</h3>
          <p class="servico-desc">NAGEFI auxilia empresas públicas e privadas no aprimoramento de processos, gestão e compliance financeiro, fiscal e tributário.</p>
          <span class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></span>
        </a>
      </div>
    </div>

    {{-- Mobile Accordion --}}
    <div class="servicos-accordion">
      <div class="accordion" id="servicosAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingGestao">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGestao" aria-expanded="false" aria-controls="collapseGestao">
              <i class="bi bi-journal-text me-2 text-success"></i> Gestão de Projetos
            </button>
          </h2>
          <div id="collapseGestao" class="accordion-collapse collapse" aria-labelledby="headingGestao" data-bs-parent="#servicosAccordion">
            <div class="accordion-body">
              <p>Gestão administrativa e financeira eficiente para projetos de ensino, pesquisa e extensão. Contamos com uma equipe técnica especializada que proporciona suporte completo.</p>
              <a href="{{ route('projetos.menuprojetos') }}" class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingReservas">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseReservas" aria-expanded="false" aria-controls="collapseReservas">
              <i class="bi bi-calendar-event me-2 text-success"></i> Reservas de Salas
            </button>
          </h2>
          <div id="collapseReservas" class="accordion-collapse collapse" aria-labelledby="headingReservas" data-bs-parent="#servicosAccordion">
            <div class="accordion-body">
              <p>Agendamento de espaços físicos para reuniões e eventos com capacidade para até 80 pessoas.</p>
              <a href="https://reservas.fapeu.org.br" class="servico-link" target="_blank">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingCursos">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCursos" aria-expanded="false" aria-controls="collapseCursos">
              <i class="bi bi-mortarboard me-2 text-success"></i> Cursos e Eventos
            </button>
          </h2>
          <div id="collapseCursos" class="accordion-collapse collapse" aria-labelledby="headingCursos" data-bs-parent="#servicosAccordion">
            <div class="accordion-body">
              <p>Crie e gerencie seu evento através da nossa plataforma completa, prática e intuitiva.</p>
              <a href="https://eventos.fapeu.com.br/eventos/public" class="servico-link" target="_blank">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingImportacao">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseImportacao" aria-expanded="false" aria-controls="collapseImportacao">
              <i class="bi bi-box-seam me-2 text-success"></i> Importação de Bens e Insumos
            </button>
          </h2>
          <div id="collapseImportacao" class="accordion-collapse collapse" aria-labelledby="headingImportacao" data-bs-parent="#servicosAccordion">
            <div class="accordion-body">
              <p>Realizamos a importação de equipamentos e insumos para pesquisa com isenção fiscal, conforme a Lei nº 8.010/1990.</p>
              <a href="{{ route('homepage.importacao') }}" class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingNagefi">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNagefi" aria-expanded="false" aria-controls="collapseNagefi">
              <i class="bi bi-graph-up me-2 text-success"></i> NAGEFI
            </button>
          </h2>
          <div id="collapseNagefi" class="accordion-collapse collapse" aria-labelledby="headingNagefi" data-bs-parent="#servicosAccordion">
            <div class="accordion-body">
              <p>NAGEFI auxilia empresas públicas e privadas no aprimoramento de processos, gestão e compliance financeiro, fiscal e tributário.</p>
              <a href="{{ route('homepage.nagefi') }}" class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- =============================================
     INSTITUIÇÕES APOIADAS
============================================== --}}
<section class="apoiadas-section">
  <div class="containerapoiadas">
    <h2 class="section-heading">Instituições Apoiadas</h2>
    <p class="section-subheading">Instituições que possuem credenciamento para pesquisa e extensão junto à FAPEU</p>

    <div class="apoiadas-logos">
      <div class="apoiada-item">
        <a href="https://ufsc.br/" title="UFSC">
          <img src="images/ufsc.png" alt="Apoiada UFSC">
        </a>
      </div>
      <div class="apoiada-item">
        <a href="https://www.uffs.edu.br/" title="UFFS">
          <img src="images/uffs.png" alt="Apoiada UFFS">
        </a>
      </div>
      <div class="apoiada-item">
        <a href="https://ifc.edu.br/" title="IFC">
          <img src="images/ifc.png" alt="Apoiada IFC">
        </a>
      </div>
      <div class="apoiada-item">
        <a href="https://unipampa.edu.br/" title="Unipampa">
          <img src="images/unipampa.png" alt="Apoiada Unipampa">
        </a>
      </div>
      <div class="apoiada-item">
        <a href="https://www.gov.br/ebserh/pt-br/hospitais-universitarios/regiao-sul/hu-ufsc" title="HU-UFSC">
          <img src="images/huufsc-completo.png" alt="Apoiada HUUFSC">
        </a>
      </div>
      <div class="apoiada-item">
        <a href="https://www.udesc.br/" title="UDESC">
          <img src="images/udesc.png" alt="Apoiada Udesc">
        </a>
      </div>
    </div>
  </div>
</section>

{{-- =============================================
     AFILIAÇÃO
============================================== --}}
<section class="afiliacao-section">
  <div class="container">
    <hr class="afiliacao-divider">
    <h2 class="section-heading">Afiliação</h2>
    <div class="row justify-content-center mt-4">
      <div class="col-auto">
        <a href="https://www.confies.org.br/" target="_blank" class="afiliacao-logo">
          <img src="{{ asset('images/confies.png') }}" alt="Logo do CONFIES">
        </a>
      </div>
    </div>
  </div>
</section>

<script>
  $(document).ready(function() {
    $('.responsive').slick({
      dots: true,
      infinite: true,
      speed: 700,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      prevArrow: '<button type="button" class="slick-prev"><i class="bi bi-chevron-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="bi bi-chevron-right"></i></button>',
      responsive: [{
          breakpoint: 864,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false
          }
        }
      ]
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    function toggleResponsiveElements() {
      const width = window.innerWidth;
      const isMobile = width < 992;

    }

    toggleResponsiveElements();
    window.addEventListener('resize', toggleResponsiveElements);
  });
</script>
@endsection