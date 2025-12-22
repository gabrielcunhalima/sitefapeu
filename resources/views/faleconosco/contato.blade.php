@extends('layout.header')
@section('title',' Contato')

@section('conteudo')
<style>
    .contact-section {
        padding: 70px 0;
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
        background-color: #06551a;
    }

    /* Contact Form Styles */
    .contact-form-container {
        background-color: #fff;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
    }

    .personalizado {
        border-radius: 8px;
        padding: 12px 15px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        transition: all 0.3s ease;
    }

    .personalizado:focus {
        border-color: #06551a;
        box-shadow: 0 0 0 0.2rem rgba(6, 85, 26, 0.25);
    }

    .form-label {
        font-weight: 600;
        color: #444;
        margin-bottom: 8px;
    }

    .location-card {
        background-color: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        height: 100%;
    }

    .location-card .card-title {
        padding: 20px 20px 0;
        font-weight: 700;
        color: #333;
        border-bottom: 1px solid #f1f1f1;
        padding-bottom: 15px;
    }

    .location-card .card-body {
        padding: 20px;
    }

    .map-container {
        height: 250px;
        width: 100%;
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    .contact-info {
        margin-bottom: 20px;
    }

    .contact-info-item {
        display: flex;
        margin-bottom: 15px;
        color: #555;
    }

    .contact-info-icon {
        color: #06551a;
        font-size: 1.2rem;
        margin-right: 15px;
        flex-shrink: 0;
        margin-top: 3px;
    }

    .contact-info-text {
        line-height: 1.6;
    }

    .contact-directory {
        background-color: #fff;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        margin-top: 50px;
    }

    .directory-header {
        margin-bottom: 30px;
        text-align: center;
    }

    .directory-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .directory-item {
        padding: 15px;
        border-radius: 8px;
        border-left: 4px solid #06551a;
        background-color: #f8f9fa;
        transition: all 0.3s ease;
    }

    .directory-item:hover {
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .directory-title {
        font-weight: 700;
        color: #333;
        margin-bottom: 10px;
    }

    .directory-contact {
        color: #555;
        display: flex;
        align-items: center;
        margin-bottom: 5px;
    }

    .directory-icon {
        color: #06551a;
        margin-right: 10px;
        font-size: 0.9rem;
    }

    @media (max-width: 768px) {
        .contact-section {
            padding: 40px 0;
        }

        .section-header {
            text-align: center;
        }

        .section-header:after {
            left: 50%;
            transform: translateX(-50%);
        }

        .contact-form-container,
        .location-card {
            margin-bottom: 30px;
        }

        .directory-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    function validarpost() {
        if (grecaptcha.getResponse() != "")
            return true;

        alert('Selecione a caixa de "Não sou um Robô" ');
        return false;

    }
</script>

<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h2 class="section-header">Entre em Contato</h2>

                <div class="contact-directory">
                    <div class="directory-header">
                        <h3>Diretório de Contatos</h3>
                        <p class="text-muted">Entre em contato diretamente com o departamento desejado</p>
                    </div>

                    <div class="directory-grid">
                        <div class="directory-item">
                            <div class="directory-title">Recepção</div>
                            <div class="directory-contact">
                                <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
                                (48) 3331-7401
                            </div>
                            <div class="directory-contact">
                                <span class="directory-icon">
                                    <i class="bi bi-envelope fs-5"></i></span>
                                <img src="https://fapeu.org.br/images/Emails/recepcao.png">
                            </div>
                        </div>

                        <div class="directory-item">
                            <div class="directory-title">Setor de Projetos</div>
                            <div class="directory-contact">
                                <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
                                (48) 3331-7411
                            </div>
                            <div class="directory-contact">
                                <span class="directory-icon">
                                    <i class="bi bi-envelope fs-5"></i></span>
                                <img src="https://fapeu.org.br/images/Emails/projetos.png">
                            </div>
                        </div>

                        <div class="directory-item">
                            <div class="directory-title">Gerência de Recursos Humanos</div>
                            <div class="directory-contact">
                                <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
                                (48) 3331-7442
                            </div>
                            <div class="directory-contact">
                                <span class="directory-icon">
                                    <i class="bi bi-envelope fs-5"></i></span>
                                <img src="https://fapeu.org.br/images/Emails/rh.png">
                            </div>
                        </div>

                        <div class="directory-item">
                            <div class="directory-title">Gerência Administrativa e Financeira</div>
                            <div class="directory-contact">
                                <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
                                (48) 3331-7417
                            </div>
                            <div class="directory-contact">
                                <span class="directory-icon">
                                    <i class="bi bi-envelope fs-5"></i></span>
                                <img src=" {{ asset('images/Emails/financeiro.png') }}" height="49">
                            </div>
                        </div>

                        <div class="directory-item">
                            <div class="directory-title">Setor Financeiro</div>
                            <div class="directory-contact">
                                <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
                                (48) 3331-7434
                            </div>
                            <div class="directory-contact">
                                <span class="directory-icon">
                                    <i class="bi bi-envelope fs-5"></i></span>
                                <img src=" {{ asset('images/Emails/financeiro.png') }}" height="49">
                            </div>
                        </div>

                        <div class="directory-item">
                            <div class="directory-title">Setor Administrativo</div>
                            <div class="directory-contact">
                                <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
                                (48) 3331-7429
                            </div>
                            <div class="directory-contact">
                                <span class="directory-icon">
                                    <i class="bi bi-envelope fs-5"></i></span>
                                <img src="https://fapeu.org.br/images/Emails/adm.png" height="49">
                            </div>
                        </div>

                        <div class="directory-item">
                            <div class="directory-title">Gerência de Contabilidade e Patrimônio</div>
                            <div class="directory-contact">
                                <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
                                (48) 3331-7423
                            </div>
                            <div class="directory-contact">
                                <span class="directory-icon">
                                    <i class="bi bi-envelope fs-5"></i></span>
                                <img src="https://fapeu.org.br/images/Emails/contabilidade.png">
                            </div>
                        </div>

                        <div class="directory-item">
                            <div class="directory-title">Gerência de Tecnologia da Informação</div>
                            <div class="directory-contact">
                                <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
                                (48) 3331-7436
                            </div>
                            <div class="directory-contact">
                                <span class="directory-icon">
                                    <i class="bi bi-envelope fs-5"></i></span>
                                <img src="https://fapeu.org.br/images/Emails/ti.png">
                            </div>
                        </div>

                        <div class="directory-item">
                            <div class="directory-title">Diretoria Executiva</div>
                            <div class="directory-contact">
                                <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
                                (48) 3331-7479
                            </div>
                            <div class="directory-contact">
                                <span class="directory-icon">
                                    <i class="bi bi-envelope fs-5"></i></span>
                                <img src="https://fapeu.org.br/images/Emails/secretaria.png">
                            </div>
                        </div>

                        <div class="directory-item">
                            <div class="directory-title">Superintendência</div>
                            <div class="directory-contact">
                                <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
                                (48) 3331-7479
                            </div>
                            <div class="directory-contact">
                                <span class="directory-icon">
                                    <i class="bi bi-envelope fs-5"></i></span>
                                <img src="https://fapeu.org.br/images/Emails/secretaria.png">
                            </div>
                        </div>

                        <div class="directory-item">
                            <div class="directory-title">Secretaria Executiva</div>
                            <div class="directory-contact">
                                <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
                                (48) 3331-7479
                            </div>
                            <div class="directory-contact">
                                <span class="directory-icon">
                                    <i class="bi bi-envelope fs-5"></i></span>
                                <img src="https://fapeu.org.br/images/Emails/secretaria.png">
                            </div>
                        </div>

                        <div class="directory-item">
                            <div class="directory-title">Assessoria Jurídica</div>
                            <div class="directory-contact">
                                <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
                                (48) 3331-7414&nbsp; (48) 3331-7415
                            </div>
                            <div class="directory-contact">
                                <span class="directory-icon">
                                    <i class="bi bi-envelope fs-5"></i></span>
                                <img src="https://fapeu.org.br/images/Emails/juris.png">
                            </div>
                        </div>

                        <div class="directory-item">
                            <div class="directory-title">LGPD</div>
                            <div class="directory-contact">
                                <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
                                (48) 3331-7442
                            </div>
                            <div class="directory-contact">
                                <span class="directory-icon">
                                    <i class="bi bi-envelope fs-5"></i></span>
                                <img src="https://fapeu.org.br/images/Emails/lgpd.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="location-card">
                    <h5 class="card-title">Localização e Contato</h5>
                    <div class="card-body">
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3535.8095331151862!2d-48.51924988280334!3d-27.599434089318017!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x952739000bfe430f%3A0xd55fe81b4f2a84f9!2sFAPEU!5e0!3m2!1sen!2sbr!4v1727808996288!5m2!1sen!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="contact-info-text">
                                    Rua Delfino Conti, s/n, Campus Universitário Reitor João David Ferreira Lima, Trindade – Florianópolis – Santa Catarina, CEP 88040-370
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="bi bi-mailbox"></i>
                                </div>
                                <div class="contact-info-text">
                                    Correspondências via correio – CEP 88035-972 – Caixa Postal 5078
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="contact-info-text">
                                    Telefone/WhatsApp: (48) 3331-7400
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="bi bi-clock-fill"></i>
                                </div>
                                <div class="contact-info-text">
                                    <strong>Horário de Funcionamento:</strong><br>
                                    Segunda a Sexta-feira das 8h às 12h e das 13h às 17h
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection