<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Contact;
use Faker\Generator as Faker;
use App\User;

$factory->define(contact::class, function (Faker $faker) {
    return [
        "user_id" => function () {
            return User::all()->random();
        },
        "fullname" => $faker->name,
        "title" => $faker->title,
        "function" => $faker->jobTitle,
        "phone" => $faker->phoneNumber,
        "email" => $faker->freeEmail,
        "address" => $faker->address,
        "birthday" => $faker->dateTimeThisCentury->format('Y-m-d')
    ];
});
