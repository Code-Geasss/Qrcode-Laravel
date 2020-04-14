<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AccountHistory;
use Faker\Generator as Faker;

$factory->define(AccountHistory::class, function (Faker $faker) {

    return [
        'account_id' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull,
        'message' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
