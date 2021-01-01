<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Resep;
use Faker\Generator as Faker;

$factory->define(Resep::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->realText(2000),
        'imageurl' => $faker->imageurl(750, 300, 'cats', true),
    ];
});
