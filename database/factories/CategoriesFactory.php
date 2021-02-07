<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Categories::class, function (Faker $faker) {
    return [
        'nama_kategori' => $faker->unique()->name,
        'slug' => Str::slug($faker->unique()->name,'-'),
    ];
});
