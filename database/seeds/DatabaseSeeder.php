<?php

use Illuminate\Database\Seeder;
use App\Alumno;
use App\Empresa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CicloSeeder::class);
        factory(Alumno::class, 40)->create();
        factory(Empresa::class, 50)->create();
        $this->call(AlumnoEmpresaSeeder::class);
    }
}
