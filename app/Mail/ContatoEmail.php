<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;
    public $assunto;
    public $mensagem;
    public $email;

    // Construtor para passar os dados para a view
    public function __construct($nome, $assunto, $mensagem, $email)
    {
        $this->nome = $nome;
        $this->assunto = $assunto;
        $this->mensagem = $mensagem;
        $this->email = $email;
    }

    // Montando o e-mail
    public function build()
    {
        return $this->from($this->email, $this->nome)
                    ->subject('Contato Site - ' . $this->assunto)
                    ->view('emails.contatoemail');  
    }
}

