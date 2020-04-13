<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Qrcode;
use Faker\Generator as Faker;

$factory->define(Qrcode::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'website' => $faker->word,
        'company_name' => $faker->word,
        'product_name' => $faker->word,
        'product_url' => $faker->word,
        'callback_url' => $faker->word,
        'qrcode_path' => $faker->word,
        'amount' => $faker->randomDigitNotNull,
        'status' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
