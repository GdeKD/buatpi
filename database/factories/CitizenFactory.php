<?php

use Faker\Generator as Faker;

$factory->define(App\UsersIdentity::class, function (Faker $faker) {
    return [
        'nik' => function() {
          $randNumberLength = 16;  // length of your giant random number
          $randNumber = NULL;

          for ($i = 0; $i < $randNumberLength; $i++) {
            $randNumber .= rand(0, 9);  // add random number to growing giant random number
          }
          return $randNumber;
        },
        'nkk' => function() {
          $randNumberLength = 16;  // length of your giant random number
          $randNumber = NULL;

          for ($i = 0; $i < $randNumberLength; $i++) {
            $randNumber .= rand(0, 9);  // add random number to growing giant random number
          }
          return $randNumber;
        },
        'nama' => $faker->name,
        'tempat_lahir' => $faker->city,
        'tanggal_lahir' => $faker->dateTime,
        'agama' => '-',
        'alamat' => $faker->streetAddress

    ];
});
