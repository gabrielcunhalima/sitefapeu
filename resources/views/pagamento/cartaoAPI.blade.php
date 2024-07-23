@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] Inscrição em eventos')

@section('conteudo')

<div class="page-container">
    <h3 class='center'>Pagamento em Cartão de Crédito</h3>
    <div class="row"> 
        <form action="{{ route('inscricao.pagcartao') }}" method="POST">
        @csrf
        <input type="hidden" name="valorInsc" class="form-control" id="valorInsc" value='{{$dados['valorInsc']}}'>
        <input type="hidden" name="id_inscricao" class="form-control" id="id_inscricao" value='{{$dados['id_inscricao']}}'>
        <input type="hidden" name="codsessao" class="form-control" id="codsessao" value='{{$dados['codsessao']}}'>
        {{-- <input type="hidden" name="cpf" class="form-control kitweb" value='{{$dados['cpf']}}'>
        <input type="hidden" name="modalidade" class="form-control" id="modalidade" value='{{$dados['modalidade']}}'>
        <input type="hidden" name="evento" class="form-control" id="evento" value='{{$dados['evento']}}'> --}}

        <div class="row">
            <div class="input-field col offset-s3 s6 ">
                <span for="numCartao">Número do Cartão</span>
                <input id="numCartao" name='numCartao' type="text" class="validate"  required maxlength="16">
            </div>
        </div>
        <div class='row'>
            <div class="input-field col offset-s3 s6">
                <span for="nomeCartao">Nome </span>
                <input id="nomeCartao" type="text" name='nomeCartao' class="validate" required>
            </div>
        </div>
        
        <div class='row'>
            <div class="input-field col offset-s3 s2">
                <span for="mesValidadeCartao">Mês Validade (MM)</span>
                <input id="mesValidadeCartao" type="text" name='mesValidadeCartao' class="validate" required  onkeypress='return onlyNumber(event)' maxlength="2" min="1" max='31'>
            </div>
            <div class="input-field col s2">
                <span for="anoValidadeCartao">Ano Validade (AA)</span>
                <input id="anoValidadeCartao" type="text" name='anoValidadeCartao' class="validate" required onkeypress='return onlyNumber(event)'  maxlength="2" min='24' max='99' >
            </div>
        <div class="input-field col s1">
                <span for="cvvCartao">CVV </span>
                <input id="cvvCartao" type="number" name='cvvCartao' class="validate" required maxlength="3" min='1' max='999'>
            </div>
            <div class="input-field col s1">
                <span for="numParcelas">Parcelas</span>
                    <select name='numParcelas' id='numParcelas'>
                    <option value='1' selected>1x</option>
                    @for ($i = 2; $i <= $evento_config->QuantidadeParcelas; $i++) 
                        <option value={{$i}}>{{$i}}x</option>              
                    @endfor
                </select>
            </div>
        </div>
        <center>
            <button class="btn waves-effect waves-light btnlarge" type="submit" name="action">Confirmar Pagamento</button><br><br>
        </center>
        </form>
    </div>
</div>


<script>
    function onlyNumber(e) {
        var charCode = e.charCode ? e.charCode : e.keyCode;
        // charCode 8 = backspace   
        // charCode 9 = tab
        if (charCode != 8 && charCode != 9) {
            // charCode 48 equivale a 0   
            // charCode 57 equivale a 9
            if (charCode < 48 || charCode > 57) {
                return false;
            }
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('select');
          var options = {};
          var instances = M.FormSelect.init(elems, options);
      });
</script>
@endsection



