@extends('layout.header')
@section('title','FAPEU Novo')

@section('conteudo')




<style>
  .table {
    width: 80%; /* Ajuste a porcentagem conforme necessário */
    margin: 0 auto; /* Centraliza a tabela */
  }

</style>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Formulário</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="/pdfs/atualizacao_cadastro_empregado (2).doc" download>Acordo Coletivo 2023/2025  // ADITIVO</a></td>

    </tr>
    <tr>
      <td><a href="/pdfs/formulario_motivo_falta.doc" download>Acordo Coletivo 2022/23</a></td>
     
    </tr>
    <tr>
      <td><a href="/pdfs/solicitacao_cracha.doc" download>Acordo Coletivo 2021/22</a></td>
 
    </tr>

    <tr>
      <td><a href="/pdfs/solicitacao_vale_transporte.doc" download>	Acordo Coletivo 2020/21</a></td>

 

  </tbody>
</table>
@endsection