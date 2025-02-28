<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\SelecoesPublicas;
use App\Models\Post;
use App\Models\Contato;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class MenuController extends Controller

{
    private function renderView($view, $imagem, $titulo, $dados = [])
    {
        return view($view, compact('imagem', 'titulo', 'dados',));
    }


    //SERVICOS


    
    // MENU Quem somos
    public function sobre()
    {
        return $this->renderView('quemsomos.sobre', 'sobre.png', 'Sobre a FAPEU');
    }

    public function administracao()
    {
        return $this->renderView('quemsomos.administracao', 'administracao.png', 'Administração');
    }

    public function organograma()
    {
        return $this->renderView('quemsomos.organograma', 'organograma.png', 'Organograma');
    }

    public function identidadevisual()
    {
        return $this->renderView('quemsomos.identidadevisual', 'identidadevisual.png', 'Identidade Visual');
    }

    public function revistafapeu()
    {
        return $this->renderView('quemsomos.revistafapeu', 'revistafapeu.png', 'Revista FAPEU');
    }

    public function estatuto()
    {
        return $this->renderView('quemsomos.estatuto', 'estatuto.png', 'Estatuto');
    }

    public function regimentointerno()
    {
        return $this->renderView('quemsomos.regimentointerno', 'regimentointerno.png', 'Regimento Interno');
    }

    // MENU Projetos

    public function menuprojetos()
    {
        return $this->renderView('projetos.menuprojetos', 'identidadevisual.png', 'Gestão de Projetos');
    }
    public function formulariosprojetos()
    {
        return $this->renderView('projetos.formulariosprojetos', 'formulariosprojetos.png', 'Formulários');
    }

    public function espacocoordenador()
    {
        return $this->renderView('projetos.espacocoordenador', 'espacocoordenador.png', 'Espaço do Coordenador');
    }

    public function captacao()
    {
        return $this->renderView('projetos.captacao', 'captacao.png', 'Captação de Recursos e Oportunidade');
    }

    public function paineladministrativo()
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }
        return $this->renderView('admin.menu', 'captacao.png', 'Painel Administrativo');
    }

    public function noticiasrecentes()
    {
        $news =   $news = Post::where('visivel', true)
                    ->orderBy('created_at', 'asc')
                    ->get();

        $imagem = 'noticiasrecentes.png';
        $titulo = 'Notícias Recentes';

        return view('noticias.noticiasrecentes', compact('news','imagem','titulo'));       
    }

    public function noticiaspost(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        Session::put('admin_logged_in_time', time());

        if ($request->isMethod('GET')) {

            if($request->id>0) {
            
            
            $dados=Post::findOrFail($request->id);
            $imagem= 'noticiaspost.png';
            $titulo='Editor de Notícias';
            
                return view ('noticias.noticiaspost', compact ('dados','imagem','titulo'))->with('alteratitulo', true);
            }
        }


        if ($request->isMethod('POST')) {
            $validated = $request->validate([
                'titulo' => 'required|string|max:2555',
                'corpo' => 'required|string',
                'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
    
            $post = Post::findOrCreate($request->id);
            $post->titulo = $request->input('titulo');
            $post->corpo = $request->input('corpo');
            $post->link = Str::slug($request->input('titulo'));
    
            //se mandar uma nova imagem, substitui
            if ($request->hasFile('imagem')) {
                $imagePath = $request->file('imagem')->store('public/posts');
                $post->imagem = str_replace('public/', '', $imagePath);
            }
    
            $post->save();
    
            return redirect()->route('noticias.noticiasrecentes')->with('success', 'Post atualizado com sucesso!');
        }


        $dados=['titulo' => '', 'corpo' => '', 'imagem' => '','id'=>''];
        $imagem= 'noticiaspost.png';
        $titulo='Nova Noticia';
        return view ('noticias.noticiaspost', compact ('dados','imagem','titulo'))->with('alteratitulo', false);
    }

    

    public function noticiasleitura($link)
    {
        $post = Post::where('link', $link)->firstOrFail();
        $imagem = $post->imagem;
        $titulo = $post->titulo;
        $link = Str::slug($post->titulo);

        return view('noticias.noticiasleitura', compact('post', 'imagem','titulo','link'));
    }
    
    

    //EDITAR NOTICIAS
    
            public function editarNoticias()
            
        {
            if (!Auth::check()) {
                return redirect()->route('admin.login');
            }

            $news = Post::all();
            $imagem = 'noticiasedit.png';
            $titulo = 'Edição de Notícias';


            return view('noticias.editarnoticias', compact('news', 'imagem', 'titulo'));
        }

        public function atualizarNoticia(Request $request, $id)
        {
            
            $post = Post::findOrFail($id);
            $campo = $request->campo;
            $valor = $request->valor;

            $post->$campo = $valor;
            $post->save();

            return response()->json(['success' => true]);
        }

        public function alterarVisibilidade(Request $request, $id)
        {
            $post = Post::findOrFail($id);
            $post->visivel = $request->visivel;
            $post->save();

            return response()->json(['success' => true]);
        }

        public function excluirNoticia($id)
        {
            $post = Post::findOrFail($id);
            $post->delete();

            return response()->json(['success' => true]);
        }

        public function atualizarImagem(Request $request, $id)
        {
            $request->validate(['imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg']);
            
            $post = Post::findOrFail($id);
            $imagePath = $request->file('imagem')->store('public/posts');
            $post->imagem = str_replace('public/', '', $imagePath);
            $post->save();

            return back()->with('success', 'Imagem atualizada com sucesso!');
        }


        
    public function manualcompras()
    {
        return $this->renderView('projetos.manualcompras', 'manualcompras.png', 'Manual de Compras');
    }

    

    // MENU Transparência

    public function menutransparencia()
    {
        return $this->renderView('transparencia.menutransparencia', 'menutransparencia.png', 'Transparência');
    }
    public function avaliacaodesempenho()
    {
        return $this->renderView('transparencia.avaliacaodesempenho', 'avaliacaodesempenho.png', 'Avaliação de Desempenho');
    }

    public function compras()
    {
        return $this->renderView('transparencia.compras', 'compras.png', 'Compras, Contratos e Aquisições');
    }

    public function demonstracoescontabeis()
    {
        return $this->renderView('transparencia.demonstracoescontabeis', 'demonstracoescontabeis.png', 'Demonstrações Contábeis');
    }

    public function faq()
    {
        return $this->renderView('transparencia.faq', 'faq.png', 'Perguntas Frequentes');
    }

    public function fiscal_auditorias()
    {
        return $this->renderView('transparencia.fiscal_auditorias', 'fiscal_auditorias.png', 'Fiscalização e Auditorias');
    }

    public function habilitacaojuridica()
    {
        return $this->renderView('transparencia.habilitacaojuridica', 'habilitacaojuridica.png', 'Habilitação Jurídica');
    }

    public function pagamentos()
    {
        return $this->renderView('transparencia.pagamentos', 'pagamentos.png', 'Pagamentos Efetuados PF/PJ');
    }

    public function relanualgestao()
    {
        return $this->renderView('transparencia.relanualgestao', 'relanualgestao.png', 'Relatório Anual de Gestão');
    }

    public function selecoespublicas()
    {
        $selecoes = SelecoesPublicas::query()
                ->orderBy('id', 'desc')
                ->get();
        // dd($selecoes);
        return $this->renderView('transparencia.selecoespublicas', 'selecoespublicas.png', 'Seleções Públicas', $selecoes);
    }

    public function projetostransparencia()
    {
        return $this->renderView('transparencia.projetostransparencia', 'projetostransparencia.png', 'Portal de Transparência');
    }

    public function reltecnicosemestral()
    {
        return $this->renderView('transparencia.reltecnicosemestral', 'reltecnicosemestral.png', 'Relatório Técnico Semestral');
    }

    // MENU Politicas
    public function anticorrupcao()
    {
        return $this->renderView('politica.anticorrupcao', 'anticorrupcao.png', 'Política de Anticorrupção');
    }

    public function boaspraticas()
    {
        return $this->renderView('politica.boaspraticas', 'boaspraticas.png', 'Boas Práticas');
    }

    public function codigoconduta()
    {
        return $this->renderView('politica.codigoconduta', 'codigoconduta.png', 'Código de Conduta');
    }

    public function comiteetica()
    {
        return $this->renderView('politica.comiteetica', 'comiteetica.png', 'Comitê');
    }

    public function integridade()
    {
        return $this->renderView('politica.integridade', 'integridade.png', 'Programa de Integridade');
    }

    public function politicacookies()
    {
        return $this->renderView('politica.politicacookies', 'politicacookies.png', 'Política de Cookies');
    }

    public function politicaprivacidade()
    {
        return $this->renderView('politica.politicaprivacidade', 'politicaprivacidade.png', 'Política de Privacidade');
    }

    // MENU Legislação e Normas
    public function legislacao()
    {
        return $this->renderView('legislacao.legislacao', 'legislacao.png', 'Legislação');
    }

    public function normas()
    {
        return $this->renderView('legislacao.normas', 'normas.png', 'Normas Internas FAPEU e Instituições Apoiadas');
    }

    // MENU Fornecedor
    public function menulicitacao()
    {
        return $this->renderView('fornecedor.menulicitacao', 'menulicitacao.png', 'Licitação e Prestadores de Serviços');
    }
    public function dispensa()
    {
        return $this->renderView('fornecedor.dispensa', 'dispensa.png', 'Dispensa');
    }

    public function inexibilidade()
    {
        return $this->renderView('fornecedor.inexibilidade', 'inexibilidade.png', 'Inexibilidade');
    }

    public function espacofornecedor()
    {
        return $this->renderView('fornecedor.espacofornecedor', 'espacofornecedor.png', 'Espaço do Fornecedor');
    }

    // MENU Colaborador

    public function areaadministrativa()
    {
        return $this->renderView('colaborador.areaadministrativa', 'areaadministrativa.png', 'Área Administrativa');
    }


    public function drhFlow()
    {
        return $this->renderView('colaborador.drhflow', 'drhflow.png', 'DRHFlow');
    }

    public function ADMFlow()
    {
        return $this->renderView('colaborador.ADMFlow', 'admflow.png', 'ADMFlow');
    }

    public function WebMail()
    {
        return $this->renderView('colaborador.WebMail', 'webmail.png', 'Web Mail');
    }

    public function acordocoletivo()
    {
        return $this->renderView('colaborador.acordocoletivo', 'acordocoletivo.png', 'Acordo Coletivo');
    }

    public function formularioscolaborador()
    {
        return $this->renderView('colaborador.formularioscolaborador', 'formularioscolaborador.png', 'Formulários Colaborador');
    }

    public function informerendimentos()
    {
        return $this->renderView('colaborador.informerendimentos', 'informerendimentos.png', 'Informe de Rendimentos');
    }

    public function programainclusao()
    {
        return $this->renderView('colaborador.programainclusao', 'programainclusao.png', 'Programa de Inclusão');
    }

    public function vagasdisponiveis()
    {
        return $this->renderView('colaborador.vagasdisponiveis', 'vagasdisponiveis.png', 'Vagas Disponíveis');
    }

    // MENU Contato
    public function contato()
    {
        $dados = Contato::all();

        return $this->renderView('faleconosco.contato', 'contato.png', 'Contato', $dados);
    }

    public function canaldenuncia()
    {
        return $this->renderView('faleconosco.canaldenuncia', 'canaldenuncia.png', 'Canal de Denúncia');
    }


    // NOTÍCIAS
    public function noticias()
    {
        return $this->renderView('noticias.noticias', 'noticias.png', 'Notícias');
    }

    //HOME

    public function home()
    {
        $news = Post::latest()->take(5)->get(); // Pegando as 5 últimas notícias
        return view('homepage.home', compact('news'));
    }
    

    public function servicos()
    {
        return $this->renderView('homepage.servicos', 'servicos.png', 'Serviços');
    }
    
    public function importacao()
    {
        return $this->renderView('homepage.importacao', 'importacao.png', 'Importação de Bens e Insumos para Pesquisa com Isenção de Impostos');
    }

    public function latic()
    {
        return $this->renderView('homepage.latic', 'latic.png', 'LATIC');
    }

    public function nagefi()
    {
        return $this->renderView('homepage.nagefi', 'nagefi.png', 'NAGEFI');
    }

    public function concursos()
    {
        return $this->renderView('homepage.concursos', 'concursos.png', 'Concursos');
    }


}

