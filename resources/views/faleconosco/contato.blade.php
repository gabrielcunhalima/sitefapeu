@extends('layout.header')
@section('title','FAPEU | Contato')

@section('conteudo')
<div>
    <div class="row container-fluid">
        <div class="col-md-6 col-sm-12">
            <div class="form">
                <form action="{{ route('contato.salvar') }}" method="POST">
                    @csrf
                    <div class="form-row justify-content-end">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="inputNome">Nome</label>
                            <input type="text" class="form-control" id="inputNome" name="nome" required>
                        </div>
                    </div>
                    <div class="form-row justify-content-end">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="inputEmail4">Seu email</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email" required>
                        </div>
                    </div>
                    <div class="form-row justify-content-end">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="inputCity">Assunto</label>
                            <input type="text" class="form-control" id="inputCity" name="assunto" required>
                        </div>
                    </div>
                    <div class="form-row justify-content-end">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="inputEstado">Destinatário</label>
                            <select id="inputEstado" name="id_setor" class="form-control" required>
                                <option value="0" disabled selected>Escolha um setor...</option>
                                <option value="1">Almoxarifado</option>
                                <option value="2">Administrativo</option>
                                <option value="3">Captação e implantação de projetos</option>
                                <option value="4">Compras Nacionais</option>
                                <option value="5">Contas a Pagar</option>
                                <option value="6">Contas a Receber</option>
                                <option value="7">Departamento de Prestação de Contas</option>
                                <option value="8">Diretoria Executiva</option>
                                <option value="9">Financeiro</option>
                                <option value="10">Gerência Administrativa e Financeira</option>
                                <option value="11">Gerência de Contabilidade</option>
                                <option value="12">Gerência de Informatica</option>
                                <option value="13">Gerência de Projetos</option>
                                <option value="14">Importação</option>
                                <option value="15">Jurídico</option>
                                <option value="16">Licitação</option>
                                <option value="17">Recursos Humanos</option>
                                <option value="18">Secretária Executiva</option>
                                <option value="19">Superintendência</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row justify-content-end">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="exampleFormControlTextarea1">Mensagem</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" rows="3" required></textarea><br>
                            <button type="submit" class="btn btn-primary" style="color: #fff;">Enviar</button>
                        </div>
                    </div>
                </form>
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>

        <div class="col-md-4 col-sm-12 mt-23">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Localização e Contato</h5>
                    <div class="mb-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3535.8095331151862!2d-48.51924988280334!3d-27.599434089318017!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x952739000bfe430f%3A0xd55fe81b4f2a84f9!2sFAPEU!5e0!3m2!1sen!2sbr!4v1727808996288!5m2!1sen!2sbr" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <p class="card-text-justify-content">
                        Rua Delfino Conti, s/n, Campus Universitário Reitor João David Ferreira Lima, Trindade –
                        Florianópolis – Santa Catarina, CEP 88040-370<br><br>
                        Correspondências via correio – CEP 88035-972 – Caixa Postal 5078<br>
                        Telefone/WhatsApp: (48) 33317400<br><br>
                        Horário de Funcionamento: <br>Segunda a Sexta-feira das 8h às 12h e das 13h às 17h
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection