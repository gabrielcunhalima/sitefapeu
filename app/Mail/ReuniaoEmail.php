<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Reuniao;

class ReuniaoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $reuniao;
    public $isConfirmation;

    /**
     *
     * @param Reuniao $reuniao
     * @param bool $isConfirmation
     * @return void
     */
    public function __construct(Reuniao $reuniao, $isConfirmation = false)
    {
        $this->reuniao = $reuniao;
        $this->isConfirmation = $isConfirmation;
    }

    /**
     *
     * @return $this
     */
    public function build()
    {
        if ($this->isConfirmation) {
            return $this->subject('Confirmação de Solicitação de Reunião - FAPEU')
                       ->view('emails.reuniao-confirmacao');
        } else {
            return $this->subject('Nova Solicitação de Reunião - ' . $this->reuniao->assunto)
                       ->view('emails.reuniao-notificacao');
        }
    }
}