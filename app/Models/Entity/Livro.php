<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillble = ['autores', 'titulo', 'gereno', 'categoria', 'editora', 'ano', 'idioma', 'totPag', 'imagem', 'sinopse'];

    protected $hidden = ['password', 'remember_token','updated_at','created_at'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'livrotabela';
}
