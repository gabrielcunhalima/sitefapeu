<?php

namespace App\Http\Controllers;

use App\Models\CategoriaEvento;
use App\Models\CategoriaEventoModel;
use App\Models\Eventos;
use App\Models\Eventos_config;
use App\Models\Eventos_lote;
use App\Models\eventos_vaga;
use App\Models\Eventos_cupom;
use App\Models\Formapagamento;
use App\Models\Modalidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index() {
        $dados = Auth::user();
        return view('admin/menuadmin',compact('dados'));
    }

    public function painel() {
        
        $dados = Auth::user();
        return view('admin/paineladmin',compact('dados'));
    }


    public function listaEventos() {

        $dataHoje = date('Y-m-d H:i:s');
    
        $eventos = Eventos::select('categoria_evento.Descricao as CatDesc','eventos.*')
                    ->LeftJoin('categoria_evento','categoria_evento.id','=','eventos.id_categoriaevento')
                    //->whereRaw("dataInicioEvento > '" . $dataHoje."'")
                    ->orderBy('dataInicioEvento')
                    ->get();
        //dd($users,$formapagamento,$modalidade,$eventos,$eventos_config,$eventos_lote,$eventos_vagas,$inscricao,$inscricao_acessibilidade);


        
        return view('admin/listaEventos',compact('eventos'));
    }


    public function listaPendente() {
        $linkAprovar = 1;            
        $eventos = Eventos::select('categoria_evento.Descricao as CatDesc','eventos.*')
                    ->LeftJoin('categoria_evento','categoria_evento.id','=','eventos.id_categoriaevento')
                    ->whereRaw("COALESCE(Aprovado,0) = 0")
                    ->orderBy('ID')
                    ->get();
        
        return view('admin/listaEventos',compact('eventos','linkAprovar'));
    }

    public function avaliarEvento($idevento) {
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

                        dd($evento);
        return view('admin/detalhesEventos',compact('evento','evento_config','evento_vagas','evento_lote','evento_cupom'));
    }


    public function aprovarEvento($idevento) {
        $checkconfig = Eventos_config::where('id_evento',$idevento)->first();
        $checkvagas = eventos_vaga::where('id_evento',$idevento)->first();
        $checklote = Eventos_lote::where('id_evento',$idevento)->first();

        if((empty($checkconfig)) OR (empty($checkvagas)) OR (empty($checklote))) {
            $titulo = 'Evento está incompleto';
            $msg = 'Solicite o preenchimento de todas as etapas para o evento ser aprovado.';
            $cor = 'red';
            return view('custom.msg',compact('msg','titulo','cor'));
        }

        $aprova = Eventos::where('id',$idevento)->update(['Aprovado' => 1]);

        return Redirect::route('admin.eventos.avaliar',$idevento);
    }

    public function rejeitarEvento($idevento) {
        $aprova = Eventos::where('id',$idevento)->update(['Aprovado' => '-1']);

        return Redirect::route('admin.eventos.avaliar',$idevento);
    }



    
    public function editarEvento($idevento) {
        dd($idevento);
    }
}
