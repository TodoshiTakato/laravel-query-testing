<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker, $category) {
    return [
        'name' => $faker->unique()->word,
        'created_at' => $faker->dateTimeBetween('-4 months', 'now', null),
        'updated_at' => $faker->dateTimeBetween('-4 months','now', null),
    ];
});

