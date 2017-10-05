<?php

use Faker\Generator as Faker;

$factory->define(App\Penerimaan::class, function (Faker $faker) {
    return [
        'user' => function(){
            return factory(App\User::class)->create()->name;
        },
        'keterangan' => $faker->paragraph(1),
        'profit' => $faker->randomFloat(0,1000000,99999999),
        'tahun' =>$faker->year(),
        'bulan' =>$faker->monthName()
    ];
});
