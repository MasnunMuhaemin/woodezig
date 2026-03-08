<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/works', function () {
    return view('components.maintenance');
})->name('works.maintenance');

Route::get('/catalog/{subcategory:slug?}', [CatalogController::class, 'index'])
    ->name('catalog.index');