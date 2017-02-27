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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Image::class, function (Faker\Generator $faker) {

    return [
        'url' => str_random(15),
    ];
});

$factory->define(App\School::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'image_id' => function () {
            return factory(App\Image::class)->create()->id;
        }
    ];
});

$factory->define(App\Generation::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'school_id' => function () {
            return factory(App\School::class)->create()->id;
        },
        'image_id' => function () {
            return factory(App\Image::class)->create()->id;
        },
        'user_id' => random_int(1, 5)
    ];
});
