<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\WorkController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/maintenance', function () {
    return view('components.maintenance');
})->name('works.maintenance');

Route::get('/works', [WorkController::class, 'index'])
    ->name('works.index');

Route::get('/works/sub/{subcategory:slug}', [WorkController::class, 'index'])
    ->name('works.subcategory');

Route::get('/works/product/{slug}', [WorkController::class, 'show'])
    ->name('works.show');

Route::get('/catalog', [CatalogController::class, 'index'])
    ->name('catalog.index');

Route::get('/catalog/sub/{subcategory:slug}', [CatalogController::class, 'index'])
    ->name('catalog.subcategory');

Route::get('/catalog/product/{slug}', [CatalogController::class, 'show'])
    ->name('catalog.show');