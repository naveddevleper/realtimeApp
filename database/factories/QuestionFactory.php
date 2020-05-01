<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\Model\Category;
use App\Model\Question;
use App\Model\Reply;
use App\Model\Likes;
use App\User;

$factory->define(Question::class, function (Faker $faker) {
   $title = $faker->sentence;
    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'body' => $faker->text,
        'category_id' => function () {
            return Category::all()->random();
        },
        'user_id' => function () {
            return \App\User::all()->random();
        }
        
    ];
});
