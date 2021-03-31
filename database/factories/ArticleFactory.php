<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $title = $faker->sentence();
    return [
        //
        "title" => $title,
        "description" => $faker->paragraph,
        "price" => $faker->numberBetween($min = 100, $max = 900),
    ];
});
