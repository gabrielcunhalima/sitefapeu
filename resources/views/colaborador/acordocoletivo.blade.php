@extends('layout.header')
@section('title','FAPEU Novo')

@section('conteudo')




<style>
  .table {
    width: 80%; /* Ajuste a porcentagem conforme necessário */
    margin: 0 auto; /* Centraliza a tabela */
    
  }

  .table a {
    color: #146551;
  }

</style>

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Formulário</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="/pdfs/pdfs_acordo_coletivo/TERMO ADITIVO A ACORDO COLETIVO DE TRABALHO 2024 2025.pdf" download>Acordo Coletivo 2023/2025  // ADITIVO</a></td>

    </tr>
    <tr>
      <td><a href="/pdfs/pdfs_acordo_coletivo/acordo_coletivo_saae-fapeu_2022-2023.pdf" download>Acordo Coletivo 2022/23</a></td>
     
    </tr>
    <tr>
      <td><a href="/pdfs/pdfs_acordo_coletivo/acordo_coletivo_saae-fapeu_2021-2022.pdf" download>Acordo Coletivo 2021/22</a></td>
 
    </tr>

    <tr>
      <td><a href="/pdfs/pdfs_acordo_coletivo/acordo_coletivo_saae-fapeu_2020-2021.pdf" download>	Acordo Coletivo 2020/21</a></td>

 

  </tbody>
</table>
@endsection