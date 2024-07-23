<?php

namespace App\Http\Controllers;

use App\Exports\BoletoExport;
use App\Models\Eventos;
use App\Models\Inscricao;
use Illuminate\Http\Request;

use File;

use Carbon\Carbon;
use Eduardokum\LaravelBoleto\Boleto\Pessoa;
use Eduardokum\LaravelBoleto\Boleto\Banco\Itau;
use Eduardokum\LaravelBoleto\Boleto;
use Eduardokum\LaravelBoleto\Cnab\Retorno\Factory;
use Maatwebsite\Excel\Facades\Excel;

class BoletoController extends Controller
{
    public function upload() {
        return view('admin.financeiro.uploadretorno');
    }
    public function index() {       
        return redirect()->route('admin.index');
    }

    public function retorno(Request $req) {
        $pathexp = $req->all();
        $path = $pathexp['fileexport'];

        $argument = [];
        $file = fopen($path,"r");

        while (!feof($file)) {
            if ($linha = fgets($file)) {
                $argument[] = $linha;
            }
        }
       

        $return = \Eduardokum\LaravelBoleto\Cnab\Retorno\Factory::make($argument);

        // To process the file
        // You can know the type of bank after instantiate, using the methods respectively:
        $return->getTipo();
        $return->getCodigoBanco();

        $return = $return->getDetalhes()->toArray();
        $dados = [];
        foreach ($return as $item) {
            if ($item->numeroDocumento[0] == '5') { //ALTERAR
                $numInsc = substr($item->numeroDocumento,1);
                $dados_inscricao = Inscricao::where('id',$numInsc)->first();

                $idEvento = $dados_inscricao->id_evento;
                $dados_evento = Eventos::where('id',$idEvento)->first();
              
                $dados_push = [
                    'NumProjeto'        => "$dados_evento->IDProjeto",
                    'numconta'          => '935-3',
                    'CPFCNPJ'           => $dados_inscricao->cpf,  
                    'Nome'              => $dados_inscricao->nomeCompleto,
                    'Valor'             => $item->valor,
                    'Rubrica'           => $dados_evento->IDProjeto . $dados_evento->IDRubrica . $dados_evento->IDSubRubrica, //idprojeto + rubrica + subrubrica
                    'Complemento'       => 'CREDITO REFERENTE A RECEBIMENTO DO BOLETO BANCARIO No ' . $item->numeroControle,
                    'Data'              => $item->dataCredito,
                    'Operacao'          => '1',
                    'IDLancamentoPlan'  => $item->dataCredito .'-'.$numInsc,
                    'CodEvento'         => "$idEvento",
                    'IDRubrica'         => $dados_evento->IDRubrica,
                    'Subrubrica'        => $dados_evento->IDSubRubrica,
                ];
                array_push($dados,$dados_push);
                $dados_push = [
                    'NumProjeto'        => "$dados_evento->IDProjeto",
                    'numconta'          => '935-3',
                    'CPFCNPJ'           => $dados_inscricao->cpf,  
                    'Nome'              => $dados_inscricao->nomeCompleto,
                    'Valor'             => $item->valorTarifa,
                    'Rubrica'           => $dados_evento->IDProjeto . $dados_evento->IDRubrica . $dados_evento->IDSubRubrica, //idprojeto + rubrica + subrubrica
                    'Complemento'       => 'PAGTO REFERENTE A TARIFA BANCARIA SOBRE RECEBIMENTO DO BOLETO BANCARIO No  ' . $item->numeroControle,
                    'Data'              => $item->dataCredito,
                    'Operacao'          => '2',
                    'IDLancamentoPlan'  => $item->dataCredito .'-'.$numInsc,
                    'CodEvento'         => "$idEvento",
                    'IDRubrica'         => $dados_evento->IDRubrica,
                    'Subrubrica'        => $dados_evento->IDSubRubrica,
                ];
                array_push($dados,$dados_push);
            }
        }
        
        $export = new BoletoExport($dados);
        $data = Carbon::now();
        
        //dd($export);
        return Excel::download($export, 'BOLETOS_ITAU_'.$data.'.xlsx');        
    }

