<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PesquisaController;
use App\Http\Controllers\MigrationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\SelecoesPublicasController;
use App\Http\Controllers\LoginController;

Route::get('/', [MenuController::class, 'home'])->name('homepage.home');
Route::get('/servicos', [MenuController::class, 'servicos'])->name('homepage.servicos');

//HOME

Route::get('/concursos',[MenuController::class,'concursos'])->name('homepage.concursos');
Route::get('/importacao',[MenuController::class,'importacao'])->name('homepage.importacao');
Route::get('/latic',[MenuController::class,'latic'])->name('homepage.latic');
Route::get('/nagefi',[MenuController::class,'nagefi'])->name('homepage.nagefi');

//COLABORADOR

Route::get('/acordocoletivo',[MenuController::class,'acordocoletivo'])->name('colaborador.acordocoletivo');
Route::get('/formularioscolaborador',[MenuController::class,'formularioscolaborador'])->name('colaborador.formularioscolaborador');
Route::get('/informerendimentos',[MenuController::class,'informerendimentos'])->name('colaborador.informerendimentos');
Route::get('/programainclusao',[MenuController::class,'programainclusao'])->name('colaborador.programainclusao');
Route::get('/vagasdisponiveis',[MenuController::class,'vagasdisponiveis'])->name('colaborador.vagasdisponiveis');
Route::get('/drhflow',[MenuController::class,'drhflow'])->name('colaborador.drhflow');
Route::get('/ADMFlow',[MenuController::class,'ADMFlow'])->name('colaborador.ADMFlow');
Route::get('/WebMail',[MenuController::class,'WebMail'])->name('colaborador.WebMail');
Route::get('/areaadministrativa',[MenuController::class,'areaadministrativa'])->name('colaborador.areaadministrativa');


//FORNECEDOR

Route::get('/dispensa',[MenuController::class,'dispensa'])->name('fornecedor.dispensa');
Route::get('/espacofornecedor',[MenuController::class,'espacofornecedor'])->name('fornecedor.espacofornecedor');
Route::get('/inexibilidade',[MenuController::class,'inexibilidade'])->name('fornecedor.inexibilidade');
Route::get('/menulicitacao',[MenuController::class,'menulicitacao'])->name('fornecedor.menulicitacao');

//LEGISLACAO

Route::get('/legislacao',[MenuController::class,'legislacao'])->name('legislacao.legislacao');
Route::get('/normas',[MenuController::class,'normas'])->name('legislacao.normas');

//POLITICA

Route::get('/anticorrupcao',[MenuController::class,'anticorrupcao'])->name('politica.anticorrupcao');
Route::get('/boaspraticas',[MenuController::class,'boaspraticas'])->name('politica.boaspraticas');
Route::get('/codigoconduta',[MenuController::class,'codigoconduta'])->name('politica.codigoconduta');
Route::get('/comites',[MenuController::class,'comites'])->name('politica.comites');
Route::get('/integridade',[MenuController::class,'integridade'])->name('politica.integridade');
Route::get('/politicacookies',[MenuController::class,'politicacookies'])->name('politica.politicacookies');
Route::get('/politicaprivacidade',[MenuController::class,'politicaprivacidade'])->name('politica.politicaprivacidade');

//PROJETOS

Route::get('/espacocoordenador',[MenuController::class,'espacocoordenador'])->name('projetos.espacocoordenador');
Route::get('/formulariosprojetos',[MenuController::class,'formulariosprojetos'])->name('projetos.formulariosprojetos');
Route::get('/menuprojetos',[MenuController::class,'menuprojetos'])->name('projetos.menuprojetos');
Route::get('/captacao',[MenuController::class,'captacao'])->name('projetos.captacao');
Route::get('/manualcompras',[MenuController::class,'manualcompras'])->name('projetos.manualcompras');
Route::get('/menuprojetos',[MenuController::class,'menuprojetos'])->name('projetos.menuprojetos');


//QUEM SOMOS

Route::get('/administracao',[MenuController::class,'administracao'])->name('quemsomos.administracao');
Route::get('/identidadevisual',[MenuController::class,'identidadevisual'])->name('quemsomos.identidadevisual');
Route::get('/organograma',[MenuController::class,'organograma'])->name('quemsomos.organograma');
Route::get('/revistafapeu',[MenuController::class,'revistafapeu'])->name('quemsomos.revistafapeu');
Route::get('/sobre',[MenuController::class,'sobre'])->name('quemsomos.sobre');
Route::get('/estatuto',[MenuController::class,'estatuto'])->name('quemsomos.estatuto');
Route::get('/regimentointerno',[MenuController::class,'regimentointerno'])->name('quemsomos.regimentointerno');
Route::get('/noticiasrecentes',[MenuController::class,'noticiasrecentes'])->name('noticias.noticiasrecentes');

//TRANSPARENCIA

Route::get('/avaliacaodesempenho',[MenuController::class,'avaliacaodesempenho'])->name('transparencia.avaliacaodesempenho');
Route::get('/compras',[MenuController::class,'compras'])->name('transparencia.compras');
Route::get('/menutransparencia',[MenuController::class,'menutransparencia'])->name('transparencia.menutransparencia');
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

//FALECONOSCO

Route::get('/contato',[MenuController::class,'contato'])->name('faleconosco.contato');
Route::get('/canaldenuncia',[MenuController::class,'canaldenuncia'])->name('faleconosco.canaldenuncia');
Route::post('/contato', [ContatoController::class, 'salvarContato'])->name('contato.salvar');

//NOTICIAS





Route::get('/paineladministrativo',[MenuController::class,'paineladministrativo'])->name('admin.menu');
Route::match(['get', 'post'], '/loginadm', [loginController::class, 'loginPost'])->name('admin.loginadm');
Route::get('/logoutadm', [LoginController::class, 'logout'])->name('admin.logoutadm');
Route::get('/login', [LoginController::class, 'login'])->name('admin.login');


//EDITAR NOTICIA:

Route::get('/editar', [MenuController::class, 'editarNoticias'])->name('noticias.editarnoticias');
Route::post('/noticias/editar/{id}', [MenuController::class, 'atualizarNoticia']);
Route::post('/noticias/visibilidade/{id}', [MenuController::class, 'alterarVisibilidade']);
Route::post('/noticias/excluir/{id}', [MenuController::class, 'excluirNoticia']);
Route::post('/noticias/update-imagem/{id}', [MenuController::class, 'atualizarImagem'])->name('noticias.updateImagem');
Route::get('/noticiaspost/{id?}', [MenuController::class, 'noticiaspost'])->name('noticias.noticiaspost');
Route::post('/noticiaspost/{id?}', [MenuController::class, 'noticiaspost'])->name('noticias.noticiaspost');

//CRIAR USUARIO
Route::get('/createusuario', [LoginController::class, 'createUsuario'])->name('admin.createusuario');
Route::post('/storeusuario', [LoginController::class, 'storeUsuario'])->name('admin.storeusuario');



Route::get('/{link}', [MenuController::class, 'noticiasleitura'])->name('noticias.noticiasleitura');