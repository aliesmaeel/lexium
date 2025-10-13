<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
Route::get('/', function () {
    return view('homepage');
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

Route::get('/banking', function () {
    return view('banking'); 
})->name('banking');

Route::get('/services', function () {
    return view('services'); 
})->name('services');

Route::get('/industries', function () {
    return view('industries'); 
})->name('industries');

Route::get('/blog', function () {
    return view('blog'); 
})->name('blog');


Route::get('/blog_details', function () {
    return view('blog_details'); 
});

Route::get('/cost_calculator', function () {
    return view('cost_calculator'); 
});


Route::get('/all-countries', [CountryController::class, 'getCountries']);
