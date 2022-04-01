<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home2');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
