<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function confirmaInscricao($dados) {
        dd($dados);
        
        // Mail::send('emails.mail', $dados, function($message) use ($to_name, $to_email) {
        //     $message->to($to_email, $to_name)
        //             ->subject('[FAPEU] Inscrição em evento.');
        //     $message->from('eventos@fapeu.org.br','[FAPEU] Sistema de Eventos.');
        // });
    }
}
