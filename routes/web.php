<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

Route::get('/', function () {
    return view('pages.signin');
});

Route::get('/signup', function () {
    return view('pages.signup');
})->name('signup');

Route::get('/home', function () {
    $contact = [];
    $faker = Faker::create();
    for($i = 0; $i < 10; $i++) {
        $contact[] = [  
            'nameMHS' => $faker->name,
            'nameKRY' => $faker->name
        ];
    }
    return view("pages.home.index", ['contacts' => $contact]);
})->name('home');
