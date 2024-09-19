<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{

    //MENU Quem somos
    public function sobre() {
        return view('quemsomos.sobre');
    }

    public function administracao() {
        return view('quemsomos.administracao');
    }

    public function organograma() {
        return view('quemsomos.organograma');
    }

    public function identidadevisual() {
        return view('quemsomos.identidadevisual');
    }

    public function revistafapeu() {
        return view('quemsomos.revistafapeu');
    }
ww
    //MENU Projetos

    public function capacitacao() {
        return view('projetos.capacitacao');
    }

    public function formulariosprojetos() {
        return view('projetos.formulariosprojetos');
    }

    public function espacocoordenador() {
        return view('projetos.espacocoordenador');
    }

    //MENU Transparência

    public function avaliacaodesempenho() {
        return view('transparencia.avaliacaodesempenho');
    }

    public function compras() {
        return view('transparencia.compras');
    }

    public function demonstracoescontabeis() {
        return view('transparencia.demonstracoescontabeis');
    }

    public function faq() {
        return view('transparencia.faq');
    }

    public function fiscal_auditorias() {
        return view('transparencia.fiscal_auditorias');
    }

    public function habilitacaojuridica() {
        return view('transparencia.habilitacaojuridica');
    }

    public function pagamentos() {
        return view('transparencia.pagamentos');
    }

    public function relanualgestao() {
        return view('transparencia.relanualgestao');
    }

    public function selecoespublicas() {
        return view('transparencia.selecoespublicas');
    }


    //MENU Politicas

    public function anticorrupcao() {
        return view('politica.anticorrupcao');
    }

    public function boaspraticas() {
        return view('politica.boaspraticas');
    }

    public function codigoconduta() {
        return view('politica.codigoconduta');
    }

    public function comiteetica() {
        return view('politica.comiteetica');
    }

    public function integridade() {
        return view('politica.integridade');
    }

    //MENU Legislação e Normas

    public function legislacao() {
        return view('legislacao.legislacao');
    }

    public function normas() {
        return view('legislacao.normas');
    }

    //MENU Fornecedor

    public function dispensa() {
        return view('fornecedor.dispensa');
    }

    public function inexibilidade() {
        return view('fornecedor.inexibilidade');
    }

    public function espacofornecedor() {
        return view('fornecedor.espacofornecedor');
    }

    //MENU Colaborador

    public function acordocoletivo() {
        return view('colaborador.acordocoletivo');
    }

    public function formularioscolaborador() {
        return view('colaborador.formularioscolaborador');
    }

    public function informerendimentos() {
        return view('colaborador.informerendimentos');
    }

    public function programainclusao() {
        return view('colaborador.programainclusao');
    }

    //MENU Contato

    public function contato() {
        return view('faleconosco.contato');
    }
}