    public function carrega(Request $req) {
        if (empty($_POST)) {
            $titulo = 'Arquivo não encontrato';
            $msg = 'Selecione corretamente o arquivo e envie novamente.';
            $cor = 'red';
            return view('custom.msg',compact('msg','titulo','cor'));
        }

        if($req->hasFile('file_retorno')) {
            $filenameWithExt = $req->file('file_retorno')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $req->file('file_retorno')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $req->file('file_retorno')->storeAs('/upload_retorno', $fileNameToStore);
        } else {
            $titulo = 'Arquivo não encontrato';
            $msg = 'Selecione corretamente o arquivo e envie novamente.';
            $cor = 'red';
            return view('custom.msg',compact('msg','titulo','cor'));
        }

        $argument = [];
        

        $path = storage_path() . "/app/" . $path;

        $path = preg_replace("~\/~", "\\", $path);
    
        $file = fopen($path,"r");

        while (!feof($file)) {
            if ($linha = fgets($file)) {
                $argument[] = $linha;
            }
        }
       
        $return = \Eduardokum\LaravelBoleto\Cnab\Retorno\Factory::make($argument);


    
        // To process the file
        // You can know the type of bank after instantiate, using the methods respectively:
        $return->getTipo();
        $return->getCodigoBanco();

        $return = $return->getDetalhes()->toArray();
        $dados = [];
        foreach ($return as $item) {
            if ($item->numeroDocumento[0] == '5') {
            
                $numInsc = substr($item->numeroDocumento,1);
                $dados_inscricao = Inscricao::where('id',$numInsc)->update([
                                                                            'StatusPagamento'   => '1',
                                                                            'ArqRetorno'        => $filenameWithExt,
                                                                            'valorPago'         => $item->valor,
                                                                            ]);
                $dados_inscricao = Inscricao::where('id',$numInsc)->first();
                
                $idEvento = $dados_inscricao->id_evento;
                $dados_evento = Eventos::where('id',$idEvento)->first();

               //dd($item);


              
                $dados_push = [
                    'NumProjeto'        => "$dados_evento->IDProjeto",
                    'numconta'          => '935-3',
                    'CPFCNPJ'           => $dados_inscricao->cpf,  
                    'Nome'              => $dados_inscricao->nomeCompleto,
                    'Valor'             => $item->valor,
                    'Rubrica'           => $dados_evento->IDProjeto . $dados_evento->IDRubrica . $dados_evento->IDSubRubrica, //idprojeto + rubrica + subrubrica
                    'Complemento'       => 'CREDITO REFERENTE A RECEBIMENTO DO BOLETO BANCARIO No ' . $item->numeroControle,
                    'Data'              => $item->dataCredito,
                    'Operacao'          => '1',
                    'IDLancamentoPlan'  => $item->dataCredito .'-'.$numInsc,
                    'CodEvento'         => "$idEvento",
                ];
                array_push($dados,$dados_push);
                $dados_push = [
                    'NumProjeto'        => "$dados_evento->IDProjeto",
                    'numconta'          => '935-3',
                    'CPFCNPJ'           => $dados_inscricao->cpf,  
                    'Nome'              => $dados_inscricao->nomeCompleto,
                    'Valor'             => $item->valorTarifa,
                    'Rubrica'           => $dados_evento->IDProjeto . $dados_evento->IDRubrica . $dados_evento->IDSubRubrica, //idprojeto + rubrica + subrubrica
                    'Complemento'       => 'PAGTO REFERENTE A TARIFA BANCARIA SOBRE RECEBIMENTO DO BOLETO BANCARIO No  ' . $item->numeroControle,
                    'Data'              => $item->dataCredito,
                    'Operacao'          => '2',
                    'IDLancamentoPlan'  => $item->dataCredito .'-'.$numInsc,
                    'CodEvento'         => "$idEvento",
                ];
                array_push($dados,$dados_push);
            }

        }
        $quantidade = count($dados);
        //dd($quantidade);

        return view('admin.financeiro.listaretorno',compact('dados','path','quantidade'));
    }
}
