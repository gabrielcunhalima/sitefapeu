@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] DASHBOARD ADMINISTRADOR')


@section('conteudo')
@php 
  // dd($evento_config);
  $prazo = date('Y-m-d',strtotime($evento_config->VencimentoPagamento));
  $cvm = ($evento_config->ControleVagasModalidade == 1) ? 'checked' : '';
  $cvg = ($evento_config->ControleVagasGeral == 1) ? 'checked' : '';
  $boleto = ($evento_config->PagamentoBoleto == 1) ? 'checked' : '';
  $pix = ($evento_config->PagamentoPIX == 1) ? 'checked' : '';
  $cartao = ($evento_config->PagamentoCartao == 1) ? 'checked' : '';
  $exibirEvento = ($evento_config->ExibirEvento == 1) ? 'checked' : '';
@endphp
<div>
  <h5 class='center'>Cadastrando novo evento - Configurações [ID: {{$id_evento}}]</h5>
  <form class='col s12' action='{{route('eventos.editconfig')}}' method="POST" enctype="multipart/form-data">
      @csrf
      <input type='hidden' id='id_evento' name='id_evento' value='{{$id_evento}}'>
      <span>Controle de Vagas</span>
      <div class="row">
        <div class="input-field col s4">
          <label class="corCheckbox">
            <input type="checkbox"  id='ControleVagasModalidade' name='ControleVagasModalidade' value="1" {{$cvm}}/>
            <span>Controle de Vagas por Modalidade</span>
          </label>
        </div>
        <div class="input-field col s4">
          <label class="corCheckbox">
            <input type="checkbox"  id='ControleVagasGeral' name='ControleVagasGeral' value="1" {{$cvg}}/>
            <span>Controle de Vagas Geral</span>
          </label>
        </div>
      </div>
      <br><br>
      <span>Formas de Pagamento</label>
      <div class="row">
        <div class="input-field col s4">
          <label class="corCheckbox">
            <input type="checkbox"  id='PagamentoBoleto' name='PagamentoBoleto' value="1" {{$boleto}}/>
            <span>Boleto (Itaú)</span>
          </label>
        </div>
        <div class="input-field col s4">
          <label class="corCheckbox">
            <input type="checkbox"  id='PagamentoPIX' name='PagamentoPIX' value="1" {{$pix}}/>
            <span>PIX (GetNet)</span>
          </label>
        </div>
        <div class="input-field col s4">
          <label class="corCheckbox">
            <input type="checkbox"  id='PagamentoCartao' name='PagamentoCartao' value="1" {{$cartao}}/>
            <span>Cartão de Crédito (GetNet)</span>
          </label>
        </div>
    </div>
    
    <br><br>
    <div class='row'>
      <div class="input-field col s4">
        <span>Data Encerramento das Inscrições</label>
        <input id="VencimentoPagamento" type="date" class="validate" name='VencimentoPagamento' value={{$prazo}} >
      </div>
      <div class="input-field col s4 offset-s4">
        <span>Se permitir Cartão de Crédito, Quantidade de Parcelas</label>
        <input id="QuantidadeParcelas" type="number" class="validate" name='QuantidadeParcelas' value={{$evento_config->QuantidadeParcelas}}>
      </div>
      <div class='input-field col s12'>
        <label class="corCheckbox">
          <input type="checkbox"  id='ExibirEvento' name='ExibirEvento' value="1" {{$exibirEvento}}/>
          <span>Exibir evento na página de eventos da FAPEU?</span>
        </label>
      </div>
    </div>  <br><br>
    <div class='row'>
      
      <div class='col s4 m4'>
        <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
      </div>
      <div class='col offset-s4 offset-m4'>
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
</script>
@endsection