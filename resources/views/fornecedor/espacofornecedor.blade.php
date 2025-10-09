@extends('layout.header')
@section('title', 'Espaço do Fornecedor')
@section('conteudo')

<style>
    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .info-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #009270, #00a67c);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
    }

    .info-text {
        color: #555;
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 25px;
    }

    .contact-info {
        background: rgba(0, 146, 112, 0.05);
        border-radius: 10px;
        padding: 20px;
        margin: 20px 0;
        border: 1px solid rgba(0, 146, 112, 0.1);
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    .contact-item:last-child {
        margin-bottom: 0;
    }

    .contact-icon {
        width: 30px;
        height: 30px;
        background: #009270;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 0.9rem;
    }

    .link-destaque {
        color: #009270;
        font-weight: 600;
        text-decoration: none;
        border-bottom: 2px solid transparent;
        transition: all 0.3s ease;
    }

    .link-destaque:hover {
        color: #007a5e;
        border-bottom-color: #007a5e;
    }

    .action-section {
        padding-top: 30px;
        text-align: center;
    }

    .portal-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        padding: 18px 35px;
        background: linear-gradient(135deg, #009270, #00a67c);
        color: white;
        font-weight: 600;
        font-size: 1.1rem;
        text-decoration: none;
        border-radius: 50px;
        box-shadow: 0 8px 25px rgba(0, 146, 112, 0.3);
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .portal-btn:hover {
        background: linear-gradient(135deg, #007a5e, #008f6b);
        box-shadow: 0 12px 35px rgba(0, 146, 112, 0.4);
        color: white;
        text-decoration: none;
    }

    .portal-btn i {
        font-size: 1.2rem;
        transition: transform 0.3s ease;
    }

    .highlight-box {
        background: linear-gradient(135deg, rgba(0, 146, 112, 0.05), rgba(0, 166, 124, 0.05));
        border: 2px solid rgba(0, 146, 112, 0.1);
        border-radius: 15px;
        padding: 25px;
        margin: 25px 0;
    }

    .highlight-text {
        color: #2c3e50;
        font-size: 1rem;
        line-height: 1.7;
        margin: 0;
    }

    .main-title {
        color: #009270;
        font-size: 2.5rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 30px;
    }

    .intro-text {
        font-size: 1.1rem;
        color: #2c3e50;
        max-width: 850px;
        text-align: center;
        line-height: 1.8;
        margin-bottom: 40px;
        margin-left: auto;
        margin-right: auto;
    }

    .benefits-section {
        margin: 50px 0;
    }

    .benefit-card {
        background: white;
        border: 2px solid rgba(0, 146, 112, 0.1);
        border-radius: 15px;
        padding: 30px 25px;
        margin-bottom: 25px;
        box-shadow: 0 5px 20px rgba(0, 146, 112, 0.1);
        transition: all 0.3s ease;
    }

    .benefit-card:hover {
        box-shadow: 0 10px 30px rgba(0, 146, 112, 0.2);
        border-color: rgba(0, 146, 112, 0.3);
    }

    .benefit-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #009270, #00a67c);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    .benefit-title {
        color: #009270;
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .benefit-description {
        color: #555;
        font-size: 1rem;
        line-height: 1.6;
    }

    .steps-section {
        border-radius: 20px;
        padding: 40px 30px;
        padding-top: 0 !important;
    }

    .steps-title {
        color: #009270;
        font-size: 2rem;
        font-weight: 600;
        text-align: center;
        margin-bottom: 40px;
    }

    .step-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 30px;
        padding: 20px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 3px 15px rgba(0, 146, 112, 0.1);
    }

    .step-number {
        width: 40px;
        height: 40px;
        background: #009270;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 1.1rem;
        margin-right: 20px;
        flex-shrink: 0;
    }

    .step-content {
        flex: 1;
    }

    .step-title {
        color: #009270;
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 8px;
    }

    .step-description {
        color: #555;
        font-size: 1rem;
        line-height: 1.6;
    }

    @media (max-width: 768px) {
        .fornecedor-section {
            padding: 40px 0;
        }

        .fornecedor-card {
            padding: 35px 25px;
            margin: 0 15px;
        }

        .main-title {
            font-size: 2rem;
        }

        .intro-text {
            font-size: 1.1rem;
        }

        .info-section {
            padding: 25px 20px;
        }

        .info-title {
            font-size: 1.2rem;
        }

        .info-text {
            font-size: 1rem;
        }

        .portal-btn {
            padding: 16px 30px;
            font-size: 1rem;
        }

        .benefit-card {
            padding: 25px 20px;
        }

        .steps-section {
            padding: 30px 20px;
        }

        .step-item {
            flex-direction: column;
            text-align: center;
        }

        .step-number {
            margin-right: 0;
            margin-bottom: 15px;
        }
    }

    @media (max-width: 480px) {
        .fornecedor-card {
            padding: 25px 20px;
        }

        .main-title {
            font-size: 1.8rem;
        }

        .portal-btn {
            padding: 14px 25px;
            font-size: 0.95rem;
        }
    }

    .portal-btn-secondary {
        background: linear-gradient(135deg, #6c757d, #5a6268);
        box-shadow: 0 8px 25px rgba(108, 117, 125, 0.3);
    }

    .portal-btn-secondary:hover {
        background: linear-gradient(135deg, #5a6268, #495057);
        box-shadow: 0 12px 35px rgba(108, 117, 125, 0.4);
    }
</style>

<div class="container">
    <div class="info-section">
        <div class="action-section">
            <p class="highlight-text" style="margin-bottom: 25px; font-size: 1.1rem;">
                <strong>Pronto para começar sua parceria com a FAPEU?</strong><br>
                Junte-se aos fornecedores que já trabalham conosco!
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="http://eventos.fapeu.com.br/portalfornecedor/public" class="portal-btn" target="_blank">
                    Acesse o Portal do Fornecedor
                    <i class="bi bi-box-arrow-up-right"></i>
                </a>
                <a href="/pdfs/Fornecedor/Manual_Portal_do_Fornecedor.pdf" class="portal-btn portal-btn-secondary" target="_blank">
                    <i class="bi bi-book"></i>
                    Manual de Uso do Portal
                </a>
            </div>
        </div>

        <div class="benefits-section">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="bi bi-clock"></i>
                        </div>
                        <h3 class="benefit-title">Economia de Tempo</h3>
                        <p class="benefit-description">
                            Acesse seus pedidos de compra 24/7, visualize detalhes instantaneamente e anexe documentos
                            fiscais de forma rápida e segura, eliminando a necessidade de deslocamentos.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="bi bi-file-earmark-check"></i>
                        </div>
                        <h3 class="benefit-title">Gestão Documental Digital</h3>
                        <p class="benefit-description">
                            Mantenha todos os seus documentos organizados em um só lugar. Anexe notas fiscais e boletos
                            diretamente no sistema, com controle total sobre o status dos seus envios.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h3 class="benefit-title">Controle Total</h3>
                        <p class="benefit-description">
                            Acompanhe em tempo real o status dos seus pedidos, valores, prazos de entrega e histórico
                            completo de transações com total transparência.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3 class="benefit-title">Segurança e Confiabilidade</h3>
                        <p class="benefit-description">
                            Plataforma desenvolvida com os mais altos padrões de segurança, garantindo a proteção dos
                            seus dados e conformidade com todas as normas de privacidade.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="steps-section">
            <h2 class="steps-title">Como Começar</h2>
            <div class="step-item">
                <div class="step-number">1</div>
                <div class="step-content">
                    <div class="step-title">Cadastre sua Empresa</div>
                    <div class="step-description">
                        Preencha o formulário de cadastro com os dados da sua empresa. É rápido, seguro e você só precisa fazer uma vez.
                    </div>
                </div>
            </div>
            <div class="step-item">
                <div class="step-number">2</div>
                <div class="step-content">
                    <div class="step-title">Aguarde a Aprovação</div>
                    <div class="step-description">
                        Nossa equipe analisará seus documentos e você receberá uma confirmação por email em até 2 dias úteis.
                    </div>
                </div>
            </div>
            <div class="step-item">
                <div class="step-number">3</div>
                <div class="step-content">
                    <div class="step-title">Acesse o Portal</div>
                    <div class="step-description">
                        Faça login com seu CNPJ e senha para ter acesso completo a todos os recursos do portal.
                    </div>
                </div>
            </div>
            <div class="step-item">
                <div class="step-number">4</div>
                <div class="step-content">
                    <div class="step-title">Gerencie seus Negócios</div>
                    <div class="step-description">
                        Visualize pedidos, anexe documentos fiscais e mantenha seus dados sempre atualizados.
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-info">
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="bi bi-telephone"></i>
                </div>
                <span>Qualquer dúvida, entre em contato pelo telefone: <strong>(48) 3331-7472</strong></span>
            </div>
        </div>

        <div class="highlight-box">
            <p class="highlight-text">
                <strong>Compromisso com a Transparência:</strong> Acesse nosso
                <a href="https://eventos.fapeu.com.br/integridade/public/" class="link-destaque" target="_blank">programa de integridade</a>
                e conheça mais sobre nossos processos éticos e transparentes. Na FAPEU, priorizamos relações comerciais baseadas na confiança mútua e na responsabilidade.
            </p>
        </div>

    </div>
</div>

@endsection