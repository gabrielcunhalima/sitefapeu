@extends('site.master.layout')

@section('content')
<div class="card-deck justify-content-center">
  <div class="card custom-card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Servidor do TRT-13 volta a escrever depois de 15 anos com ajuda de dispositivo de tecnologia assistiva</h5>
      <p class="card-text">Com ajuda de um dispositivo de tecnologia assistiva, um servidor do Tribunal Regional do Trabalho da 13ª Região (TRT-13), na Paraíba, voltou escrever depois de 15 anos. </p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card custom-card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card custom-card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>



<style>

        .card-deck {
        display: flex;
        flex-wrap: wrap;
        justify-content: center; /* Centraliza os cards horizontalmente */
        }

        .custom-card {
        width: 18rem; /* Ajuste o tamanho do card conforme necessário */
        margin: 10px; /* Espaçamento entre os cards */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombreamento */
        }

</style>
@endsection
