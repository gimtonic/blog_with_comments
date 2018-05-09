<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameMale,
        'post_id' => factory('App\Post')->create()->id,
        'description' => $faker->realText(),
    ];

});