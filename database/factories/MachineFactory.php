<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\machine;
use App\salle;
use Faker\Generator as Faker;

$factory->define(machine::class, function (Faker $faker) {
   
    return [
        //
        'matricule' => 'PC.'.strval($faker->numberBetween(0,30)),
        'system' => $faker->randomElement(['windows','linux']),
        'id_salle' => salle::get('id')->random(),
        'created_at' => now(),
        'updated_at' =>now()
    ];
});
