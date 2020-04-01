<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\alerte;
use App\User;
use App\machine;
use Faker\Generator as Faker;

$factory->define(alerte::class, function (Faker $faker) {
    return [
        //
        'id_user' => User::get('id')->random(),
        'id_machine' => machine::get('id')->random(),
        // 'id_salle' => machine::join('machines','machines.id','=','alertes.id_machines')
        // ->where('alertes.id_machines','machines.id')->get('id_salle'),
        'etat' => $faker->randomElement(['virus','software','hardware']),
        'created_at' => now(),
        'updated_at' =>now()
    ];
});
