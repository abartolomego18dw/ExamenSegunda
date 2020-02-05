<?php

use Illuminate\Database\Seeder;

class AlumnoEmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fecha = date('Y/m/d');
  
        for ($i=0;$i<200;$i++) {
            $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
            $fechainicio = date ( 'Y/m/d' , $fechainicio);
      
            $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
            $fechafin = date ( 'Y/m/d' , $fechafin );
              DB::table('alumno_empresa')->insert([
              'alumno_id' => rand(1,40),
              'empresa_id' => rand(1,50),
              'valoracionalumno'=> rand (1,10),
              'valoracionempresa'=> rand (1,10),
              'fechainicio' => $fechainicio,
              'fechafin'  => $fechafin
            ]);
        }
    }
}
