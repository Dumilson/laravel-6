<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' =>$faker->randomFloat(2,0,9),
        'description'=>$faker->text
    ];
});
