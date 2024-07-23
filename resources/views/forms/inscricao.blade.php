@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] Inscrição em eventos')
@php 
  if ($eventos->imgCapa != '') {
    $pathimg = '../capas/' . $eventos->imgCapa;
  } else {
    $pathimg = 'https://i.imgur.com/koeU9fp.png';
  }
@endphp
@section('img_capa',$pathimg)

@section('conteudo')
@if ($errors->any())
<div class="row">
  <div class="col s12 m12">
          <div class="card red darken-1">
              <div class="card-content white-text">
                  <span class="card-title">Dados incorretos</span>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </div>
          </div>
  </div>
@endif

<div class="page-container">
<h5 class="center">Inscrição no evento: ({{$eventos->id}}) - {{$eventos->Titulo}}</h5>
<h6 class="center" style="border:1px;border-radius:7px;padding:10px;font-size:17px;text-align:justify;">{{$eventos->Descricao}}</h6>
<h6 class="center">Contato para dúvidas: {{$eventos->Contato}}</h6><br>
  <div class="row"> 
      <form class="col s12" method="post" action="{{route('inscricao.store')}}">
        @csrf 
        <input type="hidden" name='id_evento' value='{{$eventos->id}}'>
        <div class='row'>
          <div class="input-field col s12 m12">
            <span for='modalidade'>Modalidade</span>
            <select name='id_modalidade' id='id_modalidade' class='browser-default'>
              <option value='0' selected disabled>Escolha</option>
              @foreach ($modalidade as $tipo)
                @if ($tipo->semvaga == 0)
                <option value={{$tipo->id}}>{{$tipo->Descricao}}</option>
                @endif
              @endforeach
            </select>
          </div>
        </div>
        <div class="row">
          @if ($form->nomeCompleto == 1)
            <div class="input-field col s12 m6">
              <span for="nomeCompleto">Nome completo</span>
              <input id="nomeCompleto" name='nomeCompleto' type="text" class="validate" required>
            </div>
          @endif
          @if ($form->cpf == 1)
            <div class="input-field col s12 m6">
              <span for="cpf">CPF</span>
              <input type="number" name='cpf' id='cpf' class="validate kitweb" oninput="maxLengthCheck(this)" maxlength="11" required>
            </div>
          @endif
        </div>
        <div class="row">
          @if ($form->nomeCracha == 1)
          <div class="input-field col s12 m6">
            <span for="nomeCracha">Nome crachá</span>
            <input id="nomeCracha" name='nomeCracha' type="text" class="validate" required>
          </div>
          @endif
          @if ($form->instituicao == 1)
            <div class="input-field col s12 m6">
              <span for="instituicao">Instituição/Empresa</span>
              <input id="instituicao" name='instituicao' type="text" class="validate" required>
            </div>
          @endif
        </div>
          <div class="row">
            @if ($form->pais == 1)
            <div class="input-field col s4">
              <span for="pais">País</span>
              <select name='pais' id='pais' class='browser-default'>
                <option value='0' selected disabled>Escolha</option>
                <option value="BR">Brasil</option>
                <option value="EX">Exterior</option>
              </select>
            </div>
            @endif
            @if ($form->estado == 1)
            <div class="input-field col s4">
              <span for="UF">Estado</span>
                <select name='uf' id='uf' class='browser-default'>
                  <option value="" disabled selected>Escolha</option>
                </select>
            </div>
            @endif
            @if ($form->cidade == 1)
            <div class="input-field col s4">
                <span>Cidade</span>
                  <select name='cidade' id='cidade' class='browser-default'>                      
                    <option value="" disabled selected>Escolha</option>
                  </select>
            </div>
            @endif
          </div>
          <div class="row">
            @if ($form->telefone == 1)
            <div class="input-field col s6 m3">
              <span for="telefone">Telefone</span>
              <input type="tel" name='telefone' id='telefone' maxlength="15" onkeyup="handlePhone(event)" class="validate" required/>
            </div>
            @endif
            @if ($form->dataNascimento == 1)
            <div class="input-field col s6 m3">
              <span for="datanascimento">Data Nascimento</span>
              <input id="datanascimento" name='datanascimento' type="text" oninput="formatarData(this)" placeholder="dd/mm/aaaa" class="validate" required>
            </div>
            @endif
            @if ($form->email == 1)
            <div class="input-field col s12 m3">
              <span for="email">E-mail</span>
              <input id="email" name='email' type="email" class="validate" required>
            </div>
            @endif
            @if ($form->escolaridade == 1)
            <div class="input-field col s12 m3">
                <span for="escolaridade">Escolaridade</span>
                <select name='escolaridade' id='escolaridade' required class='browser-default'>
                <option value="" disabled selected>Escolha</option>
                <option value="1">Analfabeto</option>
                <option value="2">Ensino Fundamental Incompleto</option>
                <option value="3">Ensino Fundamental Completo</option>
                <option value="4">Ensino Médio Incompleto</option>
                <option value="5">Ensino Médio Completo</option>
                <option value="6">Superior Incompleto</option>
                <option value="7">Superior Completo</option>
                <option value="8">Mestrado</option>
                <option value="9">Doutorado</option>
                </select>
            </div>
            @endif
          </div>
          
          <div class='row'>
            <div class='input-field col s12'>
              <label class="corCheckbox">
                <input type="checkbox"  id='concordoLGPD' name='concordoLGPD' value="1"/>
                <span> Concordo que a FAPEU armazene e processe as informações pessoais enviadas a fim de subsidiar a prestação desse serviço.</span>
              </label>
            </div>
          </div><br><br><br><br>
    
        <div class='col s6'>
      <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
        </div>
        <div class="col m6 s6" style="display: flex; justify-content: flex-end">
          <button class="btn waves-effect waves-light btnlarge" type="submit" name="action">Continuar Inscrição
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
      </div>
    </div>
  </div>
      
        <script>        
          // Loading na tela para esperar 
          var $loading = $('#loading').hide();
          $(document)
            .ajaxStart(function () {
              $loading.show();
            })
            .ajaxStop(function () {
              $loading.hide();
            });

          $('#pais').on('change', function () {
            var idPais = this.value;
            $("#uf").html('<option value="" disabled selected>Escolha</option>');
            $("#cidade").html('<option value="" disabled selected>Escolha</option>');
            $.ajax({
              url: "{{url('api/estados/')}}",
              type: "post",
              data: {
                idpais: idPais,
                _token: '{{csrf_token()}}'
              },
              dataType: 'json',
              success: function (res){
                $('#uf').html('<option value="" disabled selected>Escolha</option>');
                $.each(res.estados, function (key, value) {
                  $("#uf").append('<option value="' + value
                  .Uf + '">' + value.Nome + '</option>');
                  
                });
                var elems = document.querySelectorAll('select');
                var options = {};
                var instances = M.FormSelect.init(elems, options);
              }
            });
          }
        );

                 // Abre apenas as cidades de cada estado
        $('#uf').on('change', function () {
            var idState = this.value;
            $("#cidade").html('<option value="" disabled selected>Escolha</option>');
            $.ajax({
              url: "{{url('api/municipios/')}}",
              type: "post",
              data: {
                uf: idState,
                _token: '{{csrf_token()}}'
              },
              dataType: 'json',
              success: function (res) {
                $('#cidade').html('<option value="" disabled selected>Escolha</option>');
                $.each(res.cidades, function (key, value) {
                  $("#cidade").append('<option value="' + value
                  .Nome + '">' + value.Nome + '</option>');
                  
                });
                var elems = document.querySelectorAll('select');
                var options = {};
                var instances = M.FormSelect.init(elems, options);
              }
            });
          }
        );


        document.addEventListener('DOMContentLoaded', function() {
              var elems = document.querySelectorAll('select');
              var options = {};
              var instances = M.FormSelect.init(elems, options);
          });

          //Limita o número de caractéres para o campo CPF

            function maxLengthCheck(object)
            {
                if (object.value.length > object.maxLength)
                object.value = object.value.slice(0, object.maxLength)
            }
          

          // script para mascarar o telefone '(XX) XXXXX-XXXX'
          const handlePhone = (event) => {
            let input = event.target
            input.value = phoneMask(input.value)
          }

          const phoneMask = (value) => {
            if (!value) return ""
            value = value.replace(/\D/g,'')
            value = value.replace(/(\d{2})(\d)/,"($1) $2")
            value = value.replace(/(\d)(\d{4})$/,"$1-$2")
            return value
          }

           //Formatar data
           function formatarData(input) {
            const valor = input.value.replace(/\D/g, ''); // Remove todos os caracteres que não são dígitos
            const partes = valor.match(/(\d{0,2})(\d{0,2})(\d{0,4})/);
            
            input.value = !partes[2] ? partes[1] : partes[1] + '/' + partes[2] + (partes[3] ? '/' + partes[3] : '');
        }
          </script>
@endsection