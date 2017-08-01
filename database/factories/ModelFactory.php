<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/*$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'username' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'lastname' => null,
        'firstname' => null,
        'remember_token' => str_random(10),
    ];
});*/

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    

    return [
        'nama_produk' => $faker->name,
        'jumlah_produk' => $faker->unique()->safeEmail,
        'nama_supplier' => $faker->name,
        'status_permintaan' => $faker->name,
        'tanggal_request' => $faker->date
        
    ];
});