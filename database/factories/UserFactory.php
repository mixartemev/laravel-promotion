<?php

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

/** @var Factory $factory */

$factory->define(Insta\User::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(Insta\Acc::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(['insta','fb','vk']),
        'login' => $faker->unique()->safeEmail,
        'pwd' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'user_id' => function(){
    	    return factory("Insta\User")->create()->id;
        },
    ];
});

$factory->define(Insta\Order::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(['like', 'subscribe', 'comment']),
	    'value' => $faker->randomNumber(),
        'acc_id' => function(){
    	    return factory("Insta\Acc")->create()->id;
        },
    ];
});
