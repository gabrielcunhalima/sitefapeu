@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] DASHBOARD ADMINISTRADOR')
<div class="row">
    @php
        $dataInicio = date('d/m/Y H:i',strtotime($evento->dataInicioEvento));
        $dataFinal = date('d/m/Y H:i',strtotime($evento->dataFinalEvento));

        $inicioInsc = date('d/m/Y H:i',strtotime($evento_config->dataInicioInscricao));
        $prazoInsc = date('d/m/Y H:i',strtotime($evento_config->VencimentoPagamento));
    @endphp
@section('conteudo')
    <h5 class='center'>Informações do Evento: <b>({{$evento->id}}) {{$evento->Titulo}}</b></h5>
        <div class='row green lighten-3' style="border-color: #FFF;border-radius: 10px;">
            <div class='col s12 m12'>
                <h5><b>Dados Gerais</b></h5>
            </div>
            <div class='col s12 m12'>
                <p>Título:  <br><b>{{$evento->Titulo}}</b></p>
            </div>
            <div class='col s12 m12'>
                <p>Descrição:  <br><b>{{$evento->Descricao}}</b></p>
            </div>
            <div class='col s12 m12'>
                <p>Local:  <br><b>{{$evento->Local}}</b></p>
            </div>
            <div class='col s3 m3'>
                <p>Código Projeto:  <br><b>{{$evento->IDProjeto}}</b></p>
            </div>
            <div class='col s3 m3'>
                <p>Contato:  <br><b>{{$evento->Contato}}</b></p>
            </div>
            <div class='col s3 m3'>
                <p>Data Inicio:  <br><b>{{$dataInicio}}</b></p>
            </div>
            <div class='col s3 m3'>
                <p>Data Fim:  <br><b>{{$dataFinal}}</b></p>
            </div>
        </div>
    <div class='row green lighten-3' style="border-color: #FFF;border-radius: 10px;">
        <div class='col s12 m12'>
        <h5><b>Configurações do Evento</b></h5>
        </div>
        <div class='col m4 s4'>
            <p>Controle de Vagas por Modalidade: <br><b> {{$evento_config->ControleVagasModalidade == 1 ? 'SIM' : 'NÃO'}} </b></p>
        </div>
        <div class='col m4 s4'>
            <p>Controle de Vagas Geral: <br><b> {{$evento_config->ControleVagasGeral == 1 ? 'SIM' : 'NÃO'}} </b></p>
        </div>
        <div class='col m4 s4'>
            <p>SEM Controle de Vagas <br><b> {{(($evento_config->ControleVagasGeral == 0) AND ($evento_config->ControleVagasModalidade == 0)) ? 'SIM' : 'NÃO'}} </b></p>
        </div>

        <div class='col m4 s4'>
            <p>Pagamento em Boleto: <br><b> {{$evento_config->PagamentoBoleto == 1 ? 'SIM' : 'NÃO'}} </b></p>
        </div>
        <div class='col m4 s4'>
            <p>Pagamento em PIX: <br><b> {{$evento_config->PagamentoPIX == 1 ? 'SIM' : 'NÃO'}} </b></p>
        </div>
        <div class='col m4 s4'>
            <p>Pagamento em Cartão: <br><b> {{$evento_config->Cartao == 1 ? 'SIM' : 'NÃO'}} </b></p>
        </div>
        <div class='col s4 m4'>
            <p>Abertura das Inscrições: <br><b>{{$inicioInsc}} </b></p>
        </div>
        <div class='col s4 m4'>
            <p>Prazo para Inscrição: <br><b>{{$prazoInsc}} </b></p>
        </div>
        <div class='col s4 m4'>
            <p>Quantidade de Parcelas Permitidas: <br><b>{{$evento_config->QuantidadeParcelas}} </b></p>
        </div>
        <div class='col s12 m12'>
            <p>Exibir evento na página da fapeu: <br><b> {{$evento_config->ExibirEvento == 1 ? 'SIM' : 'NÃO'}} </b></p>
        </div>
    </div>
    <div class='row green lighten-3' style="border-color: #FFF;border-radius: 9px;">
        <div class='col s12 m12'>
            <h5><b>Vagas</b></h5><br>
        </div>
        <div class='row'>
            <div class='col s3 m3' style="margin-left:10px;">
                <b>Modalidade</b>
            </div>
            <div class='col s3 m3'>
                <b>Quantidade</b>
            </div>
            <div class='col s3 m3'>
                <b>Exige Comprovante</b>
            </div>
            <div class='col s2 m2'>
                <b>Aceita Submissão</b>
            </div>
        </div>        
        @foreach ($evento_vagas as $vaga)
            <div class='row'>
                <div class='col s3 m3' style="margin-left:10px;">
                    {{$vaga->Descricao}}
                </div>
                <div class='col s3 m3'>
                    {{($vaga->quantidade == '-1') ? 'SEM QUANTIDADE' : $vaga->quantidade}}
                </div>
                <div class='col s3 m3'>
                    {{($vaga->exigeComprovante == 1) ? 'SIM' : 'NÃO'}}
                </div>
                <div class='col s2 m2'>
                    {{($vaga->aceitaSubmissao == 1) ? 'SIM' : 'NÃO'}}
                </div>

            </div>        
        @endforeach
    </div>
    <div class='row green lighten-3' style="border-color: #FFF;border-radius: 9px;">
        <div class='col s12 m12'>
            <h5><b>Lotes</b></h5><br>
        </div>
        <div class='row'>
            <div class='col s2 m2' style="margin-left:10px;">
                <b>Modalidade</b>
            </div>
            <div class='col s2 m2'>
                <b>Inicio</b>
            </div>
            <div class='col s2 m2'>
                <b>Fim</b>
            </div>
            <div class='col s2 m2'>
                <b>Valor</b>
            </div>
            <div class='col s2 m2'>
                <b>Quantidade</b>
            </div>
        </div> 
        @foreach ($evento_lote as $lote)
        @php
            $InicioLote = date('d/m/Y H:i',strtotime($lote->InicioLote));
            $fimLote = date('d/m/Y H:i',strtotime($lote->FimLote));
        @endphp
            <div class='row'>
                <div class='col s2 m2' style="margin-left:10px;">
                    {{$lote->MDesc}}
                </div>
                <div class='col s2 m2'>
                    {{$InicioLote}}
                </div>
                <div class='col s2 m2'>
                    {{$fimLote}}
                </div>
                <div class='col s2 m2'>
                    @php echo "R$ " . number_format($lote->valor,2,",","."); @endphp
                </div>
                <div class='col s2 m2'>
                    {{($lote->quantidade == '-1') ? 'SEM QUANTIDADE' : $lote->quantidade}}
                </div>
            </div>       
        @endforeach
    </div>

    <div class='row green lighten-3' style="border-color: #FFF;border-radius: 9px;">
    <div class='col s12 m12'>
            <h5><b>Cupons</b></h5><br>
        </div>
        <div class='row'>
            <div class='col s2 m2' style="margin-left:10px;">
                <b>Código</b>
            </div>
            <div class='col s2 m2'>
                <b>Forma Pagamento</b>
            </div>
            <div class='col s2 m2'>
                <b>Inicio</b>
            </div>
            <div class='col s2 m2'>
                <b>Fim</b>
            </div>
            <div class='col s1 m1'>
                <b>Quantidade</b>
            </div>
            <div class='col s2 m2'>
                <b>Desconto</b>
            </div>
        </div> 
        @foreach ($evento_cupom as $cupom)
        @php
            $Iniciocupom = date('d/m/Y',strtotime($cupom->dataInicio));
            $fimcupom = date('d/m/Y',strtotime($cupom->dataFim));
        @endphp
            <div class='row'>
                <div class='col s2 m2' style="margin-left:10px;">
                    {{$cupom->CodigoCupom}}
                </div>
                <div class='col s2 m2'>
                    {{$cupom->PDesc}}
                </div>
                <div class='col s2 m2'>
                    {{$Iniciocupom}}
                </div>
                <div class='col s2 m2'>
                    {{$fimcupom}}
                </div>
                <div class='col s1 m1'>
                    {{($cupom->quantidade == '-1') ? 'SEM QUANTIDADE' : $cupom->quantidade}}
                </div>
                <div class='col s2 m2'>
                    {{$cupom->porcentagem . '%'}} 
                </div>
            </div>       
        @endforeach
    </div>
    
    <div class='row'>
        <div class="col s6">
            <a href='{{route('admin.lista.pendente')}}' class="waves-effect waves-light btn blue">VOLTAR</a>
        </div>
        <div class="col s3">
            <a href='{{url('admin/aprovar/'. $evento->id)}}' class="waves-effect waves-light btn green">APROVAR EVENTO</a>
        </div>
        <div class="col s3">
            <a href='{{url('admin/rejeitar/'. $evento->id)}}' class="waves-effect waves-light btn red">REJEITAR EVENTO</a>
        </div>
    </div>
</div>
@endsection


