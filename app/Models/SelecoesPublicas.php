<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SelecoesPublicas extends Model
{
    protected $table = 'selecoespublicas';

    protected $fillable = ['id', 'ordem', 'processo', 'orgao', 'projeto', 'contratoconvenio', 'selecaopublica', 'dataabertura', 'objeto', 'ataabertura','resultado', 'datapublicacao'];
}
