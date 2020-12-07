<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    protected $fillble = ['nomeAlbum', 'cantor', 'anoAlbum', 'qFaixa', 'material'];

    protected $hidden = ['password', 'remember_token','updated_at','created_at'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'musicatabela';
}
