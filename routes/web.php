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

Route::get('/', function () {
    return view('welcome');
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
Route::get('/marketing', function () {
    return view('marketing');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/retouch', function () {
    return view('retouch');
});
Route::get('/web', function () {
    return view('web');
});
