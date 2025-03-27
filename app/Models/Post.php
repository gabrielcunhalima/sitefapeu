<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['titulo', 'corpo', 'link','imagem', 'imagem2', 'imagem3', 'imagem4', 'imagem5', 'visivel', 'created_at'];

    public $timestamps = true;
    public static function findOrCreate($id)
    {
        $obj = static::find($id);
        return $obj ?: new static;
    }
}