<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use App\Models\Eventos_lote;
use App\Models\Inscricao;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\BoletoExport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class RetornoGetnetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function pix(Request $req) {
        // dd($req->all());

        $ret = $req->all();
        if ($ret['status'] == "APPROVED") {
            $idinsc = $ret['customer_id'];
            Inscricao::where('id',$idinsc)
                    ->update([
                        'StatusPagamento'                       => '1',
                        'transaction_timestamp'                 => Carbon::parse($ret['transaction_timestamp']),
                        'valorPago'                             => $ret['amount'],
                    ]);
        } else {
            dd($ret);
        }
    }

    public function cartao($id) {
        Inscricao::where('id',$id)
                ->update([
                    'StatusPagamento'                       => '1',
                    // 'authorization_timestamp'               => Carbon::parse($ret['authorization_timestamp']),
                    // 'valorPago'                             => $ret['amount'],
                    // 'qtdParcelas'                           => '',
                ]);

        return view('pagamento.confirmacartao');
    }

    public function cartao_API(Request $req) {
        // dd($req->all());

        $ret = $req->all();
        if ($ret['status'] == "APPROVED") {
            $idinsc = $ret['customer_id'];
            Inscricao::where('id',$idinsc)
                    ->update([
                        'StatusPagamento'                       => '1',
                        'authorization_timestamp'               => Carbon::parse($ret['authorization_timestamp']),
                        'valorPago'                             => $ret['amount'],
                        'qtdParcelas'                           => $ret['number_installments'],
                        'customer_id'
                    ]);
        } else {
            dd($ret);
        }

        return 'sucesso';
    }

    public function form() {
        return view('admin.financeiro.retornopix');
    }

    public function retorno(Request $req)    {
        $retorno = $req->all();

        $ip = $_SERVER["REMOTE_ADDR"];

        // Log da solicitação recebida para fins de depuração
        Log::info($ip . ' - Recebido callback de pagamento', $retorno);

        if (empty($retorno)) {
            Log::warning('Callback recebido sem dados!',$retorno);
            return response()->json(['error' => 'Dados ausentes'], 400);
        }

        try {
            // Verifica o tipo de pagamento e o status
            if ($retorno['payment_type'] == 'pix' && $retorno['status'] == "APPROVED") {
                $idinsc = $retorno['order_id'];
                Inscricao::where('id', $idinsc)
                    ->update([
                        'StatusPagamento' => '1',
                        'transaction_timestamp' => Carbon::parse($retorno['transaction_timestamp']),
                        'valorPago' => $retorno['amount'],
                        'ArqRetorno' => 'callback pix ' . Carbon::now(),
                        'customer_id' => $retorno['customer_id'],
                    ]);
                Log::info($ip . ' - Pagamento PIX aprovado para a inscrição: ' . $idinsc);
                $this->enviarEmailConfirmacao($idinsc);
            } elseif ($retorno['payment_type'] == 'credit' && $retorno['status'] == "APPROVED") {
                $idinsc = $retorno['order_id'];
                Inscricao::where('id', $idinsc)
                    ->update([
                        'StatusPagamento' => '1',
                        'authorization_timestamp' => Carbon::parse($retorno['authorization_timestamp']),
                        'valorPago' => $retorno['amount'],
                        'qtdParcelas' => $retorno['number_installments'],
                        'ArqRetorno' => 'callback credito ' . Carbon::now(),
                        'customer_id' => $retorno['customer_id'],
                    ]);
                Log::info($ip . ' - Pagamento por crédito aprovado para a inscrição: ' . $idinsc);
                $this->enviarEmailConfirmacao($idinsc);
            } else {
                Log::info($ip . ' - Tipo de pagamento ou status desconhecido', $retorno);
                return response()->json(['error' => 'Tipo de pagamento ou status desconhecido'], 400);
            }

            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            Log::error($ip . ' - Erro ao processar o callback de pagamento', [
                'error' => $e->getMessage(),
                'stack' => $e->getTraceAsString(),
                'data' => $retorno,
            ]);
            return response()->json(['error' => 'Erro interno'], 500);
        }
    }

    //email confirmacação
    public function enviarEmailConfirmacao($id) {
        $insc = Inscricao::where('id',$id)->first();
        $evento = Eventos::where('id',$insc->id_evento)->first();

        $dados = [ 
                    'nomeCompleto'      =>  $insc->nomeCompleto,
                    'email'             =>  $insc->email,
                    'nomeEvento'        =>  $evento->Titulo,
                    'idInscricao'       =>  $insc->id,
                    'Contato'           =>  $evento->Contato,
                ];
        
        Mail::send('emails.confirmada', $dados, function($message) use ($dados) {
            $message->to($dados['email'], $dados['nomeCompleto'])
                    ->subject('[FAPEU] Inscrição Confirmada.');
            $message->from('eventos@fapeu.org.br','[FAPEU] Sistema de Eventos.');
        });
    }
}
