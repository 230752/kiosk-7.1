<?php
use App\Http\Controllers\CartController;
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;



Route::get('/add-product/{product_id}', [CartController::class, 'addProduct'])->name('add_product');

Route::get('/', function () {
    return view('Add');
});

Route::get('/start', function () {
    return view('start');
})->name('start');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/end', function () {
    return view('end');
})->name('end');

Route::get('/main', [ShopController::class, 'main'])->name('main');

Route::get('/shop', [ShopController::class, 'shop'])->name('shop');

Route::get('/', [ShopController::class, 'add'])->name('add');

Route::post('/delete_preference', [PreferenceController::class, 'deletePreference'])->name('delete_preference');
Route::post('/set_preference', [PreferenceController::class, 'setPreference'])->name('set_preference');