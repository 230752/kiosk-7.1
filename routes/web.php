<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CookieController;

Route::get('/set-preference/{preference}', [CookieController::class, 'setPreference'])->name('set_preference');

Route::get('/', function () {
    return view('Add');
});

Route::get('/start', function () {
    return view('start');
})->name('start');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');