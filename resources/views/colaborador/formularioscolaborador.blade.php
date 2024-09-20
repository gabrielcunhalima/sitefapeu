@extends('layout.header')
@section('title','FAPEU Novo')

@section('conteudo')



<style>
/* Define uma largura fixa para a coluna "Última Atualização" */
  .table th:nth-child(2), 
  .table td:nth-child(2) {
    width: 200px; /* Define uma largura específica para a coluna */
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
      <td><a href="/pdfs/formulario1.pdf" download>Atualização Cadastral do Empregado</a></td>
      <td><input type="date" name="ultima_atualizacao_1"></td>
    </tr>
    <tr>
      <td><a href="/pdfs/formulario2.pdf" download>Baixar Formulário 2</a></td>
      <td><input type="date" name="ultima_atualizacao_2"></td>
    </tr>
    <tr>
      <td><a href="/pdfs/formulario3.pdf" download>Baixar Formulário 3</a></td>
      <td><input type="date" name="ultima_atualizacao_3"></td>
    </tr>
  </tbody>
</table>

@endsection
