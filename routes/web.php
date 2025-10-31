<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
Route::get('/',[\App\Http\Controllers\HomePageController::class, 'index'])->name('home');

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

Route::get('/banking', function () {
    return view('banking');
})->name('banking');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/industries', function () {
    return view('industries');
})->name('industries');

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.post');

Route::get('/cost_calculator', function () {
    return view('cost_calculator');
});

Route::post('/calculate-cost', [App\Http\Controllers\CostCalculatorController::class, 'calculate'])->name('calculate.cost');


Route::get('/all-countries', [CountryController::class, 'getCountries']);
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::post('/contact-submit', [App\Http\Controllers\HomePageController::class, 'submit'])->name('contact.submit');
