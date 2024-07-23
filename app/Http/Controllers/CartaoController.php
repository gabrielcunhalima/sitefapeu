<?php

namespace App\Http\Controllers;

use App\Exports\BoletoExport;
use App\Models\Eventos;
use App\Models\Eventos_lote;
use App\Models\Inscricao;
use Illuminate\Http\Request;

use File;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class CartaoController extends Controller
{
    public function index() {       
        return redirect()->route('admin.index');
    }

    public function form() {
        return view('admin.financeiro.retornocartao');
    }

    public function carrega(Request $req) {

        $dataCorte = $req->all();
        $dataCorte = $dataCorte['dataCorte'];
        $busca = Inscricao::whereRaw('authorization_timestamp < "' . $dataCorte . '" AND UsuarioRespBaixa is Null AND (id_formapagamento > 2)' )->get();


        $dados = [];

        foreach ($busca as $item) {
            $numInsc = $item->id;
            $dados_inscricao = Inscricao::where('id',$numInsc)->first();

            
            $idEvento = $dados_inscricao->id_evento;
            $dados_evento = Eventos::where('id',$idEvento)->first();

            $valor = $item->valorPago;

            $dataOcorrencia = Carbon::parse($dados_inscricao->transaction_timestamp);
            $dataOcorrencia = $dataOcorrencia->isoFormat('DD/MM/YYYY');

            $dados_push = [
                'NumProjeto'        => "$dados_evento->IDProjeto",
                'numconta'          => "935-3",
                'CPFCNPJ'           => $dados_inscricao->cpf,  
                'Nome'              => $dados_inscricao->nomeCompleto,
                'Valor'             => $dados_inscricao->ValorPagar,
                'Rubrica'           => $dados_evento->IDProjeto . $dados_evento->IDRubrica . $dados_evento->IDSubRubrica, //idprojeto + rubrica + subrubrica
                'Complemento'       => 'CREDITO REFERENTE A RECEBIMENTO DO CARTÃO No INSCRIÇÃO ' . $numInsc,
                'Data'              => '',
                'Operacao'          => '1',
                'IDLancamentoPlan'  => $dataOcorrencia .'-'.$numInsc,
                'CodEvento'         => "$idEvento",
                'qtdParcelas'       => $item->qtdParcelas,
            ];
            array_push($dados,$dados_push);
            //tarifa
            // $dados_push = [
            //     'NumProjeto'        => "$dados_evento->IDProjeto",
            //     'numconta'          => $dados_evento->NumConta,
            //     'CPFCNPJ'           => $dados_inscricao->cpf,  
            //     'Nome'              => $dados_inscricao->nomeCompleto,
            //     'Valor'             => $item->valorTarifa,
            //     'Rubrica'           => $dados_evento->IDProjeto . $dados_evento->IDRubrica . $dados_evento->IDSubRubrica, //idprojeto + rubrica + subrubrica
            //     'Complemento'       => 'PAGTO REFERENTE A TARIFA BANCARIA SOBRE RECEBIMENTO DO BOLETO BANCARIO No  ' . $item->numeroControle,
            //     'Data'              => $item->dataOcorrencia,
            //     'Operacao'          => '2',
            //     'IDLancamentoPlan'  => $item->dataOcorrencia .'-'.$numInsc,
            //     'CodEvento'         => "$idEvento",
            // ];
            //array_push($dados,$dados_push);
        }


        $quantidade = count($dados);
        $dataCorteParse = Carbon::parse($dataCorte);
        $dataCorteParse = $dataCorteParse->isoFormat('DD/MM/YYYY');

        return view('admin.financeiro.listaretornocartao',compact('dados','quantidade','dataCorte','dataCorteParse'));

    }

    public function retorno(Request $req) {
        $dados = Auth::user();

        $respBaixa = $dados->nome . '-' . $dados->cpf;

        $dados = [];

        $dataCorte = $req->all();
        $dataCorte = $dataCorte['dataCorte'];
        $busca = Inscricao::whereRaw('authorization_timestamp < "' . $dataCorte . '" AND UsuarioRespBaixa is Null AND (id_formapagamento > 2)' )->get();


        $dados = [];
        foreach ($busca as $item) {
            $numInsc = $item->id;
            $dados_inscricao = Inscricao::where('id',$numInsc)->first();

            
            $idEvento = $dados_inscricao->id_evento;
            $dados_evento = Eventos::where('id',$idEvento)->first();
            
            $valor = $dados_inscricao->ValorPagar;

            $dataOcorrencia = Carbon::parse($dados_inscricao->transaction_timestamp);
            $dataOcorrencia = $dataOcorrencia->isoFormat('DD/MM/YYYY');
            
            Inscricao::where('id',$numInsc)->update([
                                                        'UsuarioRespBaixa'  => $respBaixa,
                                                        'ArqRetorno'        => Carbon::now().'-'.$numInsc,
                                                    ]);


            $parcelas = $item->qtdParcelas;
            $valorParcela = $valor/$parcelas;
            for($i = 1; $i <= $parcelas;$i++) {
                $dados_push = [
                    'NumProjeto'        => "$dados_evento->IDProjeto",
                    'numconta'          => $dados_evento->NumConta,
                    'CPFCNPJ'           => $dados_inscricao->cpf,  
                    'Nome'              => $dados_inscricao->nomeCompleto,
                    'Valor'             => $valorParcela,
                    'Rubrica'           => $dados_evento->IDProjeto . $dados_evento->IDRubrica . $dados_evento->IDSubRubrica, //idprojeto + rubrica + subrubrica
                    'Complemento'       => 'CREDITO REFERENTE A PARCELA '.$i.'/'.$parcelas.' DO CARTÃO No INSCRIÇÃO ' . $numInsc,
                    'Data'              => $dataOcorrencia,
                    'Operacao'          => '1',
                    'IDLancamentoPlan'  => $dataOcorrencia.'-'.$numInsc.'-'.$i.'/'.$parcelas,
                    'CodEvento'         => "$idEvento",
                    'IDRubrica'         => $dados_evento->IDRubrica,
                    'Subrubrica'        => $dados_evento->IDSubRubrica,
                ];
                array_push($dados,$dados_push);
            }
            //tarifa
            // $dados_push = [
            //     'NumProjeto'        => "$dados_evento->IDProjeto",
            //     'numconta'          => $dados_evento->NumConta,
            //     'CPFCNPJ'           => $dados_inscricao->cpf,  
            //     'Nome'              => $dados_inscricao->nomeCompleto,
            //     'Valor'             => $item->valorTarifa,
            //     'Rubrica'           => $dados_evento->IDProjeto . $dados_evento->IDRubrica . $dados_evento->IDSubRubrica, //idprojeto + rubrica + subrubrica
            //     'Complemento'       => 'PAGTO REFERENTE A TARIFA BANCARIA SOBRE RECEBIMENTO DO BOLETO BANCARIO No  ' . $item->numeroControle,
            //     'Data'              => $item->dataOcorrencia,
            //     'Operacao'          => '2',
            //     'IDLancamentoPlan'  => $item->dataOcorrencia .'-'.$numInsc,
            //     'CodEvento'         => "$idEvento",
            // ];
            //array_push($dados,$dados_push);
        }


        $quantidade = count($dados);
        $export = new BoletoExport($dados);
        $data = Carbon::now();

        //dd($export);
        return Excel::download($export, 'CARTAO_'.$data.'.xlsx');        
    }
}
