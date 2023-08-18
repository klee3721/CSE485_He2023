<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
se Faker\Generator as Faker;
use App\Models\Channel;

$factory->define(Channel::class, function (Faker $faker) {
    return [
        'ChannelName' => $faker->unique()->word,
        'Description' => $faker->paragraph,
        'SubscribersCount' => $faker->numberBetween(100, 10000),
        'URL' => $faker->url,
    ];
});


