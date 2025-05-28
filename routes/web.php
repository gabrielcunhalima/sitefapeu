<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CaptacaoController;
use App\Http\Controllers\CalculoController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\LicitacaoController;
use App\Http\Controllers\RessarcimentoController;
use App\Http\Controllers\LoginController;

Route::get('/', [MenuController::class, 'home'])->name('homepage.home');
Route::get('/servicos', [MenuController::class, 'servicos'])->name('homepage.servicos');

//HOME

Route::get('/concursos', [MenuController::class, 'concursos'])->name('homepage.concursos');
Route::get('/importacao', [MenuController::class, 'importacao'])->name('homepage.importacao');
Route::get('/latic', [MenuController::class, 'latic'])->name('homepage.latic');
Route::get('/nagefi', [MenuController::class, 'nagefi'])->name('homepage.nagefi');

//COLABORADOR

Route::get('/acordocoletivo', [MenuController::class, 'acordocoletivo'])->name('colaborador.acordocoletivo');
Route::get('/formularioscolaborador', [MenuController::class, 'formularioscolaborador'])->name('colaborador.formularioscolaborador');
Route::get('/informerendimentos', [MenuController::class, 'informerendimentos'])->name('colaborador.informerendimentos');
Route::get('/programainclusao', [MenuController::class, 'programainclusao'])->name('colaborador.programainclusao');
Route::get('/vagasdisponiveis', [MenuController::class, 'vagasdisponiveis'])->name('colaborador.vagasdisponiveis');
Route::get('/drhflow', [MenuController::class, 'drhflow'])->name('colaborador.drhflow');
Route::get('/ADMFlow', [MenuController::class, 'ADMFlow'])->name('colaborador.ADMFlow');
Route::get('/WebMail', [MenuController::class, 'WebMail'])->name('colaborador.WebMail');
Route::get('/areaadministrativa', [MenuController::class, 'areaadministrativa'])->name('colaborador.areaadministrativa');

//FORNECEDOR
Route::get('/selecoespublicas', [LicitacaoController::class, 'listarSelecaoPublica'])->name('fornecedor.selecoespublicas');
Route::get('/dispensa', [LicitacaoController::class, 'listarDispensa'])->name('fornecedor.dispensa');
Route::get('/inexigibilidade', [LicitacaoController::class, 'listarInexigibilidade'])->name('fornecedor.inexigibilidade');
Route::get('/menulicitacao', [MenuController::class, 'menulicitacao'])->name('fornecedor.menulicitacao');
Route::get('/espacofornecedor', [MenuController::class, 'espacofornecedor'])->name('fornecedor.espacofornecedor');

//LEGISLACAO

Route::get('/legislacao', [MenuController::class, 'legislacao'])->name('legislacao.legislacao');
Route::get('/normas', [MenuController::class, 'normas'])->name('legislacao.normas');

//POLITICA

Route::get('/anticorrupcao', [MenuController::class, 'anticorrupcao'])->name('politica.anticorrupcao');
Route::get('/boaspraticas', [MenuController::class, 'boaspraticas'])->name('politica.boaspraticas');
Route::get('/codigoconduta', [MenuController::class, 'codigoconduta'])->name('politica.codigoconduta');
Route::get('/comites', [MenuController::class, 'comites'])->name('politica.comites');
Route::get('/integridade', [MenuController::class, 'integridade'])->name('politica.integridade');
Route::get('/politicacookies', [MenuController::class, 'politicacookies'])->name('politica.politicacookies');
Route::get('/politicaprivacidade', [MenuController::class, 'politicaprivacidade'])->name('politica.politicaprivacidade');
Route::get('/lgpd', [MenuController::class, 'lgpd'])->name('politica.lgpd');

//PROJETOS

Route::get('/espacocoordenador', [MenuController::class, 'espacocoordenador'])->name('projetos.espacocoordenador');
Route::get('/formulariosprojetos', [MenuController::class, 'formulariosprojetos'])->name('projetos.formulariosprojetos');
Route::get('/menuprojetos', [MenuController::class, 'menuprojetos'])->name('projetos.menuprojetos');
Route::get('/captacao', [MenuController::class, 'captacao'])->name('projetos.captacao');
Route::post('/captacao', [CaptacaoController::class, 'salvarCaptacao'])->name('captacao.salvar');
Route::get('/manualcompras', [MenuController::class, 'manualcompras'])->name('projetos.manualcompras');
Route::get('/menuprojetos', [MenuController::class, 'menuprojetos'])->name('projetos.menuprojetos');
Route::get('/instituicoesapoiadas', [MenuController::class, 'instituicoesapoiadas'])->name('projetos.instituicoesapoiadas');
Route::get('/calculoressarcimento', [MenuController::class, 'calculoressarcimento'])->name('projetos.calculoressarcimento');
Route::get('/orientacoescontato', [MenuController::class, 'orientacoescontato'])->name('projetos.orientacoescontato');
Route::post('/agendar-reuniao', [ContatoController::class, 'agendarReuniao'])->name('contato.agendarReuniao');
Route::get('/calculoressarcimento', [RessarcimentoController::class, 'index'])->name('projetos.calculoressarcimento');
Route::post('/calculoressarcimento', [RessarcimentoController::class, 'store'])->name('calcular.ressarcimento');

//QUEM SOMOS

