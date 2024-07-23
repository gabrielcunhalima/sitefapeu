<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\http\Controllers\EventosController;
use App\http\Controllers\InscricaoController;
use App\http\Controllers\BoletoController;
use App\Http\Controllers\CartaoController;
use App\Http\Controllers\CoordenadorController;
use App\Http\Controllers\FinanceiroController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PixController;
use App\Http\Controllers\RetornoGetnetController;
use App\Http\Controllers\UsuarioController;

Route::get('/',[IndexController::class,'index'])->name('index');
//Route::get('/',[EventosController::class,'index'])->name('index');
Route::get('/eventos/lista',[EventosController::class,'index'])->name('eventos.lista');

Route::get('/testelista',[EventosController::class,'listaEventos'])->name('testelista');

//inscricoes
Route::get('/inscrever_evento/{id}',[InscricaoController::class,'form'])->name('inscricao.form');

Route::post('/inscricao/store',[InscricaoController::class,'store'])->name('inscricao.store');
Route::get('/inscricao/store', function () {
      return redirect()->route('index');
});

Route::post('/inscricao/carregarCupom',[InscricaoController::class,'carregarCupom'])->name('inscricao.carregarcupom');
Route::get('/inscricao/carregarCupom',function () {
      return redirect()->route('index');
});

Route::post('/inscricao/cadAcessibilidade',[InscricaoController::class,'cadastraAcessibilidade'])->name('inscricao.cad.acessibilidade');
Route::get('/inscricao/cadAcessibilidade', function () {
      return redirect()->route('index');
});

Route::post('/inscricao/upload',[InscricaoController::class,'upload'])->name('inscricao.upload');
Route::get('/inscricao/upload', function () {
      return redirect()->route('index');
});

Route::post('/inscricao/pagamento',[InscricaoController::class,'selectPagamento'])->name('inscricao.pagamento');
Route::get('/inscricao/pagamento',function () {
      return redirect()->route('index');
});

Route::post('/inscricao/pagamentocartao',[InscricaoController::class,'pagamentoCartao'])->name('inscricao.pagcartao');
Route::get('/inscricao/pagamentocartao',function () {
      return redirect()->route('index');
});


Route::get('/inscricao/acessibilidade',[InscricaoController::class,'formAcessibilidade'])->name('inscricao.acessibilidade');

Route::get('/inscricao/msg',[InscricaoController::class,'msg'])->name('inscricao.msg');

Route::get('/boleto',[InscricaoController::class,'boleto'])->name('inscricao.boleto');

Route::post('/login', [LoginController::class, 'loginPost'])->name('login');
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('api/municipios',[InscricaoController::class,'getMunicipios'])->name('municipios.lista');
Route::get('api/municipios', function () {
      return redirect()->route('index');
});

Route::post('api/estados',[InscricaoController::class,'getEstados'])->name('estados.lista');
Route::get('api/estados/{id}',[InscricaoController::class,'getEstados'])->name('estados.lista');

Route::get('pagamento/confirma/{id}',[InscricaoController::class,'confirmaPagamento'])->name('confirma.pagamento');
// Route::post('pagamento/confirma/',[InscricaoController::class,'confirmaPagamento'])->name('confirma.pagamento');

Route::get('/consulta/inscricao',[InscricaoController::class,'consultaInscricao'])->name('consulta.inscricao');
Route::post('/lista/inscricao',[InscricaoController::class,'listaInscricaoCpf'])->name('listainsc.cpf');

Route::get('boleto/gerar/{id}',[InscricaoController::class,'gerarBoleto'])->name('boleto.gerar');

