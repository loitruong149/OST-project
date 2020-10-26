<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Jobdetail;
use Faker\Generator as Faker;

$factory->define(App\Model\Jobdetail::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'image' => $faker->name,
        'content' => $faker->word,
        'jobtype_id' => random_int(1,4),
    ];
});
