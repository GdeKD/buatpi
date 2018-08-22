<?php

use Faker\Generator as Faker;

$factory->define(App\Forum::class, function (Faker $faker) {
    $title = $faker->title;
    $slug = str_slug($title,'-');
    return [
        'judul' => $title,
        'konten' => $faker->paragraph,
        'slug' => $slug,
        'userid' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});