Route::group(['middleware' => 'auth'], function () {
      Route::post('/boleto/retorno',[BoletoController::class,'retorno'])->name('boleto.retorno');
      Route::get('/boleto',[BoletoController::class,'index'])->name('boleto.index');
      Route::post('/boleto/carrega',[BoletoController::class,'carrega'])->name('boleto.carrega');
      Route::get('/boleto/carrega',[BoletoController::class,'carrega'])->name('boleto.carrega');
      
      Route::get('/boleto/upload',[BoletoController::class,'upload'])->name('boleto.upload');
      
      Route::get('/pix',[PixController::class,'form'])->name('pix.baixa');
      Route::post('/pix/carrega',[PixController::class,'carrega'])->name('pix.carrega');
      Route::post('/pix/retorno',[PixController::class,'retorno'])->name('pix.retorno');
      
      Route::get('/cartao',[CartaoController::class,'form'])->name('cartao.baixa');
      Route::post('/cartao/carrega',[CartaoController::class,'carrega'])->name('cartao.carrega');
      Route::post('/cartao/retorno',[CartaoController::class,'retorno'])->name('cartao.retorno');
      
      Route::get('/admin/financeiro',[FinanceiroController::class,'index'])->name('financeiro.index');
      Route::get('/admin/financeiro/boleto',[BoletoController::class,'index'])->name('financeiro.boleto');
      
      Route::get('/admin',[AdminController::class,'index'])->name('admin.index');

      Route::get('/admin/coord',[CoordenadorController::class,'painel'])->name('coord.painel');

      Route::get('/admin/coord/eventos',[CoordenadorController::class,'meusEventos'])->name('coord.eventos');

      Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

      Route::get('/admin/painel',[AdminController::class,'painel'])->name('admin.painel');

      Route::get('/admin/listaeventos/',[AdminController::class,'listaEventos'])->name('admin.eventos.lista');

      Route::get('/admin/listainscritos/{idevento}',[InscricaoController::class,'listaInscrito'])->name('admin.lista.inscritos');
      Route::get('/admin/listainscritos/detalhes/{id}',[InscricaoController::class,'detalhesAcessibilidade'])->name('admin.lista.inscritos.acessibilidade');

      Route::get('/admin/avaliar/{idevento}',[AdminController::class,'avaliarEvento'])->name('admin.eventos.avaliar');

      Route::get('/admin/listapendente',[AdminController::class,'listaPendente'])->name('admin.lista.pendente');

      Route::get('/admin/aprovar/{idevento}',[AdminController::class,'aprovarEvento'])->name('admin.eventos.aprovar');
      Route::get('/admin/rejeitar/{idevento}',[AdminController::class,'rejeitarEvento'])->name('admin.eventos.aprovar');

      Route::get('/evento/detalhes/{idevento}',[EventosController::class,'detalhesEventos'])->name('eventos.detalhes');

      Route::get('/inscricao/confirmar/{id}',[InscricaoController::class,'confirmarInscricao'])->name('inscricao.confirmar');
      Route::get('/inscricao/remover/{id}',[InscricaoController::class,'removerInscricao'])->name('inscricao.confirmar');
      
      // ROTAS PRA CADASTRO DE EVENTOS
      Route::get('/eventos/novoevento',[EventosController::class,'novoevento'])->name('eventos.novo');

      Route::post('/eventos/cadastarevento',[EventosController::class,'cadastrarEvento'])->name('eventos.cadastrar');
      Route::get('/eventos/cadastarevento',[AdminController::class,'painel'])->name('eventos.cadastrar');

      Route::post('/eventos/cadastrareventoconfig',[EventosController::class,'cadastrarEventoConfig'])->name('eventos.config');
      Route::get('/eventos/cadastrareventoconfig',[AdminController::class,'painel'])->name('eventos.config');

      Route::post('/eventos/cadastrareventovagas',[EventosController::class,'cadastrarEventoVagas'])->name('eventos.vagas');
      Route::get('/eventos/cadastrareventovagas',[EventosController::class,'cadastrarEventoVagas'])->name('eventos.vagas');
      
      
      Route::get('/eventos/eventovagasdeletar/{idevento}/{id}',[EventosController::class,'eventosVagasDeletar'])->name('eventos.vagas.deletar');
      Route::get('/eventos/eventolotesdeletar/{idevento}/{id}',[EventosController::class,'eventosLotesDeletar'])->name('eventos.vagas.deletar');      
      Route::get('/eventos/eventocupomdeletar/{idevento}/{id}',[EventosController::class,'eventosCupomDeletar'])->name('eventos.cupom.deletar');
      
      Route::post('/eventos/cadastrareventolote',[EventosController::class,'cadastrarEventoLote'])->name('eventos.lotes');
      Route::get('/eventos/formeventolote/{id}',[EventosController::class,'formEventoLote'])->name('eventos.formlotes');

      Route::post('/eventos/cadastrareventocupom',[EventosController::class,'cadastrarEventoCupom'])->name('eventos.cupom');
      Route::get('/eventos/formeventocupom/{id}',[EventosController::class,'formEventosCupom'])->name('eventos.formcupom');

      

      // ROTAS PRA EDITAR EVENTOS
      Route::get('/eventos/editar/{idevento}',[EventosController::class,'formEditEvento'])->name('eventos.formEditar');

      Route::post('/eventos/editarevento',[EventosController::class,'editarEvento'])->name('eventos.editar');
      Route::get('/eventos/editarevento',[AdminController::class,'painel'])->name('eventos.editar');

      Route::post('/eventos/editareventoconfig',[EventosController::class,'editarEventoConfig'])->name('eventos.editconfig');
      Route::get('/eventos/editareventoconfig',[AdminController::class,'painel'])->name('eventos.editconfig');

      Route::post('/eventos/editareventovagas',[EventosController::class,'cadastrarEventoVagas'])->name('eventos.vagas');
      Route::get('/eventos/editareventovagas',[EventosController::class,'cadastrarEventoVagas'])->name('eventos.vagas');
            
      Route::post('/eventos/editareventolote',[EventosController::class,'cadastrarEventoLote'])->name('eventos.lotes');
      Route::get('/eventos/formeventolote/{id}',[EventosController::class,'formEventoLote'])->name('eventos.formlotes');


      // CONTROLE DE USUARIOS
      
      Route::get('/usuario/novo',[UsuarioController::class,'novo'])->name('usuario.novo');
      Route::post('/usuario/cadastrar',[UsuarioController::class,'cadastrar'])->name('usuario.cadastrar');

      
      //GERAR LISTA INSCRITOS
      Route::get('/inscritos/{id}',[InscricaoController::class,'gerarXLS'])->name('inscricao.lista.xls');

}); 




