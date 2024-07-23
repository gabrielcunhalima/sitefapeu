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
<form class="col s12" method="post" action="{{route('inscricao.cad.acessibilidade')}}" enctype="multipart/form-data">
  @csrf 
    <input type="hidden" name='id_inscricao' id='id_inscricao' value='{{$dados['idinscri']}}'>
    <input type="hidden" name='viaboleto' value='{{$dados['viaboleto']}}'>
    {{-- <input type="hidden" name='evento' value='{{$dados['evento']}}'>
    <input type="hidden" name='cpf' value='{{$dados['cpf']}}'>
    <input type="hidden" name='valorInsc' value='{{$dados['valorInsc']}}'>
    <input type="hidden" name='modalidade' value='{{$dados['modalidade']}}'>
    <input type="hidden" name='gratis' value='{{$dados['gratis']}}'> --}}

    <div class='row'>
        <h4>Acessibilidade</h4><br>
        <div class="col s12">
            <div class="col s12">
                <p>
                    <label>
                        <input id="nenhuma" name='nenhuma' class="filled-in" type="checkbox" value='1'/>
                        <span class="corCheckbox">Não se aplica (nenhuma)</span>
                    </label>
                </p><br>
            </div>
        </div><br>
        <div id="formConteudo">
            <div class="col s12">
                <h5>Deficiência</h5>
                <div class="col s12">
                    <p>
                        <label>
                            <input id="auditiva" name='auditiva' class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Auditiva</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="fisica" name="fisica" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Física</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="visual" name="visual" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Visual</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="intelectual" name="intelectual" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Intelectual</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="mental" name="mental" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Mental</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="outra_def" name="outra_def" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Não listada (preencher campo abaixo)</span>
                        </label>
                    </p>
                    <p>
                        <div class="input-field col s6">
                            <span class="corCheckbox">Qual?</span>
                            <input id="qual_def" name="qual_def" type="text" class="validate">
                        </div>
                    </p>
                </div>
            </div>
            <div class="col s12">
                <h5>Necessidades especiais</h5>
                <div class="col s6">
                    <p>
                        <label>
                            <input id="acompanhante" name="acompanhante" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Acompanhante</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="andador" name="andador" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Andador</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="cadeirarodas" name="cadeirarodas" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Cadeira de rodas</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="caoguia" name="caoguia" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Cão guia</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="leituraorofacial" name="leituraorofacial" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Leitura Orofacial</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="muleta" name="muleta" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Muleta</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="outra_neces" name="outra_neces" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Outra necessidade (preencher campo abaixo)</span>
                        </label>
                    </p><br>
                </div>
                <div class="col s4">
                    <p>
                        <label>
                            <input id="audiodescricao" name="audiodescricao" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Áudio descrição</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="legenda" name="legenda" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Legenda em tempo real</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="libras" name="libras" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">LIBRAS</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="lugarcadeirante" name="lugarcadeirante" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Lugar cadeirante</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="lugarcaoguia" name="lugarcaoguia" class="filled-in" type="checkbox" value='1'/>
                            <span class="corCheckbox">Lugar cão guia</span>
                        </label>
                    </p>
                    <br>
                </div>
            </div>
            <p>
                <div class="input-field col s6">
                    <span class="corCheckbox">Qual?</span>
                    <input id="qual_neces" name="qual_neces" type="text" class="validate">
                </div>
            </p>
        </div>
    </div>
    <div class="row">
        <div class='col s6 m6'>
        <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
            </div>
        <div class='col s6 m6' style="display: flex; justify-content: flex-end">
            <button class="btn waves-effect waves-light btnlarge" type="submit" name="action">Continuar Inscrição
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('nenhuma').onchange = function() {
                var formConteudo = document.getElementById('formConteudo');
                if (this.checked) {
                    formConteudo.style.display = 'none';
                } else {
                    formConteudo.style.display = 'block';
                }
            };
        });
    </script>
@endsection