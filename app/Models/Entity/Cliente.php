<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillble = ['nome', 'email', 'cpf', 'celular', 'cep', 'logradouro', 'barro', 'cidade', 'uf'];

    protected $hidden = ['password', 'remember_token','updated_at','created_at'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'clientetabela';
}
