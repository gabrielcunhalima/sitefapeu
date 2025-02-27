@extends('layout.header')
@section('title','FAPEU | Identidade Visual')

@section('conteudo')
<style>
    .file_manager .file a:hover .hover,
    .file_manager .file .file-name small {
        display: block
    }

    .file_manager .file {
        padding: 0 !important
    }

    .file_manager .file .icon {
        text-align: center
    }


    .file_manager .file {
        position: relative;
        border-radius: .55rem;
        overflow: hidden
    }

    .file_manager .file .image,
    .file_manager .file .icon {
        max-height: 180px;
        overflow: hidden;
        background-size: cover;
        background-position: top
    }

    .file_manager .file .hover {
        position: absolute;
        right: 10px;
        top: 10px;
        display: none;
        transition: all 0.2s ease-in-out
    }

    .file_manager .file a:hover .hover {
        transition: all 0.2s ease-in-out
    }

    .file_manager .file .icon {
        padding: 15px 10px;
        display: table;
        width: 100%
    }

    .file_manager .file .icon i {
        display: table-cell;
        font-size: 30px;
        vertical-align: middle;
        color: #777;
        line-height: 100px
    }

    .file_manager .file .file-name {
        padding: 10px;
        border-top: 1px solid #f7f7f7
    }

    .file_manager .file .file-name small .date {
        float: right
    }

    .folder {
        padding: 20px;
        display: block;
        color: #777
    }

    @media only screen and (max-width: 992px) {
        .file_manager .nav-tabs {
            padding-left: 0;
            padding-right: 0
        }

        .file_manager .nav-tabs .nav-item {
            display: inline-block
        }
    }

    .card {
        background: #fff;
        transition: .5s;
        border: 0;
        margin-bottom: 30px;
        border-radius: .55rem;
        position: relative;
        width: 100%;
        box-shadow: 0 3px 5px 0 rgb(0 0 0 / 10%);
    }

    a:hover {
        text-decoration: none;
    }

    .logo-colorida {
        background-image: url('images/Logo/JPG/Logo_FAPEU_Cor.jpg');
        background-size: contain;
        background-position: right;
        background-repeat: no-repeat;
    }

    .logo-monocramatica {
        background-image: url('images/Logo/JPG/Logo_FAPEU_Mono.jpg');
        background-size: contain;
        background-position: right;
        background-repeat: no-repeat;
    }

    .logo-negativo {
        background-image: url('images/Logo/JPG/Logo_FAPEU_Negativo.jpg');
        background-size: contain;
        background-position: right;
        background-repeat: no-repeat;
    }

    .logo-pb {
        background-image: url('images/Logo/JPG/Logo_FAPEU_PB.jpg');
        background-size: contain;
        background-position: right;
        background-repeat: no-repeat;
    }

    .bg-idvisual {
        background: rgb(250, 250, 250);
        background: linear-gradient(90deg, rgba(250, 250, 250, 1) 0%, rgba(250, 250, 250, 1) 70%, rgba(250, 250, 250, 0.5) 100%, rgba(250, 250, 250, 0) 100%);
    }
</style>

