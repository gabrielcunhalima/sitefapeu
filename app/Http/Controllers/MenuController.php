<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\SelecoesPublicas;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    private function renderView($view, $imagem, $titulo, $dados = [])
    {
        return view($view, compact('imagem', 'titulo', 'dados'));
    }
    //HOME

    public function home()
    {
        $carousel = Post::query()
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();
    
        return view('homepage.home', [
            'carousel' => $carousel
        ]);
    }

    //SERVICOS

    public function servicos()
    {
        return $this->renderView('homepage.servicos', 'servicos.png', 'Serviços');
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
        return $this->renderView('projetos.menuprojetos', 'menuprojetos.png', 'Projetos');
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

    public function projetos()
    {
        return $this->renderView('projetos.projetos', 'projetos.png', 'Projetos');
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
        return $this->renderView('transparencia.compras', 'compras.png', 'Compras');
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
        return $this->renderView('transparencia.projetostransparencia', 'projetostransparencia.png', 'Projetos de Transparência');
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
        return $this->renderView('politica.comiteetica', 'comiteetica.png', 'Comitê de Ética');
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
        return $this->renderView('legislacao.normas', 'normas.png', 'Normas Internas FAPEU e Instituições');
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
    public function DRHFlow()
    {
        return $this->renderView('colaborador.DRHFlow', 'drhflow.png', 'DRHFlow');
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
        return $this->renderView('faleconosco.contato', 'contato.png', 'Contato');
    }

    // NOTÍCIAS
    public function noticias()
    {
        return $this->renderView('noticias.noticias', 'noticias.png', 'Notícias');
    }

    //ADMIN

    public function verlogin()
    {
        return $this->renderView('login.login', 'login.png', 'Login FAPEU');
    }

    public function menuadmin()
    {
        return $this->renderView('admin.menu', 'menu.png', 'Painel Administrativo');
    }

    public function login(Request $request)
    {
        $dados = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($dados)) {
            $request->session()->regenerate();

            return redirect()->route('admin.menu');
        }

        return redirect()->route('login.login')->withErrors(['login' => 'Credenciais inválidas.']);
    }
}
