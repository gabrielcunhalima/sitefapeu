@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] DASHBOARD ADMINISTRADOR')
<div class='row'>
@section('conteudo')
    <h3 class='center'>Meus Eventos</h3>
    <div>
    @foreach ($eventos as $evento)
        @php
            $dataInicio = date('d/m/Y',strtotime($evento->dataInicioEvento));
            $dataFinal = date('d/m/Y',strtotime($evento->dataFinalEvento));

            $path = $evento->imgCapa;
            $path = '/capas/' . $path;
            $pathimg = preg_replace("~\/~", "\\", $path);
        @endphp
        
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                <img src="{{url($pathimg)}}" height="100px" class='responsive'>
                </div>
                <div class="card-content">
                    <p>
                        <a class="btn-floating waves-effect waves-light green" href='{{url('admin/listainscritos/'. $evento->id)}}'><i class="material-icons">person</i></a>
                        <a class="btn-floating waves-effect waves-light green" href='{{url('eventos/editar/'. $evento->id)}}'><i class="material-icons">edit</i></a>  
                        <a class="btn-floating waves-effect waves-light green" href='{{url('inscrever_evento/'. $evento->id)}}'><i class="material-icons">home</i></a>  
                        @if (isset($linkAprovar))
                            <a class="btn-floating waves-effect waves-light  orange darken-4" href='{{url('admin/avaliar/'. $evento->id)}}'><i class="material-icons">done</i></a> 
                        @endif
                    </p><br>
                    <div class='row'>
                        @if ($evento->Aprovado == '-1')
                            <h6 class='center red'><b>EVENTO NÃO APROVADO</b></h6>
                        @elseif ($evento->Aprovado == '1')
                            <h6 class='center green'><b>EVENTO APROVADO</b></h6>
                        @else
                            <h6 class='center blue'><b>EVENTO NÃO AVALIADO</b></h6>
                        @endif
                    </div>
                    <p>[{{$evento->id}}] </p>
                    <p>{{$evento->Titulo}}</p>
                    <p><i class="material-icons">place</i> {{$evento->Local}}</p>
                    <p><i class="material-icons">date_range</i><b> {{$dataInicio}}</b> a <b> {{$dataFinal}}</b></p>
                    <p>{{Str::limit($evento->Descricao,40)}}</p>

                    <p><a class="right green btn-small waves-effect waves-light">{{$evento->CatDesc}}</a></p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
<div class="row" >
    <div class='col s12 center'style="margin-top:70px;">
        <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
    </div>
</div>
@endsection