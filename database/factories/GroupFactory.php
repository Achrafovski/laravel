<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Group;
use Faker\Generator as Faker;
use App\User;

$factory->define(Group::class, function (Faker $faker) {
    return [
        "user_id" => function() {
            return user::all()->random();
        },
        "name"=>$faker->word
    ];
});
