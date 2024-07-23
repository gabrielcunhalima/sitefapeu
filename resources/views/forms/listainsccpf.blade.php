@extends('layout.headerlista')
@section('css','../../css/app.css')
@section('title','[FAPEU] DASHBOARD ADMINISTRADOR')

@section('conteudo')

<div class='row'>
        <div class="col s12 m12">
            <h5>Total de <b>{{count($lista)}}</b> inscrições pelo CPF: {{$cpf}}</h5>
        @if (count($lista) > 0)
            <h5>Nome Completo: {{$lista[0]->nomeCompleto}}</h5>
            <table class="responsive-table">
                <thead>
                    <tr>
                        <th>Num. Insc.</th>
                        <th>Titulo</th>
                        <th>Modalidade</th>
                        <th>Status</th>
                        <th>2a Via</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $insc)
                    @if ($insc->StatusPagamento > 0) 
                    <tr class='green'>
                    @else
                    <tr class='red'>
                    @endif
                        <td>{{$insc->id}}</td>
                        <td>{{$insc->Titulo}}</td>
                        <td>{{$insc->MDesc}}</td>
                        <td><center>
                            @if ($insc->StatusPagamento > 0) 
                                <i class="material-icons">check</i>
                            @else
                                <i class="material-icons">cancel</i>
                            @endif
                            </center>
                        </td>
                        <td>     
                            @if ($insc->StatusPagamento > 0)              
                                <a class="btn waves-effect waves-light yellow darken-4" href='{{url('/boleto/gerar/'.$insc->id)}}' DISABLED>Gerar Boleto</a>
                            @else
                                <a class="btn waves-effect waves-light yellow darken-4" href='{{url('/boleto/gerar/'.$insc->id)}}'>Gerar Boleto</a>
                            @endif
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
</div>
<div class='row center' style="margin-top:150px;min-height:240px;">
    <div class='col s12 m12'>
        <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
    </div>
</div>



@endsection