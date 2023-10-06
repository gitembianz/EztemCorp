<?php

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

Route::middleware(['set_locale'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/contact', function () {
        return view('contact');
    });
    Route::get('/cookie', function () {
        return view('cookie');
    });
    Route::get('/faq', function () {
        return view('faq');
    });
    Route::get('/privacy', function () {
        return view('privacy');
    });
    Route::prefix('/graphics')->group(function () {
        Route::get('/', function () {
            return view('graphics');
        });
        Route::get('/logo', function () {
            return view('logo');
        });
        Route::get('/banners', function () {
            return view('banners');
        });
    });
    Route::get('/confirm', function () {
        return view('confirm');
    });
    Route::prefix('/marketing')->group(function () {
        Route::get('/', function () {
            return view('marketing');
        });
        Route::get('/advertising', function () {
            return view('advertising');
        });
        Route::get('/strategies', function () {
            return view('strategies');
        });
    });
    Route::prefix('/web')->group(function () {
        Route::get('/', function () {
            return view('web');
        });
        Route::get('/frontend', function () {
            return view('frontend');
        });
        Route::get('/backend', function () {
            return view('backend');
        });
        Route::get('/salesforce', function () {
            return view('salesforce');
        });
    });
    Route::prefix('/retouch')->group(function () {
        Route::get('/', function () {
            return view('retouch');
        });
        Route::get('/photo', function () {
            return view('photo');
        });
        Route::get('/manipulation', function () {
            return view('manipulation');
        });
    });
});
