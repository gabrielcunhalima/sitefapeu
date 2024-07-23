@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] DASHBOARD ADMINISTRADOR')


@section('conteudo')
<div>
  <h5 class='center'>Configurações [ID: {{$idNovoEvento}}]</h5>
  <form class='col s12' action='{{route('eventos.config')}}' method="POST" enctype="multipart/form-data">
      @csrf
      <input type='hidden' id='id_evento' name='id_evento' value='{{$idNovoEvento}}'>
      <span>Controle de Vagas</span>
      <div class="row">
        <div class="input-field col s12">
          <label class="corCheckbox">
            <input type="checkbox"  id='ControleVagasModalidade' name='ControleVagasModalidade' value="1"/>
            <span>Controle de Vagas por Modalidade</span>
          </label>
        </div>
        <div class="input-field col s3">
          <label class="corCheckbox">
            <input type="checkbox"  id='ControleVagasGeral' name='ControleVagasGeral' value="1"/>
            <span>Controle de Vagas Geral</span>
          </label>
        </div>
        <div  class="input-field col s5">
          <label class="corCheckbox">
            <span>Quantidade total de Vagas</span>
                <input id="TotalVagasGeral" type="number" class="validate" name='TotalVagasGeral'>
            </label>
        </div>
        <div class="input-field col s12">
          <label class="corCheckbox">
            <input type="checkbox"  id='semControleVagas' name='semControleVagas' value="1"/>
            <span>Sem controle de Vagas</span>
          </label>
        </div>
      </div>
      <br><br>
      <span>Formas de Pagamento</span>
      <div class="row">
        <div class="input-field col s4">
          <label class="corCheckbox">
            <input type="checkbox"  id='PagamentoBoleto' name='PagamentoBoleto' value="1"/>
            <span>Boleto (Itaú)</span>
          </label>
        </div>
        <div class="input-field col s4">
          <label class="corCheckbox">
            <input type="checkbox"  id='PagamentoPIX' name='PagamentoPIX' value="1"/>
            <span>PIX (GetNet)</span>
          </label>
        </div>
        <div class="input-field col s4">
          <label class="corCheckbox">
            <input type="checkbox"  id='PagamentoCartao' name='PagamentoCartao' value="1"/>
            <span>Cartão de Crédito (GetNet)</span>
          </label>
        </div>
    </div>
    
    <br><br>
    <div class='row'>
      <div class="input-field col offset-s8">
        <span>Se permitir Cartão de Crédito, Quantidade de Parcelas</label>
        <input id="QuantidadeParcelas" type="number" class="validate" name='QuantidadeParcelas'>
      </div>
    </div>
    <div class='row'>
      <div class="input-field col s2">
      <span>Data Abertura das Inscrições</label>
      <input id="dataInicioInscricao" type="date" class="validate" name='dataInicioInscricao' >
    </div>
    <div class="input-field col s1">
      <span for="HoraInicio">Hora Inicio</span>
      <input id="HoraInicio" name='HoraInicio' type="text" class="timepicker" required>
    </div>
      <div class="input-field col s2">
        <span>Data Final das Inscrições</label>
        <input id="VencimentoPagamento" type="date" class="validate" name='VencimentoPagamento' >
      </div>
      <div class="input-field col s1">
        <span for="HoraFim">Hora Fim</span>
        <input id="HoraFim" name='HoraFim' type="text" class="timepicker" required>
      </div>
    </div>
    <div class='row'>
      <div class='input-field col s12'>
        <label class="corCheckbox">
          <input type="checkbox"  id='ExibirEvento' name='ExibirEvento' value="1" checked/>
          <span>Exibir evento na página de eventos da FAPEU?</span>
        </label>
      </div>
    </div>  <br><br>
    <div class='row'>
      
      <div class='col s6'>
        <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
      </div>
      <div class='col s6' style="display: flex; justify-content: flex-end">
        <button class="btn waves-effect waves-light btnlarge" type="submit" name="action">Próxima Etapa
          <i class="material-icons right">send</i>
      </div>
    </div>
    

  </form>
</div>

<script>
  Date.prototype.toDateInputValue = (function() {
      var local = new Date(this);
      local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
      return local.toJSON().slice(0,10);
  });
  
  document.getElementById('dataInicioInscricao').value = new Date().toDateInputValue();

  $(document).ready(function(){
    jQuery('.timepicker').timepicker({
      twelveHour: false
    });
  });
</script>
@endsection