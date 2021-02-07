<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Categories;

$factory->define(App\Articles::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'judul'=>Str::slug($faker->unique()->name,'-'),
        'body'=>$word,
        'gambar'=>$faker->unique()->name,
        'categories_id'=>function(){
            return Categories::all()->random();
        }
    ];
});
