<style>
    .footer {
        position: relative;
    }

    .footer-links a:hover {
        color: white !important;
        text-decoration: underline !important;
    }

    .text-white-70 {
        color:rgba(233, 233, 233, 0.7)
    }
    
    .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .social-icon:hover {
        background-color: rgba(255, 255, 255, 0.2);
        transform: translateY(-3px);
    }

    .border-cinza {
        border-top: 2px solid rgba(109, 109, 109, 0.31)
    }
</style>
<footer class="footer pt-5 pb-3">
    <div class="container">
        <div class="row g-4 mb-4">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white fw-bold mb-3">Contato</h5>
                <div class="d-flex mb-3">
                    <div class="flex-shrink-0 me-3 text-white-70">
                        <i class="bi bi-telephone-fill fs-5"></i>
                    </div>
                    <div class="d-flex align-items-center">
                        <p class="mb-0 text-white-70">(48) 3331-7400</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="flex-shrink-0 me-3 text-white-70">
                        <i class="bi bi-mailbox fs-5"></i>
                    </div>
                    <div>
                        <p class="mb-0 text-white-70">Caixa Postal 5078<br>Bairro Trindade - Florianópolis/SC<br>CEP
                            88035-972</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white fw-bold mb-3">Localização</h5>
                <div class="d-flex mb-3">
                    <div class="flex-shrink-0 me-3 text-white-70">
                        <i class="bi bi-geo-alt-fill fs-5"></i>
                    </div>
                    <div>
                        <p class="mb-0 text-white-70">Rua Delfino Conti, s/n<br>Campus Universitário UFSC<br>Bairro
                            Trindade - Florianópolis/SC<br>CEP 88040-370</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="flex-shrink-0 me-3 text-white-70">
                        <i class="bi bi-clock-fill fs-5"></i>
                    </div>
                    <div>
                        <p class="mb-0 text-white-70">Segunda a Sexta-feira<br>8h às 12h | 13h às 17h</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white fw-bold mb-3">Links Rápidos</h5>
                <ul class="list-unstyled footer-links">
                    <li class="mb-2">
                        <a href="{{ route('transparencia.projetostransparencia') }}"
                            class="text-white-70 text-decoration-none">
                            <i class="bi bi-chevron-right small me-2"></i>Portal da Transparência
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('projetos.espacocoordenador') }}" class="text-white-70 text-decoration-none">
                            <i class="bi bi-chevron-right small me-2"></i>Espaço do Coordenador
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('fornecedor.espacofornecedor') }}" class="text-white-70 text-decoration-none">
                            <i class="bi bi-chevron-right small me-2"></i>Espaço do Fornecedor
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('colaborador.vagasdisponiveis') }}"
                            class="text-white-70 text-decoration-none">
                            <i class="bi bi-chevron-right small me-2"></i>Vagas Disponíveis
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('noticias.noticiasrecentes') }}" class="text-white-70 text-decoration-none">
                            <i class="bi bi-chevron-right small me-2"></i>Notícias
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <h5 class="text-white fw-bold mb-3 border-light d-none d-md-block">Redes Sociais</h5>
                <div class="social-icons d-flex gap-3 justify-content-center justify-content-md-start">
                    <a href="https://instagram.com/fapeu_" class="text-white social-icon" target="_blank">
                        <i class="bi bi-instagram fs-4"></i>
                    </a>
                    <a href="https://www.facebook.com/fapeu/?locale=pt_BR" class="text-white social-icon"
                        target="_blank">
                        <i class="bi bi-facebook fs-4"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/fapeu/" class="text-white social-icon" target="_blank">
                        <i class="bi bi-linkedin fs-4"></i>
                    </a>
                    <a href="https://www.youtube.com/@youtubedafapeu" class="text-white social-icon" target="_blank">
                        <i class="bi bi-youtube fs-4"></i>
                    </a>
                </div>
                <div class="text-start mt-4 row">
                    <div class="col-4"><a href="https://www.contatoseguro.com.br/fapeu" target="_blank"><img src=" {{ asset('images/qrcode-contatoseguro.png') }}" alt="" class="img-fluid" style="max-width: 80px;"></a></div>
                    <div class="col-8">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                            <p class="mb-0 text-white-70">CNPJ: 83.476.911/0001-17<br>Inscrição Estadual: ISENTO<br>Inscrição Municipal: 61.274-0</p>
                        </div>
                    </div>
                    <p class="mt-2 text-white-70"><i class="bi bi-arrow-return-right"></i> <a href="https://www.contatoseguro.com.br/fapeu" target="_blank" class="text-white" style="text-decoration: underline">Contato Seguro</a>, nosso canal de denúncias.</p>
                </div>
            </div>
        </div>
        <div class="legal-info pt-3 border-cinza">
            <div class="row align-items-center">
                <div class="text-center">
                    <p class="mb-0 text-white-70 small">
                        &copy; {{ date('Y') }} Fundação de Amparo à Pesquisa e Extensão Universitária.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>