<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\SolicitacaoRessarcimento;

class SolicitacaoRessarcimentoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $solicitacao;

    /**
     * Create a new message instance.
     *
     * @param SolicitacaoRessarcimento $solicitacao
     * @return void
     */
    public function __construct(SolicitacaoRessarcimento $solicitacao)
    {
        $this->solicitacao = $solicitacao;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nova Solicitação de Cálculo de Ressarcimento')
                    ->view('emails.solicitacao-ressarcimento')
                    ->attach(storage_path('app/public/' . $this->solicitacao->planilha_orcamentaria));
    }
}