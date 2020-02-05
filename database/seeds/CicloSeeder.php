<?php

use Illuminate\Database\Seeder;

class CicloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ciclos')->insert([
        	'cod' => 'DAW',
        	'nombre' => 'Desarrollo de aplicaciones web'
        ]);
        DB::table('ciclos')->insert([
        	'cod' => 'ASIR',
        	'nombre' => 'Administración de sistemas informáticos en red'
        ]);
        DB::table('ciclos')->insert([
        	'cod' => 'SMR',
        	'nombre' => 'Sistemas microinformaticos y redes'
        ]);
    }
}
