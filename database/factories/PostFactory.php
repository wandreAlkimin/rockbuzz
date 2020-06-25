<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->text(1000),
        'cover_image' => "https://blogmedia.evbstatic.com/wp-content/uploads/wpmulti/sites/18/2014/07/24025147/6BaVde_t20_VKbpQ7-e1527130375674.jpg",
        'user_id' => 1,
    ];
});
