<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\salle;
use Faker\Generator as Faker;
use App\departement;

$factory->define(salle::class, function (Faker $faker) {
    $salle = ['c0.1','I0.1','I0.3','C0.4','I0.8','R.1','c4','c1','c9','c7','b1','b5','b8','b12','a55','c56'];
    return [
        //
        'label_s' => $faker->unique()->randomElement($salle),
        'id_dep' => departement::get('id')->random(),
        'created_at' => now(),
        'updated_at' =>now()

    ];
});
