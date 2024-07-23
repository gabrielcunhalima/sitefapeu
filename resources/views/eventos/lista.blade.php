@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] - Lista de eventos disponíveis')

@section('conteudo')
<div class='row'>
    <div class='col offset-m5'>
        <a  class='btn right medium waves-effect waves-light deep-purple darken-4' href="{{route('consulta.inscricao')}}">CONSULTAR INSCRIÇÃO</a> 
    </div>
</div>
<div class="row">
    <div class='col s12 m12'>
        <form action="{{route('eventos.lista')}}">
            <div class="input-field col s12 m12">
                <span for='modalidade'>Pesquisar por título: </span>
                <input type="text" name='titulo' id='titulo' value='{{$busca}}'>
            </div>
            <div class="input-field col s12 m12">  
                    <button type='submit' class='btn right medium waves-effect waves-light blue'>PESQUISAR</button> 
                    {{-- <a  href='{{route('eventos.lista')}}' class='btn right medium waves-effect waves-light yellow black-text'>limpar</a> --}}
            </div>
        </form> 
    </div>
        <h3 class='center'>Lista de eventos disponíveis</h3>
                    @foreach ($eventos as $evento)
        @php
            if (($hoje > $evento->dataInicioInscricao) AND ($hoje < $evento->VencimentoPagamento)) {
                $aberto = "enabled";
            } else {
                $aberto = "disabled";
            }
            $dataInicio = date('d/m/Y',strtotime($evento->dataInicioEvento));
            $dataFinal = date('d/m/Y',strtotime($evento->dataFinalEvento));
            
            $inicioInsc = date('d/m/Y H:i',strtotime($evento->dataInicioInscricao));
            $fimInsc = date('d/m/Y H:i',strtotime($evento->VencimentoPagamento));
            $strMapa = 'https://www.google.com/maps/search/' . $evento->Local;
            if ($evento->imgCapa != '') {
                $path = $evento->imgCapa;
                $path = '../capas/' . $path;
                $pathimg = preg_replace("~\/~", "\\", $path);
            } else {
                $pathimg = 'https://i.imgur.com/koeU9fp.png';
            }
        @endphp

        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                <img src="{{$pathimg}}" height="100px" class='responsive'>
                {{-- <span class="card-title" style='text-shadow: 0px 0px 4px rgba(0,0,0,1);'>{{$evento->Titulo}}</span> --}}
            </div>
            <div class="card-content">
                    <p>
                        <center><a class="btn medium waves-effect waves-light green" href='{{url('inscrever_evento/'. $evento->id)}}' {{$aberto}}>Inscreva-se</a></center>
                    </p><br>
                    <p class='center'><b>{{$evento->Titulo}}</b></p>
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <p class='center'>Inscrições: <br><b>{{$inicioInsc}}</b> <br>até <br><b>{{$fimInsc}}</b></p> 
                            </div>
                        </div>
                    
                        @if ($evento->EventoOnline == 1) <p><a href='{{$evento->Local}}' target='_blank'><i class="bi bi-link-45deg"></i> Acesse o site</a></p>  
                        @elseif ($evento->Local != '') <p><a href='{{$strMapa}}' target='_blank'><i class="material-icons">place</i> {{$evento->Local}}</a></p>
                        @endif
                    <p><i class="material-icons">date_range</i><b> {{$dataInicio}}</b> a <b> {{$dataFinal}}</b></p>
                    <p>{{Str::limit($evento->Descricao,100)}}</p>
                    <p>Contato: {{$evento->Contato}}</p>
                    @if ($evento->instagram != "") <a href='{{$evento->instagram}}'><i class="bi bi-instagram"></i></a>  @endif 
                    @if ($evento->twitter != "")  <a href='{{$evento->twitter}}'><i class="bi bi-twitter-x"></i></a>  @endif 
                    @if ($evento->youtube != "")  <a href='{{$evento->youtube}}'><i class="bi bi-youtube"></i></a>  @endif 
                    @if ($evento->tiktok != "")  <a href='{{$evento->tiktok}}'><i class="bi bi-tiktok"></i></a>  @endif
                    <p><a class="right teal lighten-4 black-text btn-small waves-effect waves-light">{{$evento->CatDesc}}</a></p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>

    <div class='row center'>
        {{$eventos->links('custom.pagination')}}
    </div>

@endsection