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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Data::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'content' => "any content any content ",
        'screen_name' => 'screen 1',
        'description' => $faker->paragraph,
        'user_name' => $faker->name,
        'statuse' =>"statuse",
        'date'=>$faker->date,
        'image'=>'test.png'
    ];
});
