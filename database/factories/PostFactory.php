<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Color;
use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'color_id'  => Color::all()->random()->id,
        'title'     => $faker->word(),
        'body'      => $faker->paragraph()
    ];
});
