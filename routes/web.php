<?php
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ActivityController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\DestinationController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*-------------------------------------frontend-----------------------------------start---------------*/



Route::get('/',[IndexController::class,'index']);
Route::prefix('home')->group(function(){
    Route::get('/travel',[HomeController::class,'travel'])->name('home.travel');
    Route::get('/agency',[HomeController::class,'agency'])->name('home.agency');
    Route::get('/beach',[HomeController::class,'beach'])->name('home.beach');
    Route::get('/countryside',[HomeController::class,'countryside'])->name('home.countryside');
    Route::get('/forest',[HomeController::class,'forest'])->name('home.forest');
    Route::get('/hiking',[HomeController::class,'hiking'])->name('home.hiking');
    Route::get('/resort',[HomeController::class,'resort'])->name('home.resort');
    Route::get('/tour',[HomeController::class,'tour'])->name('home.tour');
    Route::get('/yacht',[HomeController::class,'yacht'])->name('home.yacht');
});
Route::get('/aboutUs',[AboutController::class,'index'])->name('aboutUs');
Route::prefix('destination')->group(function(){
    Route::get('/',[DestinationController::class,'destination'])->name('destination.destination');
    Route::get('/details',[DestinationController::class,'destinationDetails'])->name('destination.details');

});
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::prefix('service')->group(function(){
    Route::get('/',[ServiceController::class,'service'])->name('services.services');
    Route::get('/details',[ServiceController::class,'serviceDetails'])->name('services.details');

});
Route::prefix('activities')->group(function(){
    Route::get('/',[ActivityController::class,'activities'])->name('activities.activities');
    Route::get('/details',[ActivityController::class,'activitiesDetails'])->name('activities.details');

});
Route::prefix('pages')->group(function(){
    Route::prefix('shop')->group(function(){
        Route::get('/',[ShopController::class,'shop'])->name('shop');
        Route::get('/details',[ShopController::class,'shop'])->name('shop.details');
    });
});


/*-------------------------------------frontend------------------------------------end--------------*/




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
