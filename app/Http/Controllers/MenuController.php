<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Licitacoes;
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
        return $this->renderView('projetos.captacao', 'captacao.png', 'Captação e Implantação de Projetos');
    }

    public function instituicoesapoiadas()
    {
        return $this->renderView('projetos.instituicoesapoiadas', 'captacao.png', 'Instituições Apoiadas');
    }

    public function calculoressarcimento()
    {
        return $this->renderView('projetos.calculoressarcimento', 'captacao.png', 'Cálculo de Ressarcimento');
    }

    public function orientacoescontato()
    {
        return $this->renderView('projetos.orientacoescontato', 'captacao.png', 'Orientações para Contato');
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
            ->orderBy('created_at', 'desc')
            ->get();

        $imagem = 'noticiasrecentes.png';
        $titulo = 'Notícias Recentes';

        return view('noticias.noticiasrecentes', compact('news', 'imagem', 'titulo'));
    }

    public function noticiaspost(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        Session::put('admin_logged_in_time', time());

        if ($request->isMethod('GET')) {

            if ($request->id > 0) {

                $dados = Post::findOrFail($request->id);
                $imagem = 'noticiaspost.png';
                $titulo = 'Editor de Notícias';

                return view('noticias.noticiaspost', compact('dados', 'imagem', 'titulo'))->with('alteratitulo', true);
            }
        }

        if ($request->isMethod('POST')) {
            $validated = $request->validate([
                'titulo' => 'required|string|max:2555',
                'corpo' => 'required|string',
                'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'visivel' => 'nullable|boolean',
                'imagem2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'imagem3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'imagem4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'imagem5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'data_publicacao' => 'nullable|date',
            ]);

            $post = Post::findOrCreate($request->id);
            $post->titulo = $request->input('titulo');
            $post->corpo = $request->input('corpo');
            $post->link = Str::slug($request->input('titulo'));
            $post->visivel = 1;

            if ($request->filled('data_publicacao')) {
                $post->created_at = $request->input('data_publicacao');
            }

            foreach (range(1, 5) as $i) {
                $fieldName = $i === 1 ? 'imagem' : "imagem{$i}";


                //se mandar uma nova imagem, substitui
                if ($request->hasFile($fieldName)) {
                    $img = $request->file($fieldName);
                    $destPath = public_path('storage/posts');
                    $imgName = 'POST_' . time() . ($i > 1 ? "_$i" : '') . '.' . $img->getClientOriginalExtension();
                    $img->move($destPath, $imgName);

                    $post->$fieldName = 'storage/posts/' . $imgName;
                }
            }

            $post->save();

            return redirect()->route('noticias.noticiasrecentes')->with('success', 'Post atualizado com sucesso!');
        }

        $dados = ['titulo' => '', 'corpo' => '', 'imagem' => '', 'id' => '', 'visivel' => '',];
        $imagem = 'noticiaspost.png';
        $titulo = 'Nova Noticia';
        return view('noticias.noticiaspost', compact('dados', 'imagem', 'titulo'))->with('alteratitulo', false);
    }


    public function noticiasleitura($link)
    {
        $post = Post::where('link', $link)->firstOrFail();
        $imagem = $post->imagem;
        $titulo = $post->titulo;
        $link = Str::slug($post->titulo);

        return view('noticias.noticiasleitura', compact('post', 'imagem', 'titulo', 'link'));
    }



    //EDITAR NOTICIAS

    public function editarNoticias()

    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }
        $news = Post::orderBy('created_at', 'desc')->paginate(5);
        $imagem = 'noticiasedit.png';
        $titulo = 'Edição de Notícias';


        return view('noticias.editarnoticias', compact('news', 'imagem', 'titulo'));
    }

    public function atualizarNoticia(Request $request, $id)
    {

        $post = Post::findOrFail($id);
        $campo = $request->campo;
        $valor = $request->valor;

        if ($campo === 'created_at') {
            $valor = \Carbon\Carbon::parse($valor);
        }

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


    public function deleteImage($id, $imageField)
    {
        // Recuperar o post pelo ID
        $post = Post::findOrFail($id);

        if (isset($post->$imageField) && !empty($post->$imageField)) {

            $imagePath = public_path($post->$imageField);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }


            $post->$imageField = null;
            $post->save();

            return redirect()->back()->with('success', 'Imagem excluída com sucesso!');
        }

        return redirect()->back()->with('error', 'Imagem não encontrada.');
    }


    public function atualizarImagem(Request $request, $id, $numero = null)
    {
        $fieldName = ($numero == 1 || $numero === null) ? 'imagem' : 'imagem' . $numero;


        $request->validate([$fieldName => 'nullable|image|mimes:jpeg,png,jpg,gif,svg']);

        $post = Post::findOrFail($id);


        if ($request->hasFile($fieldName)) {

            if ($post->$fieldName) {
                $oldImagePath = public_path($post->$fieldName);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $img = $request->file($fieldName);
            $destPath = public_path('storage/posts');
            $imgName = 'POST_' . time() . ($numero ? "_$numero" : '') . '.' . $img->getClientOriginalExtension();
            $img->move($destPath, $imgName);


            $post->$fieldName = 'storage/posts/' . $imgName;
            $post->save();

            return back()->with('success', "Imagem $numero atualizada com sucesso!");
        }

        return back()->with('error', 'Nenhuma imagem foi enviada.');
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

    public function comites()
    {
        return $this->renderView('politica.comites', 'comiteetica.png', 'Comitê de Ética e Comitê de Gestão de Riscos');
    }

    public function lgpd()
    {
        return $this->renderView('politica.lgpd', 'comiteetica.png', 'Lei Geral de Proteção de Dados');
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
        return $this->renderView('fornecedor.dispensa', 'dispensa.png', 'Dispensa de Licitação');
    }

    public function inexigibilidade()
    {
        return $this->renderView('fornecedor.inexigibilidade', 'inexigibilidade.png', 'Inexigibilidade');
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
        $news = Post::latest()->where('visivel', 1)->take(5)->get();
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
