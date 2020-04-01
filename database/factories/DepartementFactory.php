<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\departement;
use Faker\Generator as Faker;

$factory->define(departement::class, function (Faker $faker) {
    $dep = ['departement informatique','departement electrique','departement mec','departement eco'];
    return [
        //
        'label_d' => $faker->unique()->randomElement($dep),
        'created_at' => now(),
        'updated_at' =>now()
        
    ];
});
