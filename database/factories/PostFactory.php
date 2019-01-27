<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
		'user_id' => $faker->numberBetween(1,10),
		'category_id' => $faker->numberBetween(1,10),
		'title' => $faker->sentence,
		'description' => $faker->paragraph,
		'content' => $faker->text,
		'cover_img' => $faker->image,
		'status' => 1,
    ];
});
