@extends('layout.header')
@section('inicio')
<div class="jumbotron">
    <div class="container text-center">
        <h1 class="display-8"> Fale Conosco </h1>
        <hr class="my-6">
        <p class="lead text-center">Precisa de ajuda? Nos envie um email</p>
    </div>
</div>
@endsection

@section('conteudo')
<div>
    <div class="row">
        <div class="col-6">
            <div class="form">
                <form>
                    <div class="form-row justify-content-end">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="inputNome">Nome</label>
                            <input type="text" class="form-control" id="inputNome">
                        </div>
                    </div>
                    <div class="form-row justify-content-end">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="inputEmail4">Seu email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row justify-content-end">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="inputCity">Assunto</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row justify-content-end">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="inputEstado">Destinatário</label>
                            <select id="inputEstado" class="form-control">
                                <option selected>Escolha um setor...</option>
                                <option>Almoxarifado</option>
                                <option>Administrativo</option>
                                <option>Captação e implantação de projetos</option>
                                <option>Compras Nacionais</option>
                                <option>Contas a Pagar</option>
                                <option>Contas a Receber</option>
                                <option>Departamento de Prestação de Contas</option>
                                <option>Diretoria Executiva</option>
                                <option>Financeiro</option>
                                <option>Gerência Administrativa e Financeira</option>
                                <option>Gerência de Contabilidade</option>
                                <option>Gerência de Informatica</option>
                                <option>Gerência de Projetos</option>
                                <option>Importação</option>
                                <option>Jurídico</option>
                                <option>Licitação</option>
                                <option>Recursos Humanos</option>
                                <option>Secretária Executiva</option>
                                <option>Superintendência</option>
                            </select>
                        </div>
                    </div>
                    <!-- Exemplo de textarea -->
                    <div class="form-row justify-content-end">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="exampleFormControlTextarea1">Exemplo de textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><br>
                            <button type="submit" class="btn btn-primary" style="color: #fff;">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-6 mt-23"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3535.8095331151862!2d-48.51924988280334!3d-27.599434089318017!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x952739000bfe430f%3A0xd55fe81b4f2a84f9!2sFAPEU!5e0!3m2!1sen!2sbr!4v1727808996288!5m2!1sen!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>
</div>

@endsection