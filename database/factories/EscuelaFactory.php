<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Escuela;
use Faker\Generator as Faker;

$factory->define(Escuela::class, function (Faker $faker) {


    return [

            'nombre'=> $faker->company(50),
            'direccion'=> $faker->address(50),
            'email'=> $faker->safeEmail(),
            'telefono'=> $faker->e164PhoneNumber(),
            'web'   => $faker->safeEmailDomain()

    ];
});