Route::get('/administracao', [MenuController::class, 'administracao'])->name('quemsomos.administracao');
Route::get('/identidadevisual', [MenuController::class, 'identidadevisual'])->name('quemsomos.identidadevisual');
Route::get('/organograma', [MenuController::class, 'organograma'])->name('quemsomos.organograma');
Route::get('/revistafapeu', [MenuController::class, 'revistafapeu'])->name('quemsomos.revistafapeu');
Route::get('/sobre', [MenuController::class, 'sobre'])->name('quemsomos.sobre');
Route::get('/estatuto', [MenuController::class, 'estatuto'])->name('quemsomos.estatuto');
Route::get('/regimentointerno', [MenuController::class, 'regimentointerno'])->name('quemsomos.regimentointerno');
Route::get('/noticiasrecentes', [MenuController::class, 'noticiasrecentes'])->name('noticias.noticiasrecentes');

//TRANSPARENCIA

Route::get('/avaliacaodesempenho', [MenuController::class, 'avaliacaodesempenho'])->name('transparencia.avaliacaodesempenho');
Route::get('/compras', [MenuController::class, 'compras'])->name('transparencia.compras');
Route::get('/menutransparencia', [MenuController::class, 'menutransparencia'])->name('transparencia.menutransparencia');
Route::get('/demonstracoescontabeis', [MenuController::class, 'demonstracoescontabeis'])->name('transparencia.demonstracoescontabeis');
Route::get('/faq', [MenuController::class, 'faq'])->name('transparencia.faq');
Route::get('/fiscal_auditorias', [MenuController::class, 'fiscal_auditorias'])->name('transparencia.fiscal_auditorias');
Route::get('/habilitacaojuridica', [MenuController::class, 'habilitacaojuridica'])->name('transparencia.habilitacaojuridica');
Route::get('/menutransparencia', [MenuController::class, 'menutransparencia'])->name('transparencia.menutransparencia');
Route::get('/pagamentos', [MenuController::class, 'pagamentos'])->name('transparencia.pagamentos');
Route::get('/relanualgestao', [MenuController::class, 'relanualgestao'])->name('transparencia.relanualgestao');
Route::get('/projetostransparencia', [MenuController::class, 'projetostransparencia'])->name('transparencia.projetostransparencia');
Route::get('/reltecnicosemestral', [MenuController::class, 'reltecnicosemestral'])->name('transparencia.reltecnicosemestral');

//FALECONOSCO

Route::get('/contato', [MenuController::class, 'contato'])->name('faleconosco.contato');
Route::get('/canaldenuncia', [MenuController::class, 'canaldenuncia'])->name('faleconosco.canaldenuncia');
Route::post('/contato', [ContatoController::class, 'salvarContato'])->name('contato.salvar');

//AREA ADMINISTRATIVA


Route::get('/paineladministrativo', [MenuController::class, 'paineladministrativo'])->name('admin.menu');
Route::match(['get', 'post'], '/loginadm', [loginController::class, 'loginPost'])->name('admin.loginadm');
Route::get('/logoutadm', [LoginController::class, 'logout'])->name('admin.logoutadm');
Route::get('/login', [LoginController::class, 'login'])->name('admin.login');

//EDITAR NOTICIA

Route::get('/editar', [MenuController::class, 'editarNoticias'])->name('noticias.editarnoticias');
Route::post('/noticias/editar/{id}', [MenuController::class, 'atualizarNoticia']);
Route::post('/noticias/visibilidade/{id}', [MenuController::class, 'alterarVisibilidade']);
Route::post('/noticias/excluir/{id}', [MenuController::class, 'excluirNoticia']);
Route::post('/noticias/update-imagem/{id}/{numero?}', [MenuController::class, 'atualizarImagem'])->name('noticias.updateImagem');
Route::post('/noticias/excluir-imagem/{id}/{imagem}', [MenuController::class, 'deleteImage'])->name('noticias.deleteImagem');
Route::any('/noticiaspost/{id?}', [MenuController::class, 'noticiaspost'])->name('noticias.noticiaspost');

//LICITACOES

Route::get('/licitacoes/form/{id?}', [LicitacaoController::class, 'form'])->name('licitacoes.form');
Route::post('/licitacoes/save', [LicitacaoController::class, 'save'])->name('licitacoes.save');
Route::get('/licitacoes/listar', [LicitacaoController::class, 'listar'])->name('licitacoes.listar');
Route::delete('/licitacoes/excluir/{id}', [LicitacaoController::class, 'excluir'])->name('licitacoes.excluir');

//CRIAR USUARIO
Route::get('/createusuario', [LoginController::class, 'createUsuario'])->name('admin.createusuario');
Route::post('/storeusuario', [LoginController::class, 'storeUsuario'])->name('admin.storeusuario');



Route::get('/noticias/{link}', [MenuController::class, 'noticiasleitura'])->name('noticias.noticiasleitura');


Route::get('/calculorpabruto', [CalculoController::class, 'formbruto'])->name('calculorpabruto.form');
Route::post('/calculorpabruto', [CalculoController::class, 'calcularBruto'])->name('calculorpabruto.processar');
Route::get('/calculorpaliquido', [CalculoController::class, 'formliquido'])->name('calculorpaliquido.form');
Route::post('/calculorpaliquido', [CalculoController::class, 'calcularliquido'])->name('calculorpaliquido.processar');
Route::get('/calculo', [MenuController::class, 'calculo'])->name('calculo.menu');