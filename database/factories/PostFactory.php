<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (\Faker\Generator $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'title' => $faker->sentence,
        'content' => $faker->paragraph(4),
    ];
});
