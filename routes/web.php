<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesquisaController;
use App\Http\Controllers\MigrationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\SelecoesPublicasController;


Route::get('/', function () {
    return view('homepage.home');
}) ->name ('homepage.home');



Route::get('/home', [MenuController::class, 'home'])->name('homepage.home');

//COLABORADOR

Route::get('/acordocoletivo',[MenuController::class,'acordocoletivo'])->name('colaborador.acordocoletivo');
Route::get('/formularioscolaborador',[MenuController::class,'formularioscolaborador'])->name('colaborador.formularioscolaborador');
Route::get('/informerendimentos',[MenuController::class,'informerendimentos'])->name('colaborador.informerendimentos');
Route::get('/programainclusao',[MenuController::class,'programainclusao'])->name('colaborador.programainclusao');
Route::get('/vagasdisponiveis',[MenuController::class,'vagasdisponiveis'])->name('colaborador.vagasdisponiveis');
Route::get('/DRHFlow',[MenuController::class,'DRHFlow'])->name('colaborador.DRHFlow');
Route::get('/ADMFlow',[MenuController::class,'ADMFlow'])->name('colaborador.ADMFlow');
Route::get('/WebMail',[MenuController::class,'WebMail'])->name('colaborador.WebMail');


//FORNECEDOR

Route::get('/dispensa',[MenuController::class,'dispensa'])->name('fornecedor.dispensa');
Route::get('/espacofornecedor',[MenuController::class,'espacofornecedor'])->name('fornecedor.espacofornecedor');
Route::get('/inexibilidade',[MenuController::class,'inexibilidade'])->name('fornecedor.inexibilidade');


//HOME

Route::get('/home',[MenuController::class,'home'])->name('homepage.home');

//LEGISLACAO

Route::get('/legislacao',[MenuController::class,'legislacao'])->name('legislacao.legislacao');
Route::get('/normas',[MenuController::class,'normas'])->name('legislacao.normas');

//POLITICA

Route::get('/anticorrupcao',[MenuController::class,'anticorrupcao'])->name('politica.anticorrupcao');
Route::get('/boaspraticas',[MenuController::class,'boaspraticas'])->name('politica.boaspraticas');
Route::get('/codigoconduta',[MenuController::class,'codigoconduta'])->name('politica.codigoconduta');
Route::get('/comiteetica',[MenuController::class,'comiteetica'])->name('politica.comiteetica');
Route::get('/integridade',[MenuController::class,'integridade'])->name('politica.integridade');
Route::get('/politicacookies',[MenuController::class,'politicacookies'])->name('politica.politicacookies');
Route::get('/politicaprivacidade',[MenuController::class,'politicaprivacidade'])->name('politica.politicaprivacidade');

//PROJETOS

Route::get('/espacocoordenador',[MenuController::class,'espacocoordenador'])->name('projetos.espacocoordenador');
Route::get('/formulariosprojetos',[MenuController::class,'formulariosprojetos'])->name('projetos.formulariosprojetos');
Route::get('/menuprojetos',[MenuController::class,'menuprojetos'])->name('projetos.menuprojetos');
Route::get('/captacao',[MenuController::class,'captacao'])->name('projetos.captacao');
Route::get('/manualcompras',[MenuController::class,'manualcompras'])->name('projetos.manualcompras');
Route::get('/projetos',[MenuController::class,'projetos'])->name('projetos.projetos');


//QUEM SOMOS

Route::get('/administracao',[MenuController::class,'administracao'])->name('quemsomos.administracao');
Route::get('/identidadevisual',[MenuController::class,'identidadevisual'])->name('quemsomos.identidadevisual');
Route::get('/organograma',[MenuController::class,'organograma'])->name('quemsomos.organograma');
Route::get('/revistafapeu',[MenuController::class,'revistafapeu'])->name('quemsomos.revistafapeu');
Route::get('/sobre',[MenuController::class,'sobre'])->name('quemsomos.sobre');
Route::get('/estatuto',[MenuController::class,'estatuto'])->name('quemsomos.estatuto');
Route::get('/regimentointerno',[MenuController::class,'regimentointerno'])->name('quemsomos.regimentointerno');

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
Route::get('/projetostransparencia',[MenuController::class,'projetostransparencia'])->name('transparencia.projetostransparencia');
Route::get('/reltecnicosemestral',[MenuController::class,'reltecnicosemestral'])->name('transparencia.reltecnicosemestral');
Route::get('/noticias',[MenuController::class,'noticias'])->name('noticias.noticias');

//FALECONOSCO

Route::get('/contato',[MenuController::class,'contato'])->name('faleconosco.contato');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//PESQUISA

Route::get('/search', [NoticiasController::class, 'search'])->name('search');
Route::post('/posts', [NoticiasController::class, 'store'])->name('posts.store');

Route::get('/noticias', [NoticiasController::class, 'noticiasRecentes'])->name('noticias.recentes');

//ADMIN

Route::get('/login', [MenuController::class, 'verlogin'])->name('login.login');
Route::post('/login', [MenuController::class, 'login'])->name('login.login');

Route::middleware(['auth'])->group(function () {

    Route::get('/admin', [MenuController::class, 'menuadmin'])->name('admin.menu');
    
    Route::get('admin/adicionarnoticia', [AdminController::class, 'createNoticia'])->name('admin.adicionarnoticia');
    Route::post('noticias/store', [AdminController::class, 'storeNoticia'])->name('noticias.store');

    Route::get('admin/adicionarselecaopublica', [AdminController::class, 'createSelecaoPublica'])->name('admin.adicionarselecaopublica');
    Route::post('selecoespublicas/store', [AdminController::class, 'storeSelecaoPublica'])->name('selecoespublicas.store');

    Route::get('/admin/adicionarusuario', [AdminController::class, 'createUsuario'])->name('admin.createusuario');
    Route::post('/admin/adicionarusuario', [AdminController::class, 'adicionarUsuario'])->name('admin.adicionarusuario');
    
    Route::post('/', [AdminController::class, 'logout'])->name('logout');
});
