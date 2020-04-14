<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Account;
use Faker\Generator as Faker;

$factory->define(Account::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'balance' => $faker->randomDigitNotNull,
        'total_credit' => $faker->randomDigitNotNull,
        'total_debit' => $faker->randomDigitNotNull,
        'withdraw_method' => $faker->word,
        'payment_email' => $faker->word,
        'bank_name' => $faker->word,
        'bank_branch' => $faker->word,
        'bank_account' => $faker->word,
        'applied_for_payout' => $faker->randomDigitNotNull,
        'paid' => $faker->randomDigitNotNull,
        'last_date_applied' => $faker->word,
        'last_date_paid' => $faker->word,
        'country' => $faker->word,
        'other_details' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
