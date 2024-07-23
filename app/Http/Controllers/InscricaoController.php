<?php

namespace App\Http\Controllers;

use App\Exports\InscritosExport;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Municipios;
use App\Models\Estados;
use App\Models\Eventos;
use App\Models\Inscricao;
use App\Models\Eventos_lote;
use App\Models\Eventos_config;
use App\Models\Eventos_cupom;
use App\Models\Eventos_form;
use App\Models\eventos_vaga;
use App\Models\Formapagamento;
use App\Models\Inscricao_acessibilidade;
use App\Models\Inscricao_deletadas;
use App\Models\Modalidade;
use Getnet\API\AuthorizeResponse;
use Getnet\API\Card;
use Getnet\API\Credit;
use Getnet\API\Customer;
use Getnet\API\Environment;
use Getnet\API\Getnet;
use Getnet\API\PixTransaction;
use Getnet\API\Transaction;
use Getnet\API\Order;
use Getnet\API\Token;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Log;

class InscricaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $eventos = Eventos::where('id',$id)->first();
        return view('forms.inscricao',compact('eventos'));
    }

    public function form($id)
    {
        $eventos = Eventos::where('id',$id)->first();
        $config = Eventos_config::where('id_evento',$id)->first();
        $estados = Estados::all();

        
        if (empty($eventos)) {
            $titulo = 'ATENÇÃO';
            $msg = 'Esse evento não existe.';
            $cor = 'red';
            return view('forms.msg',compact('msg','titulo','cor'));
        }
        
        if ($eventos->Aprovado == 0) {
            $titulo = 'ATENÇÃO';
            $msg = 'Esse evento ainda não foi aprovado.';
            $cor = 'red';
            return view('forms.msg',compact('msg','titulo','cor'));
        }
        
        $hoje = Carbon::Now();
        if ($hoje < $config->dataInicioInscricao) {
            $titulo = 'Inscrições ainda não estão abertas.';
            $msg = 'As inscrições para o evento selecionado ainda não começaram';
            $cor = 'blue';
            return view('forms.msg',compact('msg','titulo','cor'));
        }
        if ($hoje > $config->VencimentoPagamento) {
            $titulo = 'Inscrições Encerradas.';
            $msg = 'As inscrições para o evento selecionado já foram encerradas.';
            $cor = 'orange';
            return view('forms.msg',compact('msg','titulo','cor'));
        }
        $tipoPagamento = '0';
        if ($config['PagamentoBoleto'] == '1') {
            if (Str::length($tipoPagamento) >= 1) {
                $tipoPagamento = $tipoPagamento . ',';
            }
            $tipoPagamento = $tipoPagamento . '1';
        }
        if ($config['PagamentoPIX'] == '1') {
            if (Str::length($tipoPagamento) >= 1) {
                $tipoPagamento = $tipoPagamento . ',';
            }
            $tipoPagamento = $tipoPagamento . '2';
        }
        if ($config['PagamentoCartao'] == '1') {
            if (Str::length($tipoPagamento) >= 1) {
                $tipoPagamento = $tipoPagamento . ',';
            }
            $tipoPagamento = $tipoPagamento . '3';
        }
        $formapagamentos = Formapagamento::whereRaw('id in (' . $tipoPagamento . ')')->get();
        $vagas = eventos_vaga::whereRaw('id_evento = '. $id)->get();
        $idmodalidade = '';
        foreach ($vagas as $vaga) {
            if (Str::length($idmodalidade) >= 1) {
                $idmodalidade = $idmodalidade . ",";
            } 
            $idmodalidade = $idmodalidade . $vaga->id_modalidade;       
        }
        $modalidade = Modalidade::whereRaw('id in (' . $idmodalidade .')')->get();

        if ($config['ControleVagasGeral'] == '1') {
            $tipocontrole = 1;   
        } elseif ($config['ControleVagasModalidade'] == '1') {
            $tipocontrole = 2;
        } else {
            $tipocontrole = 0;
        }
        if ($tipocontrole == '1') {
            if (!$this->checkVagas($id,$tipocontrole,'0')) {
                $titulo = 'Vagas encerradas.';
                $msg = 'As vagas da atividades já foram preenchidas.';
                $cor = 'red';
                return view('forms.msg',compact('msg','titulo','cor'));
            }
        }
        
        $totalModsSemVaga = 0;
        if ($tipocontrole == '2') {
            for($i = 0;$i<count($modalidade);$i++) {
                if(!$this->checkVagas($id,$tipocontrole,$modalidade[$i]->id)) {
                    $modalidade[$i]['semvaga'] = '1';
                    $totalModsSemVaga++;
                } else {
                    $modalidade[$i]['semvaga'] = '0';
                }
            }
        }

        if (count($modalidade) == $totalModsSemVaga) {
            $titulo = 'Vagas encerradas.';
                $msg = 'As vagas da atividades já foram preenchidas.';
                $cor = 'red';
                return view('forms.msg',compact('msg','titulo','cor'));
        }       

        $form = Eventos_form::where('id_evento',$id)->first();

        return view('forms.inscricao',compact('eventos','formapagamentos','modalidade','vagas','estados','form'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        date_default_timezone_set('America/Sao_Paulo');
        //$request->validate();

        if (!isset($request->concordoLGPD)) {
            $titulo = 'Formulário incompleto.';
            $msg = 'Você precisa aceitar a autorização de coleta de dados.';
            $cor = 'red';
            return view('forms.msg',compact('msg','titulo','cor'));
        }

        $info = $request->all();

        $info['nomeCompleto'] = strtoupper($info['nomeCompleto']);
        $info['nomeCracha'] = strtoupper($info['nomeCracha']);
        $info['instituicao'] = strtoupper($info['instituicao']);

        $erroform = $this->validaForm($info);

        if ($erroform == 1) {
            $titulo = 'Formulário incompleto.';
            $msg = 'Preencha todos os campos obrigatórios.';
            $cor = 'orange';
            return view('forms.msg',compact('msg','titulo','cor'));
        }
    

        $evento = $info['id_evento'];
        $modalidade = $info['id_modalidade'];
        // $formapagamento = $info['id_formapagamento'];
        $getCpf = $info['cpf'];

        $config = Eventos_config::where('id_evento',$evento)->first();
         //controle de vagas ainda aberta
         $hoje = Carbon::Now();
         if ($hoje < $config->dataInicioInscricao) {
             $titulo = 'Inscrições ainda não estão abertas.';
             $msg = 'As inscrições para o evento selecionado ainda não começaram';
             $cor = 'blue';
             return view('forms.msg',compact('msg','titulo','cor'));
         }
         if ($hoje > $config->VencimentoPagamento) {
             $titulo = 'Inscrições Encerradas.';
             $msg = 'As inscrições para o evento selecionado já foram encerradas.';
             $cor = 'orange';
             return view('forms.msg',compact('msg','titulo','cor'));
         }
        

        if ($config['ControleVagasGeral'] == '1') {
            $tipocontrole = 1;   
        } elseif ($config['ControleVagasModalidade'] == '1') {
            $tipocontrole = 2;
        } else {
            $tipocontrole = 0;
        }
            
        //checa lote e pegar o valor da inscrição.
        $idloteAtual = '-1';
        
        if ($this->getLote($evento,$modalidade) != '-1') {
            $dadosLote = $this->getLote($evento,$modalidade);
            $idloteAtual = $dadosLote['id'];
            $valorInsc = $dadosLote['valor'];
        } else {
            $titulo = 'Atenção';
            $msg = 'As vagas pra modalidade selecionada ainda não estão aberto.';
            $cor = 'orange';
            return view('forms.msg',compact('msg','titulo','cor'));
        }

     
        //CONTROLE DE VAGAS
        if ($this->checkVagas($evento,$tipocontrole,$modalidade)) {
            //CONTROLE DUPLICIDADE CPF
            if ($this->checkCPF($getCpf,$evento,$modalidade) == 0) {
                $dadosinsc = Inscricao::firstOrCreate($request->all());
                $msg = '';
                Inscricao::where('id',$dadosinsc->id)->update(['id_lote' => $idloteAtual]);
                $dadosinsc = Inscricao::where('id',$dadosinsc->id)->first();
                $viaboleto = '01';
                $dadosLote = $this->getDadosLote($dadosinsc->id_lote);
                $valorInsc = $dadosLote['valor'];
            } else {
                //pegar dados do lote inscrito                
                $dadosinsc = Inscricao::whereRaw('id_evento = ' . $evento . ' AND id_modalidade = ' .$modalidade . ' AND cpf = ' . $getCpf )->first(); 
                $dadosLote = $this->getDadosLote($dadosinsc->id_lote);
                $valorInsc = $dadosLote['valor'];
                $viaboleto = '02';
            }
            $this->enviarEmailAguardandoPgto($dadosinsc->id);
            Inscricao::where('id',$dadosinsc->id)->update(['ValorPagar' => $valorInsc]);

            $eventos = Eventos::where('id',$evento)->first();
            $config = Eventos_config::where('id_evento',$evento)->first();

            $tipoPagamento = '0';
            if ($valorInsc < 0) {
                Inscricao::where('id',$dadosinsc->id)
                    ->update([
                        'StatusPagamento'                       => '1',
                    ]);
                $this->enviarEmailConfirmacao($dadosinsc->id);
            } 

            if ($config['PagamentoBoleto'] == '1') {
                if (Str::length($tipoPagamento) >= 1) {
                    $tipoPagamento = $tipoPagamento . ',';
                }
                $tipoPagamento = $tipoPagamento . '1';
            }
            if ($config['PagamentoPIX'] == '1') {
                if (Str::length($tipoPagamento) >= 1) {
                    $tipoPagamento = $tipoPagamento . ',';
                }
                $tipoPagamento = $tipoPagamento . '2';
            }
            if ($config['PagamentoCartao'] == '1') {
                if (Str::length($tipoPagamento) >= 1) {
                    $tipoPagamento = $tipoPagamento . ',';
                }
                $tipoPagamento = $tipoPagamento . '3';
            }
            $formapagamentos = Formapagamento::whereRaw('id in (' . $tipoPagamento . ')')->get();

            $dados = [
                'evento'        => $evento,
                'modalidade'    => $modalidade,
                'cpf'           => $getCpf,
                'valorInsc'     => $valorInsc,
                'idinscri'      => $dadosinsc->id,
                'viaboleto'     => $viaboleto,
            ];

            return view('forms.acessibilidade',compact('dados','eventos'));
        } else {
            $titulo = 'Vagas encerradas';
            $msg = 'Não há vaga disponível para o evento selecionado.';
            $cor = 'red';
            return view('forms.msg',compact('msg','titulo','cor'));
        }
        
    }            

    public function cadastraAcessibilidade(Request $req) {
        $dados = $req->all();
        unset($dados['evento']);
        unset($dados['cpf']);
        unset($dados['valorInsc']);
        unset($dados['modalidade']);
        unset($dados['viaboleto']);

        $infoinsc = Inscricao::select(  'inscricao.id as id_inscricao',
                                    'inscricao.id_evento as evento',
                                    'cpf',
                                    'inscricao.ValorPagar as valorInsc',
                                    'inscricao.id_modalidade as modalidade',
                                    'inscricao.Cupom')
                            ->leftJoin('eventos_lote','eventos_lote.id','=','inscricao.id_lote')
                            ->where('inscricao.id',$dados['id_inscricao'])->first();


        $erroform = $this->validaFormAcessibilidade($dados);

        if ($erroform == 1) {
            $titulo = 'Formulário incompleto.';
            $msg = 'Preencha todos os campos obrigatórios.';
            $cor = 'orange';
            return view('forms.msg',compact('msg','titulo','cor'));
        }
        
        $check = Inscricao_acessibilidade::where('id_inscricao',$dados['id_inscricao'])->get();

        if (!array_key_exists('nenhuma',$dados)) {
            if (count($check) > 0) {
                $query = Inscricao_acessibilidade::where('id_inscricao',$dados['id_inscricao'])->update($dados);
            } else {
                $query = Inscricao_acessibilidade::firstOrCreate($dados);
            }    
        }

        //carrega upload
        $mostraCupom = 1;
        $inscricao = Inscricao::where('id',$req->id_inscricao)->first();

        $get = eventos_vaga::whereRaw('id_evento = ' . $infoinsc->evento . ' AND id_modalidade = ' . $infoinsc->modalidade)->first();
        $aceitaUpload = $get->aceitaSubmissao;
        $exigeComprovante = $get->exigeComprovante;
        $statuspagamento = $inscricao->StatusPagamento;

        if (($aceitaUpload == '1') || ($exigeComprovante == '1')) {
            $dados = [
                'evento'            => $infoinsc->evento,
                'modalidade'        => $infoinsc->modalidade,
                'cpf'               => $infoinsc->cpf,
                'valorInsc'         => $infoinsc->valorInsc,
                'idinscri'          => $infoinsc->id_inscricao,
                'viaboleto'         => $req->viaboleto,
                //'gratis'            => $req->gratis,
                'aceitaUpload'      => $aceitaUpload,
                'exigeComprovante'  => $exigeComprovante,
                'Cupom'             => $infoinsc->Cupom,
            ];
            $eventos = Eventos::where('id',$infoinsc->evento)->first();

            return view('forms.upload',compact('dados','eventos'));
        } else {
            //carrega pagamento
            $dados = [
                'evento'        => $infoinsc->evento,
                'modalidade'    => $infoinsc->modalidade,
                'cpf'           => $infoinsc->cpf,
                'valorInsc'     => $infoinsc->valorInsc,
                'idinscri'      => $infoinsc->id_inscricao,
                'viaboleto'     => $req->viaboleto,
                // 'gratis'        => $req->gratis,
                'Cupom'         => $infoinsc->Cupom,
            ];
            $eventos = Eventos::where('id',$infoinsc->evento)->first();
            $config = Eventos_config::where('id_evento',$infoinsc->evento)->first();

                $tipoPagamento = '0';
                if ($infoinsc->valorInsc < 0) {
                    $gratis = '1';
                } else {
                    $gratis = '0';
                }

                if ($config['PagamentoBoleto'] == '1') {
                    $tipoPagamento = $tipoPagamento . '1';
                }
                if ($config['PagamentoPIX'] == '1') {
                    if (Str::length($tipoPagamento) >= 1) {
                        $tipoPagamento = $tipoPagamento . ',';
                    }
                    $tipoPagamento = $tipoPagamento . '2';
                }
                if ($config['PagamentoCartao'] == '1') {
                    if (Str::length($tipoPagamento) >= 1) {
                        $tipoPagamento = $tipoPagamento . ',';
                    }
                    $tipoPagamento = $tipoPagamento . '3';
                }
                if ($infoinsc->Cupom == '') {
                    $formapagamentos = Formapagamento::whereRaw('id in (' . $tipoPagamento . ')')->get();
                } else {
                    $cupom = Eventos_cupom::where('CodigoCupom',$infoinsc->Cupom)->first();
                    $formapagamentos = Formapagamento::whereRaw('id in (' . $cupom['id_formapagamento'] . ')')->get();
                }

                if ($gratis) {
                    $titulo = 'Inscrição Realizada.';
                    $msg = 'Sua inscrição foi finalizada com sucesso.';
                    $cor = 'green';
                    return view('forms.msg',compact('msg','titulo','cor'));
                } else {
                    return view('forms.pagamento',compact('dados','eventos','config','formapagamentos','mostraCupom','statuspagamento'));
                }

        }
        
    }

    public function upload(Request $req) {
        $dados = $req->all();
        $infoinsc = Inscricao::select(  'inscricao.id as id_inscricao',
                                        'inscricao.id_evento as evento',
                                        'cpf',
                                        'inscricao.ValorPagar as valorInsc',
                                        'inscricao.id_modalidade as modalidade',
                                        'inscricao.Cupom')
        ->leftJoin('eventos_lote','eventos_lote.id','=','inscricao.id_lote')
        ->where('inscricao.id',$dados['id_inscricao'])->first();

        $evento = $infoinsc->evento;
        $idinscricao = $infoinsc->id_inscricao;

        if($req->hasFile('comprovante')) {

            $file = $req->file('comprovante');

            $filenameWithExt = $req->file('comprovante')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $req->file('comprovante')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $destinationPath = public_path('/comprovantes/'.$evento.'/'. $idinscricao);

            $file->move($destinationPath,$fileNameToStore);
    
            $info['comprovante'] = $fileNameToStore;

            $update = Inscricao::where('id',$req->id_inscricao)->update(['comprovante' => $info['comprovante']]);
        
        } 

        if($req->hasFile('arquivo')) {
            
            $file = $req->file('arquivo');

            $filenameWithExt = $req->file('arquivo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $req->file('arquivo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $destinationPath = public_path('/arquivos/'.$evento.'/'. $idinscricao);

            $file->move($destinationPath,$fileNameToStore);
            $info['arquivo'] = $fileNameToStore;
            
            $update = Inscricao::where('id',$req->id_inscricao)->update(['arquivoSubmissao' => $info['arquivo']]);
        }

        //carrega dados para pagamento
        $mostraCupom = '1';
        $dados = [
            'evento'        => $infoinsc->evento,
            'modalidade'    => $infoinsc->modalidade,
            'cpf'           => $infoinsc->cpf,
            'valorInsc'     => $infoinsc->valorInsc,
            'idinscri'      => $req->id_inscricao,
            'viaboleto'     => $req->viaboleto,
            // 'gratis'        => $req->gratis,
            'Cupom'         => $infoinsc->Cupom,
        ];

        $eventos = Eventos::where('id',$infoinsc->evento)->first();
        $config = Eventos_config::where('id_evento',$infoinsc->evento)->first();
        $inscricao = Inscricao::where('id',$req->id_inscricao)->first();
        $statuspagamento = $inscricao->StatusPagamento;


        $tipoPagamento = '0';
        if ($infoinsc->valorInsc < 0) {
            $gratis = '1';
        } else {
            $gratis = '0';
        }


            if ($config['PagamentoBoleto'] == '1') {
                if (Str::length($tipoPagamento) >= 1) {
                    $tipoPagamento = $tipoPagamento . ',';
                }
                $tipoPagamento = $tipoPagamento . '1';
            }
            if ($config['PagamentoPIX'] == '1') {
                if (Str::length($tipoPagamento) >= 1) {
                    $tipoPagamento = $tipoPagamento . ',';
                }
                $tipoPagamento = $tipoPagamento . '2';
            }
            if ($config['PagamentoCartao'] == '1') {
                if (Str::length($tipoPagamento) >= 1) {
                    $tipoPagamento = $tipoPagamento . ',';
                }
                $tipoPagamento = $tipoPagamento . '3';
            }
            
            if ($infoinsc->Cupom == '') {
                $formapagamentos = Formapagamento::whereRaw('id in (' . $tipoPagamento . ')')->get();
            } else {
                $cupom = Eventos_cupom::where('CodigoCupom',$infoinsc->Cupom)->first();
                $formapagamentos = Formapagamento::whereRaw('id in (' . $cupom['id_formapagamento'] . ')')->get();
            }

            if ($gratis) {
                $titulo = 'Inscrição Realizada.';
                $msg = 'Sua inscrição foi finalizada com sucesso.';
                $cor = 'green';
                return view('forms.msg',compact('msg','titulo','cor'));
            } else {
                return view('forms.pagamento',compact('dados','eventos','config','formapagamentos','mostraCupom','statuspagamento'));
            }

    }

    public function carregarCupom(Request $req) {

        $dados = $req->all();
        
        $infoinsc = Inscricao::select(  'inscricao.id as id_inscricao',
        'inscricao.id_evento as evento',
        'cpf',
        'inscricao.ValorPagar as valorInsc',
        'inscricao.id_modalidade as modalidade',
        'inscricao.Cupom')
            ->leftJoin('eventos_lote','eventos_lote.id','=','inscricao.id_lote')
            ->where('inscricao.id',$dados['id_inscricao'])->first();

        $mostraCupom = '0';

        $hoje = Carbon::Now();

        $cupom = Eventos_cupom::where('CodigoCupom',$req->cupom)
                            ->where('id_evento',$infoinsc->evento)
                            ->where('dataInicio','<',$hoje)
                            ->where('dataFim','>',$hoje)->first();

         //carrega dados para pagamento
        if (empty($cupom)) {

            $titulo = 'Cupom Inválido ou Expirado.';
            $msg = 'Informe novamente o cupom.';
            $cor = 'orange';
            return view('forms.msg',compact('msg','titulo','cor'));

        }

        $totalJaUsado = Inscricao::where('Cupom',$req->cupom)
                        ->where('id',$dados['id_inscricao'])->get();
        $totalJaUsado = count($totalJaUsado);

        if (($totalJaUsado >= $cupom->quantidade) and ($cupom->quantidade != "-1")) {
            $titulo = 'Cupom esgotado.';
            $msg = 'Já foi atingida a quantidade limite para uso do cupom informado';
            $cor = 'orange';
            return view('forms.msg',compact('msg','titulo','cor'));
        }


        if ($infoinsc->Cupom == '') {
            $valorDesconto = $infoinsc->valorInsc * ($cupom['porcentagem']/100);
        } else {
            $valorDesconto = 0;
        }

        $dados = [
            'evento'        => $infoinsc->evento,
            'modalidade'    => $infoinsc->modalidade,
            'cpf'           => $infoinsc->cpf,
            'valorInsc'     => $infoinsc->valorInsc - $valorDesconto,
            'idinscri'      => $infoinsc->id_inscricao,
            'viaboleto'     => $req->viaboleto,
            // 'gratis'        => $req->gratis,
            'Desconto'      => $valorDesconto,
            'Cupom'         => $infoinsc->Cupom,
        ];
        Inscricao::where('id',$dados['idinscri'])->update(['ValorPagar' => $dados['valorInsc']]);       
        $eventos = Eventos::where('id',$infoinsc->evento)->first();
        $config = Eventos_config::where('id_evento',$infoinsc->evento)->first();
        $inscricao = Inscricao::where('id',$req->id_inscricao)->first();
        $statuspagamento = $inscricao->StatusPagamento;
                
        if ($dados['valorInsc'] == '0') {
            Inscricao::where('id',$req->idinscri)
                ->update([
                    'StatusPagamento'                       => '1',
                ]);
        }
        $formapagamentos = Formapagamento::whereRaw('id in (' . $cupom['id_formapagamento'] . ')')->get();

        $addcupom = Inscricao::where('id',$dados['idinscri'])->update(['Cupom' => $cupom['CodigoCupom']]);
        
        return view('forms.pagamento',compact('dados','eventos','config','formapagamentos','mostraCupom','statuspagamento'));

    }


    public function selectPagamento(Request $req) {
        
        $dados = $req->all();

        $infoinsc = Inscricao::select(  'inscricao.id as id_inscricao',
                                        'inscricao.id_evento as evento',
                                        'cpf',
                                        'inscricao.ValorPagar as valorInsc',
                                        'inscricao.id_modalidade as modalidade',
                                        'inscricao.Cupom')
            ->leftJoin('eventos_lote','eventos_lote.id','=','inscricao.id_lote')
            ->where('inscricao.id',$dados['id_inscricao'])->first();

        $dados['id_inscricao'] = $infoinsc->id_inscricao;

        if (!array_key_exists('id_formapagamento',$dados)) {
            $titulo = 'Selecione a forma de pagamento.';
            $msg = '';
            $cor = 'orange';
            return view('forms.msg',compact('msg','titulo','cor'));
        }

        $insc = Inscricao::where('id',$dados['id_inscricao'])->update([
                                                                'id_formapagamento' => $dados['id_formapagamento'],
        ]);

        $idevento = $infoinsc->evento;
        $modalidade = $infoinsc->modalidade;
        $cpf = $infoinsc->cpf;

        $dadosinsc = Inscricao::whereRaw('id_evento = ' . $idevento . ' AND id_modalidade = ' .$modalidade . ' AND cpf = ' . $cpf )->first(); 

        $dadosLote = $this->getDadosLote($dadosinsc->id_lote);
        $valorInsc = $dadosinsc['ValorPagar'];
    
        $viaboleto = $dados['viaboleto'];

        $formapagamento = $dados['id_formapagamento'];

        $codsessao = $dados['codsessao'];
        
        $evento = Eventos::where('id',$idevento)->first();
        $evento_config = Eventos_config::where('id_evento',$idevento)->first();
        

        if ($formapagamento == '1') { //BOLETO OK
            $nomeCompleto = $dadosinsc->nomeCompleto . "    [Num.Evento: " . $idevento . "]";
            $nossoNumero = substr($dadosinsc->id, -8);

            $nossoNumero = str_pad($nossoNumero,7,0,STR_PAD_LEFT);
            $nossoNumero = '5' . $nossoNumero;

            $itaucripto = new \Itaucripto\Itaucripto();
            $itaucripto->setCompanyCode($_ENV['SHOPLINE_COMPANY_CODE']);
            $itaucripto->setEncryptionKey($_ENV['SHOPLINE_ENCRIPTION_KEY']);
            $itaucripto->setOrderNumber($nossoNumero); //NUM INSCRICAO
            $itaucripto->setAmount(number_format($valorInsc,2,',','.')); //VALOR
            $itaucripto->setDraweeName($nomeCompleto); //NOME + evento
            $itaucripto->setDraweeDocTypeCode($viaboleto); //??
            $itaucripto->setDraweeDocNumber($dadosinsc->cpf); //CPF
            $itaucripto->setDraweeAddress('Sem Endereco'); //END
            $itaucripto->setDraweeAddressDistrict('Sem Bairro'); // BAIRRO
            $itaucripto->setDraweeAddressCity($dadosinsc->cidade); //CIDADE
            $itaucripto->setDraweeAddressState($dadosinsc->uf); //UF
            $itaucripto->setDraweeAddressZipCode('88035972'); //CEP
            // $itaucripto->setCallbackUrl('http://www.domain.com/callback');
            $itaucripto->setBankSlipDueDate(date('dmY', strtotime('+7 day'))); //VENCIMENTO
            $itaucripto->setBankSlipNoteLine1('Sr. Caixa,');
            $itaucripto->setBankSlipNoteLine2('Não receber após o vencimento.');
            $itaucripto->setBankSlipNoteLine3('Obrigado.');
            $itaucripto->setNote('3'); // Needed to display the three lines on the bank slip
    
            $dados = $itaucripto->generateData();

    
            return view('pagamento.itau',compact('dados','dadosinsc','evento'))->with('ok','segundavia');

        } else if ($formapagamento == '2') { //pix ok
            
            // $client_id = $_ENV['GETNET_CLIENT_ID'];
            // $seller_id = $_ENV['GETNET_SELLER_ID'];
            // $client_secret = $_ENV['GETNET_CLIENT_SECRET'];

            // $environment = Environment::homolog();
            // $keySession = null;

            // //dd(function_exists('curl_init'));

            // $nossoNumero = substr($dadosinsc->id, -8);

            // $nossoNumero = str_pad($nossoNumero,7,0,STR_PAD_LEFT);
            // $nossoNumero = '5' . $nossoNumero;

            // $getnet = new Getnet($client_id,$client_secret,$environment,$keySession);

            
            // $getnet->setSellerId($seller_id);
            
            // $transaction = new PixTransaction($valorInsc);
            // $transaction->setCurrency("BRL");
            // $transaction->setOrderId($nossoNumero);
            // $transaction->setCustomerId($nossoNumero);
            
            // $response = $getnet->pix($transaction);
            // $cod_qrcode = $response->getQrCode();
            // $expQrcode = Carbon::parse($response->getExpirationDateQrcode());

            // $expQrcode = $expQrcode->isoFormat('DD/MM/YY HH:mm:ss');
            // $transID = $response->getTransactionId();
            // $paymentID = $response->getPaymentId();

            // Inscricao::where('id',$dadosinsc->id)->update(['transaction_id' => $transID,
            //                                                 'payment_id' => $paymentID]);

            // //RENDER QRCODE
            // $qrcode = [];
            // $qrcode['simple'] = QrCode::size(150)->generate($cod_qrcode);
            // Log::info('Lançamento emitido PIX ' . $dadosinsc->id);
            // dd($transaction,$response,$getnet->getPixExpirationTime());
            //return view('pagamento.pixapi',compact('cod_qrcode','dados','response','qrcode','expQrcode','transID'));

            $qry = Eventos_config::where('id_evento',$infoinsc['evento'])->first();
         
            $dados['client_id'] = $_ENV['GETNET_CLIENT_ID'];
            $dados['seller_id'] = $_ENV['GETNET_SELLER_ID'];
            $dados['client_secret'] = $_ENV['GETNET_CLIENT_SECRET'];

            $environment = Environment::production();
            $keySession = null;
            $dados['token'] = new Getnet($dados['client_id'],$dados['client_secret'],$environment,$keySession);

            $dados['authtoken'] = $dados['token']->getAuthorizationToken();
            $dados['valorInsc'] = $valorInsc;
            Log::info('Lançamento emitido Iframe - PIX ' . $dadosinsc->id);
            return view('pagamento.pix',compact('dados','dadosLote','codsessao','dadosinsc','infoinsc'));
            
        } else { //cartao
            //API NOSSA
            // Log::info('Lançamento emitido API ' . $dadosinsc->id);
            //return view('pagamento.cartaoAPI',compact('dados','dadosLote','codsessao','dadosinsc','infoinsc','evento_config'));
            
            //CHECKOUT GETNET

            $qry = Eventos_config::where('id_evento',$infoinsc['evento'])->first();
            
            if ($qry['QuantidadeParcelas'] == '') {
                $dados['qtParcs'] = 1;
            } else {
                $dados['qtParcs'] = $qry['QuantidadeParcelas'];
            }

            $dados['client_id'] = $_ENV['GETNET_CLIENT_ID'];
            $dados['seller_id'] = $_ENV['GETNET_SELLER_ID'];
            $dados['client_secret'] = $_ENV['GETNET_CLIENT_SECRET'];

            $environment = Environment::production();
            $keySession = null;
            $dados['token'] = new Getnet($dados['client_id'],$dados['client_secret'],$environment,$keySession,$dados['seller_id']);

            $dados['authtoken'] = $dados['token']->getAuthorizationToken();
            
            $dados['valorInsc'] = $valorInsc;
            

            Log::info('Lançamento emitido Iframe ' . $dadosinsc->id);
            return view('pagamento.cartao',compact('dados','dadosLote','codsessao','dadosinsc','infoinsc'));

        } 
    }
    
    //NOSSA API
    public function pagamentoCartao(Request $req) {

        $client_id = $_ENV['GETNET_CLIENT_ID'];
        $seller_id = $_ENV['GETNET_SELLER_ID'];
        $client_secret = $_ENV['GETNET_CLIENT_SECRET'];
        
        
        $dados = $req->all();
        $infoinsc = Inscricao::select(  'inscricao.id as id_inscricao',
                                        'inscricao.id_evento as evento',
                                        'cpf',
                                        'inscricao.ValorPagar as valorInsc',
                                        'inscricao.id_modalidade as modalidade',
                                        'inscricao.Cupom')
                                ->leftJoin('eventos_lote','eventos_lote.id','=','inscricao.id_lote')
                                ->where('inscricao.id',$dados['id_inscricao'])->first();
        
        
        $mesVal = $dados['mesValidadeCartao'];
        $anoVal = $dados['anoValidadeCartao'];

        // dd($req->all());

        $evento = $infoinsc['evento'];
        $customer_cpf = $infoinsc['cpf'];
        $valorInsc = $dados['valorInsc'];
        $idinscri = $infoinsc['id_inscricao'];
        $codsessao = $dados['codsessao'];
        $numParcelas = $dados['numParcelas'];

        $dadosinsc = Inscricao::where('id',$idinscri)->first();

        $client_ip = $this->getClientIP();

        // dd($dadosinsc);

        $trataName = explode(" ",$dadosinsc->nomeCompleto);
        $firstName = $trataName[0];
        $lastName = end($trataName);

        $trataFone = preg_replace("/[\-\(\)( )]+/","", $dadosinsc->telefone);
        

        $environment = Environment::homolog();

        $keySession = null;

        // $getnet = new Getnet($client_id,$client_secret,$environment,$keySession);
        $getnet = new Getnet($client_id,$client_secret,$environment,$keySession);

     
        $transaction = new Transaction();
        // Dados do pedido - Transação

        $transaction->setSellerId($seller_id);
        $transaction->setCurrency("BRL");
        $transaction->setAmount($valorInsc);//  $valorInsc

        if (!$this->validaCC($req->numCartao)) {
            $titulo = 'CARTÃO INVÁLIDO';
            $msg = 'Digite corretamente o número do cartão de crédito.';
            $cor = 'red';
            return view('forms.msg',compact('msg','titulo','cor'));
        }

        // Gera token do cartão
        $tokenCard = new Token(str_replace(" ", "",$req->numCartao), $customer_cpf, $getnet);

        // Dados do método de pagamento do comprador
        if ($numParcelas > 1) {
            $transaction->credit()
                        ->setAuthenticated(false)
                        ->setDynamicMcc("1799")
                        ->setSoftDescriptor("INSC*EVENTO*".$evento)
                        ->setDelayed(false)
                        ->setPreAuthorization(false)
                        ->setNumberInstallments($numParcelas)
                        ->setSaveCardData(false)
                        ->setTransactionType(Credit::TRANSACTION_TYPE_INSTALL_NO_INTEREST)
                        ->card($tokenCard)
                            ->setBrand(Card::BRAND_MASTERCARD)
                            ->setExpirationMonth($mesVal)
                            ->setExpirationYear($anoVal)
                            ->setCardholderName($req->nomeCartao)
                            ->setSecurityCode($req->cvvCartao);
                            
        } else {
            $transaction->credit()
                                    ->setAuthenticated(false)
                                    ->setDynamicMcc("1799")
                                    ->setSoftDescriptor("INSC*EVENTO*".$evento)
                                    ->setDelayed(false)
                                    ->setPreAuthorization(false)
                                    ->setNumberInstallments($numParcelas)
                                    ->setSaveCardData(false)
                                    ->setTransactionType(Credit::TRANSACTION_TYPE_FULL)
                                    ->setCredentialsOnFileType(Credit::COF_ONE_CLICK_PAYMENT)
                                    ->card($tokenCard)
                                        ->setBrand(Card::BRAND_MASTERCARD)
                                        ->setExpirationMonth($mesVal)
                                        ->setExpirationYear($anoVal)
                                        ->setCardholderName($req->nomeCartao)
                                        ->setSecurityCode($req->cvvCartao);
        }
                    
                        
        // Dados pessoais do comprador
        $transaction->customer($customer_cpf)
                    ->setDocumentType(Customer::DOCUMENT_TYPE_CPF)
                    ->setEmail($dadosinsc->email)
                    ->setFirstName($firstName)
                    ->setLastName($lastName)
                    ->setName($dadosinsc->nomeCompleto)
                    ->setPhoneNumber("55". $trataFone)
                    ->setDocumentNumber($customer_cpf)
                    ->billingAddress()
                        ->setCity("Florianopolis")
                        ->setComplement("fapeu")
                        ->setCountry("Brasil")
                        ->setDistrict("Trindade")
                        ->setNumber("01")
                        ->setPostalCode("88035972")
                        ->setState("Santa Catarina")
                        ->setStreet("Rua Delfino Conti");

        //Ou pode adicionar entrega com os mesmos dados do customer
        $transaction->addShippingByCustomer($transaction->getCustomer())->setShippingAmount(0);

        // FingerPrint - Antifraude
        
        // $transaction->device($codsessao)->setIpAddress('150.162.78.96');

        $transaction->device('device_id')->setIpAddress('127.0.0.1');

        // Detalhes do Pedido
        $transaction->order($idinscri)
        ->setProductType(Order::PRODUCT_TYPE_SERVICE)
        ->setSalesTax(0);

        // Processa a Transação

        $response = $getnet->authorize($transaction);
        
        // Resultado da transação - Consultar tabela abaixo
        $response->getStatus();
        $response->getPaymentId();
        // $response->getAuthorizationCode();
        // $response->getOrderId();
        // $response->getAcquirerTransactionId();
        // $response->getReasonCode();
        // $response->getReasonMessage();

        // dd($transaction,$response);

        if ($response->getStatus() == 'APPROVED')     {
            Inscricao::where('id',$infoinsc['id_inscricao'])->update(['transaction_id' => $response->getAcquirerTransactionId(),
                                                                        'payment_id' => $response->getPaymentId()]);
        }   

        // dd($response,$transaction);
        return view('pagamento.confirmacartaoAPI',compact('response'));
        //PAGINA DE CONFIRMACAO
    }

    public function checkQtdInscLote($idlote) {


        $total = Inscricao::where('id_lote',$idlote)->get();
        $total = count($total);

        return $total;
    }

    public function checkCPF(string $cpf,int $idevento,int $idmodalidade) {
        $totalCPF = Inscricao::whereRaw('id_evento = '.$idevento . ' AND id_modalidade = ' .$idmodalidade . ' AND cpf = '.$cpf)->get();
        $totalCPF = count($totalCPF);
        return $totalCPF;
    }

    public function checkVagas(int $idevento,int $tipocontrole,int $idmodalidade = 0) {
        if ($tipocontrole == 1) { //GERAL
            $totalvagas = eventos::where('id',$idevento)->first();
            $totalvagas = $totalvagas['TotalVagasGeral'];
            $totalinsc = Inscricao::whereRaw('id_evento = '.$idevento)->get();
            $totalinsc = count($totalinsc);

            if ($totalvagas > $totalinsc) {
                $rtn = true;
            } else {
                $rtn = false;
            }
        } elseif ($tipocontrole == 2) { //MODALIDADE
            $totalvagas = eventos_vaga::whereRaw('id_evento = '.$idevento . ' AND id_modalidade = ' .$idmodalidade)->first();
            $totalinsc = Inscricao::whereRaw('id_evento = '.$idevento . ' AND id_modalidade = ' .$idmodalidade)->get();
            $totalinsc = count($totalinsc);  

            if (($totalvagas->quantidade == "-1") || ($totalvagas['quantidade'] > $totalinsc)) {
                $rtn = true;
            } else {
                $rtn = false;
            }
        } else { //SEM CONTROLE
            return true;
        }   
        
        return $rtn;
    }

    public function validaForm(array $info) {
        $erroform = 0;
        if (!array_key_exists('id_modalidade',$info)) {
            $erroform = 1;
        } 
        if (!array_key_exists('nomeCompleto',$info)) {
            $erroform = 1;
        } 
        if (!array_key_exists('cpf',$info)) {
            $erroform = 1;
        } 
        if (!array_key_exists('nomeCracha',$info)) {
            $erroform = 1;
        } 
        if (!array_key_exists('instituicao',$info)) {
            $erroform = 1;
        } 
        if (!array_key_exists('pais',$info)) {
            $erroform = 1;
        } 
        if (!array_key_exists('uf',$info) OR $info['uf'] == "") {
            $erroform = 1;
        } 
        if (!array_key_exists('cidade',$info) OR $info['cidade'] == "") {
            $erroform = 1;
        } 
        if (!array_key_exists('telefone',$info)) {
            $erroform = 1;
        } 
        if (!array_key_exists('datanascimento',$info)) {
            $erroform = 1;
        } 
        if (!array_key_exists('escolaridade',$info)) {
            $erroform = 1;
        } 
            
        return $erroform;
    }

    public function validaFormAcessibilidade(array $info) {
        $erroform = 0;
        if (array_key_exists('outra_def',$info) AND (($info['qual_def'] == '') OR ($info['qual_def'] == null))) {
            $erroform = 1;
        }
        
        if (array_key_exists('outra_neces',$info) AND (($info['qual_neces'] == '') OR ($info['qual_neces'] == null))) {
              $erroform = 1;
        }

        return $erroform;
    }

    public function getLote(int $evento,int $modalidade) {
        $datahoje = Carbon::now();

        $lote = Eventos_lote::whereRaw('id_evento = ' . $evento . ' AND id_modalidade = ' .$modalidade. ' AND  ((InicioLote < "'. $datahoje .'") and (FimLote > "'. $datahoje .'"))')
                ->get();

        foreach ($lote as $item) {
            $inscs = $this->checkQtdInscLote($item['id']);

            if (($item['quantidade'] > $inscs) || ($item['quantidade'] == '-1')) {
                return $item;
            }
        }
        return '-1';
    }

    public function getTotalInscritos($idevento,$modalidade) {
        $lista = Inscricao::whereRaw('id_evento = ' . $idevento . ' AND id_modalidade = ' . $modalidade)->get();
        return count($lista);
    }

    
    public function getDadosLote($idlote) {
        return Eventos_lote::where('id',$idlote)->first();
    }

    public function getMunicipios(Request $req) {   

        $uf = $req->all();
        $uf = $uf['uf'];       
        $lista['cidades'] = Municipios::where('Uf',$uf)->get(['Id','Nome']);
        return response()->json($lista);
    }

    public function getEstados(Request $req) {
        $pais = $req->all();
        $pais = $pais['idpais'];
        if ($pais == 'EX') {
            $lista['estados'] = Estados::where('Id','99')->get(['Uf','Nome']);
        } else {
            $lista['estados'] = Estados::where('Id','<>','99')->get(['Uf','Nome']);
        }
        return response()->json($lista);
    }

    public function getClientIP() {
        $ip = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) 
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ip = ''; 
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ip = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ip = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ip = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ip = $_SERVER['REMOTE_ADDR'];
        else 
            $ip = '150.162.78.2';

        return $ip;
    }

    public function confirmaPagamento($id) {
        $insc = Inscricao::where('id',$id)->first();
        $status = $insc->StatusPagamento;
        return $status;
    }

    function validaCC(string $cartao): bool {
        $sum = 0;
        $flag = 0;
    
        for ($i = strlen($cartao) - 1; $i >= 0; $i--) {
            $add = $flag++ & 1 ? $cartao[$i] * 2 : $cartao[$i];
            $sum += $add > 9 ? $add - 9 : $add;
        }
    
        return $sum % 10 === 0;
    }

    public function confirmarInscricao($id) {
        if ($id <> 0) {
            Inscricao::where('id',$id)->update([
                        // 'StatusPagamento'   =>  '1',
                        'valorPago'         =>  '0',
                        'UsuarioRespBaixa'  => Auth::user()->cpf,
                        'ArqRetorno'        => 'MANUAL_LISTA_INSCRITOS EM ' . Carbon::now(),
                        'transaction_timestamp' => Carbon::now(),
                        'id_formapagamento' => '0',
            ]);
        }

        $this->enviarEmailConfirmacao($id);
        return redirect()->back();
    }  

    public function ListaInscrito($idevento) {

        $lista = Inscricao::select('inscricao.*','modalidade.Descricao as MDesc','inscricao_acessibilidade.id as id_acess')
                ->where('id_evento',$idevento)
                ->leftJoin('modalidade','modalidade.id','=','inscricao.id_modalidade')
                ->leftJoin('inscricao_acessibilidade','inscricao_acessibilidade.id_inscricao','=','inscricao.id')
                ->orderBy('nomeCompleto')->get();
        
        return view('admin.listainscritos',compact('idevento','lista'));
    }

    public function detalhesAcessibilidade($id) {

        $lista = Inscricao_acessibilidade::where('id',$id)->first();
        $inscricao = Inscricao::where('id',$lista->id_inscricao)->first();


        return view('admin.listainscritosacessibilidade',compact('lista','inscricao',));
    }

    public function removerInscricao($id) {
        $dados = Inscricao::where('id',$id)->first();
        // dd($dados);
        $del = Inscricao_deletadas::create($dados->toArray());
        // dd($del);
        Inscricao::where('id',$id)->delete();
        return redirect()->back();
    }

    public function gerarXLS($idevento) {
        $inscritos = Inscricao::where('id_evento',$idevento)->OrderBy('nomeCompleto')->get();
        $evento = Eventos::where('id',$idevento)->first();
        $dados = [];

        foreach($inscritos as $item) {
            $acess = Inscricao_acessibilidade::where('id_inscricao',$item['id'])->first();
            if (empty($acess)) {
                $acessibilidade = 'NÃO';
            } else {
                $acessibilidade = 'SIM';
            }

            if ($item['StatusPagamento'] == '1') {
                $pago = 'SIM';
            } else {
                $pago = 'NÃO';
            }
            $dados_push = [
                'id'                =>  $item['id'],
                'NomeCompleto'      =>  $item['nomeCompleto'],
                'CPF'               =>  $item['cpf'],
                'email'             =>  $item['email'],
                'Tel'               =>  $item['telefone'],
                'Instituicao'       =>  $item['instituicao'],
                'Acessibilidade'    =>  $acessibilidade,
                'pago'              =>  $pago,
            ];
            array_push($dados,$dados_push);
        }

        // Criar uma nova planilha do PhpSpreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->mergeCells('A1:H1');

        $style = [
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
            ],
            'font' => [
                'bold' => true,
                'size' => 14,
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => ['argb' => 'FFFFCC'],
            ],
        ];

         $sheet->getStyle('A1:H1')->applyFromArray($style);

        // Inserir o texto na célula A1
        $sheet->setCellValue('A1', 'LISTA DE INSCRITOS PARA O EVENTO: ' . $evento->Titulo);

        // Definir os cabeçalhos das colunas
            $headers = [
            'Num Insc',
            'Nome Completo',
            'CPF',
            'E-mail',
            'Telefone',
            'Instituição',
            'Acessibilidade',
            'Pago',
            ];
        

        // Inserir os cabeçalhos na planilha antes dos dados dos inscritos
        $sheet->fromArray([$headers], null, 'A2');

        // Configurar os dados dos inscritos para exportação
        $export = new InscritosExport($dados);

        // Importar os dados para a planilha do PhpSpreadsheet
        $sheetData = $export->array();

        // Inserir os dados a partir da segunda linha (A3 em diante)
        $sheet->fromArray($sheetData, null, 'A3');

        // Criar um objeto Writer para salvar/download
        $writer = new Xlsx($spreadsheet);

        // Definir o nome do arquivo
        $filename = 'LISTA_INSCRITOS_' . $idevento . '_' . now()->format('Y-m-d_H-i-s') . '.xlsx';

        // Salvar o arquivo temporariamente
        $temp_file = tempnam(sys_get_temp_dir(), 'export');
        $writer->save($temp_file);

        // Retornar o arquivo para download
        return response()->download($temp_file, $filename)->deleteFileAfterSend(true);
    }

    public function enviarEmailConfirmacao($id) {
        $insc = Inscricao::where('id',$id)->first();
        $evento = Eventos::where('id',$insc->id_evento)->first();

        $dados = [ 
                    'nomeCompleto'      =>  $insc->nomeCompleto,
                    'email'             =>  $insc->email,
                    'nomeEvento'        =>  $evento->Titulo,
                    'idInscricao'       =>  $insc->id,
                    'imgCapa'           =>  $evento->imgCapa,
                    'Contato'           =>  $evento->Contato,
                ];
        
        // Mail::send('emails.confirmada', $dados, function($message) use ($dados) {
        //     $message->to($dados['email'], $dados['nomeCompleto'])
        //             ->subject('[FAPEU] Inscrição Confirmada.');
        //     $message->from('eventos@fapeu.org.br','[FAPEU] Sistema de Eventos.');
        // });
    }
    public function enviarEmailAguardandoPgto($id) {
        $insc = Inscricao::where('id',$id)->first();
        $evento = Eventos::where('id',$insc->id_evento)->first();

        $dados = [ 
                    'nomeCompleto'      =>  $insc->nomeCompleto,
                    'email'             =>  $insc->email,
                    'nomeEvento'        =>  $evento->Titulo,
                    'idInscricao'       =>  $insc->id,
                    'imgCapa'           =>  $evento->imgCapa,
                    'Contato'           =>  $evento->Contato,
                ];
        
        // Mail::send('emails.aguardandopgto', $dados, function($message) use ($dados) {
        //     $message->to($dados['email'], $dados['nomeCompleto'])
        //             ->subject('[FAPEU] Inscrição aguardando pagamento.');
        //     $message->from('eventos@fapeu.org.br','[FAPEU] Sistema de Eventos.');
        // });
    }

    public function consultaInscricao() {
        return view('forms.consultainscricao');
    }

    public function listaInscricaoCpf(Request $req) {
        $cpf = $req->cpf;
        $lista = Inscricao::select('inscricao.*','modalidade.Descricao as MDesc','inscricao_acessibilidade.id as id_acess','eventos.Titulo')
                    ->leftJoin('eventos', 'inscricao.id_evento', '=', 'eventos.id')
                    ->leftJoin('modalidade','modalidade.id','=','inscricao.id_modalidade')
                    ->leftJoin('inscricao_acessibilidade','inscricao_acessibilidade.id_inscricao','=','inscricao.id')
                    ->where('inscricao.cpf', $cpf)
                    ->orderBy('nomeCompleto')->get();

        return view('forms.listainsccpf',compact('lista','cpf'));
    }
    public function gerarBoleto($idinscricao) {
        $dadosinsc = Inscricao::where('id',$idinscricao)->first();
        $lote = Eventos_lote::where('id',$dadosinsc['id_lote'])->first();

        $evento = Eventos::where('id',$dadosinsc['id_evento'])->first();
     
        $nomeCompleto = $dadosinsc->nomeCompleto . "    [Num.Evento: " . $dadosinsc['id_evento'] . "]";
        $nossoNumero = substr($dadosinsc->id, -8);

        $nossoNumero = str_pad($nossoNumero,6,0,STR_PAD_LEFT);
        $nossoNumero = '5' . $nossoNumero; //neti-unapi = 11 

        $itaucripto = new \Itaucripto\Itaucripto();
        $itaucripto->setCompanyCode($_ENV['SHOPLINE_COMPANY_CODE']);
        $itaucripto->setEncryptionKey($_ENV['SHOPLINE_ENCRIPTION_KEY']);
        $itaucripto->setOrderNumber($nossoNumero); //NUM INSCRICAO
        $itaucripto->setAmount(number_format($dadosinsc['valorPagar'],2,',','.')); //VALOR
        $itaucripto->setDraweeName($nomeCompleto); //NOME + evento
        $itaucripto->setDraweeDocTypeCode('01'); //01 ou 02
        $itaucripto->setDraweeDocNumber($dadosinsc->cpf); //CPF
        $itaucripto->setDraweeAddress('Sem Endereco'); //END
        $itaucripto->setDraweeAddressDistrict('Sem Bairro'); // BAIRRO
        $itaucripto->setDraweeAddressCity("Florianopolis"); //CIDADE
        $itaucripto->setDraweeAddressState("SC"); //UF
        $itaucripto->setDraweeAddressZipCode('88035972'); //CEP
        // $itaucripto->setCallbackUrl('http://www.domain.com/callback');
        $itaucripto->setBankSlipDueDate(date('dmY', strtotime('+7 day'))); //VENCIMENTO
        $itaucripto->setBankSlipNoteLine1('Sr. Caixa,');
        $itaucripto->setBankSlipNoteLine2('Não receber após o vencimento.');
        $itaucripto->setBankSlipNoteLine3('Obrigado.');
        $itaucripto->setNote('3'); // Needed to display the three lines on the bank slip

        // DD($itaucripto);
        $dados = $itaucripto->generateData();
        

        return view('pagamento.itau',compact('dados','dadosinsc','evento'))->with('ok','segundavia');
    }

    public function aguardandopgto($id) {
        $dados['id_inscricao'] = $id;

        return view('pagamento.aguardandopgto',compact('dados'));
    }
}
