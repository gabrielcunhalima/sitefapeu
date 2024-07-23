<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InscritosExport implements FromArray, withHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $dados;

    public function __construct(array $dados)
    {
        $this->dados = $dados;
    }

    public function headings(): array
    {
        return [
            'N.Insc',
            'Nome Completo',
            'CPF',
            'E-Mail',
            'Telefone',
            'Instituição/Empresa',
            'Acessibilidade?',
            'PAGO?',
        ];
    }

    public function array(): array
    {
        return $this->dados;
    }
}
    