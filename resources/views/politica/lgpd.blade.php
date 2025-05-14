@extends('layout.header')
@section('title', 'LGPD')
@section('conteudo')
    <style>
        .fapeu-button {
            background-color: rgb(243, 243, 243);
            border-left: 4px solid #06551A;
            padding: 16px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .fapeu-button:hover {
            background-color: #E9FFF0;
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(6, 85, 26, 0.15);
        }

        .fapeu-button:active {
            transform: translateY(0);
            box-shadow: 0 2px 3px rgba(6, 85, 26, 0.1);
        }

        .fapeu-button p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-bottom: 0;
            color: rgb(23, 58, 29);
            font-weight: 500;
        }

        .fapeu-button i {
            color: #06551A;
            margin-right: 12px;
            font-size: 18px;
        }

        @media (max-width: 768px) {
            .fapeu-button {
                margin-bottom: 10px;
            }
        }

        a {
            text-decoration: none;
        }
    </style>
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="text-center mb-4">PROGRAMA DE PRIVACIDADE</h2>

                        <div class="text-justify">
                            <p>A Diretoria da <strong>Fundação de Amparo a Pesquisa e Extensão Universitária</strong> está
                                empenhada em liderar o caminho das melhores práticas de negócios e de relacionamento com o
                                mercado. Em consonância com as exigências da Lei Federal nº 13.709/18, reconhecemos a
                                importância fundamental de garantir a privacidade e proteção dos dados pessoais.</p>

                            <p>Com o compromisso de alcançar padrões elevados de conformidade e segurança da informação,
                                estabelecemos uma parceria estratégica com a SOMAXI GROUP desde <strong>01/02/2025</strong>
                                empresa renomada especializada em assessoria para implementação das melhores práticas de
                                privacidade, segurança da informação e gestão de riscos.</p>

                            <p>Na presente empreitada, a SOMAXI GROUP designou a Sra. <strong>Denise Juliatto</strong> e o
                                Sr. <strong>Urik Pokrovsky</strong>, profissionais Certificados em Proteção e Privacidade de
                                Dados, para ocupar a função de DPO - Data Protection Officer (Encarregado de Dados). Eles
                                estarão à frente das novas práticas que estão sendo implementadas com o objetivo primordial
                                de garantir a manutenção da SEGURANÇA, PROTEÇÃO E PRIVACIDADE DOS DADOS pessoais tratados
                                por esta companhia.</p>

                            <p>Ao trilharmos esse caminho, visando assegurar não apenas a conformidade com a legislação
                                vigente, mas também fortalecer a confiança de nossos clientes, parceiros e colaboradores,
                                demonstramos nosso comprometimento com a proteção e a integridade dos dados pessoais que
                                recebem tratamento pelo Controlador <strong>FAPEU.</strong></p>

                            <p>Estamos confiantes de que, com a expertise da SOMAXI GROUP, alcançaremos um patamar
                                diferenciado em termos de governança de dados, promovendo assim a excelência em nossas
                                operações e reforçando nossa posição como referência no mercado em que atuamos.</p>

                            <p>Contamos com a parceria e colaboração contínua de todos os envolvidos nesse processo, e
                                estamos certos de que, juntos, alcançaremos os mais altos padrões de excelência em
                                privacidade, segurança da informação e gestão de riscos.</p>

                            <p>Para questões relacionadas ao tratamento de dados pessoais por nossa empresa, encorajamos que
                                os titulares de dados que se relacionam conosco entrem em contato pelos seguintes meios:</p>

                            <div class="contact-info bg-light p-4 my-4 rounded">
                                <p class="mb-1"><strong>Somaxi Group - DpoaaS</strong></p>
                                <p class="mb-1"><strong>E-mail:</strong> lgpd@fapeu.org.br</p>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <a href="{{ asset('pdfs/Projetos/politica_de_privacidade.docx') }}"
                                        class="fapeu-button">
                                        <i class="bi bi-shield-lock"></i>
                                        <p>Política de Privacidade</p>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <a href="{{ asset('pdfs/Projetos/politica_de_cookies.docx') }}" class="fapeu-button">
                                        <i class="bi bi-cookie"></i>
                                        <p>Política de Cookies</p>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <a href="{{ asset('pdfs/Projetos/termos_de_uso.docx') }}" class="fapeu-button">
                                        <i class="bi bi-file-earmark-text"></i>
                                        <p>Termos de Uso</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection