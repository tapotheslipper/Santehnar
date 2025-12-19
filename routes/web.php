<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// GENERAL
Route::get('/', [GeneralController::class, 'home'])->name('home');
Route::get('/home', [GeneralController::class, 'home']);
Route::get('/about', [GeneralController::class, 'about'])->name('about');
Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');
Route::post('/contact', [GeneralController::class, 'submitContact'])->name('contact.submit');

// AUTH
Route::get('/profile', [AuthController::class, 'profile'])->name('profile');

// PRODUCTS
Route::get('catalog', [CatalogController::class, 'index'])->name('catalog.index');
