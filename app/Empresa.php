<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
	public function alumnos()
    {
        return $this->belongsToMany('App\Alumno')->withPivot('fechainicio', 'fechafin', 'valoracionalumno', 'valoracionempresa');
    }
}
