<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Define o nome da tabela associada ao modelo
    protected $table = 'posts';

    // Define os campos que são preenchíveis em massa
    protected $fillable = ['titulo', 'corpo','tipo','link'];

    // Se você deseja proteger campos contra preenchimento em massa
    // protected $guarded = ['id'];
}
