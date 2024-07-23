<?php

namespace App\Exports;

use App\Models\Eventos;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BoletoExport implements FromArray, withHeadings
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
            'NoProjeto',
            'ContaBancaria',
            'CPFCNPJ',
            'NomePessoa',
            'Valor',
            'Rubrica',
            'Complemento',
            'Data',
            'Operacao',
            'IDLancamento-Plan',
            'CodEvento',
            'Rubrica',
            'Subrubrica',
        ];
    }

    public function array(): array
    {
        return $this->dados;
    }
}
    