<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    protected $table='usuarios';

    public function relationFuncio()
    {
        return $this->hasOne('App\Models\FuncionarioModel','id_user');
    }
}
