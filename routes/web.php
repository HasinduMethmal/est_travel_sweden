<?php

use App\Http\Controllers\backend\Back_BlogController;
use App\Http\Controllers\backend\Back_DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\Back_GuiderController;
use App\Http\Controllers\backend\Back_PackageController;
use App\Http\Controllers\backend\Back_DestinationController;
use App\Http\Controllers\backend\Back_GalleryController;
use App\Http\Controllers\backend\Back_Service_Controller;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\BooknowController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\DestinationController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\PricePackageController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\TourguideController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\Auth\UserAuthController;
use App\Http\Controllers\backend\Auth\AdminAuthController;
use App\Http\Controllers\Frontend\DashboardController;

/*--------------------------------frontend------------------------------------*/

Route::prefix('user')->group(function(){
    Route::get('/', [UserAuthController::class, 'showLoginForm'])->name('user.loginForm');
    Route::post('/login', [UserAuthController::class, 'login'])->name('user.login');
    Route::post('/logout', [UserAuthController::class, 'logout'])->name('user.logout');
    Route::get('/signup', [UserAuthController::class, 'showSignupForm'])->name('user.signupForm');
    Route::post('/signup', [UserAuthController::class, 'register'])->name('user.signup');
});

Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/index/{id}',[DashboardController::class,'index'])->name('user.index');
});

Route::get('/booking', [BookingController::class, 'show'])->name('booking');

Route::get('/',[IndexController::class,'index']);

Route::get('/aboutUs',[AboutController::class,'index'])->name('aboutUs');

Route::get('/gallery',[GalleryController::class,'index'])->name('gallery');

Route::get('/booknow',[BooknowController::class,'index'])->name('booknow');

Route::prefix('destination')->group(function(){
    Route::get('/',[DestinationController::class,'destination'])->name('destination.destination');
    Route::get('/details/{id}',[DestinationController::class,'show'])->name('destination.details');

});

Route::prefix('tour-guide')->group(function(){
    Route::get('/',[TourguideController::class,'tourguide'])->name('tourguide.tourguide');
    Route::get('/details/{id}',[TourguideController::class,'tourguideDetails'])->name('tourguide.details');

});

Route::prefix('price-package')->group(function(){
    Route::get('/',[PricePackageController::class,'pricepackage'])->name('pricepackage.pricepackage');
 

});

Route::get('/contact',[ContactController::class,'index'])->name('contact');

Route::prefix('service')->group(function(){
    Route::get('/',[ServiceController::class,'service'])->name('services.services');
    Route::get('/details',[ServiceController::class,'serviceDetails'])->name('services.details');

});

Route::prefix('blog')->group(function(){
    Route::get('/',[BlogController::class,'index'])->name('blog.blog');
    Route::get('/details/{id}',[BlogController::class,'show'])->name('blog.details');

});







/*--------------------------------backend------------------------------------*/


Route::prefix('admin')->group(function(){
    Route::get('/', [AdminAuthController::class, 'showLoginForm'])->name('loginForm');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::get('/signup', [AdminAuthController::class, 'showSignupForm'])->name('signupForm');
    Route::post('/signup', [AdminAuthController::class, 'register'])->name('signup');
});


Route::middleware(['auth','isadmin'])->prefix('admin')->group(function () {
        Route::get('/index',[Back_DashboardController::class,'index'])->name('admin.index');
        Route::prefix('guider')->group(function(){
            Route::get('/',[Back_GuiderController::class,'index'])->name('back_guider.index');
            Route::get('/create',[Back_GuiderController::class,'create'])->name('back_guider.create');
            Route::get('/edit',[Back_GuiderController::class,'edit'])->name('back_guider.edit');
            Route::post('/store', [Back_GuiderController::class, 'store'])->name('back_guider.store');
            Route::get('/edit/{id}', [Back_GuiderController::class, 'edit'])->name('back_guider.edit');
            Route::put('/update/{id}', [Back_GuiderController::class, 'update'])->name('back_guider.update');
            Route::delete('/destroy/{id}', [Back_GuiderController::class, 'destroy'])->name('back_guider.destroy');
            Route::get('/show/{id}', [Back_GuiderController::class, 'show'])->name('back_guider.show');
    
        });
    
        Route::prefix('package')->group(function(){
            Route::get('/',[Back_PackageController::class,'index'])->name('back_package.index');
            Route::get('/create',[Back_PackageController::class,'create'])->name('back_package.create');
            Route::get('/edit',[Back_PackageController::class,'edit'])->name('back_package.edit');
            Route::post('/store', [Back_PackageController::class, 'store'])->name('back_package.store');
            Route::get('/edit/{id}', [Back_PackageController::class, 'edit'])->name('back_package.edit');
            Route::put('/update/{id}', [Back_PackageController::class, 'update'])->name('back_package.update');
            Route::delete('/destroy/{id}', [Back_PackageController::class, 'destroy'])->name('back_package.destroy');
        
        });
        
        Route::prefix('destination')->group(function(){
            Route::get('/',[Back_DestinationController::class,'index'])->name('back_destination.index');
            Route::get('/create',[Back_DestinationController::class,'create'])->name('back_destination.create');
            Route::get('/edit',[Back_DestinationController::class,'edit'])->name('back_destination.edit');
            Route::post('/store', [Back_DestinationController::class, 'store'])->name('back_destination.store');
            Route::get('/edit/{id}', [Back_DestinationController::class, 'edit'])->name('back_destination.edit');
            Route::put('/update/{id}', [Back_DestinationController::class, 'update'])->name('back_destination.update');
            Route::delete('/destroy/{id}', [Back_DestinationController::class, 'destroy'])->name('back_destination.destroy');
            Route::get('/show/{id}', [Back_DestinationController::class, 'show'])->name('back_destination.show');
    
        });
    
        Route::prefix('service')->group(function(){
            Route::get('/', [Back_Service_Controller::class, 'index'])->name('back_service.index');
            Route::get('/create', [Back_Service_Controller::class, 'create'])->name('back_service.create');
            Route::get('/edit/{id}', [Back_Service_Controller::class, 'edit'])->name('back_service.edit');
            Route::post('/store', [Back_Service_Controller::class, 'store'])->name('back_service.store');
            Route::put('/update/{id}', [Back_Service_Controller::class, 'update'])->name('back_service.update');
            Route::delete('/destroy/{id}', [Back_Service_Controller::class, 'destroy'])->name('back_service.destroy');
        });

        Route::prefix('gallery')->group(function(){
            Route::get('/', [Back_GalleryController::class, 'index'])->name('back_gallery.index');
            Route::get('/create', [Back_GalleryController::class, 'create'])->name('back_gallery.create');
            Route::post('/store', [Back_GalleryController::class, 'store'])->name('back_gallery.store');
            Route::delete('/destroy/{id}', [Back_GalleryController::class, 'destroy'])->name('back_gallery.destroy');

        });

        Route::prefix('blog')->group(function(){
            Route::get('/', [Back_BlogController::class, 'index'])->name('back_blog.index');
            Route::get('/create', [Back_BlogController::class, 'create'])->name('back_blog.create');
            Route::post('/store', [Back_BlogController::class, 'store'])->name('back_blog.store');
            Route::get('/edit/{id}', [Back_BlogController::class, 'edit'])->name('back_blog.edit');
            Route::put('/update/{id}', [Back_BlogController::class, 'update'])->name('back_blog.update');
            Route::delete('/destroy/{id}', [Back_BlogController::class, 'destroy'])->name('back_blog.destroy');

        });

});

