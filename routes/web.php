<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about'); 
})->name('about');

Route::get('/contact', function () {
    return view('contact'); 
})->name('contact');

Route::get('/business', function () {
    return view('business'); 
})->name('business');

Route::get('/visas', function () {
    return view('visas'); 
})->name('visas');
