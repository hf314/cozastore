<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home')->name('home');

Route::get('/about', 'AboutController@about')->name('about');

Route::get('/blog', 'BlogController@blog')->name('blog');

Route::get('/contact', 'ContactController@contact')->name('contact');

Route::get('/features', 'FeaturesController@features')->name('features');

Route::get('/shop', 'ShopController@shop')->name('shop');
