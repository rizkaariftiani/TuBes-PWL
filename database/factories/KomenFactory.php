<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Komen;
use Faker\Generator as Faker;

$factory->define(Komen::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->realText(2000)
        
    ];
});
