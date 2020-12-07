<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Model;

class Jornal extends Model
{
    protected $fillble = ['editora', 'data', 'edicao', 'cidade', 'site'];

    protected $hidden = ['password', 'remember_token','updated_at','created_at'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'jornaltabela';
}
