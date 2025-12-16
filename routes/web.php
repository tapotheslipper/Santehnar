<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Route;

// GENERAL
Route::get('/', [GeneralController::class, 'home'])->name('home');
Route::get('/about', [GeneralController::class, 'about'])->name('about');
Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');

// CATALOG
Route::get('catalog', [CatalogController::class, 'index'])->name('catalog.index');
