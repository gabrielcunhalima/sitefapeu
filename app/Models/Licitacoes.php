<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Licitacoes extends Model
{
    protected $table = 'licitacoes';

    protected $fillable = [
        'ordem',
        'processo',
        'orgao',
        'projeto',
        'licitacao',
        'dataabertura',
        'objeto',
        'ataabertura',
        'contratoconvenio',
        'resultado',
        'datapublicacao',
        'tipo_licitacao',
    ];

    public $timestamps = true;

    public static function findOrCreate($id)
    {
        return $id ? self::findOrFail($id) : new self();
    }
}