//retorno callback getnet

Route::get('/getnet/retorno',[RetornoGetnetController::class,'retorno'])->name('retorno.getnet');
Route::get('/getnet/pix',[RetornoGetnetController::class,'pix'])->name('retorno.pix');
Route::get('/getnet/cartao/{id}',[RetornoGetnetController::class,'cartao'])->name('retorno.cartao');
Route::get('/getnet/cartaoapi/',[RetornoGetnetController::class,'cartao_API'])->name('retorno.cartao');


Route::get('/pagamento/aguardando/{id}',[InscricaoController::class,'aguardandopgto'])->name('pagamento.aguardando');
/* 

      EXEMPLO RETORNO URL:

      //APPROVED
      https://SEU_HOST/SEU_SERVICE?
            payment_type=pix&
            customer_id=1234987&
            order_id=DEV-1588877212&
            payment_id=41f67a08-7831-4e1b-be2b-9432c0a3309c&
            amount=1234&
            status=APPROVED&
            transaction_id=123412341234123&
            transaction_timestamp=2020-10-11T13%3A43%3A47Z&
            receiver_psp_name=PSP%20BANCO%20XYZ&
            receiver_psp_code=4321&
            receiver_name=jane%20doe&
            receiver_cnpj=null&
            receiver_cpf=46304398034&
            terminal_nsu=123456789

      //DENIED
      https://SEU_HOST/SEU_SERVICE?
            payment_type=pix&
            customer_id=1234876&
            order_id=DEV-1588877212&
            payment_id=41f67a08-7831-4e1b-be2b-9432c0a3309c&
            amount=1234&
            status=DENIED&
            transaction_id=123412341234123&
            transaction_timestamp=2020-10-11T13%3A43%3A47Z&
            terminal_nsu=123456789&
            description_detail=Pagamento+Negado+pelo+PSP+%28AF-88%29

      //ERROR
      https://SEU_HOST/SEU_SERVICE?
            payment_type=pix&
            customer_id=1234876&
            order_id=DEV-1588877212&
            payment_id=41f67a08-7831-4e1b-be2b-9432c0a3309c&
            amount=1234&
            status=ERROR&
            transaction_id=123412341234123&
            transaction_timestamp=2020-10-11T13%3A43%3A47Z&
            terminal_nsu=123456789&
            description_detail=Pagamento+Negado+pelo+PSP+%28AF-88%29


      //CARTAO - APPROVED
      https://SEU_HOST/SEU_SERVICE?
            payment_type=credit&
            customer_id=0d982d8f-d36e-474c-b233-37039d587f23&
            order_id=DEV-1598272595&
            payment_id=3fc70e99-cc9b-489d-a8a9-04b5e6e623b0&
            amount=846&
            status=APPROVED&
            number_installments=1&
            acquirer_transaction_id=000099713751&
            authorization_timestamp=2020-08-24T12%3A36%3A41.000Z&
            brand=visa&
            terminal_nsu=031575&
            authorization_code=9190383360902371      

      //CARTAO - DENIED
      https://SEU_HOST/SEU_SERVICE?
            payment_type=credit&
            customer_id=af7aeba0-24c6-43e7-935d-c551bf7371ab&
            order_id=DEV-1598280178&
            payment_id=c205a63e-682a-410d-aefc-a43dba282cae&
            amount=922&
            status=DENIED&
            number_installments=1&
            acquirer_transaction_id=000119713961&
            terminal_nsu=000000&
            authorization_code=3523733431102371&
            description_detail=CARTAO%20INVALIDO%20%5BECOM%20-%20T8%5D&
            error_code=PAYMENTS-002

*/




// // https://loja.getnet.com.br/api/v1/callbacks/payments/credit?
// payment_type=credit
// &customer_id=116
// &order_id=116
// &payment_id=1fb4e8d5-7b35-496d-8329-e06a48288f25
// &amount=1000
// &status=APPROVED
// &number_installments=5
// &acquirer_transaction_id=000105751710
// &authorization_timestamp=2024-06-13T13%3A06%3A49.000Z
// &brand=mastercard
// &terminal_nsu=592499
// &authorization_code=406511945061013580