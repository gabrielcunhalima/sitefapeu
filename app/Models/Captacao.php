<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Captacao extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'OrgaoDeOrigem', 'FuncaoQueOcupa', 'CPF', 'CentroAcademico','DepartamentoLaboratorio','Email','Telefone','AreaInteresse'];
}
