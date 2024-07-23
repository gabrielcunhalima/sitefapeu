@extends('layout.header')
@section('css','../../css/app.css')
@section('title','[FAPEU] DASHBOARD ADMINISTRADOR')


@section('conteudo')
<div>
  <h5 class='center'>Cadastrando novo evento - Cupom Desconto [ID: {{$idNovoEvento}}]</h5>
  <form class='col s12' action='{{route('eventos.cupom')}}' method="POST" enctype="multipart/form-data">
      @csrf
      <input type='hidden' id='id_evento' name='id_evento' value='{{$idNovoEvento}}'>
      <div class='row'>
        <div class="input-field col s3">
          <span for="CodigoCupom">Código</span>
          <input id="CodigoCupom" name='CodigoCupom' type="text" class="validate">
        </div>
      </div>
      <div class='row'>
        <div class="input-field col s4">
          <span for='id_formapagamento'>Forma Pagamento</span>
          <select name='id_formapagamento' id='id_formapagamento'>
            <option value='0' selected disabled>Escolha</option>
              @foreach ($formasPagto as $tipo)
                <option value={{$tipo->id}}>{{$tipo->Descricao}}</option>
              @endforeach
          </select>
        </div>
        <div class='input-field col s2'>          
          <span for='modalidade'>Quantidade</span>
          <input type='number' class="kitweb" name='quantidade' min='0'>
        </div>
        <div class='input-field col s2'> 
          <label class="corCheckbox">
            <input type="checkbox" id='semQtd' name='semQtd' value="1" />
            <span>Sem Quantidade</span>
          </label>
        </div>
      </div>
      <div class='row'>
        <div class="input-field col s3">
          <span for="dataInicio">Data Inicio</span>
          <input id="dataInicio" name='dataInicio' type="date" class="validate" required>
        </div>
        <div class="input-field col s3">
          <span for="dataFim">Data Fim</span>
          <input id="dataFim" name='dataFim' type="date" class="validate" required>
        </div>
        <div class="input-field col s3">
          <span for="porcentagem">Porcentagem %</span>
          <input id="porcentagem" name='porcentagem' type="text" class="validate" required>
        </div>
      </div>
      <div class='row'>
        <div class='input-field col offset-s4'>
          <div class="input-field col s6">
            <button class="btn waves-effect deep-purple darken-4 waves-light btnlarge" type="submit" name="action">Adicionar
            </button>
          </div>
        </div>
      </div>
      <div class="input-field col s6">
    </div>
  </form>

<table>
    <thead>
        <tr>    
            <th>Código</th>
            <th>Forma Pagamento</th>
            <th>Quantidade</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Desconto</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

    @foreach ($lista as $item)
      @php
          $dataInicio = date('d/m/Y',strtotime($item->dataInicio));
          $dataFinal = date('d/m/Y',strtotime($item->dataFim));
          if ($item->quantidade < 0) {
            $quantidade = 'SEM QTD.';
          } else {
            $quantidade = $item->quantidade;
          }
      @endphp
    <tr>
      <td>{{$item->CodigoCupom}}</td>
      <td>{{$item->PDesc}}</td>
      <td>{{$quantidade}}</td>
      <td>{{$dataInicio}}</td>
      <td>{{$dataFinal}}</td>
      <td>{{$item->porcentagem}}%</td>
      <td><a href='{{url('/eventos/eventocupomdeletar/'.$idNovoEvento.'/' . $item->id)}}'><i class="material-icons small green-text">delete</i></td>
    </tr>
    @endforeach
    </tbody>
  </table> 
  
  <br><br>
  <div class='row'>
    <div class='col s4 m4'>
        <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
    </div>
    <div class='col offset-s4 offset-m4'>
      <a class="btn waves-effect waves-light btnlarge" href='{{url('/evento/detalhes/'.$idNovoEvento)}}'>Conferir detalhes
        <i class="material-icons right">send</i></a>
    </div>
</div>
</div>


<script>
  document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var options = {};
      var instances = M.FormSelect.init(elems, options);
  });
  </script>

@endsection

