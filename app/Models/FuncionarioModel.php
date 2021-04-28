<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FuncionarioModel extends Model
{
    protected $table='funcionarios';

    public function relationUser()
    {
        return $this->hasOne('App\Models\UsuarioModel','id','id_user');
    }
}

