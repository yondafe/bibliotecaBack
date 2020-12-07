<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $fillble = ['nome', 'marca', 'modelo', 'processador', 'ram', 'hd', 'so'];

    protected $hidden = ['password', 'remember_token','updated_at','created_at'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'notebooktabela';
}
