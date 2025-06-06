<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog.index');
});

Route::get('/portfolio', function () {
    return view('portfolio.index');
});

Route::get('/about', function () {
    return view('about');
});
