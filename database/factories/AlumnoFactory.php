<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumno;
use Faker\Generator as Faker;


$factory->define(Alumno::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('es_ES');
    return [
        'nif'=>$faker->dni,
        'nombre' => $faker->firstname,
        'apellido' => $faker->lastname,
        'fechanacimiento' => $faker->date($format = 'Y-m-d', $max = '-15 years'),//dateTimeBetween($startDate = '- 25 years', $endDate = '-15 years', 'Europe/Paris'),
        'direccion' => $faker->address,
        'telefono' => "6".rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9),
        'email' => $faker->email,
        'vehiculo'=> $faker->randomElement($array = array (0,1))
    ];
});
