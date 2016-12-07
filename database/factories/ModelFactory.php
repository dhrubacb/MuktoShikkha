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

$factory->define(App\question::class, function (Faker\Generator $faker) {
    return [
        'ques_title' => $faker->name,
        'ques_detail' => $faker->text,
        'class' => "class6",
        'subject'=>"bangla"
        'chapter'=>"ch1"
        'remember_token' => str_random(10),
    ];
});
