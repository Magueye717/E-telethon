<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Donateur;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Donateur::class, function (Faker $faker) {
    $array = ['Passport', 'CNI', 'Autres'];
    return [
        'libelle' => $faker->name,
        'rc' => 'SN-RC-'.$faker->numberBetween(8),
        'ninea'=>'SARL-'.$faker->domainName,
        'type_identification'=>Arr::random($array),
        'numero_piece'=>'76666666666',
        'contact_id' => factory('App\Models\Contact')->create()->id,
        'user_id' => factory('App\User')->create()->id,
    ];
});
