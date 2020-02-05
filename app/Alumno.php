<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public function empresas()
    {
        return $this->belongsToMany('App\Empresa')->withPivot('fechainicio', 'fechafin', 'valoracionalumno', 'valoracionempresa');
    }
}
