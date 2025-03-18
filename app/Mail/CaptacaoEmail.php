<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CaptacaoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;
    public $Email;
    public $OrgaoDeOrigem;
    public $FuncaoQueOcupa;
    public $CPF;
    public $CentroAcademico;
    public $DepartamentoLaboratorio;
    public $Telefone;
    public $AreaInteresse;

    public function __construct($nome, $Email, $OrgaoDeOrigem, $FuncaoQueOcupa, $CPF, $CentroAcademico, $DepartamentoLaboratorio, $Telefone, $AreaInteresse)
    {
        $this->nome = $nome;
        $this->Email = $Email;
        $this->OrgaoDeOrigem = $OrgaoDeOrigem;
        $this->FuncaoQueOcupa = $FuncaoQueOcupa;
        $this->CPF = $CPF;
        $this->CentroAcademico = $CentroAcademico;
        $this->DepartamentoLaboratorio = $DepartamentoLaboratorio;
        $this->Telefone = $Telefone;
        $this->AreaInteresse = $AreaInteresse;
    }

    public function build()
    {
        return $this->from($this->Email, $this->nome)
            ->subject('Contato Site - Área de Captação')
            ->view('emails.captacaoemail')
            ->with([
                'nome' => $this->nome,
                'Email' => $this->Email,
                'OrgaoDeOrigem' => $this->OrgaoDeOrigem,
                'FuncaoQueOcupa' => $this->FuncaoQueOcupa,
                'CPF' => $this->CPF,
                'CentroAcademico' => $this->CentroAcademico,
                'DepartamentoLaboratorio' => $this->DepartamentoLaboratorio,
                'Telefone' => $this->Telefone,
                'AreaInteresse' => $this->AreaInteresse
            ]);
    }
}
