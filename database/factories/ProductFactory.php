<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
  $categories = App\Category::pluck('id')->toArray();
    return [
        'title' => Str::random(10),
        'price' => $faker -> numberBetween($min = 1000, $max = 2000),
        'category_id' => $faker -> randomElement($categories)
        // 'category_id' => $faker -> numberBetween($min = 1000, $max = 2000),//WAY 1
    ];
});
