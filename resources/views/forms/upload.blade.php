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
<form class="col s12" method="post" action="{{route('inscricao.upload')}}" enctype="multipart/form-data">
  @csrf 
    <input type="hidden" name='id_inscricao' id='id_inscricao' value='{{$dados['idinscri']}}'>
    <input type="hidden" name='viaboleto' value='{{$dados['viaboleto']}}'>
    {{-- <input type="hidden" name='evento' value='{{$dados['evento']}}'>
    <input type="hidden" name='cpf' value='{{$dados['cpf']}}'>
    <input type="hidden" name='valorInsc' value='{{$dados['valorInsc']}}'>
    <input type="hidden" name='gratis' value='{{$dados['gratis']}}'>
    <input type="hidden" name='modalidade' value='{{$dados['modalidade']}}'> --}}
    <div class="row">
        @if ($dados['aceitaUpload'] == '1')
            <div class="col s6">
                <h5>Submissão de Artigo</h5>
                <div class='input-field col s6'>
                    <span>Selecione o documento</span>
                    <div class='custom-file'>
                        <input type="file" class="custom-file-input" name="arquivo" id="input_arquivo">
                        <label class="custom-file-label" for="input_arquivo"></label>
                    </div>
                </div>
            </div>
        @endif
        @if ($dados['exigeComprovante'] == '1')
            <div class="col s6">
                <h5>Comprovante Exigido</h5>
                <div class='input-field col s12'>
                    <span>Selecione o documento</span>
                    <div class='custom-file'>
                        <input type="file" class="custom-file-input" name="comprovante" id="input_comprovante">
                        <label class="custom-file-label" for="input_comprovante"></label>
                    </div>
                </div>
            </div>
        @endif
    </div><br><br>
    <button class="btn waves-effect waves-light btnlarge" type="submit" name="action">Continuar Inscrição
      <i class="material-icons right">send</i>
    </button>
</form>
@endsection