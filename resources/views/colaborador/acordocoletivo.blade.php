@extends('layout.header')
@section('title','FAPEU Novo')

@section('conteudo')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <table class="table table-hover table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Acordo Coletivo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href="/pdfs/pdfs_acordo_coletivo/TERMO ADITIVO A ACORDO COLETIVO DE TRABALHO 2024 2025.pdf" download class="text-success">Acordo Coletivo 2023/2025  // ADITIVO</a></td>
          </tr>
          <tr>
            <td><a href="/pdfs/pdfs_acordo_coletivo/acordo_coletivo_saae-fapeu_2022-2023.pdf" download class="text-success">Acordo Coletivo 2022/23</a></td>
          </tr>
          <tr>
            <td><a href="/pdfs/pdfs_acordo_coletivo/acordo_coletivo_saae-fapeu_2021-2022.pdf" download class="text-success">Acordo Coletivo 2021/22</a></td>
          </tr>
          <tr>
            <td><a href="/pdfs/pdfs_acordo_coletivo/acordo_coletivo_saae-fapeu_2020-2021.pdf" download class="text-success">Acordo Coletivo 2020/21</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
