<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('start');
});

Route::get('/category', function () {
    return view ('category');
}) ->name('category');