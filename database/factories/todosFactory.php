<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Todo;

$factory->define(todo::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(3),
        'desc'=>$faker->text(100),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'completed'=>true
    ];
});