<div id="main-content" class="file_manager">
    <div class="container">
        <p>Nesta área estão disponíveis para download a logomarca da FAPEU e seu manual de aplicação, denominado “Manual de identidade visual FAPEU”. A aplicação da logomarca em todo e qualquer material deverá obedecer rigorosamente aos padrões definidos neste manual.</p>
        <p class="mb-5">O uso indevido da logomarca da FAPEU poderá gerar responsabilidades cíveis e criminais. </p>
        <a href="{{ asset('pdfs/QuemSomos/Manual_Marca.pdf') }}" download>
            <h4 class="mb-5"><i class="bi bi-box-arrow-down"></i> Download do Manual de Identidade Visual FAPEU</h4>
        </a>
        <div class="row clearfix">
            <div class="logo-pdf row mt-4">
                <h4>Logo FAPEU PDF</h4>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card logo-colorida">
                        <div class="file bg-idvisual">
                            <a href="{{ asset('images/Logo/PDF/Logo_FAPEU_Cor.pdf') }}" download>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Colorido</p>
                                    <small>Tamanho: 81 KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card logo-monocramatica">
                        <div class="file bg-idvisual">
                            <a href="{{ asset('images/Logo/PDF/Logo_FAPEU_Mono.pdf') }}" download>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Monocromático</p>
                                    <small>Tamanho: 77 KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card logo-negativo">
                        <div class="file bg-idvisual">
                            <a href="{{ asset('images/Logo/PDF/Logo_FAPEU_Negativo.pdf') }}" download>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Negativo</p>
                                    <small>Tamanho: 73 KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card logo-pb">
                        <div class="file bg-idvisual">
                            <a href="{{ asset('images/Logo/PDF/Logo_FAPEU_PB.pdf') }}" download>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Preto e Branco</p>
                                    <small>Tamanho: 76 KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-corel row mt-4">
                <h4>Logo FAPEU Corel</h4>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card logo-colorida">
                        <div class="file bg-idvisual">
                            <a href="{{ asset('images/Logo/Corel/LogoFAPEU_Cor.cdr') }}" download>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Colorido</p>
                                    <small>Tamanho: 15 KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card logo-monocramatica">
                        <div class="file bg-idvisual">
                            <a href="{{ asset('images/Logo/Corel/LogoFAPEU_Mono.cdr') }}" download>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Monocromático</p>
                                    <small>Tamanho: 23 KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card logo-negativo">
                        <div class="file bg-idvisual">
                            <a href="{{ asset('images/Logo/Corel/LogoFAPEU_Negativo.cdr') }}" download>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Negativo</p>
                                    <small>Tamanho: 24 KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card logo-pb">
                        <div class="file bg-idvisual">
                            <a href="{{ asset('images/Logo/Corel/LogoFAPEU_PB.cdr') }}" download>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Preto e Branco</p>
                                    <small>Tamanho: 23 KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-eps row mt-4">
                <h4>Logo FAPEU EPS</h4>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card logo-colorida">
                        <div class="file bg-idvisual">
                            <a href="{{ asset('images/Logo/EPS/Logo_FAPEU_Cor.eps') }}" download>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Colorido</p>
                                    <small>Tamanho: 461 KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card logo-monocramatica">
                        <div class="file bg-idvisual">
                            <a href="{{ asset('images/Logo/EPS/Logo_FAPEU_Mono.eps') }}" download>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Monocromático</p>
                                    <small>Tamanho: 452 KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card logo-negativo">
                        <div class="file bg-idvisual">
                            <a href="{{ asset('images/Logo/EPS/Logo_FAPEU_Negativo.eps') }}" download>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Negativo</p>
                                    <small>Tamanho: 503 KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card logo-pb">
                        <div class="file bg-idvisual">
                            <a href="{{ asset('images/Logo/EPS/Logo_FAPEU_PB.eps') }}" download>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Preto e Branco</p>
                                    <small>Tamanho: 455 KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-illustrator row mt-4">
                <h4>Logo FAPEU Illustrator</h4>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card logo-colorida">
                        <div class="file bg-idvisual">
                            <a href="{{ asset('images/Logo/Illustrator/Logo_FAPEU_Cor.ai') }}" download>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Colorido</p>
                                    <small>Tamanho: 90 KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card logo-monocramatica">
                        <div class="file bg-idvisual">
                            <a href="{{ asset('images/Logo/Illustrator/Logo_FAPEU_Mono.ai') }}" download>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Monocromático</p>
                                    <small>Tamanho: 73 KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card logo-negativo">
                        <div class="file bg-idvisual">
                            <a href="{{ asset('images/Logo/Illustrator/Logo_FAPEU_Negativo.ai') }}" download>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Negativo</p>
                                    <small>Tamanho: 69 KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card logo-pb">
                        <div class="file bg-idvisual">
                            <a href="{{ asset('images/Logo/Illustrator/Logo_FAPEU_PB.ai') }}" download>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Preto e Branco</p>
                                    <small>Tamanho: 72 KB</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="mt-4 font-weight-bold">Em caso de dúvidas, favor entrar em contato conosco: ti_suporte@fapeu.org.br</p>
    </div>
</div>

@endsection