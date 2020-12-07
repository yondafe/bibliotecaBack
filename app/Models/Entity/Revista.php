<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Model;

class Revista extends Model
{
    protected $fillble = ['revista', 'titulo', 'edicao', 'totPag', 'editora'];

    protected $hidden = ['password', 'remember_token','updated_at','created_at'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'revistatabela';
}
