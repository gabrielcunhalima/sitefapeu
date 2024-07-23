@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] DASHBOARD ADMINISTRADOR')


@section('conteudo')

@if(Session::has('error'))
<div class="row">
    <div class="col s12 m12">
            <div class="card red darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Atenção! </span>
                    <p>Preencha a modalidade e a quantidade para adicionar.</p>
                </div>
            </div>
    </div>
</div>
@endif  

<div>
  <h5 class='center'>Cadastrando novo evento - Vagas [ID: {{$id_evento}}]</h5>
  <form class='col s12' action='{{route('eventos.vagas')}}' method="POST" enctype="multipart/form-data">
      @csrf
      <input type='hidden' id='id_evento' name='id_evento' value='{{$id_evento}}'>
      <div class='row'>
        <div class="input-field col s3">
          <span for='modalidade'>Modalidade</span>
          <select name='id_modalidade' id='id_modalidade' required>
            <option value='0' selected disabled>Escolha</option>
            @foreach ($modalidade as $tipo)
              <option value={{$tipo->id}}>{{$tipo->Descricao}}</option>
            @endforeach
          </select>
        </div>
        <div class="input-field col s2">
          <span for='formapagamento'>Quantidade</span>
          <input type='number' class="kitweb" name='quantidade' min='1'>
        </div>
        <div class='input-field col s2'>
          {{-- <span>Sem Quantidade</span> --}}
          <label class="corCheckbox">
            <input type="checkbox" id='semQtd' name='semQtd' value='1'/>
            <span>Sem Quantidade</span>
          </label>
        </div>
        <div class='input-field col s2'>
          <span>Aceita Submissão</span>
          <label class="corCheckbox">
              <input type="checkbox" id='aceitaSubmissao' name='aceitaSubmissao' value='1'/>
              <span>Sim</span>
          </label>
        </div>
        <div class='input-field col s2'>
          <span>Exige Comprovação</span>
          <label class="corCheckbox">
              <input type="checkbox" id='exigeComprovante' name='exigeComprovante' value='1'/>
              <span>Sim</span>
          </label>
        </div>
      </div>
      <div class='row'>
        <div class="input-field col offset-s4">
            <div class='input-field col s3'>
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
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Aceita Submissão</th>
            <th>Exige Comprovação</th>
            {{-- <th></th> --}}
        </tr>
    </thead>
    <tbody>
    
    @foreach ($lista as $item)
      @php
        if ($item->aceitaSubmissao > 0) {
          $aceitaSubmissao = 'SIM';
        } else {
          $aceitaSubmissao = 'NÃO';
        }
        if ($item->exigeComprovante > 0) {
          $exigeComprovante = 'SIM';
        } else {
          $exigeComprovante = 'NÃO';
        }

        if ($item->Quantidade < 0) {
          $quantidade = 'SEM QTD.';
        } else {
          $quantidade = $item->Quantidade;
        }
      @endphp
    <tr>
      <td>{{$item->Descricao}}</td>
      <td>{{$quantidade}}</td>
      <td>{{$aceitaSubmissao}}</td>
      <td>{{$exigeComprovante}}</td>
      {{-- <td><a href='{{url('/eventos/eventovagasdeletar/'.$id_evento.'/' . $item->id)}}'> <i class="material-icons small green-text">delete</i></td> --}}
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
      <a class="btn waves-effect waves-light btnlarge" href='{{url('/eventos/formeventolote/'. $id_evento )}}'>Próxima Etapa
        <i class="material-icons right">send</i>
    </a>
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

