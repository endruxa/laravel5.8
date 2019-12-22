<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->text,
        'user_id' => rand(1, 15),
        'category_id' => rand(1, 30)
    ];
});
