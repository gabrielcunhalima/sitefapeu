<?php

namespace App\Http\Controllers;

use App\Models\CategoriaEvento;
use Illuminate\Http\Request;

use \App\Models\Eventos;
use \App\Models\User;
use \App\Models\Eventos_config;
use App\Models\Eventos_cupom;
use App\Models\Eventos_form;
use \App\Models\Eventos_lote;
use \App\Models\Formapagamento;
use \App\Models\Modalidade;
use \App\Models\Inscricao;
use \App\Models\Inscricao_acessibilidade;
use \App\Models\Eventos_vaga;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req) {

        $search = $req->all();
        if (array_key_exists('titulo',$search)) {
            $busca = $search['titulo']; 
        } else {
            $busca = '';
        }            

        $dataHoje = date('Y-m-d H:i:s');

        $users = User::all();
        $formapagamento = Formapagamento::all();
        $modalidade = Modalidade::all();
        $eventos = Eventos::select('categoria_evento.Descricao as CatDesc','eventos.*','eventos_config.dataInicioInscricao','eventos_config.VencimentoPagamento')
                    ->LeftJoin('categoria_evento','categoria_evento.id','=','eventos.id_categoriaevento')
                    ->LeftJoin('eventos_config','eventos_config.id_evento','=','eventos.id')
                    ->when($req->has('titulo'), function ($whenQuery) use ($req) {
                        $whenQuery->where('Titulo','like','%'. $req->titulo.'%');
                    })
                    ->whereRaw("dataFinalEvento > '" . $dataHoje."' AND (Coalesce(Aprovado,0) = 1) AND (COALESCE(eventos_config.ExibirEvento,0) = 1)")
                    ->orderBy('dataInicioEvento')
                    ->paginate(3)
                    ->withQueryString();


        //$eventos = Eventos::where('dataInicioEvento','>',$dataHoje)->paginate(4);
        //$eventos = Eventos::paginate(4);    
        //$eventos_config = Eventos_config::all();
        //$eventos_lote = Eventos_lote::all();
        //$eventos_vagas = Eventos_vaga::all();
        //$inscricao = Inscricao::all();
        //$inscricao_acessibilidade = Inscricao_acessibilidade::all();

        $hoje = Carbon::now();


        
        return view('eventos/lista',compact('eventos','busca','hoje'));

    }

    public function detalhesEventos($idevento) {
        $evento = Eventos::where('id',$idevento)->first();
        $evento_config = Eventos_config::where('id_evento',$idevento)->first();
        $evento_vagas = eventos_vaga::select('eventos_vagas.id as id','Descricao','quantidade','aceitaSubmissao','exigeComprovante')
                        ->where('id_evento',$idevento)
                        ->leftJoin('modalidade','modalidade.id','=','eventos_vagas.id_modalidade')
                        ->get();
        $evento_lote = Eventos_lote::select('Eventos_lote.id as id','modalidade.Descricao as MDesc','Eventos_lote.InicioLote' , 'Eventos_lote.FimLote' ,'valor','quantidade' )
                        ->where('id_evento',$idevento)
                        ->leftJoin('modalidade','modalidade.id','=','Eventos_lote.id_modalidade')
                        //->leftJoin('formapagamento','formapagamento.id','=','Eventos_lote.id_formapagamento')
                        ->get();
        $evento_cupom = Eventos_cupom::select('eventos_cupom.*','formapagamento.Descricao as PDesc')
                        ->where('id_evento',$idevento)
                        ->leftJoin('formapagamento','formapagamento.id','=','Eventos_cupom.id_formapagamento')
                        ->get();


        return view('admin/evento/detalhes',compact('evento','evento_config','evento_vagas','evento_lote','evento_cupom'));    
    }

    public function novoevento() {
        $listaCategorias = CategoriaEvento::all();

        return view('admin/evento/novoevento',compact('listaCategorias'));
    }

    public function cadastrarEvento(Request $req) {
        $info = $req->all();

        if ($this->validaForm('1',$info)) {
            $titulo = 'Formulário incompleto.';
            $msg = 'Preencha todos os campos corretamente.';
            $cor = 'orange';
            return view('forms.msg',compact('msg','titulo','cor'));
        }

        if($req->hasFile('imgCapa')) {
            
            
            $file = $req->file('imgCapa');

            $filenameWithExt = $req->file('imgCapa')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $req->file('imgCapa')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $destinationPath = public_path('/capas');

            $file->move($destinationPath,$fileNameToStore);
    
            $info['imgCapa'] = $fileNameToStore;
            
        } 

        $idNovoEvento = Eventos::firstOrCreate($info);
        

        $idNovoEvento= $idNovoEvento->id;

        $resp = Auth::user();

        Eventos::where('id',$idNovoEvento)->update(['CpfResponsavel' => $resp->cpf]);

        Eventos_form::firstOrCreate(['id_evento' => $idNovoEvento]);

        
        return view('admin/evento/novoeventoconfig',compact('idNovoEvento'));
        
    }

    
    public function cadastrarEventoConfig(Request $req) {
        $info = $req->all();

        if ($this->validaForm('2',$info)) {
            $titulo = 'Formulário incompleto.';
            $msg = 'Preencha todos os campos corretamente.';
            $cor = 'orange';
            return view('forms.msg',compact('msg','titulo','cor'));
        }

        if ((!array_key_exists('ControleVagasModalidade',$info)) 
            AND (!array_key_exists('ControleVagasGeral',$info)) 
            AND (!array_key_exists('semControleVagas',$info))) {
            $titulo = 'Formulário incompleto.';
            $msg = 'Informe o tipo de controle de vagas.';
            $cor = 'orange';
            return view('forms.msg',compact('msg','titulo','cor'));
        }

        unset($info['semControleVagas']);
        
        $info['dataInicioInscricao'] = $req->dataInicioInscricao . ' ' . $req->HoraInicio;
        $info['VencimentoPagamento'] = $req->VencimentoPagamento . ' ' . $req->HoraFim;
        unset($info['HoraInicio']);
        unset($info['HoraFim']);

        $idNovoEvento = $info['id_evento'];

        if (array_key_exists('ControleVagasGeral',$info)) {
            if ($info['ControleVagasGeral'] == 1) {
                Eventos::where('id',$idNovoEvento)->update(['TotalVagasGeral' => $info['TotalVagasGeral']]);
            }
        }
        unset($info['TotalVagasGeral']);
        
        $idConfig = Eventos_config::firstOrCreate($info);

        //vars pro proximo form
        $modalidade = Modalidade::all();
        $lista = eventos_vaga::where('id_evento',$idNovoEvento)->get();
        
        
        return view('admin/evento/novoeventovagas',compact('idNovoEvento','modalidade','lista'));
    }

    public function cadastrarEventoVagas(Request $req) {
        $info = $req->all();

        if ((!array_key_exists('id_modalidade',$info)) || ($info['quantidade'] < 1) && !array_key_exists('semQtd',$info)) {
            $titulo = 'Formulário incompleto.';
            $msg = 'Preencha a Quantidade e a Modalidade corretamente.';
            $cor = 'orange';
            return view('forms.msg',compact('msg','titulo','cor'));
        }

        if (array_key_exists('semQtd',$info)) {
            $info['quantidade'] = '-1';
        }

        unset($info['semQtd']);

        $idNovoEvento = $info['id_evento'];
        $idModalidade = $info['id_modalidade'];

        $checkJaExiste = eventos_vaga::WhereRaw('id_evento = ' . $idNovoEvento . ' and id_modalidade = ' . $idModalidade)->get();
    
        if (count($checkJaExiste) > 0) {
            eventos_vaga::whereRaw('id_evento = ' . $idNovoEvento . ' and id_modalidade = ' . $idModalidade)
                            ->update([
                                'quantidade' => $info['quantidade'],
                                // 'aceitaSubmissao' => $info['aceitaSubmissao'],
                                // 'exigeComprovante' => $info['exigeComprovante'],
                            ]);
        } else {
            eventos_vaga::firstOrCreate($info);
        }

        

        //GERAR LISTA PRA JA ADICIONADAS
        $modalidade = Modalidade::all();

        $lista = eventos_vaga::select('eventos_vagas.id as id','Descricao','Quantidade','aceitaSubmissao','exigeComprovante')
                ->where('id_evento',$idNovoEvento)
                ->leftJoin('modalidade','modalidade.id','=','eventos_vagas.id_modalidade')
                ->get();


        return view('admin/evento/novoeventovagas',compact('idNovoEvento','modalidade','lista'));
    }

    public function formEventoLote($id_evento) {

        $idNovoEvento = $id_evento;

        //Modalidades
        $modalidade = Modalidade::all();

        //Formas Pagamento

        $formasPagto = Formapagamento::all();
        $lista = Eventos_lote::select('Eventos_lote.id as id','modalidade.Descricao as MDesc','Eventos_lote.InicioLote' , 'Eventos_lote.FimLote' ,'valor','quantidade' )
        ->where('id_evento',$idNovoEvento)
        ->leftJoin('modalidade','modalidade.id','=','Eventos_lote.id_modalidade')
        //->leftJoin('formapagamento','formapagamento.id','=','Eventos_lote.id_formapagamento')
        ->get();

        return view('admin/evento/novoeventolotes',compact('idNovoEvento','modalidade','formasPagto','lista'));
    }

    public function cadastrarEventoLote(Request $req) {
        $info = $req->all();

        $idNovoEvento = $info['id_evento'];

        $info['InicioLote'] = $req->InicioLote . ' ' . $req->HoraInicio;
        $info['FimLote'] = $req->FimLote . ' ' . $req->HoraFim;

        // dd($info);

        if ((is_null($info['valor']) && !array_key_exists('gratis',$info)) || is_null($info['InicioLote']) || is_null($info['FimLote']) || ((is_null($info['quantidade']) && !array_key_exists('semQtd',$info)))) {
            $titulo = 'Formulário incompleto.';
            $msg = 'Preencha as informações corretamente.';
            $cor = 'orange';
            return view('forms.msg',compact('msg','titulo','cor'));
        }

        if (array_key_exists('semQtd',$info)) {
            $info['quantidade'] = '-1';
        }

        if (array_key_exists('gratis',$info)) {
            $info['valor'] = '-1';
        }



        unset($info['semQtd']);
        unset($info['gratis']);
        unset($info['HoraInicio']);
        unset($info['HoraFim']);
        
        $info['valor'] = str_replace(",",".",$info['valor']);

        Eventos_lote::firstOrCreate($info);
        
        //Modalidades
        $modalidade = Modalidade::all();

        //Formas Pagamento

        $formasPagto = Formapagamento::all();

        $lista = Eventos_lote::select('Eventos_lote.id as id','modalidade.Descricao as MDesc','Eventos_lote.InicioLote' , 'Eventos_lote.FimLote' ,'valor','quantidade' )
        ->where('id_evento',$idNovoEvento)
        ->leftJoin('modalidade','modalidade.id','=','Eventos_lote.id_modalidade')
        //->leftJoin('formapagamento','formapagamento.id','=','Eventos_lote.id_formapagamento')
        ->get();

        return view('admin/evento/novoeventolotes',compact('idNovoEvento','modalidade','formasPagto','lista'));
    }

    public function eventosLotesDeletar($idevento,$id) {
        $info = eventos_lote::where('id',$id)->delete();

        $idNovoEvento = $idevento;

        $modalidade = Modalidade::all();

        $formasPagto = Formapagamento::all();

        $lista = Eventos_lote::select('Eventos_lote.id as id','modalidade.Descricao as MDesc','Eventos_lote.InicioLote' , 'Eventos_lote.FimLote' ,'valor','quantidade')
        ->where('id_evento',$idNovoEvento)
        ->leftJoin('modalidade','modalidade.id','=','Eventos_lote.id_modalidade')
       // ->leftJoin('formapagamento','formapagamento.id','=','Eventos_lote.id_formapagamento')
        ->get();

        return view('admin/evento/novoeventolotes',compact('idNovoEvento','modalidade','formasPagto','lista'));
    }
    public function eventosCupomDeletar($idevento,$id) {
        $info = Eventos_cupom::where('id',$id)->delete();

        
        $idNovoEvento = $idevento;

        //Formas Pagamento

        $formasPagto = Formapagamento::all();
        $lista = Eventos_cupom::select('Eventos_cupom.id as id','formapagamento.Descricao as PDesc','Eventos_cupom.dataInicio' , 'Eventos_cupom.dataFim' ,'porcentagem','quantidade','CodigoCupom' )
        ->where('id_evento',$idNovoEvento)
        ->leftJoin('formapagamento','formapagamento.id','=','Eventos_cupom.id_formapagamento')
        ->get();

        return view('admin/evento/novoeventocupom',compact('idNovoEvento','formasPagto','lista'));

    }


    public function eventosVagasDeletar($idevento,$id) {
        //CHECAR SE EXISTE INSCRIÇÃO NA MODALIDADE
        $info = eventos_vaga::where('id',$id)->delete();

        $idNovoEvento = $idevento;

        $modalidade = Modalidade::all();

        $lista = eventos_vaga::select('eventos_vagas.id as id','Descricao','Quantidade')
                ->where('id_evento',$idevento)
                ->leftJoin('modalidade','modalidade.id','=','eventos_vagas.id_modalidade')
                ->get();


        return view('admin/evento/novoeventovagas',compact('idNovoEvento','modalidade','lista'));

    }

    public function formEventosCupom($id_evento) {

        $idNovoEvento = $id_evento;

        //Formas Pagamento

        $formasPagto = Formapagamento::all();
        $lista = Eventos_cupom::select('Eventos_cupom.id as id','formapagamento.Descricao as PDesc','Eventos_cupom.dataInicio' , 'Eventos_cupom.dataFim' ,'porcentagem','quantidade' ,'CodigoCupom')
        ->where('id_evento',$idNovoEvento)
        ->leftJoin('formapagamento','formapagamento.id','=','Eventos_cupom.id_formapagamento')
        ->get();

        return view('admin/evento/novoeventocupom',compact('idNovoEvento','formasPagto','lista'));
    }

    public function cadastrarEventoCupom (Request $req) {
        $info = $req->all();
        $idNovoEvento = $info['id_evento'];

        if (array_key_exists('semQtd',$info)) {
            $info['quantidade'] = '-1';
        }

        unset($info['semQtd']);
        Eventos_cupom::firstOrCreate($info);
        

        //Formas Pagamento

        $formasPagto = Formapagamento::all();

        $lista = Eventos_cupom::select('Eventos_cupom.id as id','formapagamento.Descricao as PDesc','Eventos_cupom.dataInicio' , 'Eventos_cupom.dataFim' ,'porcentagem','quantidade', 'CodigoCupom' )
        ->where('id_evento',$idNovoEvento)
        ->leftJoin('formapagamento','formapagamento.id','=','Eventos_cupom.id_formapagamento')
        ->get();
        
        return view('admin/evento/novoeventocupom',compact('idNovoEvento','formasPagto','lista'));
    }  


    public function formEditEvento($idevento) {
        $listaCategorias = CategoriaEvento::all();
        $evento = Eventos::where('id',$idevento)->first();

        return view('admin/evento/editevento',compact('listaCategorias','evento','idevento'));
    }

    public function editarEvento(Request $req) {

        $post = $req->all();

        $id_evento = $post['id_evento'];

        if($req->hasFile('imgCapa')) {
            
            
            $file = $req->file('imgCapa');

            $filenameWithExt = $req->file('imgCapa')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $req->file('imgCapa')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $destinationPath = public_path('/capas');

            $file->move($destinationPath,$fileNameToStore);
    
            $post['imgCapa'] = $fileNameToStore;

            $evento = Eventos::where('id',$id_evento)->update(['imgCapa'=> $post['imgCapa'] ]);

            
        } 

        $evento = Eventos::where('id',$id_evento)->update([
                        'IDProjeto'             => $post['IDProjeto'],
                        'dataInicioEvento'      => $post['dataInicioEvento'],
                        'dataFinalEvento'       => $post['dataFinalEvento'],
                        'Titulo'                => $post['Titulo'],
                        'Descricao'             => $post['Descricao'],
                        'Local'                 => $post['Local'],
                        'Contato'               => $post['Contato'],
                        'id_categoriaevento'    => $post['id_categoriaevento'],
        ]);        
        

        $evento_config = Eventos_config::where('id_evento',$id_evento)->first();
        $evento = Eventos::where('id',$id_evento)->first();
        return view('admin/evento/editeventoconfig',compact('evento_config','evento'));
    }
    public function editarEventoConfig(Request $req) {
        $post = $req->all();
        
        $id_evento = $post['id_evento'];

        if (!isset($post['ControleVagasModalidade'])) {
            $ControleVagasModalidade = '0';
        } else {
            $ControleVagasModalidade = '1';
        }
        if (!isset($post['ControleVagasGeral'])) {
            $ControleVagasGeral = '0';
        } else {
            $ControleVagasGeral = '1';
        }
        if (!isset($post['PagamentoBoleto'])) {
            $PagamentoBoleto = '0';
        } else {
            $PagamentoBoleto = '1';
        }
        if (!isset($post['PagamentoPIX'])) {
            $PagamentoPIX = '0';
        } else {
            $PagamentoPIX = '1';
        }
        if (!isset($post['PagamentoCartao'])) {
            $PagamentoCartao = '0';
        } else {
            $PagamentoCartao = '1';
        }
        if (!isset($post['ExibirEvento'])) {
            $ExibirEvento = '0';
        } else {
            $ExibirEvento = '1';
        }

        $config = Eventos_config::where('id_evento',$id_evento)->update([
                        'ControleVagasModalidade'   => $ControleVagasModalidade,
                        'ControleVagasGeral'        => $ControleVagasGeral,
                        'PagamentoBoleto'           => $PagamentoBoleto,
                        'PagamentoPIX'              => $PagamentoPIX,
                        'PagamentoCartao'           => $PagamentoCartao,
                        'VencimentoPagamento'       => $post['VencimentoPagamento'],
                        'QuantidadeParcelas'        => $post['QuantidadeParcelas'],
                        'ExibirEvento'              => $ExibirEvento,
                        'dataInicioInscricao'       => $post['dataInicioInscricao'],
        ]);

        if ($ControleVagasGeral == 1) {
            Eventos::where('id',$id_evento)->update(['TotalVagasGeral' => $post['TotalVagasGeral']]);
        } else {
            Eventos::where('id',$id_evento)->update(['TotalVagasGeral' => '0']);
        }

        //vars pro proximo form
        $modalidade = Modalidade::all();
        $lista = eventos_vaga::select('eventos_vagas.id as id','Descricao','Quantidade')
        ->where('id_evento',$id_evento)
        ->leftJoin('modalidade','modalidade.id','=','eventos_vagas.id_modalidade')
        ->get();
        
        return view('admin/evento/editeventovagas',compact('id_evento','modalidade','lista'));
    }

    public function validaForm($form,$dados) {

        $rtn = 0;

        if ($form == 1) {
            if ((!array_key_exists('IDProjeto',$dados)) or ($dados['IDProjeto'] == null)) {
                $rtn = 1;
            }

            if ((!array_key_exists('dataInicioEvento',$dados)) or ($dados['dataInicioEvento'] == null)) {
                $rtn = 1;
            }

            if ((!array_key_exists('dataFinalEvento',$dados)) or ($dados['dataFinalEvento'] == null)) {
                $rtn = 1;
            }

            if ($dados['dataInicioEvento'] > $dados['dataFinalEvento']) {
                $rtn = 1;
            }

            if ((!array_key_exists('Titulo',$dados)) or ($dados['Titulo'] == null)) {
                $rtn = 1;
            }

            if ((!array_key_exists('Descricao',$dados)) or ($dados['Descricao'] == null)) {
                $rtn = 1;
            }

            if (!array_key_exists('EventoOnline',$dados)) {
                if ((!array_key_exists('Local',$dados)) or ($dados['Local'] == null)) {
                    $rtn = 1;
                }
            }
            
            if ((!array_key_exists('Contato',$dados)) or ($dados['Contato'] == null)) {
                $rtn = 1;
            }

            if ((!array_key_exists('id_categoriaevento',$dados)) or ($dados['id_categoriaevento'] == null)) {
                $rtn = 1;
            }
        }

        if ($form == 2) {
            if ((!array_key_exists('ControleVagasModalidade',$dados)) AND (!array_key_exists('ControleVagasGeral',$dados)) AND (!array_key_exists('semControleVagas',$dados))) {
                $rtn = 1;
            }
            if ((array_key_exists('ControleVagasModalidade',$dados)) AND (array_key_exists('ControleVagasGeral',$dados)) AND (array_key_exists('semControleVagas',$dados))) {
                $rtn = 1;
            }
            if ((!array_key_exists('ControleVagasModalidade',$dados)) AND (array_key_exists('ControleVagasGeral',$dados)) AND (array_key_exists('semControleVagas',$dados))) {
                $rtn = 1;
            }
            if ((array_key_exists('ControleVagasModalidade',$dados)) AND (!array_key_exists('ControleVagasGeral',$dados)) AND (array_key_exists('semControleVagas',$dados))) {
                $rtn = 1;
            }
            if ((array_key_exists('ControleVagasModalidade',$dados)) AND (array_key_exists('ControleVagasGeral',$dados)) AND (!array_key_exists('semControleVagas',$dados))) {
                $rtn = 1;
            }

            if ((array_key_exists('ControleVagasGeral',$dados))) {
                if (($dados['TotalVagasGeral'] == null) OR ($dados['TotalVagasGeral'] < 1)) {
                    $rtn = 1;
                }
            }

            if ((!array_key_exists('PagamentoBoleto',$dados)) AND (!array_key_exists('PagamentoPIX',$dados)) AND (!array_key_exists('PagamentoCartao',$dados))) {
                $rtn = 1;
            }

            if ((array_key_exists('PagamentoCartao',$dados))) {
                if (($dados['QuantidadeParcelas'] == null) OR ($dados['QuantidadeParcelas'] < 1)) {
                    $rtn = 1;
                }
            }
            
            if ($dados['dataInicioInscricao'] == null) {
                $rtn = 1;
            }

            if ($dados['HoraInicio'] == null) {
                $rtn = 1;
            }
            
            if ($dados['VencimentoPagamento'] == null) {
                $rtn = 1;
            }

            if ($dados['HoraFim'] == null) {
                $rtn = 1;
            }
        }

        return $rtn;
    }


}