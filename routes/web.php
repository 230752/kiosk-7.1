<?php
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/set-preference/{preference}', [PreferenceController::class, 'setPreference'])->name('set_preference');

Route::get('/', function () {
    return view('Add');
});

Route::get('/start', function () {
    return view('start');
})->name('start');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/main', [ShopController::class, 'main'])->name('main');

Route::get('/shop', [ShopController::class, 'shop'])->name('shop');