<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
 return view('frontend.Home');
});

Route::get('/contact', function () {
    return view('frontend.Contact');
})->name('contact');

Route::get('/services', function () {
    return view('frontend.services.Services');
})->name('services');

Route::get('/shop', function () {
    return view('frontend.shop.shop');
})->name('shop');
Route::get('/shop-details', function () {
    return view('frontend.shop.shop-details');
})->name('shop-details');

Route::get('/services-details', function () {
    return view('frontend.services.Services-Details');
})->name('services-details');

Route::get('/activities', function () {
    return view('frontend.activities.activities');
})->name('activities');

Route::get('/activities-details', function () {
    return view('frontend.activities.activities-details');
})->name('activities-details');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
