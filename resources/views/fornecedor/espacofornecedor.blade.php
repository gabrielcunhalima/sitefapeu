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
        text-align: center;
        margin-top: 40px;
        padding-top: 30px;
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

    @media (max-width: 768px) {
        .fornecedor-section {
            padding: 40px 0;
        }

        .fornecedor-card {
            padding: 35px 25px;
            margin: 0 15px;
        }

        .section-title {
            font-size: 2rem;
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
    }

    @media (max-width: 480px) {
        .fornecedor-card {
            padding: 25px 20px;
        }

        .section-title {
            font-size: 1.8rem;
        }

        .portal-btn {
            padding: 14px 25px;
            font-size: 0.95rem;
        }
    }
</style>
<div class="container">
    <div class="info-section">
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
                Acesse nosso <a href="https://eventos.fapeu.com.br/integridade/public/" class="link-destaque" target="_blank">programa de integridade</a> e conheça mais sobre os processos da FAPEU.
            </p>
        </div>
        <div class="action-section">
            <a href="http://150.162.78.4/#/login/fornecedor" class="portal-btn" target="_blank">
                Acesse o Portal do Fornecedor
                <i class="bi bi-box-arrow-up-right"></i>
            </a>
        </div>
    </div>
</div>
    @endsection