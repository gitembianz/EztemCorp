<?php

use App\Http\Controllers\mainController;
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

Route::get('locale/{locale}', [mainController::class, 'changeLocale'])->name('locale');


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
    Route::get('/graphics', function () {
        return view('graphics');
    });
    Route::get('/graphics/design', function () {
        return view('design');
    });
    Route::get('/graphics/banners', function () {
        return view('banners');
    });
    Route::get('/marketing', function () {
        return view('marketing');
    });
    Route::get('/marketing/advertising', function () {
        return view('advertising');
    });
    Route::get('/marketing/strategies', function () {
        return view('strategies');
    });
    Route::get('/web/frontend', function () {
        return view('frontend');
    });
    Route::get('/web/backend', function () {
        return view('backend');
    });
    Route::get('/web/salesforce', function () {
        return view('salesforce');
    });
    Route::get('/privacy', function () {
        return view('privacy');
    });
    Route::get('/retouch', function () {
        return view('retouch');
    });
    Route::get('/retouch/photo', function () {
        return view('photo');
    });
    Route::get('/retouch/manipulation', function () {
        return view('manipulation');
    });
    Route::get('/web', function () {
        return view('web');
    });
});
