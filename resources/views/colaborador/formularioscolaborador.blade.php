@extends('layout.header')
@section('title','FAPEU Novo')

@section('conteudo')



<style>
/* Define uma largura fixa para a coluna "Última Atualização" */
  .table th:nth-child(2), 
  .table td:nth-child(2) {
    width: 350px; /* Define uma largura específica para a coluna */
  }

  

</style>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Formulário</th>
      <th scope="col">Última Atualização</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="/pdfs/atualizacao_cadastro_empregado (2).doc" download>Atualização Cadastral do Empregado</a></td>
      <td><input type="date" name="ultima_atualizacao_1"value="2011-12-15" readonly ></td>
    </tr>
    <tr>
      <td><a href="/pdfs/formulario_motivo_falta.doc" download>Motivo Falta ao Trabalho</a></td>
      <td><input type="date" name="ultima_atualizacao_2"value="2015-03-30" readonly ></td>
    </tr>
    <tr>
      <td><a href="/pdfs/solicitacao_cracha.doc" download>Solicitação de Crachá</a></td>
      <td><input type="date" name="ultima_atualizacao_3" value="2010-07-22" readonly ></td>
    </tr>

    <tr>
      <td><a href="/pdfs/solicitacao_vale_transporte.doc" download>	Solicitação de Vale Transporte</a></td>
      <td><input type="date" name="ultima_atualizacao_4" value="2024-04-16" readonly></td>
    </tr>
    <tr>
      <td><a href="/pdfs/formulario_alteracao_aux_alimentacao.doc" download>	Alteração de Vale Alimentação</a></td>
      <td><input type="date" name="ultima_atualizacao_5" value="2013-08-16" readonly></td>
    </tr>
    <tr>

  </tbody>
</table>

@endsection
