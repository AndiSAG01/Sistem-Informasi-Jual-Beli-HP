<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {

    $codeFormat = 'USR.?'; // Format kode yang akan digunakan.
    $codeLength = 3; // Jumlah digit yang akan digunakan sebagai nomor urut
    $codeNumber = $faker->numberBetween(1, 999); // Generate a random number for the code

    $code = str_replace('?', str_pad($codeNumber, $codeLength, '0', STR_PAD_LEFT), $codeFormat);

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'code' => $code,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'role' => 'customer',
    ];
});

