@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] Inscrição em eventos')

@php 
// dd($dados);
  if ($eventos->imgCapa != '') {
    $pathimg = '../capas/' . $eventos->imgCapa;
  } else {
    $pathimg = 'https://i.imgur.com/koeU9fp.png';
  }

  $codsessao = '83476911000117' . $dados['idinscri'];

@endphp
@section('img_capa',$pathimg)
@section('conteudo')

@if ($statuspagamento == 1) 
  <div class="card center green darken-1" id='cartaopago'>
    <div class="card-content white-text">
        <span class="card-title">Pagamento já Realizado.</span>
        <p>Já existe um pagamento realizado para a sua inscrição.</p>

        <br>
        <a class="center blue btn-small waves-effect waves-light" href='{{url('/')}}'>Voltar para Página Inicial</a>
    </div>
  </div>
@else

<div class="#">
<h5 class="center">Inscrição no evento: ({{$eventos->id}}) - {{$eventos->Titulo}}</h5><br>
  <div class="row"> 
      @if (($mostraCupom == 1) AND ($dados['Cupom'] == '')) 
      <form class="col s12" method="post" action="{{route('inscricao.carregarcupom')}}">
        @csrf
        <input type="hidden" name='id_inscricao' value='{{$dados['idinscri']}}'>
        <input type="hidden" name='viaboleto' value='{{$dados['viaboleto']}}'>
        <input type="hidden" name='codsessao' value='{{$codsessao}}'>
        {{-- <input type="hidden" name='evento' value='{{$dados['evento']}}'>
        <input type="hidden" name='cpf' value='{{$dados['cpf']}}'>
        <input type="hidden" name='valorInsc' value='{{$dados['valorInsc']}}'>
        <input type="hidden" name='modalidade' value='{{$dados['modalidade']}}'>
        <input type="hidden" name='gratis' value='{{$dados['gratis']}}'> --}}
        <div class='row'>
          <div class='input-field col s6'>          
            <span for='cupom'>Cupom Desconto</span>
            <input type='text' id=text' name='cupom'>
          </div>
          <div class='input-field col s6'>        
          <button class="btn waves-effect waves-light btnlarge" type="submit" name="action">Carregar Cupom Desconto</button>
          </div>
        </div>
      </form>
      @else
        <h5>CUPOM APLICADO!</h5><br>
      @endif
      <h5>O Valor da inscrição é R$ @php echo number_format($dados['valorInsc'],2,",","."); @endphp</h5>
      <form class="col s12" method="post" action="{{route('inscricao.pagamento')}}">
        @csrf 
        <input type="hidden" name='viaboleto' value='{{$dados['viaboleto']}}'>
        <input type="hidden" name='id_inscricao' value='{{$dados['idinscri']}}'>
        <input type="hidden" name='codsessao' value='{{$codsessao}}'>
        <input type="hidden" name='valorInsc' value='{{$dados['valorInsc']}}'>
        {{-- <input type="hidden" name='evento' value='{{$dados['evento']}}'>
        <input type="hidden" name='cpf' value='{{$dados['cpf']}}'>
        <input type="hidden" name='modalidade' value='{{$dados['modalidade']}}'>
        <input type="hidden" name='gratis' value='{{$dados['gratis']}}'> --}}
        <div class='row'>
          <div class="input-field col s6">
            <span for='formapagamento'>Forma de Pagamento</span>
            <select name='id_formapagamento' id='id_formapagamento'>
              <option value='0' selected disabled>Escolha</option>
              @foreach ($formapagamentos as $tipo)
                <option value={{$tipo->id}}>{{$tipo->Descricao}}</option>              
              @endforeach
            </select>
          </div>
        </div>
        <div class="col s6 m6">
      <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
        </div>
      
      <div class="col s6 m6" style="display: flex; justify-content: flex-end">
        <button class="btn waves-effect waves-light btnlarge" type="submit" name="action">Prosseguir para Pagamento
          <i class="material-icons right">send</i>
        </button>
      </div>
      </div>
      </form>
      </div>
    </div>
  </div>

  @endif


  <script>
    document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('select');
          var options = {};
          var instances = M.FormSelect.init(elems, options);
      });
  </script>
  <noscript>
    <iframe
      style="width: 100px; height: 100px; border: 0; position:absolute; top: -5000px;"
      src="https://h.online-metrix.net/fp/tags?org_id=k8vif92e&session_id={{$codsessao}}">
    </iframe>
  </noscript>
  @endsection