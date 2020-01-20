<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Task;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name' => $faker -> word,
        'description' => $faker -> sentence,
        'start_date' => $faker -> date
    ];

});
