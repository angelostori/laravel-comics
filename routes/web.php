<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $footerlinks = config('footerlinks');
    $comics = config('comics');
    return view('home', compact('footerlinks', 'comics'));
})->name("home");

Route::get('/details', function () {
    return view('comicDetails');
})->name("details");
