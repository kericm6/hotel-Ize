<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Route pour la page des chambres
Route::get('/chambres', function () {
    return view('chambres.index');
})->name('chambres.index');

Route::get('/services', function () {
    return view('services.index');
})->name('services.index');

Route::get('/restaurant', function () {
    return view('restaurant.index');
})->name('restaurant.index');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact.index');


