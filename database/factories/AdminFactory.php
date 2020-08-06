<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'nama' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('secret'),
    ];
});