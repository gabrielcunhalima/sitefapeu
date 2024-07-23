@extends('layout.headerlista')
@section('css','../../css/app.css')
@section('title','[FAPEU] DASHBOARD ADMINISTRADOR')

@section('conteudo')
<div class='center'>
    <h3 class='center'>Lista Inscritos - Evento [{{$idevento}}]</h3>
    <h6 class='center'>Total Inscritos: {{count($lista)}}</h6>
    <div class="row"> 
        <div class="col s12 m12">
            <table class="responsive-table">
                <thead>
                    <tr>
                        <th>Insc.</th>
                        <th>Nome Completo</th>
                        <th>CPF</th>
                        <th>E-Mail</th>
                        <th>Telefone</th>
                        <th>Nome Crachá</th>
                        <th>Modalidade</th>
                        {{-- <th>Data Nascimento</th> --}}
                        <th>Instituição</th>
                        {{-- <th>Cidade</th>
                        <th>UF</th>
                        <th>País</th> --}}
                        <th>Acessibilidade</th>
                        <th>Status</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $insc)
                    @php
                        $dtNasc = date('d/m/Y',strtotime($insc->datanascimento));
                    @endphp
                    @if ($insc->StatusPagamento > 0) 
                    <tr class='green'>
                    @else
                    <tr class='red'>
                    @endif
                        <td>{{$insc->id}}</td>
                        <td>{{$insc->nomeCompleto}}</td>
                        <td>{{$insc->cpf}}</td>
                        <td>{{$insc->email}}</td>
                        <td>{{$insc->telefone}}</td>
                        <td>{{$insc->nomeCracha}}</td>
                        <td>{{$insc->MDesc}}</td>
                        {{-- <td>{{$dtNasc}}</td> --}}
                        <td>{{$insc->instituicao}}</td>
                        {{-- <td>{{$insc->cidade}}</td>
                        <td>{{$insc->uf}}</td>
                        <td>{{$insc->pais}}</td> --}}
                        <td><center>
                            @if ($insc->id_acess > 0)
                                    <a class="btn waves-effect waves-light yellow black-text" href='{{url('/admin/listainscritos/detalhes/'. $insc->id_acess)}}'><i class="bi bi-person-wheelchair"></i></a>
                            @endif
                        </center>
                        </td>
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
                                <a class="btn waves-effect waves-light green" href='{{url('inscricao/confirmar/'. $insc->id)}}' disabled>CONFIRMAR</a>
                            @else
                                <a class="btn waves-effect waves-light green" href='{{url('inscricao/confirmar/'. $insc->id)}}'>CONFIRMAR</a>
                            @endif
                        
                        </td>
                        <td><center>
                            @if ($insc->StatusPagamento > 0) 
                                <a class="btn waves-effect waves-light RED" href='{{url('inscricao/remover/'. $insc->id)}}' disabled>REMOVER</a>
                            @else
                                <a class="btn waves-effect waves-light RED" href='{{url('inscricao/remover/'. $insc->id)}}'>REMOVER</a>
                            @endif
                            </center>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table><br>
        </div>
    </div>
</div>
<div class='row center'>
    <div class='col s4 m4 offset-s4 offset-m4'>
        <a href='{{url('inscritos/'.$idevento)}}' class="btn btn-primary btn-block">EXPORTAR PLANILHA</a>
    </div>
</div>
<div class='row center'>
    <div class='col s12 m12'>
        <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
    </div>
</div>

@endsection