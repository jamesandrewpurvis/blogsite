<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/aboutme', function () {
    return view('aboutme');
})->name('aboutme');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

