@extends('layout.header')
@section('title', 'FAPEU Novo')

@section('conteudo')

<!-- Carregar o CSS do Bootstrap no layout principal, se ainda não estiver incluído -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

<div class="container mt-5"> <!-- mt-5 adiciona uma margem superior -->
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <table class="table table-hover table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Formulário</th>
            <th scope="col">Última Atualização</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href="/pdfs/atualizacao_cadastro_empregado (2).doc" download>Atualização Cadastral do Empregado</a></td>
            <td><input type="date" class="form-control" name="ultima_atualizacao_1" value="2011-12-15" readonly></td>
          </tr>
          <tr>
            <td><a href="/pdfs/formulario_motivo_falta.doc" download>Motivo Falta ao Trabalho</a></td>
            <td><input type="date" class="form-control" name="ultima_atualizacao_2" value="2015-03-30" readonly></td>
          </tr>
          <tr>
            <td><a href="/pdfs/solicitacao_cracha.doc" download>Solicitação de Crachá</a></td>
            <td><input type="date" class="form-control" name="ultima_atualizacao_3" value="2010-07-22" readonly></td>
          </tr>
          <tr>
            <td><a href="/pdfs/solicitacao_vale_transporte.doc" download>Solicitação de Vale Transporte</a></td>
            <td><input type="date" class="form-control" name="ultima_atualizacao_4" value="2024-04-16" readonly></td>
          </tr>
          <tr>
            <td><a href="/pdfs/formulario_alteracao_aux_alimentacao.doc" download>Alteração de Vale Alimentação</a></td>
            <td><input type="date" class="form-control" name="ultima_atualizacao_5" value="2013-08-16" readonly></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
