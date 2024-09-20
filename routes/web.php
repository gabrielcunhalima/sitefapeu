<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesquisaController;

Route::get('/', function () {
    return view('homepage.home');
}) ->name ('homepage.home');

Route::get('/search', [PesquisaController::class, 'search'])->name('search');

Route::get('/home', [MenuController::class, 'home'])->name('homepage.home');

//COLABORADOR

Route::get('/acordocoletivo',[MenuController::class,'acordocoletivo'])->name('colaborador.acordocoletivo');
Route::get('/formularioscolaborador',[MenuController::class,'formularioscolaborador'])->name('colaborador.formularioscolaborador');
Route::get('/informerendimentos',[MenuController::class,'informerendimentos'])->name('colaborador.informerendimentos');
Route::get('/programainclusao',[MenuController::class,'programainclusao'])->name('colaborador.programainclusao');

//FORNECEDOR

Route::get('/dispensa',[MenuController::class,'dispensa'])->name('fornecedor.dispensa');
Route::get('/espacofornecedor',[MenuController::class,'espacofornecedor'])->name('fornecedor.espacofornecedor');
Route::get('/inexibilidade',[MenuController::class,'inexibilidade'])->name('fornecedor.inexibilidade');

//HOME

Route::get('/home',[MenuController::class,'home'])->name('homepage.home');

//LEGISLACAO

Route::get('/legislacao',[MenuController::class,'legislacao'])->name('legislacao.legislacao');
Route::get('/normas',[MenuController::class,'normas'])->name('legislacao.normas');

//LICITACOES
Route::get('/menulicitacoes',[MenuController::class,'menulicitacoes'])->name('licitacoes.menulicitacoes');
Route::get('/selecoespublicas',[MenuController::class,'selecoespublicas'])->name('licitacoes.selecoespublicas');

//POLITICA

Route::get('/anticorrupcao',[MenuController::class,'anticorrupcao'])->name('politica.anticorrupcao');
Route::get('/boaspraticas',[MenuController::class,'boaspraticas'])->name('politica.boaspraticas');
Route::get('/codigoconduta',[MenuController::class,'codigoconduta'])->name('politica.codigoconduta');
Route::get('/comiteetica',[MenuController::class,'comiteetica'])->name('politica.comiteetica');
Route::get('/integridade',[MenuController::class,'integridade'])->name('politica.integridade');

//PROJETOS

Route::get('/espacocoordenador',[MenuController::class,'espacocoordenador'])->name('projetos.espacocoordenador');
Route::get('/formulariosprojetos',[MenuController::class,'formulariosprojetos'])->name('projetos.formulariosprojetos');
Route::get('/menuprojetos',[MenuController::class,'menuprojetos'])->name('projetos.menuprojetos');

//QUEM SOMOS

Route::get('/administracao',[MenuController::class,'administracao'])->name('quemsomos.administracao');
Route::get('/identidadevisual',[MenuController::class,'identidadevisual'])->name('quemsomos.identidadevisual');
Route::get('/organograma',[MenuController::class,'organograma'])->name('quemsomos.organograma');
Route::get('/revistafapeu',[MenuController::class,'revistafapeu'])->name('quemsomos.revistafapeu');
Route::get('/sobre',[MenuController::class,'sobre'])->name('quemsomos.sobre');

//TRANSPARENCIA

Route::get('/avaliacaodesempenho',[MenuController::class,'avaliacaodesempenho'])->name('transparencia.avaliacaodesempenho');
Route::get('/compras',[MenuController::class,'compras'])->name('transparencia.compras');
Route::get('/demonstracoescontabeis',[MenuController::class,'demonstracoescontabeis'])->name('transparencia.demonstracoescontabeis');
Route::get('/faq',[MenuController::class,'faq'])->name('transparencia.faq');
Route::get('/fiscal_auditorias',[MenuController::class,'fiscal_auditorias'])->name('transparencia.fiscal_auditorias');
Route::get('/habilitacaojuridica',[MenuController::class,'habilitacaojuridica'])->name('transparencia.habilitacaojuridica');
Route::get('/menutransparencia',[MenuController::class,'menutransparencia'])->name('transparencia.menutransparencia');
Route::get('/pagamentos',[MenuController::class,'pagamentos'])->name('transparencia.pagamentos');
Route::get('/relanualgestao',[MenuController::class,'relanualgestao'])->name('transparencia.relanualgestao');
Route::get('/selecoespublicas',[MenuController::class,'selecoespublicas'])->name('transparencia.selecoespublicas');

//FALECONOSCO

Route::get('/contato',[MenuController::class,'contato'])->name('faleconosco.contato');