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

    //MENU Projetos

    public function capacitacao() {
        return view('projetos.capacitacao');
    }

    public function espacocoordenador() {
        return view('projetos.espacocoordenador');
    }

    //MENU Transparência

    public function avaliacaodesempenho() {
        return view('projetos.avaliacaodesempenho');
    }

    public function compras() {
        return view('projetos.compras');
    }

    public function demonstracoescontabeis() {
        return view('projetos.demonstracoescontabeis');
    }

    public function faq() {
        return view('projetos.faq');
    }

    public function fiscal_auditorias() {
        return view('projetos.fiscal_auditorias');
    }

    public function habilitacaojuridica() {
        return view('projetos.habilitacaojuridica');
    }

    public function pagamentos() {
        return view('projetos.pagamentos');
    }

    public function relanualgestao() {
        return view('projetos.relanualgestao');
    }

    public function selecoespublicas() {
        return view('projetos.selecoespublicas');
    }


    //MENU Politicas

    public function anticorrupcao() {
        return view('projetos.anticorrupcao');
    }

    public function boaspraticas() {
        return view('projetos.boaspraticas');
    }

    public function codigoconduta() {
        return view('projetos.codigoconduta');
    }

    public function comiteetica() {
        return view('projetos.comiteetica');
    }

    public function integridade() {
        return view('projetos.integridade');
    }

    //MENU Legislação e Normas

    public function legislacao() {
        return view('projetos.legislacao');
    }

    public function normas() {
        return view('projetos.normas');
    }

    //MENU Colaborador

    public function acordocoletivo() {
        return view('projetos.acordocoletivo');
    }

    public function formularios() {
        return view('projetos.formularios');
    }

    public function informerendimentos() {
        return view('projetos.informerendimentos');
    }

    public function programainclusao() {
        return view('projetos.programainclusao');
    }
}
