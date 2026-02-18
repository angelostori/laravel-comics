<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $footerlinks = config('footerlinks');

    return view('home', compact('footerlinks'));
})->name("home");

Route::get('/details', function () {
    return view('comicDetails');
})->name("details");
