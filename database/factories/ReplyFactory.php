<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use App\Model\Category;
use App\Model\Question;
use App\Model\Reply;
use App\Model\Likes;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'question_id' => function () {
            return Question::all()->random();
        },
        'user_id' => function () {
            return \App\User::all()->random();
        },
    ];
});
