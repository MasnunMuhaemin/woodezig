<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/works', function () {
    return view('components.maintenance');
})->name('works.maintenance');