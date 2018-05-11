<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {


    return [
        'title' => $faker->bank,
        'short_description' => $faker->realText(),
        'long_description' => $faker->realText($maxNbChars = 2000),
        'status' => \App\Constants\PostStatus::PUBLISHED()->getKey(),
    ];

});
