<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/driving-courses', function () {
    return view('driving-courses');
})->name('driving-courses');

Route::get('/FAQ', function () {
    return view('FAQ');
})->name('FAQ');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
