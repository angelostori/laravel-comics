<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $footerlinks = config('footerlinks');
    $comics = config('comics');
    return view('home', compact('footerlinks', 'comics'));
})->name("home");

Route::get('/characters', function () {
    $footerlinks = config('footerlinks');
    $characters = config('characters');
    return view('characters', compact('footerlinks', 'characters'));
})->name("characters");

Route::get('/comics/{id}', function ($id) {

    $comics = config('comics');   // prende tutti i fumetti
    $comic = $comics[$id] ?? null; // prende quello cliccato

    if (!$comic) {
        abort(404); // se non esiste → pagina 404
    }

    return view('comic-detail', compact('comic'));
})->name('comic.show');
