<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Empresa;
use Faker\Generator as Faker;

$factory->define(Empresa::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('es_ES');
    return [
        'nombre' => $faker->company,
        'direccion' => $faker->streetAddress,
        'telefono' => $faker->phoneNumber,
        'email' => $faker->companyEmail,
        'web' => $faker->url//domainWord
    ];
});

