<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/home',[HomeController::class,'index'])->name('homepage.home');

//MENU Quem Somos
Route::get('/sobre',[MenuController::class,'sobre'])->name('quemsomos.sobre');
Route::get('/organograma',[MenuController::class,'organograma'])->name('quemsomos.organograma');
Route::get('/administracao',[MenuController::class,'administracao'])->name('quemsomos.administracao');
Route::get('/identidadevisual',[MenuController::class,'identidadevisual'])->name('quemsomos.identidadevisual');
Route::get('/revistafapeu',[MenuController::class,'revistafapeu'])->name('quemsomos.revistafapeu');

//MENU Projetos

Route::get('/espacocoordenador',[MenuController::class,'espacocoordenador'])->name('projetos.espacocoordenador');
Route::get('/formulariosprojetos',[MenuController::class,'formulariosprojetos'])->name('projetos.formulariosprojetos');

//MENU Licitacoes e Prestadores de Serviço

Route::get('/selecoespublicas',[MenuController::class,'selecoespublicas'])->name('licitacoes.selecoespublicas');
Route::get('/espacofornecedor',[MenuController::class,'espacofornecedor'])->name('licitacoes.espacofornecedor');

//MENU Politica de Integridade

Route::get('/anticorrupcao',[MenuController::class,'anticorrupcao'])->name('politica.anticorrupcao');
Route::get('/integridade',[MenuController::class,'integridade'])->name('politica.integridade');
Route::get('/codigoconduta',[MenuController::class,'codigoconduta'])->name('politica.codigoconduta');
Route::get('/boaspraticas',[MenuController::class,'boaspraticas'])->name('politica.boaspraticas');
Route::get('/comiteetica',[MenuController::class,'comiteetica'])->name('politica.comiteetica');

//MENU Transparencia

Route::get('/compras',[MenuController::class,'compras'])->name('transparencia.compras');
Route::get('/avaliacaodesempenho',[MenuController::class,'avaliacaodesempenho'])->name('transparencia.avaliacaodesempenho');
Route::get('/demonstracoescontabeis',[MenuController::class,'demonstracoescontabeis'])->name('transparencia.demonstracoescontabeis');
Route::get('/faq',[MenuController::class,'faq'])->name('transparencia.faq');
Route::get('/fiscal_auditorias',[MenuController::class,'fiscal_auditorias'])->name('transparencia.fiscal_auditorias');
Route::get('/habilitacaojuridica',[MenuController::class,'habilitacaojuridica'])->name('transparencia.habilitacaojuridica');
Route::get('/pagamentos',[MenuController::class,'pagamentos'])->name('transparencia.pagamentos');
Route::get('/relanualgestao',[MenuController::class,'relanualgestao'])->name('transparencia.relanualgestao');
Route::get('/selecoespublicas',[MenuController::class,'selecoespublicas'])->name('transparencia.selecoespublicas');

//MANU Legislação e Normas Internas

Route::get('/legislacao',[MenuController::class,'legislacao'])->name('legislacao.legislacao');
Route::get('/normas',[MenuController::class,'normas'])->name('legislacao.normas');

//MENU Fornecedor

Route::get('/dispensa',[MenuController::class,'dispensa'])->name('fornecedor.dispensa');
Route::get('/inexibilidade',[MenuController::class,'inexibilidade'])->name('fornecedor.inexibilidade');
Route::get('/espacofornecedor',[MenuController::class,'espacofornecedor'])->name('fornecedor.espacofornecedor');

//MENU Colaborador

Route::get('/acordocoletivo',[MenuController::class,'acordocoletivo'])->name('colaborador.acordocoletivo');
Route::get('/formularioscolaborador',[MenuController::class,'formularioscolaborador'])->name('colaborador.formularioscolaborador');
Route::get('/informerendimentos',[MenuController::class,'informerendimentos'])->name('colaborador.informerendimentos');
Route::get('/programainclusao',[MenuController::class,'programainclusao'])->name('colaborador.programainclusao');

//MENU Contato

Route::get('/contato',[MenuController::class,'contato'])->name('faleconosco.contato');