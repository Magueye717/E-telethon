<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contact;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Contact::class, function (Faker $faker) {
    $array = ['CEO', 'Assistant', 'Sécretaire', 'Autre'];
    return [
        'nom' => $faker->lastName,
        'prenom' => $faker->firstName(),
        'tel' => '77777777777',
        'email' => 'test@gmail.com',
        'poste' => Arr::random($array),
        'localite' => $faker->city,
    ];
});
