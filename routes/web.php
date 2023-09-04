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
Route::get('/solutions/graphics', function () {
    return view('graphics');
});
Route::get('/solutions/marketing', function () {
    return view('marketing');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/solutions/retouch', function () {
    return view('retouch');
});
Route::get('/solutions/web', function () {
    return view('web');
});
