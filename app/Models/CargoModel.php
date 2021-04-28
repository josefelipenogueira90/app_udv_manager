<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CargoModel extends Model
{
    protected $table='cargos';

    public function relationDepart()
    {
        return $this->hasOne('App\Models\DepartamentoModel','id','id_depart');
    }
}
