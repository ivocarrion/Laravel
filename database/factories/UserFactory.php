<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'Tecno Bravo',
        'email' => 'admin@admin.com',
        'email_verified_at' => now(),
        'is_admin' => true,
        'password' => '$2y$10$VmeO4U4XaYfuezx6VYsY9OpOpkwDCHrbWgXNcmRC0E9cOKPlq7e/6', // password
        'remember_token' => Str::random(10),
    ];
});
