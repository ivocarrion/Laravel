<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Alumno;
use Faker\Generator as Faker;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'nombre' => $this->faker->name(50),
        'apellidos' => $this->faker->lastName(50),
        'fecha_nac' => $this->faker->dateTimeBetween('2005-01-01', '2018-12-31')
        ->format('Y-m-d'), // outputs something like 17/09/2001
        'escuela_id' => rand(1,\App\Escuela::all()->count()),
        'ciudad' => $this->faker->city()
    ];
});
