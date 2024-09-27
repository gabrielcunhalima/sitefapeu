@extends('layout.header')
@section('title','FAPEU Novo')

@section('conteudo')

<div class="jumbotron ">
    <div class="container text-center">
        <h1 class="display-8"> Fale Conosco </h1>
        <hr class="my-6">
        <p class="lead text-center">Precisa de ajuda? Nos envie um email</p>
    </div>
</div>

<div class=" mt-5 d-flex justify-content-center" style="padding-top: 70px;"> 
    <div class="form" style="max-width: 800px; width: 100%; margin-bottom: 100px"> <!-- Limita a largura máxima do formulário -->
        <form>
            <div class="form-row justify-content-center ">
                <div class="form-group col-md-6 col-sm-12">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" id="inputNome" placeholder="Nome e sobrenome">
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="form-group col-md-6 col-sm-12">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="form-group col-md-6 col-sm-12">
                    <label for="inputCity">Assunto</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Assunto do email">
                </div>
            </div>
            
            <div class="form-row justify-content-center">
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
            <div class="form-row justify-content-center">
                <div class="form-group col-md-6 col-sm-12">
                    <label for="exampleFormControlTextarea1">Exemplo de textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" style="color: #ffff; margin-top: 30px; border-radius: 50px; padding: 10px 30px;">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
